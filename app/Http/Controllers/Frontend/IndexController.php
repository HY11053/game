<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use App\AdminModel\InvestmentType;
use App\AdminModel\Production;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    function Index()
    {
        //最新加盟项目
        $latestbrands=Cache::remember('index_latestbrands', 60, function(){
            return Brandarticle::latest()->take(14)->orderBy('id','desc')->get(['id','brandname','tzid']);
        });
        //最新上榜
        $latestbrand2s=Cache::remember('index_latestbrand2s', 60, function(){
            return Brandarticle::latest()->skip(12)->take(12)->orderBy('id','desc')->get(['id','brandname','typeid']);
        });
        //加盟排行榜
        $paihangbrands=Cache::remember('index_paihang', 60*24, function(){
            return Brandarticle::take(10)->whereIn('typeid',Arctype::where('reid','>',0)->pluck('id'))->orderBy('click','desc')->get(['id','tzid','brandname','litpic']);
        });
        //品牌新闻
        $anxwangshuos=Cache::remember('index_anxwangshuos', 10, function(){
            return Archive::where('typeid',211)->latest()->take(6)->orderBy('id','desc')->get(['id','title','description','created_at','litpic']);
        });
        //创业指导
        $feiyongnews=Cache::remember('index_feiyongnews', 10, function(){
            return Archive::where('typeid',212)->take(6)->latest()->get(['id','title','description','created_at','litpic']);
        });
        $chuangyenews=Cache::remember('index_chuangyenews', 10, function(){
            return Archive::where('typeid',213)->take(6)->latest()->get(['id','title','description','created_at','litpic']);
        });
        $xuanzhinews=Cache::remember('index_xuanzhinews', 10, function(){
            return Archive::where('typeid',214)->take(6)->latest()->get(['id','title','description','created_at','litpic']);
        });
        $jingyingnews=Cache::remember('index_jingyingnews', 10, function(){
            return Archive::where('typeid',215)->take(9)->latest()->get(['id','title','description','created_at','litpic']);
        });
        $brandnews=Cache::remember('index_brandnews', 10, function(){
            return Archive::where('typeid',216)->take(9)->latest()->get(['id','title','description','created_at','litpic']);
        });
        //友情链接
        $flinks=Cache::remember('index_flinks', 10, function(){
            return flink::orderBy('id','desc')->get();
        });
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        return view('frontend.index',compact('latestbrands','latestbrand2s','paihangbrands','investment_types','anxwangshuos','chuangyenews','feiyongnews','flinks','xuanzhinews','jingyingnews','brandnews'));
    }
}
