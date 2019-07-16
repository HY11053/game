<?php

namespace App\Http\Controllers\Api;

use App\AdminModel\Addonarticle;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ArticleSourcesController extends Controller
{
    /**普通文档调用接口
     * @param Request $request
     * @return string
     */
    public function FetchArticles(Request $request)
    {
        $articles=Archive::when($request->id, function ($query) use ($request) {
            return $query->where('id',$request->id);
        })->when($request->typeid, function ($query) use ($request) {
            return $query->where('typeid',$request->typeid);
        })->when($request->flags, function ($query) use ($request) {
            return $query->where('flags','like',$request->flags.'%');
        })->when($request->orderby, function ($query) use ($request) {
            return $query->OrderBy($request->orderby,'desc');
        })->when($request->brandpic, function ($query) use ($request) {
            return $query->where('brandid','<>',0);
        })->when($request->brandid, function ($query) use ($request) {
            return $query->where('brandid',$request->brandid);
        })->when($request->litpic, function ($query) use ($request) {
            return $query->where('litpic','<>','');
        })->when($request->bid, function ($query) use ($request) {
            return $query->where('brandid',Archive::where('id',$request->aid)->value('brandid'))->where('id','<>',$request->aid);
        })->when($request->skip, function ($query) use ($request) {
            return $query->skip($request->skip);
        })->when($request->take, function ($query) use ($request) {
            return $query->take($request->take);
        }, function ($query) {
            return $query->take(1);
        })->get(['id','typeid','title','keywords','description','created_at','litpic','brandid'])->toArray();
        if (!empty($articles))
        {
            foreach ($articles as $picindex=>$article)
            {
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$picindex]['litpic']=config('app.url').$article['litpic'];
                }
            }
            if ($request->brandpic)
            {
                foreach ($articles as $key=>$article){
                    $imagepics=Brandarticle::where('id',$article['brandid'])->value('imagepics');
                    if (!empty($imagepics)){
                        $articles[$key]['imagepics']=$this->processImgPath($imagepics);
                    }
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**
     * 品牌文档调用接口
     * @param Request $request
     * @return mixed
     */
    public function FetchBrandArticles(Request $request)
    {
        $articles=Brandarticle::when($request->id, function ($query) use ($request) {
            return $query->where('id',$request->id);
        })->when($request->typeid, function ($query) use ($request) {
            return $query->whereIn('typeid',Arctype::where('reid',$request->typeid)->pluck('id'))->orWhere('typeid',$request->typeid);
        })->when($request->tid, function ($query) use ($request) {
            return $query->where('typeid',Brandarticle::where('id',$request->aid)->value('typeid'));
        })->when($request->bid, function ($query) use ($request) {
            return $query->where('typeid',Brandarticle::where('id',Archive::where('id',$request->bid)->value('brandid'))->value('typeid'));
        })->when($request->flags, function ($query) use ($request) {
            return $query->where('flags','like',$request->flags.'%');
        })->when($request->orderby, function ($query) use ($request) {
            return $query->OrderBy($request->orderby,'desc');
        })->when($request->skip, function ($query) use ($request) {
            return $query->skip($request->skip);
        })->when($request->take, function ($query) use ($request) {
            return $query->take($request->take);
        }, function ($query) {
            return $query->take(1);
        })->get(['id','title','description','keywords','typeid','litpic','created_at','brandname','brandgroup','brandpay','imagepics','brandattch','brandnum','click','tzid'])->toarray();
        if (!empty($articles))
        {
            $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
                return InvestmentType::pluck('type','id');
            });
            foreach ($articles as $key=>$article){
                //日期处理
                $articles[$key]['created_at']=date('y-m-d',strtotime($article['created_at']));
                $articles[$key]['brandpay']=$investment_types[$article['tzid']];
                //缩略图路径处理
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$key]['litpic']=config('app.url').$article['litpic'];
                }
                $articles[$key]['imagepics']=$this->processImgPath($articles[$key]['imagepics']);
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**首页滚动品牌推荐
     * @param Request $request
     * @return false|string
     *
     */
    public function getScrollBrandarticles(Request $request)
    {
        $articles= Cache::remember('app_scroll', rand(20,60), function(){
            $articles=Brandarticle::latest()->take(5)->get(['id','title'])->toarray();
            return !empty($articles)?json_encode($articles):'';
        });
        return $articles;
    }

    /**首页精品推荐
     * @param Request $request
     * @return mixed
     */
    public function getClickBrandarticles(Request $request)
    {
        $articles= Cache::remember('applet_clickbrand', config('app.cachetime')+rand(60,60*24*7), function(){
            $articles=Brandarticle::take(4)->orderBy('click','desc')->get(['id','title','litpic','brandname','created_at','brandgroup','tzid'])->toarray();
            if (!empty($articles))
            {
                $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
                    return InvestmentType::pluck('type','id');
                });
                foreach ($articles as $key=>$article){
                    //日期处理
                    $articles[$key]['created_at']=date('y-m-d',strtotime($article['created_at']));
                    //缩略图路径处理
                    if (!str_contains($article['litpic'],'://'))
                    {
                        $articles[$key]['litpic']=config('app.url').$article['litpic'];
                    }
                    $articles[$key]['brandpay']=$investment_types[$article['tzid']];
                }
            }
            return !empty($articles)?json_encode($articles):'';
        });
        return $articles;
    }

    /**新品推荐
     * @param Request $request
     * @return mixed
     */
    public function getLatestBrandarticles(Request $request)
    {
        $articles= Cache::remember('applet_latestbrand', 20, function(){
            $articles=Brandarticle::latest()->take(4)->orderBy('id','desc')->get(['id','title','litpic','brandname','created_at','brandgroup','tzid'])->toarray();
            if (!empty($articles))
            {
                $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
                    return InvestmentType::pluck('type','id');
                });
                foreach ($articles as $key=>$article){
                    //日期处理
                    $articles[$key]['created_at']=date('y-m-d',strtotime($article['created_at']));
                    //缩略图路径处理
                    if (!str_contains($article['litpic'],'://'))
                    {
                        $articles[$key]['litpic']=config('app.url').$article['litpic'];
                    }
                    $articles[$key]['brandpay']=$investment_types[$article['tzid']];
                }
            }
            return !empty($articles)?json_encode($articles):'';
        });
        return $articles;
    }

    /**获取最新品牌文档
     * @param Request $request
     * @return false|string
     */
    public function getBrandNews(Request $request)
    {
        $brandnews=Cache::remember('applet-brandnews', 10, function() use($request){
            $articles=Archive::where('typeid',46)->take(5)->latest()->get(['id','title','created_at','brandid'])->toArray();
            if (!empty($articles))
            {
                foreach ($articles as $key=>$article){
                    $imagepics=Brandarticle::where('id',$article['brandid'])->value('imagepics');
                    if (!empty($imagepics)){
                        $articles[$key]['imagepics']=$this->processImgPath($imagepics);
                    }
                }
            }
            return !empty($articles)?json_encode($articles):'';
        });
        return $brandnews;
    }

    /**获取加盟指南文档
     * @param Request $request
     * @return false|string
     */
    public function getJmNews(Request $request)
    {
        $brandnews=Cache::remember('applet-jmnews', 10, function() use($request){
            $articles=Archive::where('typeid',42)->take(5)->latest()->get(['id','title','created_at','brandid'])->toArray();
            if (!empty($articles))
            {
                foreach ($articles as $key=>$article){
                    $imagepics=Brandarticle::where('id',$article['brandid'])->value('imagepics');
                    if (!empty($imagepics)){
                        $articles[$key]['imagepics']=$this->processImgPath($imagepics);
                    }
                }
            }
            return !empty($articles)?json_encode($articles):'';
        });
        return $brandnews;
    }

    /**获取投资分析文档
     * @param Request $request
     * @return false|string
     */
    public function gettouziNews(Request $request)
    {
        $brandnews=Cache::remember('applet-tznews', 10, function() use($request){
            $articles=Archive::where('typeid',83)->take(5)->latest()->get(['id','title','created_at','brandid'])->toArray();
            if (!empty($articles))
            {
                foreach ($articles as $key=>$article){
                    $imagepics=Brandarticle::where('id',$article['brandid'])->value('imagepics');
                    if (!empty($imagepics)){
                        $articles[$key]['imagepics']=$this->processImgPath($imagepics);
                    }
                }
            }
            return !empty($articles)?json_encode($articles):'';
        });
        return $brandnews;
    }

    /**加盟费用文档
     * @param Request $request
     * @return false|string
     */
    public function getfeiyongNews(Request $request)
    {
        $brandnews=Cache::remember('applet-fynews', 10, function() use($request){
            $articles=Archive::where('typeid',35)->take(5)->latest()->get(['id','title','created_at','brandid'])->toArray();
            if (!empty($articles))
            {
                foreach ($articles as $key=>$article){
                    $imagepics=Brandarticle::where('id',$article['brandid'])->value('imagepics');
                    if (!empty($imagepics)){
                        $articles[$key]['imagepics']=$this->processImgPath($imagepics);
                    }
                }
            }
            return !empty($articles)?json_encode($articles):'';
        });
        return $brandnews;
    }
    /**获取单篇普通文档
     * @param Request $request
     * @return mixed
     */
    public function getArticle(Request $request)
    {
        $thisarticleinfos=Cache::remember('thisarticleinfos_'.$request->id, config('app.cachetime')+rand(60,60*24), function() use($request){
            return Archive::findOrFail($request->id);
        });
        $article=$thisarticleinfos->toArray();
        if (!empty($article))
        {
            $article['body']=$this->processContent($article['body']);
            if (!empty($article['litpic']) && !str_contains($article['litpic'],'://'))
            {
                $article['litpic']=config('app.url').$article['litpic'];
            }
            $brandarticle = Cache::remember('thisbrandarticleinfos_'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('id',$thisarticleinfos->brandid)->first();
            });
            if ($article['brandid'] && !empty($brandarticle))
            {
                $article['brandname']=$brandarticle->brandname;
                $article['brandtypename']=$brandarticle->arctype->typename;
                $article['brandgroup']=$brandarticle->brandgroup;
                $article['brandpay']=$brandarticle->brandpay;
                $article['brandcreated']=date('y-m-d',strtotime($brandarticle->created_at));
                $article['brandimages']=$this->processImgPath($brandarticle->imagepics);
                $article['brandnum']=$brandarticle->brandnum;
                $article['brandclick']=$brandarticle->click;
            }
        }
        return !empty($article)?json_encode($article):'';
    }

    /**获取单篇品牌文档
     * @param Request $request
     * @return mixed
     */
    public function getBrandarticle(Request $request)
    {
        //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
        $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$request->id, config('app.cachetime')+rand(60,60*24), function() use($request){
            return Brandarticle::findOrFail($request->id);
        });
        $article=$thisarticleinfos->toArray();
        if (!empty($article))
        {
            //$article['created_at']=date('y-m-d',strtotime($article['created_at']));
            $article['imagepics']=$this->processImgPath($article['imagepics']);
            if (!empty($article['litpic']) && !str_contains($article['litpic'],'://'))
            {
                $article['litpic']=config('app.url').$article['litpic'];
            }
            $article['body']=$this->processContent( $article['body']);
        }
        //dd($article);
        return !empty($article)?json_encode($article):'';
    }

    /**普通文档相关品牌文档调用
     * @param Request $request
     * @return false|string
     */
    public function getArticleBrandNews(Request $request)
    {
        //获取当前文档并缓存
        $thisarticleinfos = Cache::remember('thisarticleinfos_'.$request->id, config('app.cachetime')+rand(60,60*24), function() use($request){
            return Archive::findOrFail($request->id);
        });
        //获取当前文档所属品牌并缓存
        if($thisarticleinfos->brandid && Brandarticle::where('id',$thisarticleinfos->brandid)->orderBy('id','desc')->value('id'))
        {
            $thisarticlebrandinfos = Cache::remember('thisbrandarticleinfos_'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('id',$thisarticleinfos->brandid)->first();
            });
        }
        //获取当前文档相关品牌文档，不足将用当前文档所属品牌分类下品牌文档补足
        if ($thisarticleinfos->brandid && isset($thisarticlebrandinfos['id']))
        {
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
        }else{
            $latestbrandnews=Cache::remember('thisarticleinfos_brandnews'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                return Archive::where('typeid', $thisarticleinfos->typeid)->take(10)->latest()->get(['id', 'title', 'created_at','litpic']);
            });
        }
        $articles=array_slice($latestbrandnews->toArray(),0,4);
        if (!empty($articles))
        {
            foreach ($articles as $key=>$article){
                //日期处理
                $articles[$key]['created_at']=date('y-m-d',strtotime($article['created_at']));
                //缩略图路径处理
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$key]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**普通文档推荐品牌
     * @param Request $request
     * @return false|string
     */
    public function articlePhBrands(Request $request)
    {
        //获取当前文档并缓存
        $thisarticleinfos = Cache::remember('thisarticleinfos_'.$request->id, config('app.cachetime')+rand(60,60*24), function() use($request){
            return Archive::findOrFail($request->id);
        });
        //获取当前文档所属品牌并缓存
        if($thisarticleinfos->brandid && Brandarticle::where('id',$thisarticleinfos->brandid)->orderBy('id','desc')->value('id'))
        {
            $thisarticlebrandinfos = Cache::remember('thisbrandarticleinfos_'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('id',$thisarticleinfos->brandid)->first();
            });
        }
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        //获取当前文档所属品牌栏目分类
        if (isset($thisarticlebrandinfos))
        {
            $cachetypid=$thisarticlebrandinfos->typeid?$thisarticlebrandinfos->typeid:0;
        }else{
            $cachetypid=0;
        }
        //排行榜 根据品牌对应的所属栏目查询并缓存
        $paihangbangs= Cache::remember('phb'.$cachetypid, config('app.cachetime')+rand(60,60*24), function() use($cachetypid){
            if ($cachetypid){
                $paihangbangs=Brandarticle::where('typeid',$cachetypid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
            }else{
                $paihangbangs=Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
            }
            return $paihangbangs;
        });
        $articles=array_slice($paihangbangs->toArray(),0,4);
        if (!empty($articles))
        {
            foreach ($articles as $key=>$article){
                //日期处理
                $articles[$key]['created_at']=date('y-m-d',strtotime(Brandarticle::where('id',$article['id'])->value('created_at')));
                $articles[$key]['brandpay']=$investment_types[$article['tzid']];
                //缩略图路径处理
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$key]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**品牌文档相关品牌文档
     * @param Request $request
     * @return false|string
     */
    public function getBrandArticlenews(Request $request)
    {
        //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
        $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$request->id, config('app.cachetime')+rand(60,60*24), function() use($request){
            return Brandarticle::findOrFail($request->id);
        });
        //获取当前文档相关品牌文档，不足将用当前文档所属品牌分类下品牌文档补足 保持缓存名称和普通文档相关品牌文档缓存名称相同
        $latestbrandnews=Cache::remember('thisarticleinfos_brandidnews'.$request->id,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
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
        $articles=array_slice($latestbrandnews->toArray(),0,4);
        if (!empty($articles))
        {
            foreach ($articles as $key=>$article){
                //日期处理
                $articles[$key]['created_at']=date('y-m-d',strtotime($article['created_at']));
                //缩略图路径处理
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$key]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**品牌文档相关品牌
     * @param Request $request
     * @return false|string
     */
    public function getBrandArticleBrands(Request $request)
    {
        //当前品牌文档信息，请保持缓存名称和普通文档的所属品牌缓存名称相同
        $thisarticleinfos = Cache::remember('thisbrandarticleinfos_'.$request->id, config('app.cachetime')+rand(60,60*24), function() use($request){
            return Brandarticle::findOrFail($request->id);
        });
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        //品牌分类排行榜 请保持缓存名称和普通文档所属品牌分类的排行榜缓存文件名称相同
        $paihangbangs= Cache::remember('phb'.$thisarticleinfos->typeid,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
            return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
        });
        $articles=array_slice($paihangbangs->toArray(),0,4);
        if (!empty($articles))
        {
            foreach ($articles as $key=>$article){
                //日期处理
                $articles[$key]['created_at']=date('y-m-d',strtotime(Brandarticle::where('id',$article['id'])->value('created_at')));
                $articles[$key]['brandpay']=$investment_types[$article['tzid']];
                //缩略图路径处理
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$key]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**栏目获取
     * @param Request $request
     * @return mixed
     */
    public function getBnlist(Request $request)
    {
        $thistypeinfos=Arctype::where('real_path',trim($request->real_path,'/'))->first()->toJson();
        return $thistypeinfos;
    }

    /**当前文档栏目信息获取
     * @param Request $request
     * @return mixed
     */
    public function getTypeinfo(Request $request)
    {
        if ($request->aid)
        {
            $typeid=Archive::where('id',$request->aid)->value('typeid');
        }elseif($request->bid){
            $typeid=Brandarticle::where('id',$request->bid)->value('typeid');
        }
        $thistypeinfos=Cache::remember('thistypeinfos_'.$typeid,  config('app.cachetime')+rand(60,60*24), function() use($typeid){
            return  Arctype::where('id',$typeid)->first();
        });
        $thistypeinfos=$thistypeinfos->toJson();
        return $thistypeinfos;
    }

    /**品牌文档列表
     * @param Request $request
     * @return false|string
     */
    public function getBnlistArticles(Request $request)
    {
        $articles=Brandarticle::whereIn('typeid',Arctype::where('reid',Arctype::where('real_path',$request->real_path)->value('id'))->pluck('id'))->orWhere('typeid',Arctype::where('real_path',$request->real_path)->value('id'))->take(15)->latest()->get(['id','title','description','keywords','typeid','litpic','created_at','brandname','brandgroup','brandpay','imagepics','brandattch','brandnum','click'])->toArray();
        if (!empty($articles))
        {
            foreach ($articles as $picindex=>$article)
            {
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$picindex]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**排行榜类型列表
     * @param Request $request
     * @return array
     */
    public function paiHangBangType(Request $request)
    {
        if (!$request->real_path)
        {
            $thistypeinfos['title']='最新加盟店排行榜_众多品牌加盟店排行榜尽在u88创业加盟网';
            $thistypeinfos['keywords']='加盟店排行榜';
            $thistypeinfos['description']='u88加盟店排行榜是中国最专业的加盟店排行榜，u88创业加盟网每天第一时间更新排行榜，包含了服装，餐饮，奶茶，童装，小吃等众多品牌加盟店排行榜，深受广大创业加盟者喜爱。';
            $thistypeinfos['id']='596';
            json_encode($thistypeinfos);
        }else{
            $thistypeinfo=Arctype::where('real_path',$request->real_path)->first();
            $thistypeinfos=[];
            $thistypeinfos['id']=$thistypeinfo->id;
            $thistypeinfos['title']=str_replace('加盟','',$thistypeinfo->typename).'加盟排行榜-'.str_replace('加盟','',$thistypeinfo->typename).'加盟十大品牌排行榜-'.config('app.indexname');
            $thistypeinfos['keywords']=str_replace('加盟','',$thistypeinfo->typename).'加盟排行榜,'.str_replace('加盟','',$thistypeinfo->typename).'加盟十大品牌';
            $thistypeinfos['description']=config('app.indexname').'为您全方位解读'.str_replace('加盟','',$thistypeinfo->typename).'加盟品牌排行信息。'.str_replace('加盟','',$thistypeinfo->typename).'加盟门店排行信息，'.str_replace('加盟','',$thistypeinfo->typename).'加盟排行榜分类。提供性价比最高'.str_replace('加盟','',$thistypeinfo->typename).'加盟品牌排行榜信息，让您加盟无忧，顺利开店。快速解决创业致富难题。';
            json_encode($thistypeinfos);
        }
        return $thistypeinfos;
    }
    /**排行榜数据请求
     * @param Request $request
     * @param string $path
     * @return false|string
     */
    public function paiHangBang(Request $request)
    {
        $articles=Brandarticle::when($request->real_path, function ($query) use ($request) {
            return $query->whereIn('typeid', Arctype::where('reid', Arctype::where('real_path', $request->real_path)->value('id'))->pluck('id'))->orwhere('typeid', Arctype::where('real_path', $request->real_path)->value('id'));
        })->orderBy('click', 'desc')->take(10)->get(['id','title','description','keywords','typeid','litpic','created_at','brandname','brandgroup','brandpay','imagepics','brandattch','brandnum','click'])->toArray();
        if (!empty($articles))
        {
            foreach ($articles as $picindex=>$article)
            {
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$picindex]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**品牌文档搜索列表
     * @param Request $request
     * @return false|string
     */
    public function getSearchBnlist(Request $request)
    {
        $articles=Brandarticle::where('title','like',$request->keyword.'%')->when($request->skip, function ($query) use ($request) {
            return $query->skip($request->skip);
        })->take(5)->orderBy('click','desc')->get(['id','title','description','keywords','typeid','litpic','created_at','brandname','brandgroup','brandpay','imagepics','brandattch','brandnum','click'])>toArray();
        if (!empty($articles))
        {
            foreach ($articles as $picindex=>$article)
            {
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$picindex]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**普通文档列表
     * @param Request $request
     * @return false|string
     */
    public function getNlistArticles(Request $request)
    {
        $articles=Archive::whereIn('typeid',Arctype::where('reid',Arctype::where('real_path',$request->real_path)->value('id'))->pluck('id'))->orWhere('typeid',Arctype::where('real_path',$request->real_path)->value('id'))->take(15)->latest()->get(['id','typeid','brandid','litpic','created_at','title','description','keywords'])->toArray();
        if (!empty($articles))
        {
            foreach ($articles as $picindex=>$article)
            {
                if (!str_contains($article['litpic'],'://'))
                {
                    $articles[$picindex]['litpic']=config('app.url').$article['litpic'];
                }
            }
        }
        return !empty($articles)?json_encode($articles):'';
    }

    /**图片路径处理
     * @param $path
     * @return 0|array
     */
    private function processImgPath($path)
    {
        if (!empty($path))
        {
            $pics=array_slice(array_filter(explode(",",$path)),0,3);
            //图集路径处理
            foreach ($pics as $index=>$pic)
            {
                if (!str_contains($pic,'://'))
                {
                    $pics[$index]=config('app.url').$pic;
                }
            }
            return $pics;
        }

    }

    /**文档内容格式清除
     * @param $content
     * @return null|string|string[]
     */
    private function processContent($content)
    {
        if (!empty($content))
        {
            $content=preg_replace(["/style=.+?['|\"]/i","/width=.+?['|\"]/i","/height=.+?['|\"]/i"],'',$content);
            $content=str_replace([PHP_EOL,"\r","\t",'<span >　　</span>','&nbsp;','　'],'',$content);
            $content=str_replace(["<br  /><br  />"],'<br/>',$content);
            $content=str_replace(["<br/><br/>"],'<br/>',$content);
            $content=str_replace(["<br/> <br/>"],'<br/>',$content);
            $content=str_replace(["<br />　　<br />"],'<br/>',$content);
            $content=str_replace(["<br/>　　<br/>"],'<br/>',$content);
            $content=str_replace(["<br /><br />"],'<br/>',$content);
            $content=$this->contentImagePathProcess($content,config('app.url'));
            //dd($content);
            return $content;
        }
    }

    /**内容图片路径匹配替换
     * @param $content
     * @param $url
     * @return mixed
     */
    private function contentImagePathProcess($content,$url)
    {
        //dd($content);
        preg_match_all("/<img(.*)src=\"([^\"]+)\"[^>]+>/isU", $content, $matches);
        if (!empty($matches)) {
            $imgurl = $matches[2];
            foreach ($imgurl as $val) {
                if (!str_contains($val,'://'))
                {
                    $content = str_replace($val, $url.$val, $content);
                }
            }
            return $content;
        } else {
            return $content;
        }
    }
}
