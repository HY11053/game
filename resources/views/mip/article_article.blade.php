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
    <div class="weizhi"><span><a href="/">首页</a>&nbsp;> <a href="{{str_replace('www.','mip.',config('app.url'))}}/newsPage/{{$thistypeinfo->real_path}}/">{{$thistypeinfo->typename}}</a>&nbsp;>&nbsp;正文： </span> </div>
<div class="list_middle">
    <div class="a_content_brand">
        <div class="a_content">
            <h1>{{$thisarticleinfos->title}}</h1>
            <small>时间：{{$thisarticleinfos->created_at}}&nbsp;&nbsp;&nbsp;&nbsp;浏览量:{{$thisarticleinfos->click}}</small>
        </div>
    </div>
    @if(isset($thisarticlebrandinfos))
        <div class="brandinfo">
            <div id="item1">
                <div class="item1box">
                    <div class="item1boxleft fl">
                        <div class="title"><h1><a href="/busInfo/{{$thisarticlebrandinfos->id}}.html">{{str_replace('加盟','',$thisarticlebrandinfos->brandname)}}加盟</a></h1></div>
                        <div class="text">{{$thisarticlebrandinfos->brandgroup}}</div>
                        <div class="time"><span>{{date('Y-m-d',strtotime($thisarticlebrandinfos->created_at))}}</span></div>
                    </div>
                    <div class="item1boxmiddle fl">
                        <div class="top">{{$investment_types[$thisarticlebrandinfos->tzid]}}</div>
                        <li class="tl">所属行业：<span>{{$thisarticlebrandinfos->arctype->typename}}</span></li>
                        <li class="tl">经营范围：<span>{{$thisarticlebrandinfos->brandmap}}</span></li>
                        <li class="tl">店铺面积：<span>㎡</span></li>
                    </div>
                </div>
            </div>
            <div id="focus" class="focus">
                <div class="swiper-container">
                    <mip-carousel autoplay  defer="5000" layout="responsive" width="730"  height="304">
                        @foreach(array_filter(explode(',',$thisarticlebrandinfos->imagepics)) as $pic)
                            <li class="swiper-slide" ><mip-img src="{{$pic}}"></mip-img></li>
                        @endforeach
                    </mip-carousel>
                </div>
            </div>
            <div id="item3">
                <div class="item3box">
                    <ul class="title clearfix">
                        <li class="tl">品牌地址：<span>{{$thisarticlebrandinfos->country}}</span></li>
                        <li class="tc">门店数目：<span>{{$thisarticlebrandinfos->brandnum}}</span></li>
                        <li class="tr">{{$thisarticlebrandinfos->click}}人关注</li>
                    </ul>
                    <div class="top clearfix">
                        <div class="topleft fl">
                            <i></i>
                            <p>注：{{$thisarticlebrandinfos->brandname}}投资金额可能包含了加盟费、保证金、品牌使用费等其他相关费用，因此投资总额根据实际情况计算，相关费用解释请参考页面
                            </p>
                        </div>
                        <div class="topright fr">
                            <div class="item3boxbtn btn1 js_popup">
                                <a href="/busInfo/{{$thisarticlebrandinfos->id}}.html#msg" >立即咨询</a>
                            </div>
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
            <hr>
        </div>
    @endif
     <div class="a_content">
         {!! $content !!}
    </div>
    @include('mip.liuyan')
    @if(isset($latestbrandnews))
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
                                    <div class="message">来源：安心加盟网</div>
                                    <div class="time">{{date('Y-m-d',strtotime($latestbrandnew->created_at))}}</div>
                                </div>
                            </div>
                            <div class="right fr">
                                <mip-img src="{{$latestbrandnew->litpic}}"></mip-img>
                            </div>
                        </a>
                    </div>
                    @endif
            @endforeach
            </div>
        </div>
    </div>
    @endif

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
</div>
@stop