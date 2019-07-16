<div id="item1">
    <div class="item1box">
        <div class="item1boxleft fl">
            <div class="title"><h1>{{str_replace('加盟','',$thisarticleinfos->brandname)}}加盟</h1></div>
            <div class="text">{{$thisarticleinfos->brandgroup}}</div>
            <div class="time"><span>{{date('Y-m-d',strtotime($thisarticleinfos->created_at))}}</span></div>
        </div>
        <div class="item1boxmiddle fl">
            <div class="top">{{$investment_types[$thisarticleinfos->tzid]}}</div>
            <li class="tl">所属行业：<span>{{$thisarticleinfos->arctype->typename}}</span></li>
            <li class="tl">经营范围：<span>{{$thisarticleinfos->brandmap}}</span></li>
            <li class="tl">店铺面积：<span>㎡</span></li>
        </div>
    </div>
</div>
<div id="focus" class="focus">
    <div class="swiper-container">
        <mip-carousel autoplay  defer="5000" layout="responsive" width="730"  height="304">
            @foreach(array_filter(explode(',',$thisarticleinfos->imagepics)) as $pic)
                    <li class="swiper-slide" ><mip-img src="{{$pic}}"></mip-img></li>
            @endforeach
        </mip-carousel>
    </div>
</div>