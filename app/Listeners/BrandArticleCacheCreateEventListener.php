<?php

namespace App\Listeners;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use App\Events\BrandArticleCacheCreateEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class BrandArticleCacheCreateEventListener
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
     * @param  BrandArticleCacheCreateEvent  $event
     * @return void
     */
    public function handle(BrandArticleCacheCreateEvent $event)
    {
        $id=$event->brandarticle->id;
        if (Brandarticle::find($id))
        {
            //清除当前缓存 重新写入 兼容Update
            Cache::forget('thisbrandarticleinfos_'.$id);
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
            //清除当前缓存 重新写入 兼容Update
            Cache::forget('phb'.$thisarticleinfos->typeid);
            //品牌分类排行榜 请保持缓存名称和普通文档所属品牌分类的排行榜缓存文件名称相同
            Cache::remember('phb'.$thisarticleinfos->typeid,   config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('typeid',$thisarticleinfos->typeid)->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
            });
            Cache::forget('brandarticles'.$thisarticleinfos->id);
            Cache::remember('brandarticles'.$thisarticleinfos->id,config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                $brandarticlekey=array_search($thisarticleinfos->id,Brandarticle::where('typeid',$thisarticleinfos->typeid)->orderBy('id','asc')->pluck('id')->toArray());
                $brandarticles=Brandarticle::where('typeid',$thisarticleinfos->typeid)->skip($brandarticlekey*10)->take(12)->get(['id','brandname','created_at','litpic','brandpay','tzid']);
                if (!count($brandarticles))
                {
                    $brandarticles=Brandarticle::where('typeid',$thisarticleinfos->typeid)->skip($brandarticlekey-10)->orderBy('id','asc')->take(12)->get(['id','brandname','created_at','litpic','brandpay','tzid']);
                }
                return $brandarticles;
            });
            Cache::forget('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid);
            Cache::remember('thisarticleinfos_latestbrands'.$thisarticleinfos->typeid,  config('app.cachetime')+rand(60,60*24), function() use($thisarticleinfos){
                return Brandarticle::where('typeid',$thisarticleinfos->typeid)->latest()->take(6)->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
            });
            Cache::forget('newbrands');
            Cache::remember('newbrands',  config('app.cachetime')+rand(60,60*24), function(){
                return Brandarticle::latest()->take(6)->orderBy('id','desc')->get(['id','brandname']);
            });
            Cache::forget('brandarticles');
            Cache::remember('brandarticles',config('app.cachetime')+rand(60,60*24), function() {
                return Brandarticle::take(12)->orderBy('click','desc')->get(['id','brandname','created_at','litpic','brandpay']);
            });
            Cache::forget('phb');
            Cache::remember('phb', config('app.cachetime')+rand(60,60*24), function() {
                return   Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
            });
            Cache::forget('latestbrands');
            Cache::remember('latestbrands', config('app.cachetime')+rand(60,60*24), function(){
                return   Brandarticle::latest()->take(6)->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
            });
            Cache::forget('list_latestbrands');
            Cache::remember('list_latestbrands',  config('app.cachetime')+rand(60,60*24), function() {
                $latestbrands=Brandarticle::latest()->take(10)->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
                return $latestbrands;
            });
        }
    }
}
