@extends('mobile.mobile')
@section('title')加盟店排行榜_连锁加盟店排行榜_加盟项目排行榜_创业项目加盟排行榜-安心加盟网@stop
@section('keywords')加盟店排行榜,连锁加盟店排行榜,加盟项目排行榜,创业项目加盟排行榜@stop
@section('description')加盟店排行榜,连锁加盟店排行榜,加盟项目排行榜,创业项目加盟排行榜@stop
@section('headlibs')
    <link href="/mobile/css/list.css" rel="stylesheet" type="text/css"/>
    <link href="/mobile/css/swiper.min.css" rel="stylesheet" type="text/css"/>
@stop
@section('main_content')
    @include('mobile.header')
    <!--menu End-->
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;>&nbsp; <a href="{{str_replace('www.','m.',config('app.url'))}}/paihang/">加盟店排行榜</a>&nbsp;></span>
    </div>
    <div class="brand_list" style="padding-top: 10px ;">
        @foreach($paihangbangbrands as $typename=>$paihangbangbrand)
            <h2>{{$typename}}</h2>
            @foreach($paihangbangbrand as $index=>$paihangbang)
            <div class="brand-detail-list-all">
                <div class="search-list-container  ">
                    <div class="title flex flex-align-center">
                  <span class="num-icon">
                        <span class="top">{{$index+1}}</span>
                    </span>
                        <div class="title-text">
                            <a href="{{str_replace('www.','m.',config('app.url'))}}/busInfo/{{$paihangbang->id}}.html" class="a "><span>{{$paihangbang->brandname}}</span></a>
                        </div>
                        <a href="{{str_replace('www.','m.',config('app.url'))}}/busInfo/{{$paihangbang->id}}.html" class="brand-list-item-jump-tmall official"  title="{{$paihangbang->brandname}}" data-bde-bind="1"><span class="active">品牌详情</span></a>
                    </div>
                    <div class="clear"></div>
                    <a href="{{str_replace('www.','m.',config('app.url'))}}/busInfo/{{$paihangbang->id}}.html">
                        <dl class="list flex flex-align-center">
                            <div class="dt flex flex-align-center">
                                <span>
                                    <img src="{{$paihangbang->litpic}}" alt="{{$paihangbang->brandname}}" class="autoWH" style="display: inline; margin: 1px 0px;" width="73" height="31">
                                </span>
                            </div>
                            <dd class="big-data">
                                <div class="data">
                                    <div>品牌名称：<span>{{$paihangbang->brandname}}</span></div>
                                    投资金额：<span>{{$paihangbang->brandtouzi}}</span>
                                </div>
                                <div class="data">
                                    <div>加盟人气：<span>{{$paihangbang->click}}</span></div>
                                    所在地区：<span>{{$paihangbang->brandaddr}}</span>
                                </div>
                            </dd>
                        </dl>
                        <div class="spe-msg">
                            {{$paihangbang->description}}
                        </div>
                    </a>
                </div>
            </div>
                @endforeach
        @endforeach
    </div>
    @include('mobile.liuyan')
@stop