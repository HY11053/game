<?php

namespace App\Http\Controllers\Mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PaihangbangController extends Controller
{
    public function IndexPaihangbang()
    {
        //获取顶级品牌分类栏目信息并缓存
        $topbandnavs=Cache::remember('topnavsbrandphb',365*24*60,function (){
            return Arctype::where('mid',1)->where('reid',0)->get(['typename','real_path','id']);
        });
        //获取顶级品牌分类栏目信息 缓存路径和栏目名称供循环调用
        $topbandnav2=Cache::remember('topnavsbrandphb2',365*24*60,function (){
            return Arctype::where('mid',1)->where('reid',0)->pluck('real_path','typename');
        });
        //获取全部投资分类类型并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        //全部分类排行榜内容缓存输出
        $paihangbangbrands=Cache::remember('paihangbangbrands',365*34*60,function () use($topbandnavs){
            foreach ($topbandnavs as $topbandnav)
            {
                $paihangbangbrands[$topbandnav->typename]=Brandarticle::whereIn('typeid',Arctype::where('reid',$topbandnav->id)->pluck('id'))->take(10)->orderBy('click','desc')->get(['id','typeid','tzid','brandname','litpic','description']);
            }
            return $paihangbangbrands;
        });
        return view('mobile.paihangbang',compact('topbandnavs','topbandnav2','paihangbangbrands','investment_types'));
    }
}
