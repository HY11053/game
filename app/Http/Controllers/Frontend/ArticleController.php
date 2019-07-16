<?php

namespace App\Http\Controllers\Frontend;

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
            $latesttypenews=Cache::remember('brandtypenews'.$thisarticlebrandinfos->id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$latestbrandnews,$thisarticlebrandinfos){
                $notids=[];
                foreach ($latestbrandnews as $latestbrandnew)
                {
                    $notids[]=$latestbrandnew->id;
                }
                return Archive::where('brandtypeid',$thisarticleinfos->brandtypeid)->whereNotIn('id',$notids)->take(12)->latest('created_at')->get(['id','title']);
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
            $paihangbangs= Cache::remember('phb'.$thisarticlebrandinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                return   Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
            });
            $latestbrands=Cache::remember('thisarticleinfos_latestbrands'.$thisarticlebrandinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                return Brandarticle::where('typeid',$thisarticlebrandinfos->typeid)->latest()->take(6)->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
            });
        }else{
            $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                return Archive::where('typeid', $thisarticleinfos->typeid)->take(10)->latest()->get(['id', 'title', 'created_at','litpic']);
            });
            $latesttypenews=Cache::remember('typenews'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                return  Archive::where('typeid', $thisarticleinfos->typeid)->take(12)->latest('created_at')->get(['id', 'title']);
            });
            $brandarticles=Cache::remember('brandarticles',config('app.cachetime')+rand(60,60*24), function() {
                $brandarticles=Brandarticle::take(12)->orderBy('click','desc')->get(['id','brandname','created_at','litpic','brandpay']);
                return $brandarticles;
            });
            $paihangbangs= Cache::remember('phb', config('app.cachetime')+rand(60,60*24), function() {
                return   Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
            });
            $latestbrands=Cache::remember('latestbrands', config('app.cachetime')+rand(60,60*24), function(){
                return   Brandarticle::latest()->take(6)->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
            });
        }
        //投资分类获取并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        //所有行业最新入驻品牌
        $newbrands=Cache::remember('newbrands',config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::latest()->take(6)->orderBy('id','desc')->get(['id','brandname']);
        });
        $latestnews=Cache::remember('latestnews',config('app.cachetime')+rand(60,60*24), function(){
            return Archive::latest()->take(12)->orderBy('id','desc')->get(['id','title','created_at']);
        });
        $content=$this->ProcessContent($thisarticleinfos->body);
        return view('frontend.article_article',compact('thisarticleinfos','thisarticlebrandinfos','brandarticles','prev_article','next_article','latestbrandnews','paihangbangs','latesttypenews','latestbrands','thistypeinfo','thisbrandtypeinfo','thisbrandtypecidinfo','investment_types','brand','newbrands','latestnews','content'));
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
        //品牌分类排行榜 请保持缓存名称和普通文档所属品牌分类的排行榜缓存文件名称相同
        $paihangbangs= Cache::remember('phb'.$thisarticleinfos->typeid,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
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
        //当前品牌相关资讯 右侧
        $latesttypenews=Cache::remember('brandtypenews'.$thisarticleinfos->id,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$latestbrandnews,$thisbrandtypecidinfo){
            $notids=[];
            foreach ($latestbrandnews as $latestbrandnew)
            {
                $notids[]=$latestbrandnew->id;
            }
            $typenews=Archive::where('brandtypeid',$thisarticleinfos->typeid)->whereNotIn('id',$notids)->take(12)->latest()->get(['id','title']);
            if ($typenews->count()<10)
            {
                if ($thisbrandtypecidinfo->id)
                {
                    $complettypeews=Archive::where('brandcid',$thisbrandtypecidinfo->id)->whereNotIn('id',$notids)->take(12-($typenews->count()))->latest()->get(['id','title']);
                }
            }else{
                $complettypeews=collect([]);
            }
            $latesttypenews=collect([$typenews,$complettypeews])->collapse();
            return $latesttypenews;
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
        $latestbrands=Cache::remember('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Brandarticle::where('typeid',$thisarticleinfos->typeid)->latest()->take(6)->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
        });
        //所有行业最新入驻品牌
        $newbrands=Cache::remember('newbrands',  config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::latest()->take(6)->orderBy('id','desc')->get(['id','brandname']);
        });
        $latestnews=Cache::remember('latestnews',config('app.cachetime')+rand(60,60*24), function(){
            return Archive::latest()->take(12)->orderBy('id','desc')->get(['id','title','created_at']);
        });
        //投资分类获取并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        $content=$this->ProcessContent($thisarticleinfos->body);
        $navlists=$this->FilterHflagContent($content);
        return view('frontend.brand_article',compact('thisarticleinfos','thisbrandtypeinfo','thisbrandtypecidinfo','investment_types','paihangbangs','latestbrandnews','latesttypenews','latestbrands','newbrands','brandtypeids','content','navlists','latestcbrands','brandarticles','latestnews'));
    }
    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->orderBy('id','desc')->value('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->orderBy('id','asc')->value('id');
    }

    public function VipArticle($id)
    {
        //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
        $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
            return Brandarticle::findOrFail($id);
        });
        if (empty($thisarticleinfos->contentindex) || !$thisarticleinfos->index_status)
        {
            abort(404);
        }
        //当前品牌所属分类，请保持缓存名称和普通文档的所属品牌分类缓存名称相同
        $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return  Arctype::where('id',$thisarticleinfos->typeid)->first();
        });
        //当前品牌所属父分类，请保持缓存名称和普通文档的所属品牌父分类缓存名称相同
        $thisbrandtypecidinfo=Cache::remember('thistypeinfos_'.$thisbrandtypeinfo->reid,  config('app.cachetime')+rand(60,60*24), function() use($thisbrandtypeinfo){
            return Arctype::where('id',$thisbrandtypeinfo->reid)->first();
        });
        //品牌分类排行榜 请保持缓存名称和普通文档所属品牌分类的排行榜缓存文件名称相同
        $paihangbangs= Cache::remember('phb'.$thisarticleinfos->typeid,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
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
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        return view('frontend.vip_article',compact('thisarticleinfos','thisbrandtypeinfo','thisbrandtypecidinfo','investment_types','latestbrandnews'));

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

    private function FilterHflagContent($content)
    {
        preg_match_all('#<h2>[\s\S]*?<\/h2>#',$content,$matches);
        $navlists=[];
        if (isset($matches[0]) && !empty($matches[0]))
        {
            foreach ($matches[0] as $match) {
                switch ($match)
                {
                    case str_contains($match,'介绍');
                        $navlists[]='品牌介绍';
                        break;
                    case str_contains($match,'条件');
                        $navlists[]='加盟条件';
                        break;
                    case str_contains($match,'优势');
                        $navlists[]='加盟优势';
                        break;
                    case str_contains($match,'支持');
                        $navlists[]='加盟支持';
                        break;
                    case str_contains($match,'流程');
                        $navlists[]='加盟流程';
                        break;
                    case str_contains($match,'产品');
                        $navlists[]='产品展示';
                        break;
                    case str_contains($match,'特色');
                        $navlists[]='品牌特色';
                        break;
                    case str_contains($match,'故事');
                        $navlists[]='品牌故事';
                        break;
                    case str_contains($match,'费');
                        $navlists[]='加盟费用';
                        break;
                    case str_contains($match,'利润');
                        $navlists[]='利润分析';
                        break;
                        case str_contains($match,'理由');
                        $navlists[]='品牌优势';
                        break;
                    case str_contains($match,'怎么样');
                        $navlists[]='品牌优势';
                        break;
                    case str_contains($match,'成本');
                    $navlists[]='开店成本';
                    break;
                    case str_contains($match,'扶持');
                    $navlists[]='加盟扶持';
                    break;
                    case str_contains($match,'历程');
                    $navlists[]='品牌历程';
                    break;
                    case str_contains($match,'问答');
                        $navlists[]='品牌问答';
                        break;
                }
            }
        }
        $navlists[]='在线留言';
        return $navlists;
    }

}
