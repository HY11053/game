<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Acreagement;
use App\AdminModel\Admin;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Events\ArticleCacheCreateEvent;
use App\Events\ArticleCacheDeleteEvent;
use App\Events\BrandArticleCacheCreateEvent;
use App\Events\BrandArticleCacheDeleteEvent;
use App\Http\Requests\CreateArticleRequest;
use App\Helpers\UploadImages;
use App\Http\Requests\CreateBrandArticleRequest;
use App\Notifications\ArticlePublishedNofication;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Log;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**文档列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Index()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc')->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**品牌文档查看
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Brands()
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc ')->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }
    /**品牌文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PostArticleBrandSearch(Request $request)
    {
        $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**普通文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Create()
    {
        $brandnavs=Arctype::where('is_write',1)->where('topid',0)->where('mid',1)->pluck('typename','id');
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        return view('admin.article_create',compact('allnavinfos','brandnavs'));
    }

    /**品牌文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandCreate()
    {
        $allnavinfos=Arctype::where('is_write',1)->where('topid',0)->where('mid',1)->pluck('typename','id');
        $provinces=Area::where('parentid','0')->pluck('name_cn','id');
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandcreate',compact('allnavinfos','investments','acreagements','provinces'));
    }

    /**文档创建提交数据处理
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostCreate(CreateArticleRequest $request)
    {
        if(Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        if ($request->brandid)
        {
            $request['bdname']=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$request->brandid)->value('brandname');
        }
        $this->RequestProcess($request);
        if ( Archive::create($request->all())->wasRecentlyCreated)
        {
            //百度相关数据提交
            $thisarticle=Archive::withoutGlobalScope(PublishedScope::class)->first();
            if ($thisarticle->published_at>Carbon::now() || $thisarticle->ismake !=1)
            {
                auth('admin')->user()->notify(new ArticlePublishedNofication(Archive::withoutGlobalScope(PublishedScope::class)->latest() ->first()));
                return redirect(action('Admin\ArticleController@Index'));
            }else{
                $thisarticleurl=config('app.url').'/article/'.$thisarticle->id.'.html';
                $miparticleurl=str_replace('www.','mip.',config('app.url')).'/article/'.$thisarticle->id.'.html';
                $this->BaiduCurl(config('app.api'),$thisarticleurl,'百度主动提交');
                if ($request->xiongzhang)
                {
                    $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'熊掌号天级推送');
                }else{
                    $this->BaiduCurl(config('app.mip_history'),$miparticleurl,'熊掌号周级提交');
                }
                Archive::where('id',$thisarticle->id)->update(['ispush'=>1]);
                auth('admin')->user()->notify(new ArticlePublishedNofication(Archive::withoutGlobalScope(PublishedScope::class)->latest() ->first()));
                event(new ArticleCacheCreateEvent(Archive::latest() ->first()));
                return redirect(action('Admin\ArticleController@Index'));
            }
        }
    }

    /**
     * 品牌文档提交处理
     * @param CreateBrandArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function PostBrandArticle(CreateBrandArticleRequest $request)
    {
        if(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        $this->RequestProcess($request);
        if (Brandarticle::create($request->all())->wasRecentlyCreated)
        {
            $thisarticle=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',Brandarticle::withoutGlobalScope(PublishedScope::class)->max('id'))->find(Brandarticle::withoutGlobalScope(PublishedScope::class)->max('id'));
            if ($thisarticle->published_at>Carbon::now() || $thisarticle->ismake !=1)
            {
                return redirect(action('Admin\ArticleController@Brands'));
            }else{
                $thisarticleurl=config('app.url').'/xiangmu/'.$thisarticle->id.'.html';
                $this->BaiduCurl(config('app.api'),$thisarticleurl,'百度主动提交');
                $miparticleurl=str_replace('www.','mip.',config('app.url')).'/xiangmu/'.$thisarticle->id.'.html';
                if ($request->xiongzhang==1)
                {
                    $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'熊掌号天级推送');
                }elseif($request->xiongzhang==2){
                    $this->BaiduCurl(config('app.mip_history'),$miparticleurl,'熊掌号周级提交');
                }
                Brandarticle::where('id',$thisarticle->id)->update(['ispush'=>1]);
                event(new BrandArticleCacheCreateEvent($thisarticle));
                return redirect(action('Admin\ArticleController@Brands'));
            }
        }
    }

    /**普通文档文档编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Edit($id)
    {
        $articleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrfail($id);
        $allnavinfos=Arctype::where('is_write',1)->where('mid',0)->pluck('typename','id');
        $brandnavs=Arctype::where('is_write',1)->where('topid',0)->where('mid',1)->pluck('typename','id');
        $pics=explode(',',trim(Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'),','));
        return view('admin.article_edit',compact('id','articleinfos','allnavinfos','pics','brandnavs'));
    }
    public function BrandEdit($id)
    {
        $allnavinfos=Arctype::where('is_write',1)->where('topid',0)->where('mid',1)->pluck('typename','id');
        $pics=explode(',',trim(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('imagepics'),','));
        $provinces=Area::where('parentid','0')->pluck('name_cn','id');
        $articleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first();
        if (empty($articleinfos))
        {
            abort(404);
        }
        /**
         * if ($articleinfos->dutyadmin==1 && $articleinfos->editor_id==0 &&  Admin::where('id',auth('admin')->id())->value('type')==0)
        {
        exit('文档未领取,不能直接编辑');
        }
         */
        if ($articleinfos->editor_id!=0 && $articleinfos->editor_id !=auth('admin')->id() &&  Admin::where('id',auth('admin')->id())->value('type')==0)
        {
            exit('文档不属于当前用户或您不是管理员，不能编辑');
        }
        $investments=InvestmentType::orderBy('id','asc')->pluck('type','id');
        $acreagements=Acreagement::orderBy('id','asc')->pluck('type','id');
        return view('admin.article_brandedit',compact('id','articleinfos','allnavinfos','pics','investments','acreagements','provinces'));
    }

    /**文档编辑提交处理
     * @param CreateArticleRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEdit(CreateArticleRequest $request,$id)
    {
        if ($request->brandid)
        {
            $request['bdname']=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$request->brandid)->value('brandname');
        }
        $this->RequestProcess($request);
        $thisarticleinfos=Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        if ($thisarticleinfos->ismake || $thisarticleinfos->published_at>Carbon::now() || $request->ismake !=1 ||  Carbon::createFromFormat('Y-m-d',date('Y-m-d',strtotime($request['published_at']))) > Carbon::now())
        {
            Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            event(new ArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Index'));
        }else{
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            $request['ispush']=1;
            Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            $thisarticleurl=config('app.url').'/article/'.$thisarticleinfos->id.'.html';
            $miparticleurl=str_replace('www.','mip.',config('app.url')).'/article/'.$thisarticleinfos->id.'.html';
            $this->BaiduCurl(config('app.api'),$thisarticleurl,'审核后百度主动提交');
            if ($request->xiongzhang)
            {
                $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'审核后熊掌号天级推送');
            }else{
                $this->BaiduCurl(config('app.mip_history'),$miparticleurl,'审核后熊掌号周级提交');
            }
            event(new ArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Index'));
        }
    }

    /**品牌文档编辑提交处理
     * @param CreateBrandArticleRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function PostBrandArticleEditor(CreateBrandArticleRequest $request,$id)
    {
        $this->RequestProcess($request);
        $thisarticleinfos=Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        if ($thisarticleinfos->ismake || $thisarticleinfos->published_at>Carbon::now() || $request->ismake !=1 || Carbon::createFromFormat('Y-m-d',date('Y-m-d',strtotime($request['published_at']))) > Carbon::now())
        {
            Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            event(new BrandArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Brands'));
        }else{
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            $request['ispush']=1;
            Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            $thisarticleurl=config('app.url').'/xiangmu/'.$thisarticleinfos->id.'.html';
            $this->BaiduCurl(config('app.api'),$thisarticleurl,'百度主动提交');
            $miparticleurl=str_replace('www.','mip.',config('app.url')).'/xiangmu/'.$thisarticleinfos->id.'.html';
            if ($request->xiongzhang)
            {
                $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'熊掌号天级推送');
            }else{
                $this->BaiduCurl(config('app.mip_history'),$miparticleurl,'熊掌号周级提交');
            }
            event(new BrandArticleCacheCreateEvent($thisarticleinfos));
            return redirect(action('Admin\ArticleController@Brands'));
        }
    }

    /**
     *自定义文档属性及缩略图处理
     * @param Request $request
     * @return Request
     */
    private function RequestProcess(Request $request)
    {
        $request['keywords']=$request['keywords']?$request['keywords']:$request['title'];
        $request['click']=rand(100,900);
        $request['description']=(!empty($request['description']))?str_limit($request['description'],180,''):str_limit(str_replace(['&nbsp;',' ','　',PHP_EOL,"\t"],'',strip_tags(htmlspecialchars_decode($request['body']))), $limit = 180, $end = '');
        $request['write']=auth('admin')->user()->name;
        $request['dutyadmin']=auth('admin')->id();
        $request['body']=str_replace('<h2></h2>','',$request->body);
        //自定义文档属性处理
        if(isset($request['flags']))
        {
            $request['flags']=UploadImages::Flags($request['flags']);
        }
        //缩略图处理
        if($request['image'])
        {
            $request['litpic']=UploadImages::UploadImage($request,'image');
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }elseif (isset($request['litpic']) && !empty($request['litpic']))
        {
            $request['litpic']=$request['litpic'];
        }elseif (preg_match('/<[img|IMG].*?src=[\' | \"](.*?(?:[\.jpg|\.jpeg|\.png|\.gif|\.bmp]))[\'|\"].*?[\/]?>/i',$request['body'],$match)){
            $request['litpic']=$match[1];
            if(empty($request['flags']))
            {
                $request['flags'].='p';
            }else{
                $request['flags'].=',p';
            }
        }
        //首页推荐图处理
        if($request['indexlitpic']) {
            $request['indexpic'] = UploadImages::UploadImage($request, 'indexlitpic');
        }
        //图集处理
        $request['imagepics']=rtrim($request->input('imagepics'),',');
        /**
         * if (Admin::where('id',auth('admin')->id())->value('type')!=1)
        {
        $request['ismake']=0;
        }
         */
        return $request;

    }
    /**当前用户发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function OwnerShip()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**当前用户发布的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandArticleOwnerShip()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }


    /**等待审核的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAudit()
    {
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }
    /**等待审核的品牌文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAuditBrandarticle()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.brandarticle',compact('articles'));
    }

    /**品牌文档领取中心
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function BrandarticlesReceive()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('dutyadmin',1)->where('editor_id','<',1)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_article_receive',compact('articles'));
    }
    public function Brandreceives()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }
    /**品牌文档领取异步更新
     * @param $id
     */
    public function UpdateBrabdReceive($id)
    {
        if (!Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('editor_id'))
        {
            Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('dutyadmin',1)->where('editor_id',0)->where('id',$id)->update(['editor'=>auth('admin')->user()->name,'editor_id'=>auth('admin')->id(),'received_at'=>Carbon::now()]);
            return [auth('admin')->user()->name,'已成功领取品牌'];
        }else{
            return [Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->value('editor'),'已经领取过该品牌，不可重复领取'];
        }

    }

    /**我已领取的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function ownBrandarticleRecevied(){
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('editor_id',auth('admin')->id())->latest()->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }

    /**已领取未修改品牌汇总
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandReceivednoMod()
    {
        /**批量清理退回数据
         *  $updateArticles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',0)->orderBy('id','asc')->get();
        foreach ($updateArticles as $article)
        {
        Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$article->id)->update(['editor_id'=>0,'editor'=>null,'received_at'=>null]);
        }
         */
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',0)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }
    /**已领取已修改品牌汇总
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function BrandReceivedModedNomake()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->where('editor_id','<>',0)->where('isedit',1)->orderBy('id','asc')->paginate(30);
        return view('admin.brand_received',compact('articles'));
    }

    /**等待发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PedingPublished(){
        $articles = Archive::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**待发布的品牌
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function PedingBrands()
    {
        $articles = Brandarticle::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }

    /**普通文档删除
     * @param $id
     * @return string
     */
    function DeleteArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            event(new ArticleCacheDeleteEvent(Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first()));
            Archive::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功 跳转中 请稍后';
        }else{
            return '无权限执行此操作！跳转中 请稍后';
        }
    }

    /**品牌文档删除
     * @param $id
     * @return string
     */
    public function DeleteBrandArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            event(new BrandArticleCacheDeleteEvent(Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->first()));
            Brandarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功';
        }else{
            return '无权限执行此操作！';
        }
    }


    /**文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PostArticleSearch(Request $request)
    {
        $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        return view('admin.article',compact('articles'));
    }


    /** 栏目文章查看
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Type($id)
    {
        switch (Arctype::where('id',$id)->value('mid'))
        {
            case 0:
                $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.article';
                break;
            case 1:
                $articles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.brandarticle';
                break;
        }
        return view($view,compact('articles'));
    }

    /**获取地区分类
     * @param Request $request
     * @return mixed
     */
    public function GetAreas(Request $request)
    {
        $citys=Area::where('parentid',$request->province_id)->pluck('name_cn','id');
        return $citys;
    }
    public function GetBdnames(Request $request)
    {
        $brandnames=Brandarticle::where('typeid',$request->typeid)->pluck('brandname','id');
        return $brandnames;
    }

    /**百度主动推送
     * @param $thisarticleurl
     * @param $token
     * @param $type
     */
    private function BaiduCurl($token,$thisarticleurl,$type)
    {
        $urls = array($thisarticleurl);
        $ch = curl_init();
        $options =  array(
            CURLOPT_URL =>$token,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => implode("\n", $urls),
            CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        Log::info($thisarticleurl.$type);
        Log::info($result);
    }

    /**重复标题检测
     * @param Request $request
     * @return int
     */
    public function ArticletitleCheck(Request $request)
    {
        $title=Archive::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->count();
        if (!$title)
        {
            $title=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->value('title');
        }
        return $title?1:0;
    }

}
