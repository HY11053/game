<?php

namespace App\Console\Commands;

use App\AdminModel\Archive;
use App\AdminModel\Brandarticle;
use App\Scopes\PublishedScope;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Log;
class ArticleCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Article Check Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->CheckArtickePublished();
        $this->BrandArticleCheck();
    }

    /**
     * 定时发布普通文档提交审核
     */
    private function CheckArtickePublished()
    {
        $articles=Archive::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::today())->where('published_at','<',Carbon::tomorrow())->where('ispush',0)->get();
        foreach ($articles as $article)
        {
            if ($article->published_at < Carbon::now() && $article->ispush!=1 && $article->ismake)
            {
                $request['created_at']=Carbon::now();
                $request['updated_at']=Carbon::now();
                $request['ispush']=1;
                Archive::withoutGlobalScope(PublishedScope::class)->findOrFail($article->id)->update($request);
                $thisarticleurl=config('app.url').'/news/'.$article->id.'.shtml';
                $miparticleurl=str_replace('www.','mip.',config('app.url')).'/news/'.$article->id.'.shtml';
                $this->BaiduCurl(config('app.api'),$thisarticleurl,'定时发布百度主动提交');
                $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'定时发布熊掌号实时推送');
                }
                Log::info('定时发布提交更新'.Carbon::now());
            }
        Log::info('定时发布提交更新'.Carbon::now());
    }


    /**
     * 品牌文档定时发布提交处理
     */
    private function BrandArticleCheck()
    {
        $brandarticles=Brandarticle::withoutGlobalScope(PublishedScope::class)->where('published_at','>',Carbon::today())->where('published_at','<',Carbon::tomorrow())->where('ispush',0)->get();
        foreach ($brandarticles as $brandarticle)
        {
            if ($brandarticle->published_at<Carbon::now() && $brandarticle->ispush!=1 && $brandarticle->ismake)
            {
                $request['created_at']=Carbon::now();
                $request['updated_at']=Carbon::now();
                $request['ispush']=1;
                Brandarticle::withoutGlobalScope(PublishedScope::class)->findOrFail($brandarticle->id)->update($request);
                $thisarticleurl=config('app.url').'/xm/'.$brandarticle->id.'.shtml';
                $this->BaiduCurl(config('app.api'),$thisarticleurl,'百度主动提交');
                $miparticleurl=str_replace('www.','mip.',config('app.url')).'/xm/'.$brandarticle->id.'.shtml';
                $this->BaiduCurl(config('app.mip_api'),$miparticleurl,'定时发布熊掌号实时推送');
                Log::info('定时发布提交更新'.Carbon::now());
            }
        }
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
}
