<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\AdminModel\Comment;

class ArticleController extends Controller
{


    public function onews($oid)
    {
        $article = Archive::where('oldtable', 'news')->where('oldid', $oid)->firstOrFail();
        return $this->NewsArticle($article->id);
    }

    public function cnews($oid)
    {
        $article = Archive::where('oldtable', 'cnews')->where('oldid', $oid)->firstOrFail();
        return $this->NewsArticle($article->id);
    }

    public function tnews($oid)
    {
        $article = Archive::where('oldtable', 'tnews')->where('oldid', $oid)->firstOrFail();
        return $this->NewsArticle($article->id);
    }

    /**普通文档界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsArticle($id)
    {
        //获取当前文档并缓存
        $thisarticleinfos = Cache::remember('thisarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
            return Archive::findOrFail($id);
        });
        //获取当前栏目信息并缓存
        $thistypeinfo = Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
            return Arctype::where('id',$thisarticleinfos->typeid)->first();
        });
        //获取文档上一篇并缓存
        $prev_article =Cache::remember('thisarticleinfos_prev'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Archive::latest('created_at')->where('id',$this->getPrevArticleId($thisarticleinfos->id))->first(['id','title']);
        });
        //获取文档下一篇并缓存
        $next_article = Cache::remember('thisarticleinfos_next'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Archive::latest('created_at')->where('id',$this->getNextArticleId($thisarticleinfos->id))->first(['id','title']);
        });
        //获取当前文档所属品牌并缓存
        if($thisarticleinfos->brandid && Brandarticle::where('id',$thisarticleinfos->brandid)->orderBy('id','desc')->value('id'))
        {
            $thisarticlebrandinfos = Cache::remember('thisbrandarticleinfos_'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
                return Brandarticle::where('id',$thisarticleinfos->brandid)->first();
            });
        }
        //获取当前文档所属品牌分类、父分类及品牌所属地区
        if (isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
        {
            //当前文档所属品牌所属分类
            $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticlebrandinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
              return  Arctype::where('id',$thisarticlebrandinfos->typeid)->first();
            });
            //当前文档所属品牌所属分类的父分类
            $thisbrandtypecidinfo=Cache::remember('thistypeinfos_'.$thisbrandtypeinfo->reid, config('app.cachetime')+rand(60,60*24), function() use($thisbrandtypeinfo){
                return Arctype::where('id',$thisbrandtypeinfo->reid)->first();
            });
            $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticlebrandinfos->id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$thisarticlebrandinfos){
                $brandnews=Archive::where('brandid',$thisarticleinfos->brandid)->take(10)->latest()->get(['id','title','created_at','litpic']);
                if ($brandnews->count()<10)
                {
                    $completionnews=Archive::where('brandtypeid',$thisarticleinfos->brandtypeid)->whereNotIn('id',Archive::where('brandid',$thisarticleinfos->brandid)->pluck('id'))->take(10-($brandnews->count()))->latest()->get(['id','title','created_at','litpic']);
                }else{
                    $completionnews=collect([]);
                }
                $latestbrandnews=collect([$brandnews,$completionnews])->collapse();
                return $latestbrandnews;
            });
            $brandarticles=Cache::remember('brandarticles'.$thisarticlebrandinfos->id,config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                $brandarticlekey=array_search($thisarticlebrandinfos->id,Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->orderBy('id','asc')->pluck('id')->toArray());
                $brandarticles=Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->skip($brandarticlekey*10)->take(12)->get(['id','brandname','created_at','litpic','brandpay','tzid']);
                if (!count($brandarticles))
                {
                    $brandarticles=Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->skip($brandarticlekey-10)->orderBy('id','asc')->take(12)->get(['id','brandname','created_at','litpic','brandpay','tzid']);
                }
                return $brandarticles;
            });
        }else{
            $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                return Archive::where('typeid', $thisarticleinfos->typeid)->take(10)->latest()->get(['id', 'title', 'created_at','litpic']);
            });
            $brandarticles=Cache::remember('brandarticles',config('app.cachetime')+rand(60,60*24), function() {
                $brandarticles=Brandarticle::take(12)->orderBy('click','desc')->get(['id','brandname','created_at','litpic','brandpay']);
                return $brandarticles;
            });
        }
        //投资分类获取并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        $content=$this->ProcessContent($thisarticleinfos->body);
        return view('mobile.article_article',compact('thisarticleinfos','thisarticlebrandinfos','brandarticles','prev_article','next_article','latestbrandnews','latestbrands','thistypeinfo','thisbrandtypeinfo','thisbrandtypecidinfo','investment_types','content'));
    }

    /**品牌文档界面
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function BrandArticle($id)
    {
        //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
        $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
            return Brandarticle::findOrFail($id);
        });
        //当前品牌所属分类，请保持缓存名称和普通文档的所属品牌分类缓存名称相同
        $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return  Arctype::where('id',$thisarticleinfos->typeid)->first();
        });
        //当前品牌所属父分类，请保持缓存名称和普通文档的所属品牌父分类缓存名称相同
        $thisbrandtypecidinfo=Cache::remember('thistypeinfos_'.$thisbrandtypeinfo->reid,  config('app.cachetime')+rand(60,60*24), function() use($thisbrandtypeinfo){
            return Arctype::where('id',$thisbrandtypeinfo->reid)->first();
        });
        //获取当前文档相关品牌文档，不足将用当前文档所属品牌分类下品牌文档补足 保持缓存名称和普通文档相关品牌文档缓存名称相同
        $latestbrandnews=Cache::remember('thisarticleinfos_brandidnews'.$thisarticleinfos->id,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            $brandnews=Archive::where('brandid',$thisarticleinfos->id)->take(10)->latest()->get(['id','title','created_at','litpic']);
            if ($brandnews->count()<10)
            {
                $completionnews=Archive::where('brandtypeid',$thisarticleinfos->typeid)->whereNotIn('id',Archive::where('brandid',$thisarticleinfos->id)->pluck('id'))->take(10-($brandnews->count()))->latest()->get(['id','title','created_at','litpic']);
            }else{
                $completionnews=collect([]);
            }
            $latestbrandnews=collect([$brandnews,$completionnews])->collapse();
            return $latestbrandnews;
        });
        $brandarticles=Cache::remember('brandarticles'.$thisarticleinfos->id,config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            $brandarticlekey=array_search($thisarticleinfos->id,Brandarticle::where('typeid',$thisarticleinfos->typeid)->orderBy('id','asc')->pluck('id')->toArray());
            $brandarticles=Brandarticle::where('typeid',$thisarticleinfos->typeid)->skip($brandarticlekey*10)->take(12)->get(['id','brandname','created_at','litpic','brandpay','tzid']);
            if (!count($brandarticles))
            {
                $brandarticles=Brandarticle::where('typeid',$thisarticleinfos->typeid)->skip($brandarticlekey-10)->orderBy('id','asc')->take(12)->get(['id','brandname','created_at','litpic','brandpay','tzid']);
            }
            return $brandarticles;
        });
        //投资分类获取并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        $content=$this->ProcessContent($thisarticleinfos->body);
        return view('mobile.brand_article',compact('thisarticleinfos','thisbrandtypeinfo','thisbrandtypecidinfo','investment_types','paihangbangs','latestbrandnews','latesttypenews','latestbrands','newbrands','brandtypeids','content','navlists','latestcbrands','brandarticles','latestnews'));
    }
    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->orderBy('id','desc')->value('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->orderBy('id','asc')->value('id');
    }

    /**内容处理
     * @param $contents
     * @return mixed|null|string|string[]
     */
    private function ProcessContent($contents)
    {
        $content=preg_replace(["/style=.+?['|\"]/i","/width=.+?['|\"]/i","/height=.+?['|\"]/i"],'',$contents);
        $content=str_replace(PHP_EOL,'',$content);
        $content=str_replace(['<p >','<strong >','<br >','<br />','<h2 >'],['<p>','<strong>','<br>','<br/>','<h2>'],$content);
        $content=str_replace(
            [
                '<p><strong><br/></strong></p>',
                '<p><strong><br></strong></p>',
                '<p><br></p>',
                '<p><br/></p>',
                '  ',
                '　　'
            ],'',$content
        );
        $content=str_replace(["\r","\t",'<span >　　</span>','&nbsp;','　','bgcolor="#FFFFFF"'],'',$content);
        $content=str_replace(["<br  /><br  />"],'<br/>',$content);
        $content=str_replace(["<br><br>"],'<br/>',$content);
        $content=str_replace(["<br/><br/>"],'<br/>',$content);
        $content=str_replace(["<br/> <br/>"],'<br/>',$content);
        $content=str_replace(["<br />　　<br />"],'<br/>',$content);
        $content=str_replace(["<br/>　　<br/>"],'<br/>',$content);
        $content=str_replace(["<br /><br />"],'<br/>',$content);
        $content=str_replace(["<div><br/></div>"],'',$content);
        $pattens=array(
            "#<p>[\s| |　]?<strong>[\s| |　]?</strong></p>#",
            "#<p>[\s| |　]?<strong>[\s| |　]+</strong></p>#",
            "#<p>[\s| |　]+<strong>[\s| |　]+</strong></p>#",
            "#<p>[\s| |　]?</p>#",
            "#<p>[\s| |　]+</p>#"
        );
        $content=preg_replace($pattens,'',$content);
        return $content;
    }
}
