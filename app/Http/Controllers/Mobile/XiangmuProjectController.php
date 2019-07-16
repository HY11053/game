<?php

namespace App\Http\Controllers\mobile;

use App\AdminModel\Archive;
use App\AdminModel\Arctype;
use App\AdminModel\Area;
use App\AdminModel\Brandarticle;
use App\AdminModel\flink;
use App\AdminModel\InvestmentType;
use App\AdminModel\Production;
use Carbon\Carbon;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class XiangmuProjectController extends Controller
{
    /**项目大分类独立筛选
     * @param Request $request
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function XiangmuLists(Request $request,$page=0)
    {
        is_numeric($page)?:abort(404);
        $typeid=Arctype::where('real_path','search')->value('id')?:abort(404);
        $thistypeinfo=Cache::remember('thistypeinfos_'.$typeid,  config('app.cachetime')+rand(60,60*24), function() use($typeid){
            return  Arctype::where('id',$typeid)->first();
        });
        //投资分类获取并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        //获取品牌顶级栏目分类并缓存
        $topbrandtypeinfos=Cache::remember('topbrandtypeinfos', config('app.cachetime')+rand(60,60*24), function (){
            return Arctype::where('mid',1)->where('id','<>',220)->where('reid',0)->take(25)->orderBy('sortrank','desc')->get(['id','typename','real_path']);
        });
        //获取当前栏目的父栏目 如果为顶级栏目 父栏目为自身 兼容前端输出层判断
        $thistypeinforeid=$thistypeinfo;
        //当前栏目品牌分页处理
        $pagelists=Brandarticle::orderBy('click','desc')->distinct()->paginate($perPage = 26, $columns = ['*'], $pageName = 'page', $page);
        $cid='';
        $pagelists= Paginator::transfer(
            $cid,//传入分类id,
            $pagelists//传入原始分页器
        );
        $paihangbangs= Cache::remember('phb'.$thistypeinfo->id,  config('app.cachetime')+rand(60,60*24), function(){
            return Brandarticle::take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
        });
        //当前栏目相关品牌文档
        $latestbrandnews=Cache::remember('xmtypebrandnews',  config('app.cachetime')+rand(60,60*24), function(){
            $latestbrandnews=Archive::take(10)->latest()->get(['id','title','created_at']);
            return $latestbrandnews;
        });
        return view('mobile.brands',compact('thistypeinfo','topbrandtypeinfos','pagelists','paihangbangs','investment_types','latestbrandnews','thistypeinforeid'));
    }
    /***
     * 品牌分类筛选
     * @param Request $request
     * @param $path
     * @param int $tid
     * @param int $cid
     * @param int $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projectBrandLists($tid='',$zid='',$page=0)
    {
        is_numeric($page)?:abort(404);
        $path='search';
        $typeid=Arctype::where('real_path',$path)->value('id')?:abort(404);
        $thistypeinfo=Cache::remember('thistypeinfos_'.$typeid,  config('app.cachetime')+rand(60,60*24), function() use($typeid){
            return  Arctype::where('id',$typeid)->first();
        });
        //投资分类获取并缓存
        $investment_types=Cache::remember('investment_types',  config('app.cachetime')+rand(60,60*24), function(){
            return InvestmentType::pluck('type','id');
        });
        //获取品牌顶级栏目分类并缓存
        $topbrandtypeinfos=Cache::remember('topbrandtypeinfos', config('app.cachetime')+rand(60,60*24), function (){
            return Arctype::where('mid',1)->where('id','<>',220)->where('reid',0)->take(25)->orderBy('sortrank','desc')->get(['id','typename','real_path']);
        });
        $touzi=$tid.'_'.$zid;
        //获取当前栏目的父栏目 如果为顶级栏目 父栏目为自身 兼容前端输出层判断
        $thistypeinforeid=Cache::remember('thistypeinfos_'.$thistypeinfo->id,  config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo) {
            return Arctype::where('id', $thistypeinfo->id)->first();
        });
        //当前栏目品牌分页处理
        $pagelists=Brandarticle::when($touzi, function ($query) use ($touzi) {
            return $query->where('tzid',InvestmentType::where('url',$touzi)->value('id'));
        })->whereIn('typeid',Arctype::where('mid',1)->pluck('id'))->orderBy('click','desc')->distinct()->paginate($perPage = 26, $columns = ['*'], $pageName = 'p', $page);
        $paihangbangs= Cache::remember('phb'.$thistypeinfo->id,  config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
            return Brandarticle::whereIn('typeid',Arctype::where('mid',1)->pluck('id'))->take('10')->orderBy('click','desc')->get(['id','brandname','litpic','brandnum','tzid']);
        });
        //当前栏目相关品牌文档
        $latestbrandnews=Cache::remember('xmtypebrandnews',  config('app.cachetime')+rand(60,60*24), function() use($thistypeinfo){
            $latestbrandnews=Archive::whereIn('brandtypeid',Arctype::where('mid',1)->pluck('id'))->take(10)->latest()->get(['id','title','created_at']);
            return $latestbrandnews;
        });
        if (str_replace('_','',$touzi))
        {
            $touzipath=$touzi.'/';
        }else{
            $touzipath='';
        }
        $project_title=Cache::remember('investment_types'.$touzipath,  config('app.cachetime')+rand(60,60*24), function() use($touzipath){
            return InvestmentType::where('url',trim($touzipath,'/'))->value('type');
        });
        return view('mobile.xiangmu_project',compact('thistypeinfo','topbrandtypeinfos','pagelists','paihangbangs','investment_types','latestbrandnews','thistypeinforeid','project_title'));
    }
}
