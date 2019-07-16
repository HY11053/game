<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="applicable-device" content="mobile">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="Cache-Control" content="no-cache"/>
    <meta name="csrf-token" content=" {{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link rel="canonical" href="{{config('app.url')}}{{Request::getrequesturi()}}" >
    <link rel="miphtml" href="{{str_replace('http://www.','http://mip.',config('app.url'))}}{{Request::getrequesturi()}}">
    <link href="/mobile/css/common.css" rel="stylesheet" type="text/css"/>
    @yield('headlibs')
</head>
<body>
<div class="header clearfix mtop84">
    <div class="search clearfix">
        <div class="city fl">
            <a href="/"><img src="/mobile/images/nav-logo2.png" alt="安心加盟网"/></a>
        </div>
        <div class="searchCon fl">
            <form action="/search/" method="post">
                {{csrf_field()}}
            <div class="ipt-box"></div>
            <input class="ipt-placeholder" name="keywords" placeholder="输入您想找的项目" />
            <button type="submit" class="search_btn"></button>
            </form>
        </div>
        <div class="message fr">
            <b>项目分类</b>
        </div>
        <div class="d_nav">
            <ul>
                <li><a href="/" target="_self"><span>首页</span></a></li>
                <li><a href="/search/" target="_self"><span>项目大全</span></a></li>
                <li><a href="/ms/" target="_self"><span>美食</span></a></li>
                <li><a href="/fz/" target="_self"><span>服装</span></a></li>
                <li><a href="/sj/" target="_self"><span>内衣</span></a></li>
                <li><a href="/jf/" target="_self"><span>家纺</span></a></li>
                <li><a href="/jj/" target="_self"><span>家居</span></a></li>
                <li>热门行业</li>
                <li><a href="/jc/" target="_self"><span>建材</span></a></li>
                <li><a href="/zb/" target="_self"><span>珠宝</span></a></li>
                <li><a href="/jy/" target="_self"><span>教育</span></a></li>
                <li><a href="/mr/" target="_self"><span>美容</span></a></li>
                <li><a href="/sp/" target="_self"><span>饰品</span></a></li>
                <li><a href="/gx/" target="_self"><span>干洗</span></a></li>
                <li><a href="/ye/" target="_self"><span>幼儿</span></a></li>
                <li><a href="/fw/" target="_self"><span>服务</span></a></li>
                <li><a href="/qc/" target="_self"><span>汽车</span></a></li>
                <li><a href="/ls/" target="_self"><span>零售</span></a></li>
            </ul>
        </div>
    </div>
</div>
@yield('main_content')
<footer>
    <div class="link-box ">
        <a href="http://www.jjedu.com.cn/" class="foot-link">电脑版</a><span class="v-line">|</span>
        <a href="/busInfo/" class="foot-link">教育品牌</a><span class="v-line">|</span>
        <a href="/guide/" class="foot-link">加盟指南</a><span class="v-line">|</span>
        <a href="/analysis/" class="foot-link">投资分析</a><span class="v-line">|</span>
        <a href="/management/" class="foot-link">经营管理</a>
    </div>
    <p class="firm clearfix">
        <span class="foot-text mgr15">上海桥梓网络科技有限公司 	 版权所有</span>
    </p>
</footer>
<script type="text/javascript" src="/mobile/js/jquery.min.js"></script>
<script type="text/javascript" src="/mobile/js/swiper.min.js"></script>
<script type="text/javascript" src="/mobile/js/index.js"></script>
@yield('footlibs')
@if(!Jenssegers\Agent\Facades\Agent::isRobot())
    <div class="popup_mask">
        <div class="lastCeng"></div>
        <div class="CengBox">
            <img src="/mobile/images/kai.png" class="money" />
            <span class="popup_close"></span>
            <p class="top1"><span id="brand_name_UNM">立即获取</span><span><font id="fengex">|</font></span><span>加盟方案</span></p>
            <form class="modalbox" onsubmit="return false">
                @if(isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
                    <input type="hidden" name="msg_project_id" id="msg_project_id" value="{{$thisarticlebrandinfos->id}}">
                    <input type="hidden" name="msg_cid" id="msg_cid" value="{{$thisbrandtypecidinfo->id}}">
                    <input type="hidden" name="msg_fm_title"  id="msg_fm_title" value="{{$thisarticlebrandinfos->brandname}}">
                    <input type="hidden" name="msg_cla" id="msg_cla" value="{{$thisbrandtypeinfo->typename}}">
                    <input type="hidden" name="msg_combrand" id="msg_combrand" value="{{$thisarticlebrandinfos->brandname}}">
                @elseif(isset($thisarticleinfos) && !empty($thisarticleinfos->brandname))
                    <input type="hidden" name="msg_project_id"  id="msg_project_id" value="{{$thisarticleinfos->id}}">
                    <input type="hidden" name="msg_cid" id="msg_cid" value="{{$thisbrandtypecidinfo->id}}">
                    <input type="hidden" name="msg_fm_title" id="msg_fm_title" value="{{$thisarticleinfos->brandname}}">
                    <input type="hidden" name="msg_cla" id="msg_cla" value="{{$thisbrandtypeinfo->typename}}">
                    <input type="hidden" name="msg_combrand" id="msg_combrand" value="{{$thisarticleinfos->brandname}}">
                @else
                    <input type="hidden" name="msg_fm_title" id="msg_fm_title"  value="未知分类">
                    <input type="hidden" name="msg_cla"  id="msg_cla" value="未知分类">
                    <input type="hidden" name="msg_combrand"  id="msg_combrand"  value="未知分类">
                @endif
                <input type="text" maxlength="11"  id="msg_phone" placeholder="请输入手机号码">
                <input type="text" id="msg_name" placeholder="请输入您的称呼" >
                <button type="submit" id="msg_sub" class="sure">立即咨询</button>
            </form>
        </div>
    </div>
<div class="zxNavBar">
    <div class="zxnavbarcon">
        <button  role="button" tabindex="0"  id="btn-open" class="zxHdImgcons" >
            <div class="zxHdImg">
                <img src="/mobile/images/hdimg2.jpg"/>
            </div>
            <div class="zxHdName">
                <div class="zxHdName-peo">安心加盟网</div>
                <p>招商经理  <span>联系她</span></p>
            </div>
        </button>
        <div class="mfcall js_popup" >免费通话</div>
        <div class="mfcsain js_popup" >立即咨询</div>
    </div>
</div>
@endif
</body>
</html>
