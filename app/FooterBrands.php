<?php
/**
 * Created by PhpStorm.
 * User: liang
 * Date: 2017/4/7
 * Time: 12:53
 */
namespace App;
use App\AdminModel\Arctype;
use App\AdminModel\Brandarticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FooterBrands{
    public function footBrands()
    {
        $canyinbrans=Cache::remember('cycache', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',18)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $ganxibrans=Cache::remember('ganxicache', 60*24, function(){
            return Brandarticle::where('typeid',79)->take(16)->orderBy('click','desc')->get();
        });
        $chayinbrans=Cache::remember('chayincache', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',557)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $qichebrand=Cache::remember('qiche', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',24)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $jiaoyubrands=Cache::remember('jiaoyu', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',36)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $meirongbrands=Cache::remember('meirong', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',554)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $jiajubrands=Cache::remember('jiaju', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',592)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $lingshoubrands=Cache::remember('lingshou', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',553)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $fuzhuangbrands=Cache::remember('fuzhuang', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',6)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $huanbaobrands=Cache::remember('huanbao', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',559)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $muyingbrands=Cache::remember('muying', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',54)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $shenghuobrands=Cache::remember('shenghuo', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',555)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $baojianbrands=Cache::remember('baojian', 60*24, function(){
            return Brandarticle::whereIn('typeid',Arctype::where('reid',442)->pluck('id'))->take(16)->orderBy('click','desc')->get(['id','brandname','litpic']);
        });
        $footerdatas=array('canyinbrans'=>$canyinbrans,'ganxibrans'=>$ganxibrans,'chayinbrans'=>$chayinbrans,'qichebrand'=>$qichebrand,'jiaoyubrands'=>$jiaoyubrands,'meirongbrands'=>$meirongbrands,
            'jiajubrands'=>$jiajubrands,'lingshoubrands'=>$lingshoubrands,'fuzhuangbrands'=>$fuzhuangbrands,'huanbaobrands'=>$huanbaobrands,'muyingbrands'=>$muyingbrands,'shenghuobrands'=>$shenghuobrands,'baojianbrands'=>$baojianbrands
            );
        return $footerdatas;
    }

    /**底部推荐 热门 最新品牌
     * @return array
     */
    public function footBrandLists()
    {
        $jingxuanbrans=Cache::remember('jingxuanbrands', 60*24*365, function(){
            return Brandarticle::where('flags','like','c%')->take(40)->get(['id','brandname']);
        });
        $hotbrans=Cache::remember('hotbrands', 60*24*365, function(){
            return Brandarticle::where('flags','like','h%')->take(40)->get(['id','brandname']);
        });

        $latestbrands=Cache::remember('latestbrandsfooter',  60*24*365, function(){
            return Brandarticle::take(40)->latest()->get(['id','brandname']);
        });
        $footerbrandlists=array('jingxuanbrans'=>$jingxuanbrans,'hotbrans'=>$hotbrans,'latestbrands'=>$latestbrands);
        return $footerbrandlists;
    }

    /**获取顶级品牌栏目对应的子栏目
     * @return mixed
     */
    public function navTypes()
    {
        $navbrands=Cache::remember('navtypes', 60*24*365, function(){
            $brandtypes=[];
            $navtops=Arctype::where('reid',0)->where('mid',1)->take(18)->get(['typename','id','real_path']);
            foreach ($navtops as $navtop)
            {
                $brandtypes[$navtop->typename]=Arctype::where('reid',$navtop->id)->take(25)->orderBy('sortrank','desc')->get(['typename','real_path']);
            }
            return $brandtypes;
        });
        return $navbrands;
    }

    /**获取顶级品牌栏目
     * @return mixed
     */
    public function navTops()
    {
        $navtops = Cache::remember('navtops', 60 * 24 * 365, function () {
            $tops=[];
            $toplists= Arctype::where('reid', 0)->where('mid', 1)->take(18)->get(['typename', 'real_path']);
            foreach ($toplists as $toplist) {
                $tops[$toplist->typename]=$toplist;
            }
            return $tops;
        });
        return $navtops;
    }
}