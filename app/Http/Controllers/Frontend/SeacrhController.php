<?php

namespace App\Http\Controllers\Frontend;
use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use App\AdminModel\InvestmentType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class SeacrhController extends Controller
{
    public function SeacrhBrand(Request $request,$page=0)
    {
        $path='search';
        $typeid=Arctype::where('real_path',$path)->value('id')?:abort(404);
        $thistypeinfo=Cache::remember('thistypeinfos_'.$typeid,  config('app.cachetime')+rand(60,60*24), function() use($typeid){
            return  Arctype::where('id',$typeid)->first();
        });
        //投资分类获取并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        $type_investment_types=Cache::remember('investment_types_all',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::get(['type','id','url']);
        });
        //获取品牌顶级栏目分类并缓存
        $topbrandtypeinfos=Cache::remember('topbrandtypeinfos', config('app.cachetime')+rand(60,60*24), function (){
            return Arctype::where('mid',1)->where('id','<>',220)->where('reid',0)->take(25)->orderBy('sortrank','desc')->get(['id','typename','real_path']);
        });
        //获取当前栏目的父栏目 如果为顶级栏目 父栏目为自身 兼容前端输出层判断
        $thistypeinforeid=Cache::remember('thistypeinfos_'.$thistypeinfo->id,  config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo) {
            return Arctype::where('id', $thistypeinfo->id)->first();
        });
        //获取当前栏目子栏目
        $sontypes=Cache::remember('sontypes'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function () use($thistypeinfo){
            return Arctype::where('mid',1)->orderBy('sortrank','desc')->get(['id','typename','real_path']);
        });
        //获取当前分类下包含的投资分类并缓存
        $investment_ids=Cache::remember('investment_id'.$thistypeinfo->id, config('app.cachetime')+rand(60,60*24), function () use($thistypeinfo){
            return Brandarticle::whereIn('typeid',Arctype::where('mid',1)->pluck('id'))->orderBy('id','desc')->distinct()->pluck('tzid','tzid')->toArray();
        });
        //当前栏目品牌分页处理
        $pagelists=Brandarticle::where('brandname','like',$request->keywords.'%')->paginate($perPage = 26, $columns = ['*'], $pageName = 'p', $page);
        $paihangbangs= Cache::remember('phb'.$thistypeinfo->id,  config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
            return Brandarticle::whereIn('typeid',Arctype::where('mid',1)->pluck('id'))->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
        });
        //当前栏目子栏目下品牌最新品牌
        $latestbrands=Cache::remember('thisbrandarticleinfos_latestbrands'.$thistypeinfo->id,  config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
            $latestbrands=Brandarticle::whereIn('typeid',Arctype::where('mid',1)->pluck('id'))->latest()->take('5')->orderBy('id','desc')->get(['id','brandname','tzid','litpic']);
            return $latestbrands;
        });
        //当前栏目相关品牌文档
        $latestbrandnews=Cache::remember('xmtypebrandnews',  config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
            $latestbrandnews=Archive::whereIn('brandtypeid',Arctype::where('mid',1)->pluck('id'))->take(10)->latest()->get(['id','title','created_at']);
            return $latestbrandnews;
        });
        $newbrands=Cache::remember('newbrands',  config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::latest()->take(6)->orderBy('id','desc')->get(['id','brandname']);
        });
        $latestnews=Cache::remember('latestnews',config('app.cachetime')+rand(60,60*24), function(){
            return Archive::latest()->take(12)->orderBy('id','desc')->get(['id','title','created_at']);
        });
        return view('frontend.search_brand',compact('thistypeinfo','topbrandtypeinfos','sontypes','pagelists','paihangbangs','investment_types','latestbrands','latestbrandnews','provinces','province_ids','thistypeinforeid','investment_ids','type_investment_types','newbrands','touzipath','project_title','latestnews'));
}
}
