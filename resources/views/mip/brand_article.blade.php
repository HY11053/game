@extends('mip.mip')
@section('title'){{$thisarticleinfos->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thisarticleinfos->keywords}}@stop
@section('description'){{$thisarticleinfos->description}}@stop
@section('headlibs')
    <script type="application/ld+json">
        {
            "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
            "@id": "{{str_replace('www.','mip.',config('app.url'))}}{{Request::getrequesturi()}}",
			"appid": "1634320825234209",
            "title": "{{$thisarticleinfos->title}}",
            "images": [{!! $jsonpics !!}],
			"description": "{{str_replace('	','',$thisarticleinfos->description)}}",
            "pubDate": "{{str_replace(' ','T',$thisarticleinfos->created_at)}}"
        }
    </script>
@stop
@section('main_content')
    <div class="weizhi">
	<span><a href="/">首页</a>&nbsp;>&nbsp;
        <a href="{{str_replace('www.','mip.',config('app.url'))}}/{{$thisbrandtypecidinfo->real_path}}/">{{$thisbrandtypecidinfo->typename}}</a>&nbsp;>&nbsp;
         <a href="{{str_replace('www.','mip.',config('app.url'))}}/{{$thisbrandtypeinfo->real_path}}/">{{$thisbrandtypeinfo->typename}}</a>&nbsp;>&nbsp;详情：
    </span>
    </div>
@include('mip.brand_header')
    <div id="item3">
        <div class="item3box">
            <ul class="title clearfix">
                <li class="tl">品牌地址：<span>{{$thisarticleinfos->country}}</span></li>
                <li class="tc">门店数目：<span>{{$thisarticleinfos->brandnum}}</span></li>
                <li class="tr">{{$thisarticleinfos->click}}人关注</li>
            </ul>
            <div class="top clearfix">
                <div class="topleft fl">
                    <i></i>
                    <p>注：{{$thisarticleinfos->brandname}}投资金额可能包含了加盟费、保证金、品牌使用费等其他相关费用，因此投资总额根据实际情况计算，相关费用解释请参考页面
                    </p>
                </div>
                <div class="topright fr">
                    <div class="item3boxbtn btn1 js_popup"><a href="#msg">立即咨询</a></div>
                </div>
            </div>
            <div class="bottom clearfix">
                <div class="bottomleft fl">
                </div>
                <div class="bottomright fr">
                    <a href="tel:400-8896-216">
                        <div class="item3boxbtn btn2">
                            拨打电话
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="item4">
        <div class="item4box">
            <div class="item4content">
                <div class="content">
                    <div class="jm_xq" id="b-info">
                        <div class="tb-first">
                            <div class="title" id="o-info_1">
                                <h2>{{$thisarticleinfos->brandname}}——{{$thisarticleinfos->brandpsp}}</h2>
                            </div>
                            <mip-showmore bottomshadow='1' maxheight='1000' id="showmore08">
                            <div class="jm_xq_con">
                              {!! $content !!}
                            </div>
                            </mip-showmore>
                            <div on="tap:showmore08.toggle" data-closetext="收起内容" class="mip-showmore-btn display">点击显示全部<i></i></div>
                    </div>
                    <div class="zhuanzai">
                        <i></i>如需更进一步了解{{$thisarticleinfos->brandname}}品牌加盟相关信息，可留言咨询我们，如因内容、版权或其它问题，请及时和本站取得联系，我们将第一时间删除内容！
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('mip.liuyan')
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($latestbrandnews as $index=>$latestbrandnew)
                    @if($index<5)
                    <div class="item7list">
                        <a href="{{$latestbrandnew->url()}}">
                            <div class="left fl">
                                <div class="lefttitle">{{$latestbrandnew->title}}</div>
                                <div class="text">
                                    <div class="message">编辑：安心加盟网</div>
                                </div>
                            </div>
                            <div class="right fr">
                                <mip-img @if($latestbrandnew->litpic) src="{{$latestbrandnew->litpic}}" alt="{{$latestbrandnew->tite}}" @else src="/public/images/noimg.jpg" @endif ></mip-img>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div id="item8">
        <div class="item8box clearfix">
            <i></i>
            <div class="title">猜你喜欢</div>
            <div class="item8content">
                @foreach($brandarticles as $index=>$brandarticle)
                    @if($index<4)
                    <div class="item8list @if(($index+1)%2==0) fl @else fr @endif">
                        <a href="/busInfo/{{$brandarticle->id}}.html">
                            <mip-img src="{{$brandarticle->litpic}}" alt="{{$brandarticle->brandname}}"></mip-img>
                            <div class="item8listcontent">
                                <div class="listtitle">{{$brandarticle->brandname}}</div>
                                <div class="listtext">
                                    <p>{{$brandarticle->brandgroup}}</p>
                                </div>
                                <div class="textleft fl">￥{{$brandarticle->brandpay}}
                                </div>
                                <div class="textright fr">
                                    {{date('Y-m-d',strtotime($brandarticle->created_at))}}
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@stop
@section('footlibs')
    <script src="https://mipcache.bdstatic.com/static/v2/mip-showmore/mip-showmore.js"></script>
@stop