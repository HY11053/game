<?php

namespace App\Http\Controllers\Admin;

use App\AdminModel\Msarticle;
use App\AdminModel\Mscategory;
use App\Http\Requests\CreateArticleRequest;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;

class MsArticleController extends Controller
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
        $articles = Msarticle::withoutGlobalScope(PublishedScope::class)->orderBy('id','desc')->paginate(30);
        return view('admin.ms_articles',compact('articles'));
    }


    /**普通文档创建
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Create()
    {
        $brandcid=Mscategory::where('id',8)->pluck('typename','id');
        $brandnavs=Mscategory::where('reid',8)->where('mid',1)->pluck('typename','id');
        $allnavinfos=Mscategory::where('mid',0)->pluck('typename','id');
        return view('admin.msarticle_create',compact('allnavinfos','brandnavs','brandcid'));
    }


    /**文档创建提交数据处理
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostCreate(CreateArticleRequest $request)
    {
        if(Msarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->title)->value('id'))
        {
            exit('标题重复，禁止发布');
        }
        $this->RequestProcess($request);
        if ( Msarticle::create($request->all())->wasRecentlyCreated)
        {
            //百度相关数据提交
            $thisarticle=Msarticle::withoutGlobalScope(PublishedScope::class)->first();
            if ($thisarticle->published_at>Carbon::now() || $thisarticle->ismake !=1)
            {
                return redirect(action('Admin\MsArticleController@Index'));
            }else{
                $thisarticleurl=config('msapp.url').'/jiameng/'.$thisarticle->id.'.html';
                $miparticleurl=str_replace('www.','mip.',config('app.url')).'/jiameng/'.$thisarticle->id.'.html';
                $this->BaiduCurl(config('msapp.api'),$thisarticleurl,'百度主动提交');
                if ($request->xiongzhang)
                {
                    $this->BaiduCurl(config('msapp.mip_api'),$miparticleurl,'熊掌号天级推送');
                }else{
                    $this->BaiduCurl(config('msapp.mip_history'),$miparticleurl,'熊掌号周级提交');
                }
                return redirect(action('Admin\MsArticleController@Index'));
            }
        }
    }

    /**普通文档文档编辑
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Edit($id)
    {
        $articleinfos=Msarticle::withoutGlobalScope(PublishedScope::class)->findOrfail($id);
        $brandcid=Mscategory::where('id',8)->pluck('typename','id');
        $brandnavs=Mscategory::where('reid',8)->where('mid',1)->pluck('typename','id');
        $allnavinfos=Mscategory::where('mid',0)->pluck('typename','id');
        return view('admin.msarticle_edit',compact('id','articleinfos','allnavinfos','brandnavs','brandcid'));
    }
    /**文档编辑提交处理
     * @param CreateArticleRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function PostEdit(CreateArticleRequest $request,$id)
    {
        $this->RequestProcess($request);
        $thisarticleinfos=Msarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id);
        $request['write']=$thisarticleinfos->write;
        $request['dutyadmin']=$thisarticleinfos->dutyadmin;
        if ($thisarticleinfos->ismake || $thisarticleinfos->published_at>Carbon::now() || $request->ismake !=1 ||  Carbon::createFromFormat('Y-m-d',date('Y-m-d',strtotime($request['published_at']))) > Carbon::now())
        {
            Msarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            return redirect(action('Admin\MsArticleController@Index'));
        }else{
            $request['created_at']=Carbon::now();
            $request['updated_at']=Carbon::now();
            Msarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($id)->update($request->all());
            $thisarticleurl=config('msapp.url').'/jiameng/'.$thisarticleinfos->id.'.html';
            $miparticleurl=str_replace('www.','mip.',config('msapp.url')).'/jiameng/'.$thisarticleinfos->id.'.html';
            $this->BaiduCurl(config('app.api'),$thisarticleurl,'审核后百度主动提交');
            if ($request->xiongzhang)
            {
                $this->BaiduCurl(config('app.msmip_api'),$miparticleurl,'审核后熊掌号天级推送');
            }else{
                $this->BaiduCurl(config('app.msmip_history'),$miparticleurl,'审核后熊掌号周级提交');
            }
            return redirect(action('Admin\MsArticleController@Index'));
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
        $articles = Msarticle::withoutGlobalScope(PublishedScope::class)->where('dutyadmin',auth('admin')->user()->id)->latest()->paginate(30);
        return view('admin.ms_articles',compact('articles'));
    }

    /**等待审核的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PendingAudit()
    {
        $articles = Msarticle::withoutGlobalScope(PublishedScope::class)->where('ismake','<>',1)->latest()->paginate(30);
        return view('admin.ms_articles',compact('articles'));
    }

    /**等待发布的文档
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PedingPublished(){
        $articles = Msarticle::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::now())->latest()->paginate(30);
        return view('admin.ms_articles',compact('articles'));
    }



    /**普通文档删除
     * @param $id
     * @return string
     */
    function DeleteArticle($id)
    {
        if(auth('admin')->user()->id)
        {
            Msarticle::withoutGlobalScope(PublishedScope::class)->where('id',$id)->delete();
            return '删除成功 跳转中 请稍后';
        }else{
            return '无权限执行此操作！跳转中 请稍后';
        }
    }

    /**文档搜索
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function PostArticleSearch(Request $request)
    {
        $articles=Msarticle::withoutGlobalScope(PublishedScope::class)->where('title','like','%'.$request->input('title').'%')->latest()->paginate(30);
        return view('admin.ms_articles',compact('articles'));
    }


    /** 栏目文章查看
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function Type($id)
    {
        switch (Mscategory::where('id',$id)->value('mid'))
        {
            case 0:
                $articles=Msarticle::withoutGlobalScope(PublishedScope::class)->where('typeid',$id)->latest()->paginate(30);
                $view='admin.ms_articles';
                break;
        }
        return view($view,compact('articles'));
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
        $title=Msarticle::withoutGlobalScope(PublishedScope::class)->where('title',$request->input('title'))->count();
        return $title?1:0;
    }
}
