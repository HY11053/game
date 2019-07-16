<?php

namespace App\Http\Controllers\Mip;

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
        $cbrands=Cache::remember('mobile_cbrands', 60*24*365, function(){
            return Brandarticle::where('mid','1')->take(4)->orderBy('click','desc')->get();
        });
        $cbrand2s=Cache::remember('mobile_cbrand2s', 60*24*365, function(){
            return Brandarticle::where('mid','1')->skip(4)->take(4)->orderBy('click','desc')->get();
        });
        $cbrand3s=Cache::remember('mobile_cbrand3s', 60*24*365, function(){
            return Brandarticle::where('mid','1')->skip(8)->take(4)->orderBy('click','desc')->get();
        });
        $cbrand4s=Cache::remember('mobile_cbrand4s', 60*24*365, function(){
            return Brandarticle::where('mid','1')->skip(12)->take(4)->orderBy('click','desc')->get();
        });

        $latestbrands=Cache::remember('mobile_latestbrands', 10, function(){
            return Brandarticle::where('mid','1')->latest()->take(4)->get();
        });

        $latestbrand2s=Cache::remember('mobile_latestbrand2s', 10, function(){
            return Brandarticle::where('mid','1')->latest()->skip(4)->take(4)->get();
        });

        $latestbrand3s=Cache::remember('mobile_latestbrand3s', 10, function(){
            return  Brandarticle::where('mid','1')->latest()->skip(8)->take(4)->get();
        });
        $latestbrand4s=Cache::remember('mobile_latestbrand4s', 10, function(){
            return Brandarticle::where('mid','1')->latest()->skip(12)->take(4)->get();
        });

        $latestbrandnews=Cache::remember('mobile_latestbrandnews', 10, function(){
            return Archive::where('brandid','<>','')->where('typeid',212)->latest()->take(4)->get();
        });

        $jmzhinannews=Cache::remember('mobile_jmzhinannews', 10, function(){
            return Archive::where('brandid','<>','')->where('typeid',211)->latest()->take(4)->get();
        });
        $touzinews=Cache::remember('mobile_touzinews', 10, function(){
            return Archive::where('brandid','<>','')->where('typeid',213)->latest()->take(4)->get();
        });

        $jingyingnews=Cache::remember('mobile_jingyingnews', 10, function(){
            return Archive::where('brandid','<>','')->where('typeid',214)->latest()->take(4)->get();
        });

        $ctbrandnews=Cache::remember('mobile_c
        
        tbrandnews', 10, function(){
            return Archive::where('brandid','<>','')->take(4)->get();
        });
        return view('mip.index',compact('cbrands','cbrand2s','cbrand3s','cbrand4s','latestbrands','latestbrand2s','latestbrand3s','latestbrand4s','latestbrandnews','jmzhinannews','touzinews','jingyingnews','ctbrandnews'));
    }
}
