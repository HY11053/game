<div id="msg">
<div id="item5" class="clearfix">
    <div class="item5box">
        <i></i>
        <div class="title">在线留言</div>
        <mip-form url="{{str_replace('www.','mip.',config('app.url'))}}/mipbtphonecomplate/" method="post" clear="true">
        <div class="inputbox">
            <input type="text" name="username" id="guestname" value="" placeholder="您的真实姓名"/>
            <span>姓名：</span>
            <div class="tip">*姓名不可以为空</div>
        </div>
        <div class="inputbox">
            <input name="host" value="{{str_replace('www.','mip.',config('app.url'))}}{{Request::getrequesturi()}}" type="hidden">
            <input type="tel" name="iphone" id="phonenum" value="" placeholder="电话是与您联系的重要方式"/>
            <span>手机：</span>
            <div class="tip">*不是完整的11位手机号或者正确的手机号前七位</div>
        </div>
        <div class="inputbox">
            <input type="text" name="content" id="note" value="" placeholder="我对此项目很感兴趣，请联系我。"/>
            <span>留言：</span>
            <div class="tip">*留言不可以为空</div>
        </div>
            @if(isset($thisarticlebrandinfos) && !empty($thisarticlebrandinfos))
                <input type="hidden" name="project_id" id="project_id" value="{{$thisarticlebrandinfos->id}}">
                <input type="hidden" name="cid" id="cid" value="{{$thisbrandtypecidinfo->id}}">
                <input type="hidden" name="title"  id="fm_title" value="{{$thisarticlebrandinfos->brandname}}">
                <input type="hidden" name="cla" id="cla" value="{{$thisbrandtypeinfo->typename}}">
                <input type="hidden" name="combrand" id="combrand" value="{{$thisarticlebrandinfos->brandname}}">
            @elseif(isset($thisarticleinfos) && !empty($thisarticleinfos->brandname))
                <input type="hidden" name="project_id"  id="project_id" value="{{$thisarticleinfos->id}}">
                <input type="hidden" name="cid" id="cid" value="{{$thisbrandtypecidinfo->id}}">
                <input type="hidden" name="title" id="fm_title" value="{{$thisarticleinfos->brandname}}">
                <input type="hidden" name="cla" id="cla" value="{{$thisbrandtypeinfo->typename}}">
                <input type="hidden" name="combrand" id="combrand" value="{{$thisarticleinfos->brandname}}">
            @else
                <input type="hidden" name="title" id="fm_title"  value="未知分类">
                <input type="hidden" name="cla"  id="cla" value="未知分类">
                <input type="hidden" name="combrand"  id="combrand"  value="未知分类">
            @endif
        <button type="submit" class="submitmessagebtn">提交留言</button>
        </mip-form>
        <div class="lysm">
            本站为资讯展示网站，本网页信息来源互联网，本平台不保证信息的真实性，请用户自行与商家联系核对真实性。此次留言将面向网站内所有页面项目产生留言。
        </div>
    </div>
</div>
</div>