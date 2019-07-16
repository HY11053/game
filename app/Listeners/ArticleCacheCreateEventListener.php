<?php

namespace App\Listeners;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Events\ArticleCacheCreateEvent;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class ArticleCacheCreateEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticleCacheCreateEvent  $event
     * @return void
     */
    public function handle(ArticleCacheCreateEvent $event)
    {
        $id=$event->arcvhive->id;
        if (Archive::find($id))
        {
            //清除当前缓存 重新写入 兼容Update
            Cache::forget('thisarticleinfos_'.$id);
            //获取当前文档并缓存
            $thisarticleinfos = Cache::remember('thisarticleinfos_'.$id, config('app.cachetime')+rand(60,60*24), function() use($id){
                return Archive::findOrFail($id);
            });
            //获取当前栏目信息并缓存
            $thistypeinfo=Cache::remember('thistypeinfos_'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
                return Arctype::where('id',$thisarticleinfos->typeid)->first();
            });
            //获取文档上一篇并缓存
            Cache::remember('thisarticleinfos_prev'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Archive::latest('created_at')->where('id',$this->getPrevArticleId($thisarticleinfos->id))->pluck('title','id')->toArray();
            });
            //获取文档下一篇并缓存 此时下一篇为空
            Cache::remember('thisarticleinfos_next'.$id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Archive::latest('created_at')->where('id',$this->getNextArticleId($thisarticleinfos->id))->pluck('title','id')->toArray();
            });
            //更新上一篇文档的下一篇缓存
            $prev_id=$this->getPrevArticleId($id);
            Cache::forget('thisarticleinfos_next'.$prev_id);
            Cache::remember('thisarticleinfos_next'.$prev_id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Archive::latest('created_at')->where('id',$thisarticleinfos->id)->pluck('title','id')->toArray();
            });
            //获取当前文档所属品牌并缓存
            if($thisarticleinfos->brandid && Brandarticle::where('id',$thisarticleinfos->brandid)->orderBy('id','desc')->value('id'))
            {
                //清除当前缓存 重新写入 兼容Update
                Cache::forget('thisbrandarticleinfos_'.$thisarticleinfos->brandid);
                $thisarticlebrandinfos = Cache::remember('thisbrandarticleinfos_'.$thisarticleinfos->brandid, config('app.cachetime')+rand(60,60*24), function() use($id,$thisarticleinfos){
                    return Brandarticle::where('id',$thisarticleinfos->brandid)->first();
                });
            }
            //获取当前文档所属品牌分类、父分类及品牌所属地区
            if (isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
            {
                //清除当前缓存 重新写入 兼容Update
                Cache::forget('thistypeinfos_'.$thisarticlebrandinfos->typeid);
                //当前文档所属品牌所属分类
                $thisbrandtypeinfo=Cache::remember('thistypeinfos_'.$thisarticlebrandinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticlebrandinfos){
                    return  Arctype::where('id',$thisarticlebrandinfos->typeid)->first();
                });
                //清除当前缓存 重新写入 兼容Update
                Cache::forget('thistypeinfos_'.$thisbrandtypeinfo->reid);
                //当前文档所属品牌所属分类的父分类
                $thisbrandtypecidinfo=Cache::remember('thistypeinfos_'.$thisbrandtypeinfo->reid, config('app.cachetime')+rand(60,60*24), function() use($thisbrandtypeinfo){
                    return Arctype::where('id',$thisbrandtypeinfo->reid)->first();
                });
                Cache::forget('thisarticleinfos_brandnews'.$thisarticlebrandinfos->id);
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
                Cache::forget('brandtypenews'.$thisarticlebrandinfos->id);
                Cache::remember('brandtypenews'.$thisarticlebrandinfos->id, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos,$latestbrandnews,$thisarticlebrandinfos){
                    $notids=[];
                    foreach ($latestbrandnews as $latestbrandnew)
                    {
                        $notids[]=$latestbrandnew->id;
                    }
                    return Archive::where('brandtypeid',$thisarticleinfos->brandtypeid)->whereNotIn('id',$notids)->take(12)->latest('created_at')->get(['id','title']);
                });
            }else{
                Cache::forget('thisarticleinfos_brandnews'.$thisarticleinfos->typeid);
                Cache::remember('thisarticleinfos_brandnews'.$thisarticleinfos->typeid, config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                    return Archive::where('typeid', $thisarticleinfos->typeid)->take(10)->latest()->get(['id', 'title', 'created_at','litpic']);
                });
                Cache::forget('typenews'.$thisarticleinfos->typeid);
                Cache::remember('typenews'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos) {
                    return  Archive::where('typeid', $thisarticleinfos->typeid)->take(12)->latest('created_at')->get(['id', 'title']);
                });
            }
            //通用页面缓存清理
            Cache::forget('latestnews');
            Cache::remember('latestnews',config('app.cachetime')+rand(60,60*24), function(){
                return Archive::latest()->take(12)->orderBy('id','desc')->get(['id','title','created_at']);
            });
            Cache::forget('list_latestnews');
            Cache::remember('list_latestnews',config('app.cachetime')+rand(60,60*24), function(){
                return Archive::latest()->take(19)->orderBy('id','desc')->get(['id','title','created_at']);
            });
            Cache::forget('typebrandnews'.$thisbrandtypeinfo->id);
            Cache::remember('typebrandnews'.$thisbrandtypeinfo->id,  config('app.cachetime')+rand(60,60*24), function() use($thisbrandtypeinfo){
                $latestbrandnews=Archive::where('brandtypeid',$thisbrandtypeinfo->id)->take(10)->latest()->get(['id','title','created_at']);
                return $latestbrandnews;
            });
            Cache::forget('typebrandnews'.$thisbrandtypecidinfo->id);
            Cache::remember('typebrandnews'.$thisbrandtypecidinfo->id,  config('app.cachetime')+rand(60,60*24), function() use($thisbrandtypecidinfo){
                $latestbrandnews=Archive::whereIn('brandtypeid',Arctype::where('mid',1)->where('reid',$thisbrandtypecidinfo->id)->pluck('id'))->orderBy('id','desc')->take(10)->latest()->get(['id','title','created_at']);
                return $latestbrandnews;
            });
            Cache::forget('xmtypebrandnews');
            Cache::remember('xmtypebrandnews',  config('app.cachetime')+rand(60,60*24), function(){
                $latestbrandnews=Archive::take(10)->latest()->get(['id','title','created_at']);
                return $latestbrandnews;
            });
        }
    }

    protected function getPrevArticleId($id)
    {
        return Archive::where('id', '<', $id)->orderBy('id','desc')->value('id');
    }
    protected function getNextArticleId($id)
    {
        return Archive::where('id', '>', $id)->orderBy('id','asc')->value('id');
    }
}
