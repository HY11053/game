@extends('mip.mip')
@section('title'){{$thistypeinfo->title}}-{{config('app.indexname')}}@stop
@section('keywords'){{$thistypeinfo->keywords}} @stop
@section('description'){{trim($thistypeinfo->description)}}@stop
@section('main_content')
    @include('mip.header')
    <!--menu End-->
    <div class="weizhi">
        <span><a href="/">首页</a>&nbsp;>&nbsp;{{$thistypeinfo->typename}}</span>
    </div>
    <div class="list_middle">
        <div class="text_centre">
            <ul>
                @foreach($pagelists as $pagelist)
                    <li>
                        <a href="{{$pagelist->url()}}">
                            <div class="img_show"><mip-img src="{{$pagelist->litpic}}" class="img_list" ></mip-img></div>
                            <div class="cont">
                                <p class="tit_1">{{$pagelist->title}}</p>
                                <p class="info">{{str_limit($pagelist->description,144,'')}}</p>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="page">
        {!! str_replace(['cid=&amp;','cid=/'],'',str_replace('page=','p',str_replace('?','/',preg_replace('/<a href=[\'\"]?([^\'\" ]+).*?>/','<a href="${1}/">',$pagelists->links())))) !!}
    </div>
    @include('mip.liuyan')
    <div id="item7">
        <div class="item7box clearfix">
            <i></i>
            <div class="title">项目资讯</div>
            <div class="item7content">
                @foreach($latestnews as $latestnew)
                    <div class="item7list">
                        <a href="{{$latestnew->url()}}">
                        <div class="left fl">
                            <div class="lefttitle">{{$latestnew->title}}</div>
                            <div class="text">
                                <div class="message">编辑：安心加盟网</div>
                            </div>
                        </div>
                        <div class="right fr">
                            <mip-img src="{{$latestnew->litpic}}"></mip-img>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="item8">
        <div class="item8box clearfix">
            <i></i>
            <div class="title">最新上线项目</div>
            <div class="item8content">
                @foreach($latestbrands as $index=>$latestbrand)
                    @if($index<4)
                    <div class="item8list @if(($index+1)%2==0) fl @else fr @endif">
                        <a href="/busInfo/{{$latestbrand->id}}.html">
                            <mip-img src="{{$latestbrand->litpic}}" alt="{{$latestbrand->brandname}}"></mip-img>
                            <div class="item8listcontent">
                                <div class="listtitle">{{$latestbrand->brandname}}</div>
                                <div class="listtext">
                                    <p>{{$latestbrand->brandgroup}}</p>
                                </div>
                                <div class="textleft fl">￥{{$latestbrand->brandpay}}
                                </div>
                                <div class="textright fr">
                                    {{date('m-d',strtotime($latestbrand->created_at))}}
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