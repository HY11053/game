@extends('mip.mip')
@section('title'){{ config('app.webname', '安心加盟网') }}@stop
@section('keywords'){{ config('app.keywords', '安心加盟网') }}@stop
@section('description'){{ config('app.description', '安心加盟网') }}@stop
@section('main_content')
@include('mip.header')
    <div class="smalllist clearfix">
        <div class="small-box">
            <a href="/ms/">
                <mip-img src="/mobile/images/canyin.png"></mip-img><span>餐饮美食</span>
            </a>
        </div>
        <div class="small-box">
            <a href="/jy/" class="rightbox">
                <mip-img src="/mobile/images/jiaoyu.png"></mip-img><span>教育培训</span>
            </a>
        </div>
        <div class="small-box">
            <a href="/ye/">
                <mip-img src="/mobile/images/muying.png"></mip-img><span>母婴幼儿</span>
            </a>
        </div>
        <div class="small-box rightbox">
            <a href="/jj/" class="rightbox">
                <mip-img src="/mobile/images/jiaju.png"></mip-img><span>家居用品</span>
            </a>
        </div>
        <div class="small-box rightbox">
            <a href="/sp/" class="rightbox">
                <mip-img src="/mobile/images/shipin.png"></mip-img><span>礼品饰品</span>
            </a>
        </div>
        <div class="small-box rightbox">
            <a href="/jc/" class="rightbox">
                <mip-img src="/mobile/images/jiancai.png"></mip-img><span>建材装饰</span>
            </a>
        </div>
        <div class="small-box rightbox">
            <a href="/hb/" class="rightbox">
                <mip-img src="/mobile/images/jixie.png"></mip-img><span>机械环保</span>
            </a>
        </div>
        <div class="small-box rightbox">
            <a href="/mr/" class="rightbox">
                <mip-img src="/mobile/images/meirong.png"></mip-img><span>美容养生</span>
            </a>
        </div>
    </div>
    <div class="recommend clearfix">
        <mip-img src="/mobile/images/icon-kmtt.png"></mip-img>
        <div id="moocBox">
            <ul data-id="m_n_a02" data-type="cmsadpos">
                @foreach($ctbrandnews as $ctbrandnew)
                <li><a href="{{$ctbrandnew->url()}}" data-id="{{$ctbrandnew->id}}">{{$ctbrandnew->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="clearfix">
        <div class="related-tit tabs-tit">
            <span class="xptj"></span>
            <div class="btn-one-more fr">
                <span class="ic-one-more"></span>换一批
            </div>
        </div>
        <div class="tabs-ctn" data-id="m_n_a03" data-type="cmsadpos">
            <ul class="content cy-item ">
                @foreach($cbrands as $cbrand)
                <li>
                    <a href="/busInfo/{{$cbrand->id}}.html" data-id="{{$cbrand->id}}" data-type="cmsad">
                        <mip-img src="{{$cbrand->litpic}}"></mip-img>
                        <p class="online-title">{{$cbrand->brandname}}</p>
                        <p class="online-name">{{$cbrand->brandgroup}}</p>
                        <p class="online-money"><span class="rmb">￥</span>{{$cbrand->brandpay}}</p>
                        <span class="timespan">{{date('y-m-d',strtotime($cbrand->created_at))}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
            <ul class="content cy-item ">
                @foreach($cbrand2s as $cbrand2)
                    <li>
                        <a href="/busInfo/{{$cbrand2->id}}.html" data-id="{{$cbrand2->id}}" data-type="cmsad">
                            <mip-img  src="{{$cbrand2->litpic}}"></mip-img>
                            <p class="online-title">{{$cbrand2->brandname}}</p>
                            <p class="online-name">{{$cbrand2->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$cbrand2->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($cbrand2->created_at))}}</span>
                        </a>
                    </li>
                @endforeach

            </ul>
            <ul class="content cy-item ">
                @foreach($cbrand3s as $cbrand3)
                    <li>
                        <a href="/busInfo/{{$cbrand3->id}}.html" data-id="{{$cbrand3->id}}" data-type="cmsad">
                            <mip-img  src="{{$cbrand3->litpic}}"></mip-img>
                            <p class="online-title">{{$cbrand3->brandname}}</p>
                            <p class="online-name">{{$cbrand3->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$cbrand3->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($cbrand3->created_at))}}</span>
                        </a>
                    </li>
                @endforeach

            </ul>
            <ul class="content cy-item ">
                @foreach($cbrand4s as $cbrand4)
                    <li>
                        <a href="/busInfo/{{$cbrand4->id}}.html" data-id="{{$cbrand4->id}}" data-type="cmsad">
                            <mip-img  src="{{$cbrand4->litpic}}"></mip-img>
                            <p class="online-title">{{$cbrand4->brandname}}</p>
                            <p class="online-name">{{$cbrand4->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$cbrand4->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($cbrand4->created_at))}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="clearfix">
        <div class="related-tit mgt20 tabs-tit">
            <span class="jpxm"></span>
            <div class="btn-one-more fr">
                <span class="ic-one-more fl"></span>换一批
            </div>
        </div>
        <div class="tabs-ctn" data-id="m_n_a04" data-type="cmsadpos">
            <ul class="content cy-item ">
                @foreach($latestbrands as $latestbrand)
                    <li>
                        <a href="/busInfo/{{$latestbrand->id}}.html" data-id="{{$latestbrand->id}}" data-type="cmsad">
                            <mip-img  src="{{$latestbrand->litpic}}"></mip-img>
                            <p class="online-title">{{$latestbrand->brandname}}</p>
                            <p class="online-name">{{$latestbrand->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$latestbrand->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($latestbrand->created_at))}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="content cy-item ">
                @foreach($latestbrand2s as $latestbrand2)
                    <li>
                        <a href="/busInfo/{{$latestbrand2->id}}.html" data-id="{{$latestbrand2->id}}" data-type="cmsad">
                            <mip-img  src="{{$latestbrand2->litpic}}"></mip-img>
                            <p class="online-title">{{$latestbrand2->brandname}}</p>
                            <p class="online-name">{{$latestbrand2->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$latestbrand2->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($latestbrand2->created_at))}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="content cy-item ">
                @foreach($latestbrand3s as $latestbrand3)
                    <li>
                        <a href="/busInfo/{{$latestbrand3->id}}.html" data-id="{{$latestbrand3->id}}" data-type="cmsad">
                            <mip-img  src="{{$latestbrand3->litpic}}"></mip-img>
                            <p class="online-title">{{$latestbrand3->brandname}}</p>
                            <p class="online-name">{{$latestbrand3->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$latestbrand3->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($latestbrand3->created_at))}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="content cy-item ">
                @foreach($latestbrand4s as $latestbrand4)
                    <li>
                        <a href="/busInfo/{{$latestbrand4->id}}.html" data-id="{{$latestbrand4->id}}" data-type="cmsad">
                            <mip-img  src="{{$latestbrand4->litpic}}"></mip-img>
                            <p class="online-title">{{$latestbrand4->brandname}}</p>
                            <p class="online-name">{{$latestbrand4->brandgroup}}</p>
                            <p class="online-money"><span class="rmb">￥</span>{{$latestbrand4->brandpay}}</p>
                            <span class="timespan">{{date('y-m-d',strtotime($latestbrand4->created_at))}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="news clearfix">
        <mip-vd-tabs>
            <section>
                <li class="on">加盟费用<i></i></li>
                <li>安心网说<i></i></li>
                <li>安心创业<i></i></li>
                <li>选址筹备<i></i></li>
            </section>
            <div class="news-content">
                @foreach($latestbrandnews as $latestbrandnew)
                <dl class="newslist1">
                    <dt class="dd-two">
                        <p class="newslist-tit p-two"><a href="/news/{{$latestbrandnew->id}}.html">{{$latestbrandnew->title}}</a></p>
                        <p class="newslist-text p1-two">{{$latestbrandnew->descriprion}}</p>
                    </dt>
                    <dd class="dt-two dt-two1 clearfix">
                        @php
                            $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$latestbrandnew->brandid)->value('imagepics')));
                        @endphp
                       @foreach($pics as $index=>$pic)
                           @if($index<3)
                                <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                            @endif
                        @endforeach
                    </dd>
                    <dd class="publish ">
                        <span class="fl publish-text">来源：安心加盟网</span>
                        <span class=" publish-text fl">{{$latestbrandnew->created_at}}</span>
                    </dd>
                </dl>
                @endforeach
            </div>
            <div class="news-content">
                @foreach($jmzhinannews as $jmzhinannew)
                    <dl class="newslist1">
                        <dt class="dd-two">
                            <p class="newslist-tit p-two"><a href="/news/{{$jmzhinannew->id}}.html">{{$jmzhinannew->title}}</a></p>
                            <p class="newslist-text p1-two">{{$jmzhinannew->descriprion}}</p>
                        </dt>
                        <dd class="dt-two dt-two1 clearfix">
                            @php
                                $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$jmzhinannew->brandid)->value('imagepics')));
                            @endphp
                            @foreach($pics as $index=>$pic)
                                @if($index<3)
                                    <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                                @endif
                            @endforeach
                        </dd>
                        <dd class="publish ">
                            <span class="fl publish-text">来源：安心加盟网</span>
                            <span class=" publish-text fl">{{$jmzhinannew->created_at}}</span>
                        </dd>
                    </dl>
                @endforeach
            </div>
            <div class="news-content">
                @foreach($touzinews as $touzinew)
                    <dl class="newslist1">
                        <dt class="dd-two">
                            <p class="newslist-tit p-two"><a href="/news/{{$touzinew->id}}.html">{{$touzinew->title}}</a></p>
                            <p class="newslist-text p1-two">{{$touzinew->descriprion}}</p>
                        </dt>
                        <dd class="dt-two dt-two1 clearfix">
                            @php
                                $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$touzinew->brandid)->value('imagepics')));
                            @endphp
                            @foreach($pics as $index=>$pic)
                                @if($index<3)
                                    <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                                @endif
                            @endforeach
                        </dd>
                        <dd class="publish ">
                            <span class="fl publish-text">来源：安心加盟网</span>
                            <span class=" publish-text fl">{{$touzinew->created_at}}</span>
                        </dd>
                    </dl>
                @endforeach
            </div>
            <div class="news-content">
                @foreach($jingyingnews as $jingyingnew)
                    <dl class="newslist1">
                        <dt class="dd-two">
                            <p class="newslist-tit p-two"><a href="/news/{{$jingyingnew->id}}.html">{{$jingyingnew->title}}</a></p>
                            <p class="newslist-text p1-two">{{$jingyingnew->descriprion}}</p>
                        </dt>
                        <dd class="dt-two dt-two1 clearfix">
                            @php
                                $pics=array_filter(explode(',',\App\AdminModel\Brandarticle::where('id',$jingyingnew->brandid)->value('imagepics')));
                            @endphp
                            @foreach($pics as $index=>$pic)
                                @if($index<3)
                                    <mip-img  src="{{$pic}}" class="fl @if($index <2)mgr150 @endif"></mip-img>
                                @endif
                            @endforeach
                        </dd>
                        <dd class="publish ">
                            <span class="fl publish-text">来源：安心加盟网</span>
                            <span class=" publish-text fl">{{$jingyingnew->created_at}}</span>
                        </dd>
                    </dl>
                @endforeach
            </div>
        </mip-vd-tabs>
        <div class="lxmore">
            <a href="/news/">查看更多<i></i></a>
        </div>
    </div>
    <div class="clearfix">
        <div class="related-tit bg-fff mgt20 tabs-tit">
            <b>隐私保护</b>
            <div class="btn-one-more fr">
            </div>
        </div>
        <div class="tabs-ctn">
            <ul class="content1 cy-item ">
                <li>
                        <p class="online-name1">1. 我方平台为信息发布平台，您的留言将在我方平台发布或提供给相应商家</p>
                        <p class="online-name1">2. 如不需要发布信息，请勿在本平台留言</p>
                        <p class="online-name1">3.
                            公司对与任何包含、经由、或链接、下载或从任何与本网站有关服务所获得的资讯、内容或广告，不声明或保证其内容的正确性、真实性或可靠性；并且，对于您透过本网广告、资讯或要约而展示、购买或取得的任何产品、资讯或资料，本网站亦不负品质保证的责任。您与此接受并承认信赖任何信息所产生之风险应自行承担，本网对任何使用或提供本网站信息的商业活动及其风险不承担任何责任。</p>
                        <p class="online-name1">4. 本网站若因线路及非本公司控制范围外的硬件故障或其它不可抗力，以及黑客政击、计算机病毒侵入或发而造成的个人资料泄露、丢失、被盗用或被篡改等，本网站亦不负任何责任。</p>
                        <p class="online-name1">5.
                            当本网站以链接形式推荐其他网站内容时，本网站并不对这些网站或资源的真实性、可用性、合法性负责，且不保证从这些网站获取的任何内容、产品、服务或其他材料的真实性、合法性，对于任何因使用或信赖从此类网站上获取的内容、产品、资源、服务或其他材料而造成的任何直接或间接的损失均由您自行承担，本网站均不承担任何责任。</p>
                   </li>
            </ul>
        </div>
    </div>
@stop
@section('footlibs')
    <script src="https://c.mipcdn.com/static/v1/mip-vd-tabs/mip-vd-tabs.js"></script>
@stop
