<style mip-custom>
    a, body, dd, div, dl, dt, form, h1, h2, h3, h4, input, li, ol, p, textarea, ul {margin: 0;padding: 0}
    input {border: 0 none;}
    li, ol, ul {list-style: none}
    i, em {font-style: normal;}
    a {text-decoration: none;    color: #000}
    input, textarea, select, a:focus { outline: none; -webkit-appearance: none;}
    img {    border: none;    /*display: block*/}
    .clearfix:after {display: block;  clear: both; content: "";  visibility: hidden; height: 0}
    body {    font-family: "Microsoft YaHei", "STHeiti", "Heiti SC", "SimHei", "SimSun", Arial, sans-serif;    background: #f3f5f7;    /*font-size: .12rem;*/}
    body ,html{    background: #f3f5f7;    width: 100%;}
    @media screen and (min-width: 320px) {
        html {        font-size: 50px;
        }
        .search-list-container {width:5.9rem;}
    }
    @media screen and (min-width: 360px) {
        html {        font-size: 50px;
        }
    }

    @media screen and (min-width: 400px) {
        html {
            font-size: 58px;
        }
    }

    @media screen and (min-width: 440px) {
        html {
            font-size: 60px;
        }
    }

    @media screen and (min-width: 480px) {
        html {
            font-size: 65px;
        }
    }

    @media screen and (min-width: 640px) {
        html {
            font-size: 100px;
        }
    }
    @media screen and (min-width: 750px) {
        html {
            font-size: 100px;
        }
    }
    .fl {float: left}
    .fr {float: right}
    .li-fl li {float: left}
    .dn { display: none;}
    .db{ display: block;}
    .bg-fff{ background: #fff;}
    .mgt20{ margin-top:0.2rem;}
    .mgt23{ margin-top:0.23rem;}
    .h76{ height:.76rem;}
    .w-88{ width: 88%;}
    .bg-fff{ background: #fff!important;}
    .mgt18{ margin-top:0.18rem;}
    .mgr15{ margin-right:0.15rem;}
    /*header-start*/
    header ,.search-header{ line-height: .88rem;    /*display: flex;*/    background: #fff;}
    .bdb{border-bottom: 1px solid #e9e9e9;}
    .l-box, .r-box {    width: 25%;    height: .88rem;}
    .ic-search, .ic-menu, .back {    width: .42rem;    height: .42rem;}
    .page-title {    font-size: .32rem;    color: #FD3335;    text-align: center;    width: 50%;}
    .stop{ overflow: hidden;    width: 100%;    height: 100%;}
    /*footer start*/
    footer {    /*height: 1.4rem;*/    background: #f3f5f7;    margin-top: 0.2rem;    font-size: 0.2rem;    padding-bottom: 1.4rem;}
    .link-box {    text-align: center;    padding: .14rem 0 0;}
    .foot-link {    color: #999;}
    .v-line {    color: #999;    margin: 0 .1rem;}
    footer .foot-text {    /*font-size: 0.16rem;*/    font-size: 7px;    color: #919191;}
    .firm {margin-top:15px;margin-bottom:-20px;    /*width: 200%;*/    /*margin-left: -50%;*/    /*transform: scale(0.5);*/    /*-ms-transform:scale(0.5);*/    /*-moz-transform:scale(0.5);*/    /*-webkit-transform:scale(0.5);*/    /*-o-transform:scale(0.5);*/    text-align: center;    padding-bottom:.05rem;}
    /*footer end*/
    /*fixed*/
    .foot-fixed {    width: 100%;    height: 1.06rem;    /*background: #da2424;*/    background: #fff;    position: fixed;    bottom: 0;    left: 0;    z-index: 99;    text-align: center;    font-size: .18rem;    color: #fff;    box-shadow: 0 -0.01rem 0.1rem #d4d7d9;}
    .foot-fixed a {    color: #999;}
    .foot-fixed a.on {    color: #dc0011;}
    .foot-fixed .ft-ic {    display: block;    width: .68rem;    height: .65rem;    margin: .04rem auto 0;    transform: scale(.75);}
    .mgb10 {    margin-bottom: .1rem;}
    .w-33 {    width: 33%;}
    /*fixed end*/

    /*首页 顶部*/
    .mtop84{}
    .lunbo {    position: relative;    width: 100%;}
    .swiper-container{    width: 100%;    height: 3.2rem;}
    .swiper-container  img {    width: 100%;    height: 3.5rem;}
    .search {    width: 100%;   top: 0;    z-index: 2;    /*background: transparent;*/    height: 0.84rem;    background: #dc0011;}
    .search .city,.search .message {    width: 16%;    height: 0.54rem;    margin-top: 0.15rem;}
    .search .city a img {    display: block;    width: 0.54rem;  max-width: 0.54rem; min-width: .54rem;  height: 0.54rem;    margin-left: 0.3rem;}
    .search .city p {    color: #fff;    margin-top: -0.05rem;}
    .search .searchCon {    width: 68%;    float: left;    position: relative;    margin-top: 0.14rem;}
    .ipt-placeholder{    font-size: 0.2rem;    position: absolute;    left: .24rem;    top: 0;    color: #999;    height: 0.54rem;    line-height: 0.54rem; border: none;}
    .search .searchCon .ipt-box {    width: 100%;    height: 0.54rem;    border-radius: 0.27rem;    /*padding-left: 0.58rem;*/  display: block;  padding: 0px;  text-indent:0.58rem;    position: absolute;    z-index: 0;    color: #fff;    background: #fff;    /*opacity: 0.5;*/    font-size: 0.24rem;    border: none}
    .search .searchCon button {  background: url("/mobile/images/nav-sousuo-gray.png") no-repeat;    position: absolute;   right: 0.15rem;  border:none;   z-index: 1;     width: 0.40rem;     height: 0.40rem;     top: 0.05rem; }
    .message a img {    display: block;    margin-right: 0.25rem;    width: 0.54rem;    height: 0.54rem;}
    .searchDiv {    width: 100%;    box-sizing: border-box;    margin-top: 0.24rem;}
    .searchDiv .posiSear {    position: relative;}
    .searchDiv input {    width: 100%;    height: 0.7rem;    border-radius: 0.08rem;    border: 0.02rem solid #d6d7dc;    padding-left: 0.7rem;    color: #979797;    box-sizing: border-box;}
    .searchDiv .posiSear > img {    position: absolute;    width: 0.44rem;    left: 0.12rem;    top: 0.12rem;}
    .message b {    text-indent: -9999px;    display: block;    margin-left: 0.4rem;    width: 0.54rem;    height: 0.54rem;    background: url(/mobile/images/down_icon.png) 3px -55px no-repeat;    background-size: 32px auto;}
    .d_nav{display:none; width:100%; box-sizing: border-box; overflow:hidden; background:#fff; position:absolute; right:0; top:44px;box-shadow:0px 2px 2px rgba(0,0,0,0.22); z-index:1000;}
    .d_nav li{ width:33.33%; padding:3% 0; float:left;border-right:1px solid #eee; border-bottom:1px solid #eee; box-sizing:border-box; text-align:center; font-size: .2rem}
    .d_nav li:hover,.d_nav li:active{ background:#F6F6F6;}
    .d_nav a{display:block;  color:#666; }
    .weizhi{ background:url(/mobile/images/m_header.jpg) no-repeat left 10px center #f1f1f1; height:.6rem; line-height:.6rem; font-size: .25rem;}
    .weizhi span{ display:block; height:38px; padding:0 10px 0 32px;}
    /*********************相关文档******************************/
    #item7{
        margin-top: 0.2rem;
    }
    #item7 .item7box{
        padding: 0.1rem 0.3rem;
    }
    #item7 .item7box .title{
        font-size: 0.28rem;
        color: #282828;
        line-height: 0.28rem;
        font-weight: bold;
    }
    #item7 .item7box i{
        float: left;
        width: 0.3rem;
        height: 0.3rem;
        display: block;
        background: url(/mobile/images/title-xmzx.png) no-repeat center;
        background-size: 0.3rem;
        margin-right: 0.14rem;
    }

    #item7 .item7box .item7content{
        margin-top: 0.1rem;
    }
    #item7 .item7box .item7content .item7list{
        width: 100%;
        height: 1.6rem;
        border-bottom: 1px solid #e1e5e8;
    }
    #item7 .item7box .item7content .item7list .left{
        width: 3.8rem;
        margin-top: 0.3rem;
    }
    #item7 .item7box .item7content .item7list .left .lefttitle{
        font-size: 0.26rem;
        line-height: 0.3rem;
        color: #282828;
    }
    #item7 .item7box .item7content .item7list .left .title{
        margin-top: 0.3rem;
    }
    #item7 .item7box .item7content .item7list .left .text{
        margin-top: 0.22rem;
    }
    #item7 .item7box .item7content .item7list .left .text .message{
        float: left;
        font-size: 0.2rem;
        line-height: 0.2rem;
        color: #999;
        width: 2.9rem;
        /*overflow: hidden;*/
    }
    #item7 .item7box .item7content .item7list .left .text .time{
        float: right;
        line-height: 0.2rem;
        font-size: 0.2rem;
        color: #999;
    }
    #item7 .item7box .item7content .item7list .right{
        /*margin-left: 0.66rem;*/
        height: 100%;
    }
    #item7 .item7box .item7content .item7list .right1{
        margin-top: -0.3rem;
    }
    #item7 .item7box .item7content .item7list .right img{
        width: 1.6rem;
        height: 1rem;
        border-radius: 0.1rem;
        margin: 0.3rem 0;
    }

    #item8 .item8box{
        padding: 0.4rem 0.3rem;
    }
    #item8 .item8box .title{
        font-size: 0.28rem;
        color: #282828;
        line-height: 0.28rem;
        font-weight: bold;
    }
    #item8 .item8box i{
        float: left;
        width: 0.3rem;
        height: 0.3rem;
        display: block;
        background: url(/mobile/images/title-cnxh.png) no-repeat center;
        background-size: 0.3rem;
        margin-right: 0.14rem;
    }
    #item8 .item8box .item8content{
        margin-top: 0.4rem;
    }
    #item8 .item8box .item8content .item8list{
        width: 48%;
        height: 2.6rem;
        border-radius: 0.2rem;
        background-color: #f7f7f7;
        -webkit-box-shadow: #ccc 0px 2px 2px;
        -moz-box-shadow: #ccc 0px 2px 2px;
        box-shadow: #ccc 0px 2px 2px;
        font-size: .12rem;
    }
    #item8 .item8box .item8content .item8list:nth-child(3),
    #item8 .item8box .item8content .item8list:nth-child(4){
        margin-top: 0.3rem;
    }
    #item8 .item8box .item8content .item8list img{
        width: 100%;
        height: 1.4rem;
        border-radius: 0.2rem 0.2rem 0 0;
        background-color: #CCCCCC;
    }
    #item8 .item8box .item8content .item8list .listtitle{
        font-size: 0.26rem;
        color: #292929;
        line-height: 0.26rem;
        white-space: nowrap;
        overflow: hidden;
    }
    #item8 .item8box .item8content .item8list .listtext{
        font-size: 0.18rem;
        line-height: 0.22rem;
        color:#999;
        margin-top: 0.08rem;
        /*width: 3rem;*/
        overflow: hidden;
        white-space:nowrap;
        text-overflow: ellipsis;
    }
    #item8 .item8box .item8content .item8list .textleft{
        font-size: 0.24rem;
        color: #e50012;
        line-height: 0.24rem;
        margin-top: 0.18rem;
    }
    #item8 .item8box .item8content .item8list .textright{
        font-size: 0.2rem;
        line-height: 0.2rem;
        margin-top: 0.18rem;
        color: #999;
    }
    #item8 .item8box .item8content .item8list .item8listcontent{
        padding: 0.15rem;   font-size: .12rem;
    }
    #item5{
        margin-top: 0.2rem;
    }
    #item5 .item5box{
        box-sizing: border-box;
        padding: .3rem 0.3rem;
    }
    #item5 .item5box .lysm{
        font-size: 0.2rem;
        line-height: 0.32rem;
        color: #999999;
        padding-top: 0.2rem;
    }
    #item5 .item5box .title{
        font-size: 0.28rem;
        color: #282828;
        line-height: 0.28rem;
        font-weight: bold;
    }
    #item5 .item5box i{
        float: left;
        width: 0.3rem;
        height: 0.3rem;
        display: block;
        background: url(/mobile/images/title-zxly.png) no-repeat center;
        background-size: 0.3rem;
        margin-right: 0.14rem;
    }
    #item5 .item5box input{
        width: 100%;
        height: 0.6rem;
        border-radius: 0.08rem;
        border: 1px solid #C0C6CC;
        padding-left: 1.1rem;
        position: absolute;
        top:0;
        left:0 ;
        box-sizing: border-box;
    }
    #item5 .item5box .verification_form input{
        padding-left: 1.4rem;
    }
    #item5 .item5box .verification_form .verification_form_submit{
        position: absolute;
        height: 0.6rem;
        line-height: 0.6rem;
        border-radius: 0.08rem;
        border: 1px solid #C0C6CC;
        padding-left: 1.1rem;
        top: 0;
        right: 0;
        padding: 0 0.4rem;
        margin-top:0;
        left: auto;
        box-sizing: border-box;
        border-left: 0;
        background: #FCEBEC;
        color: #DC0011;
        font-size: 0.24rem;
    }
    #item5 .item5box .inputbox{
        margin-top: 0.4rem;
        position: relative;
        height: 0.6rem;
        box-sizing: border-box;
        display: block;

    }
    #item5 .item5box .inputbox .tip{
        display: none;
        color: #F14E41;
    }
    #item5 .item5box .inputbox span{
        position: absolute;
        top: 50%;
        margin-top: -0.16rem;
        left: 0.3rem;
        font-size: 0.24rem;
        color: #666;
    }
    #item5 .item5box input:focus{
        border: 1px solid #dc0011;
    }
    #item5 .item5box .agreebox{
        width: 0.22rem;
        height: 0.22rem;
        border: 1px solid #4494E4;
        float: left;
        margin: 0.05rem 0.1rem 0.05rem 0;
        border-radius: 0.02rem;
    }
    #item5 .item5box .agreebox.on{
        width: 0.21rem;
        height: 0.21rem;
        background: url(/mobile/images/duigou.png) no-repeat center;
        background-size: 0.21rem;
        border-radius: 0.02rem;
    }
    #item5 .item5box .agreetext{
        margin-top: 0.4rem;
        font-size: 0.22rem;
        color: #666;
    }
    #item5 .item5box form{font-size: .12rem;}
    #item5 .item5box .submitmessagebtn{
        margin-top: 0.4rem;
        width: 100%;
        height: 0.6rem;
        background-color: #DC0011;
        border-radius: 0.1rem;
        color: #fff;
        text-align: center;
        line-height: 0.6rem;
        font-size: 0.24rem;
        border: none;
    }
    #item5 .item5box .submitmessagebtn:active{
        background-color: #F2182A;
    }
    #item1,#item2,#item3,#item4,#item5,#item6,#item7,#item8,#item9{
        background-color:#fff ;
    }
    .link-box{padding-top:30px}
    .top{font-weight: bold;}
    .topleft{font-weight: normal;}
    #brand_name_UNM{color: #e44b46;}
    #brand_name_UNM2{color: #ccc;}
    #brand_name_UNM3{margin:0 3px;}
    #title_two_UNM{font-family:'微软雅黑';}
    #pin1{width:100%}
    #pin1in{width:66%}
    #pin2{float:right;}
    #pin2in{color:#737a7d;float:right;}
    #pin2in2{color:#737a7d;float:right;}
    #pin2in3{float:right;}
    .pin3{border:none;outline: none;}
    #pin4{height: 62px;}
    #pin4 textarea{ padding:8px 0 10px; width:82%;height: 58px;margin-top: 2px;border: none;resize:none;outline: none;font-size: 14px;line-height: 20px;}
    .lightbox{height: 450px;}
    .zxNavBarcon {height: 1rem; width: 100%;    }
    .zxNavBarcon .zxHdImgcons { background: #fff;   width: 55.9999%;height: 1rem;  float: left;  -webkit-appearance:none;  border:0;    }
    .zxNavBarcon .zxHdImgcons .zxHdImg { width: .8rem;  height: .8rem; border-radius: 50%;  border: 1px solid #dcdcdc; float: left;    }
    .zxNavBarcon .zxHdImgcons .zxHdImg img {width: .6rem; height: .6rem;border-radius: 50%; }
    .zxHdName {  float: left;}
    .zxNavBarcon .zxHdImgcons .zxHdName-peo { text-align: left; color: #000;        padding-left: 0.13333333rem;        color: red;        font-size: .13rem;        font-weight: bold;    }
    .zxNavBarcon .zxHdImgcons p {  text-align: left;font-size: 0.26rem;line-height: 0.40rem;float: left;color: #999;margin-top: 0.03rem;    }
    .zxNavBarcon .zxHdImgcons p span {display: block;text-align: center;border: 1px solid #d80000;height: 0.40rem;line-height: 0.40rem;width: .8rem;color: #d80000;float: right;margin-left: 0.1rem;font-size: .2rem;    }
    .zxNavBarcon .mfcall, .zxNavBarcon .mfcsain {width: 22%;height: 100%;font-size: 0.24rem;color: #fff;text-align: center;float: left;background: #D80000;-webkit-appearance: none;border: 0;    }
    .zxNavBarcon .mfcsain {background: #33bd57;    }
    .popup_mask{background-color:rgba(0,0,0,0.5); width:100%; height:100%; }
    .popup{ background:#fff; width:300px; margin:0 auto; position:relative; top:50%; margin-top:-135px; border-radius:5px;}
    .popup .hd{ height:38px; line-height:38px; background:#D71318; color:#fff; position:relative; border-radius:5px 5px 0 0;}
    .popup .hd .tit{ font-size:16px; padding-left:16px;}
    .popup .hd em{ font-size:12px;}
    .popup .hd .popup_close{ width:20px; height:20px; overflow:hidden; text-indent:-9999px; background:url(/mobile/images/popup_close.png) no-repeat; background-size:contain; position:absolute; top:9px; right:10px;}
    .popup .bd{ width:270px; margin:0 auto; padding:15px 0 }
    .popup .bd li{ padding-bottom:8px; overflow:hidden; zoom:1; position:relative;}
    .popup .bd .label{ position:absolute; left:8px; top:8px;}
    .popup .bd .input_bk{ border:1px solid #D6D6D6; padding-left:47px; width:100%; height:35px; line-height:35px; border-radius:3px; box-sizing:border-box;}
    .popup .bd .textarea_bk{ border:1px solid #D6D6D6; width:100%; height:60px; line-height:24px; padding:5px 5px 5px 47px; border-radius:3px; box-sizing:border-box;}
    .popup .bd .btn{ height:35px; line-height:35px; text-align:center; width:100%; background:#D71318; border-radius:3px; color:#fff; border:none;}
    .popup .bd .btn:hover,.popup .bd .btn:active{ background:#B01F24;}
    .lastCeng{width: 74%;margin-left: 13%;background:#fff;height: 260px;margin-top: 29%;opacity: 0.2;border-radius: 16px;z-index:20000;}
    .cengcon{position: relative;}
    .CengBox{width: 70%;margin-left: 15%;background:#fff;margin-top: 30%;height: 247px;border-radius: 12px;z-index:20001; position: relative;}
    .CengBox .money{display: block;position: absolute;top: -4px;left: -5px;width: 65px;height: 65px;}
    .CengBox .top1{height: 60px;line-height: 78px;text-align: center;color: #333333;font-size: 18px;	}
    .CengBox .top2{height: 13px;line-height: 13px;color: #666666;text-align: center;font-size: 12px;}
    .CengBox input{line-height: 40px; border:solid 1px  #c0c5cb; border-radius: 3px; width: 86%; margin-left: 6%; margin-bottom: 10px; padding-left: 40px; font-size: 12px !important; box-sizing: border-box;}
    .CengBox input::placeholder{line-height: 40px; font-size:12px !important; }
    .CengBox input:nth-child(1){background: url(/mobile/images/tell_03.png) no-repeat 10px center;background-size: 26px 18px;}
    .CengBox input:nth-child(2){background: url(/mobile/images/useName_01.png) no-repeat 10px center;background-size: 26px 18px;}
    .CengBox .sure{width: 88%;  border:none;height: 40px;  margin-left:6%; background: #e44b46;text-align: center;line-height: 40px;  color: #fff;font-size: 14px;border-radius:4px;}
    .popup_close{position: absolute;width:20px; height:20px; overflow:hidden; text-indent:-9999px; background:url(/mobile/images/popup_close.png) no-repeat; background-size:contain;  top:9px; right:10px;}
    .sexNa{background: none!important;}
    .CengBox p{font-family:'微软雅黑';}
    #fengex{margin:0 3px; color: #ccc;}
    #mobile_UNM{border:none;outline: none;}
    #brand_name_UNM{color: #e44b46;}
    .lightbox{height: 100%}

    /**********************************************普通文档**************************************************/
    /*普通文章内容页*/
    .list_middle { overflow: hidden; background: #fff; margin-bottom: 15px; margin-top: 10px; }
    .a_content_brand { width: 100%;  min-height: 1px; }
    .a_content { padding: 10px 10px; font-size:.35rem; word-wrap: break-word;    word-break: break-all; color: #383835;    text-align: justify; line-height: 1.6;     font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;   }
    .a_content h1{ font-size:18px; text-align: center; font-weight: bold; }
    .a_content h2,.a_content h3,.a_content h4,.a_content h5{font-size: .35rem; line-height: .95rem;}
    .a_content small { display: block; margin-bottom: 10px; padding-bottom: 10px; line-height: 20px; text-align: center; font-size: 12px; color: #999; border-bottom: 1px solid #ddd;  margin-top: 5px;}
    .a_content p,.a_content div {    word-wrap: break-word;    word-break: break-all; color: #383835;    text-align: justify; line-height: 1.6;     font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;    margin-top: 15px;     width: 100%;     font-size: .35rem;    margin: 17px 0;}
    .a_content img{border-radius: 5px;}
    .list_middle hr{padding: 0px; margin: 0px; line-height: 0px; }
    .a_content table {    border-collapse: collapse;    border-spacing: 0;    border-top: 1px solid rgb(230, 230, 230);    width: 100%;}
    .a_content tbody {    display: table-row-group;    vertical-align: middle;    border-color: inherit;}
    .a_content td{    padding-top: 5px;    padding-bottom: 5px;    text-align: center;    color: rgb(85, 85, 85);    border: 1px solid rgb(230, 230, 230);    text-indent: 15px;    height: 20px;    overflow: hidden;    width: 266px;}
    .a_content th {    padding-top: 5px;    padding-bottom: 5px;      font-size: .3rem;  color: rgb(85, 85, 85);    border: 1px solid rgb(230, 230, 230);    text-indent: 15px;    height: 20px;    overflow: hidden;    width: 130px;    background: rgb(249, 249, 249);}
    .a_content h2,.a_content h3,.a_content h4,.a_content h5{white-space: nowrap;    text-overflow: ellipsis;  overflow: hidden;  font-size: .35rem; line-height: .9rem;position: relative;
        color: #ff552e !important;   font-weight: bold;    padding: 0 3px 0 0;    padding-left: 10px;    border-bottom: 2px solid #EDEDED;    height: .7rem;
        margin-bottom: 10px;}
    .a_content h2:after,.a_content h3:after,.a_content h4:after,.a_content h5:after{    position: absolute;    left: 0px;    top: .27rem;    width: .06rem;    height: .35rem;    background-color: #ff552e;    content: '';}
    .a_content strong{color: #F5910D; font-weight: bold; font-size: .32rem;}
    /*************************文章品牌***************************************/
    #item1{padding: 0.24rem 0.3rem;}
    .content #item1{padding: 0;}
    #item1 .item1box{height: 1.2rem;box-sizing: border-box;}
    #item1 .item1box .item1boxleft{height: auto; display: inline-block; width: 50%;}
    #item1 .item1box .item1boxleft .title{    font-size: 0.3rem;    color: #282828;    font-weight: bold;    line-height: 0.32rem;    width: 2.8rem;    height: 0.44rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;}
    #item1 .item1box .item1boxleft .title h1{font-size: .32rem; display: inline-block; line-height: .32rem}
    #item1 .item1box .item1boxleft .text{    margin-top: 0.12rem;    font-size: 0.2rem;    color: #666;    width: 2.8rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;}
    #item1 .item1box .item1boxleft .time{    margin-top: 0.1rem;    font-size: 0.2rem;    color: #666;    line-height: 0.2rem;}
    #item1 .item1box .item1boxmiddle{ border-left:1px solid #e1e5e8; height: 1.5rem; padding-left: 3px;   width: 45%; overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;}
    #item1 .item1box .item1boxmiddle .tl{overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap; font-size: .2rem; color: #666;}
    #item1 .item1box .item1boxmiddle .top{    color: #dc0011;    font-size: 0.28rem;    line-height: 0.32rem;}
    #item1 .item1box .item1boxmiddle .bottom{    width: 1.34rem;    margin-top: 0.2rem;    height: 0.34rem;    line-height: 0.34rem;    /*border-radius: 0.08rem;    background-color: #f5910d;*/    cursor: pointer;    color: #fff;    font-size: 0.16rem;    /*text-align: center;*/    padding-left: 0.2rem;    background: url(/mobile/images/arrow03.png) no-repeat center;    background-size: 1.64rem 0.34rem;}
    #item1 .item1box .item1boxmiddle .bottom:active{ background-color:#f7a619;}
    #item1 .item1box .item1boxmiddle .bottom span{    width: 0.12rem;    height: 0.12rem;}
    #item1 .item1box .item1boxright{    height: 1rem;   color: #666;  cursor: pointer;   width: 2.2rem; }
    #item1 .item1box .item1boxright li{  overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap; }
    #item1 .item1box .item1boxright img{    width: 0.58rem;    height: 0.52rem;    margin: 0 auto; font-size:.2rem;}
    #item1 .item1box .item1boxright .text{    font-size: 0.2rem;    color: #666;    margin-top: 0.12rem;}
    #item1,#item2,#item3{    background-color:#fff ;}
    .fr{float: right;}
    .fl{float: left;}
    .item1boxmiddle .top{font-weight: bold;}
    #item3{    padding: 0 0.3rem;    /*height: 2.8rem;*/    padding-bottom: 0.25rem;}
    .content #item3{padding: 0 ; margin-bottom: 10px;}
    #item3 .item3box{}
    #item3 .item3box .title{    padding-top: 0.22rem;}
    #item3 .item3box .title li{    font-size: 0.22rem;    color: #666;    float: left;    width: 33%;    overflow: hidden;}
    #item3 .item3box .title li span{    color: #282828;}
    #item3 .item3box .top{    margin-top: 0.3rem;}
    #item3 .item3box .top a{    text-decoration: none;    color: #fff;}
    #item3 .item3box .top .topleft,#item3 .item3box .bottom .bottomleft{    width: 4.2rem;}
    #item3 .item3box .top .topleft p{    font-size: 0.18rem;    color: #666;    line-height: 0.26rem;    margin-bottom: 0px; text-indent: inherit;}
    #item3 .item3box .top .topleft i{    margin: 0 0.08rem;    float: left;    display: block;    width: 0.2rem;    height: 0.22rem;    background: url(/mobile/images/care.png) no-repeat center;    background-size:0.2rem 0.2rem ;}
    #item3 .item3box .top .topright,#item3 .item3box .bottom .bottomright{    width: 1.5rem;}
    .item3boxbtn{    width: 1.5rem;    height: 0.6rem;    border-radius: 0.12rem;    text-align: center;    line-height: 0.6rem;    color: #fff;    cursor: pointer;}
    .item3boxbtn.btn1{    margin-top: 0.15rem;    background-color: #F5910D; font-size: 12px;}
    .item3boxbtn.btn1:active{    background-color: #F7A619;}
    .item3boxbtn.btn2{    background-color: #DC0011;}
    .item3boxbtn.btn2:active{    background-color: #F2182a;}
    #item3 .item3box .bottom{}
    #item3 .item3box .bottom .bottomleft{    display: inline-block;    width: 4rem;    height: 0.44rem;    background: url(/mobile/images/phone01.png) no-repeat center;    background-size: 4rem 0.44rem;    margin-top: 0.1rem;    /*font-size: 0.28rem;    color: #DC0011;    line-height: 0.3rem;*/}
    /*#item3 .item3box .bottom .bottomleft i{
        background: url(..//mobile/images/201801/phone.png) no-repeat center;
        background-size:0.3rem ;
        width: 0.3rem ;
        height: 0.3rem;
        float: left;
        margin-right: 0.1rem;
    }*/
    #item3 .item3box .bottom .bottomright{font-size: 12px;}
    #item4{    margin-top: 0.2rem;    background-color: #fff;}
    #item4{    margin-top: 0.2rem;    background-color: #fff;}
    #item4 .item4box{    padding: 0 0.3rem;}
    #item4 .item4box ul.on{
        /*position: fixed;
        top: 0;
        left: 0;
        background-color:#fff ;
        width: 100%;
        -webkit-box-shadow: #666 0px 0px 10px;
        -moz-box-shadow: #666 0px 0px 10px;
        box-shadow: #666 0px 0px 10px;
        z-index: 10;
        padding: 0 0.3rem;*/
    }
    #item4 .item4box .ulbox {    width: 100%;    overflow-x:auto;    overflow-y: hidden;    /*overflow: hidden;*/    height: 0.8rem;    /*position: relative;*/}
    #item4 .item4box .ulbox.on{    position: fixed;    top: 0;    left: 0;    background-color:#fff ;    width: 100%;    -webkit-box-shadow: #ccc 0px 0px 10px;    -moz-box-shadow: #ccc 0px 0px 10px;    box-shadow: #ccc 0px 0px 10px;    z-index: 10;    padding: 0 0.3rem;    opacity: 0.95;}
    #item4 .item4box ul{    width: 10rem;    /*width: 10rem;*/    /*position: absolute;*/    /*top: 0;*/    height: 0.8rem;}
    #item4 .item4box ul li{    float: left;    padding: 0 0.2rem;    height: 0.8rem;    line-height: 0.8rem;    text-align: center;    color: #666;    font-size: 0.26rem;    position: relative;}
    #item4 .item4box ul li.on{    color: #DC0011;}
    @keyframes line{
        from{
            transform: scale(1,1);
            -ms-transform:scale(1,1);
            -moz-transform: scale(1,1);
            -webkit-transform: scale(1,1);
            -moz-transform: scale(1,1);
        }
        50%{
            transform: scale(2,1);
            -ms-transform:scale(2,1);
            -moz-transform: scale(2,1);
            -webkit-transform: scale(2,1);
            -moz-transform: scale(2,1);
        }
        to{
            transform: scale(1,1);
            -ms-transform:scale(1,1);
            -moz-transform: scale(1,1);
            -webkit-transform: scale(1,1);
            -moz-transform: scale(1,1);
        }
    }
    @-webkit-keyframes line{
        from{
            transform: scale(1,1);
            -ms-transform:scale(1,1);
            -moz-transform: scale(1,1);
            -webkit-transform: scale(1,1);
            -moz-transform: scale(1,1);
        }
        50%{
            transform: scale(2,1);
            -ms-transform:scale(2,1);
            -moz-transform: scale(2,1);
            -webkit-transform: scale(2,1);
            -moz-transform: scale(2,1);
        }
        to{
            transform: scale(1,1);
            -ms-transform:scale(1,1);
            -moz-transform: scale(1,1);
            -webkit-transform: scale(1,1);
            -moz-transform: scale(1,1);
        }
    }
    #item4 .item4box ul li.on .line{
        width: 0.3rem;
        height: 0.04rem;
        border-bottom:0.04rem solid #DC0011;
        position: absolute;
        bottom: 0.1rem;
        left: 50%;
        margin-left: -0.15rem;
        animation: line 0.5s linear;
        animation-play-state:running ;
        -webkit-animation: line 0.5s linear;
        -webkit-animation-play-state:running ;
    }

    #item4 .item4box .item4content{}
    #item4 .item4box .item4content .content{
        width: 100%;
        font-size: 0.22rem;
        color: #666;
        line-height: 0.36rem;
        /*margin-top: 0.24rem;*/
        overflow: hidden;
        /*position: relative;*/
    }
    #item4 .item4box .item4content .content .zhuanzai{
        font-size: .2rem;
        color: #999999;
        background: #f2f2f2;
        border-radius: 0.1rem;
        padding: 0.2rem;
        margin-bottom: .2rem;
    }
    #item4 .item4box .item4content .content .zhuanzai i{
        display: block;
        float: left;
        width: 0.18rem;
        height: 0.16rem;
        margin-top: 0.1rem;
        margin-left: 0rem;
        background: url(/mobile/images/gantanhao.png) no-repeat center;
        background-size: 0.2rem 0.12rem;
        margin-right: 0.1rem;
    }
    #item4 .item4box .item4content .content.on{
        height: 6.6rem;
    }
    #item4 .item4box .item4content .contentlist{
        /*position: absolute;*/
    }

    #item4 .item4box .item4content .contentlist .title{
        font-size: 0.26rem;
        color: #282828;
        margin-top: 0.3rem;
    }
    #item4 .item4box .item4content .title i{
        display: block;
        width: 0.12rem;
        height: 0.12rem ;
        margin: 0.12rem 0.1rem;
        float: left;
    }
    #item4 .item4box .item4content .contentlist .contentbox{
        margin-top: 0.24rem;
    }
    #item4 .item4box .item4content .contentlist .contentbox p{
        font-size: 0.22rem;
        color: #666;
        text-indent: 0.44rem;
    }
    #item4 .item4box .item4content .contentlist .contentbox img{
        width: 100%;
        height: 3rem;
        margin: 0.2rem 0;
    }
    #item4 .item4box  .item4content img{
        width: 100%;
        margin: 0.2rem 0;
        border-radius: 5px;
    }

    #item4 .item4box .item4content .display,.item4content .hidden{
        text-align: center;
        width: 100%;
        margin: 0 auto;
        height: 1rem;
        border: none;
        background: #fff;
        font-size: 16px;
        padding: 0px;
    }
    #item4 .item4box .item4content  .display span,.item4content  .hidden span{
        display: inline-block;    width: 0.2rem;    height: 0.12rem;    margin-top: 0.45rem;    margin-left: 0.2rem;    background: url(/mobile/images/Arrow-open.png) no-repeat center;    background-size: 0.2rem 0.12rem;
    }
    #item4 .item4box .item4content  .display i{
        display: inherit;
        width: 0.2rem;
        height: 0.12rem;
        margin-top: 0.45rem;
        margin-left: 0.2rem;
        background: url('/mobile/images/Arrow-open.png') no-repeat center;
        background-size:0.2rem 0.12rem;
    }
    #item4 .item4box .item4content  .hidden{display: none;}
    #item4 .item4box .item4content  .hidden i{
        display: block;
        float: left;
        width: 0.2rem;
        height: 0.12rem;
        margin-top: 0.45rem;
        margin-left: 0.2rem;
        background: url('/mobile/images/Arrow-close.png') no-repeat center;
        background-size:0.2rem 0.12rem;
    }
    .jm_xq_con, .jm_xq_con p,.jm_xq_con div{    word-wrap: break-word;    word-break: break-all; color: #383835;    text-align: justify; line-height: 1.6;     font-family: sans-serif;    margin-top: 15px;     width: 100%;     font-size: .35rem;    margin: 17px 0;}
    .jm_xq_con p strong,.jm_xq_con div strong{font-weight: normal;}
    .jm_xq_con h1,.jm_xq_con h2,.jm_xq_con h3,.jm_xq_con h4,.jm_xq_con h5{font-weight: bold;  word-wrap: break-word;    word-break: break-all; color: #383835;    text-align: justify; line-height: 1.6;     font-family: sans-serif;    margin-top: 15px;     width: 100%;     font-size: .35rem;    margin: 17px 0;}
    .jm_xq_con, .jm_xq_con p,.jm_xq_con div{    word-wrap: break-word;    word-break: break-all; color: #383835;    text-align: justify; line-height: 1.6;     font-family: sans-serif;    margin-top: 15px;     width: 100%;     font-size: .35rem;    margin: 17px 0;}
    .jm_xq_con p strong,.jm_xq_con div strong{font-weight: normal;}
    .jm_xq_con h1,.jm_xq_con h2,.jm_xq_con h3,.jm_xq_con h4,.jm_xq_con h5{font-weight: bold;  word-wrap: break-word;    word-break: break-all; color: #383835;    text-align: justify; line-height: 1.6;     font-family: sans-serif;    margin-top: 15px;     width: 100%;     font-size: .3rem;    margin: 17px 0;}
    .jm_xq_con h1,.jm_xq_con h2,.jm_xq_con h3,.jm_xq_con h4,.jm_xq_con h5{ white-space: nowrap;    text-overflow: ellipsis;  overflow: hidden;  line-height: .9rem;position: relative;color: #ff552e !important;   font-weight: bold;    padding: 0 3px 0 0;    padding-left: 10px;    border-bottom: 2px solid #EDEDED;    height: .7rem;    margin-bottom: 10px; }
    .jm_xq_con h1:after,.jm_xq_con h2:after,.jm_xq_con h3:after,.jm_xq_con h4:after,.jm_xq_con h5:after{   position: absolute;    left: 0px;    top: .27rem;    width: .06rem;    height: .35rem;    background-color: #ff552e;    content: '';}
    .jm_xq_con strong{color: #F5910D; font-weight: bold; font-size: .32rem;}
    .title h2{margin-bottom: .3rem; padding-top: .3rem}
    .jm_xq_con table {    border-collapse: collapse;    border-spacing: 0;    border-top: 1px solid rgb(230, 230, 230);    width: 100%;}
    .jm_xq_con tbody {    display: table-row-group;    vertical-align: middle;    border-color: inherit;}
    .jm_xq_con td{    padding-top: 5px;    padding-bottom: 5px;    text-align: center;    color: rgb(85, 85, 85);    border: 1px solid rgb(230, 230, 230);    text-indent: 15px;    height: 20px;    overflow: hidden;    width: 266px;}
    .jm_xq_con  th {  font-size: .25rem;   padding-top: 5px;    padding-bottom: 5px;    color: rgb(85, 85, 85);    border: 1px solid rgb(230, 230, 230);    text-indent: 15px;    height: 20px;    overflow: hidden;    width: 130px;    background: rgb(249, 249, 249);}
    /************列表**************/
    .list_middle { overflow: hidden; background: #fff; margin-bottom: 15px; margin-top: 10px; }
    .text_centre { overflow: hidden; margin-bottom: 15px; }
    .text_centre li { border-bottom: 1px solid #EEE; padding: 15px 15px 15px 15px; overflow: hidden; zoom: 1; }
    .text_centre li:hover,.text_centre li:active{background:#F6F6F6;}
    .text_centre a{ display:block; overflow:hidden; zoom:1;}
    .text_centre .img_show { float: left; margin-right: 15px; width: 100px; height: 70px; border: 1px solid #EEE; }
    .text_centre .img_show img { width: 100px; height:70px; }
    .text_centre .cont { margin-bottom: 5px; }
    .text_centre .cont .tit_1 { font-size: .25rem; padding-bottom: 2px; font-weight: bold; line-height: .30rem; color: #666666; }
    .text_centre .cont .info { color: #999; padding-bottom: 2px; line-height: .35rem; margin: 0px; font-size: .25rem}
    .text_centre .cont .pice { color: #999; padding-bottom: 2px; }
    .text_centre .cont .pice em { color: #d71318; font-size: 12px; }
    /*品牌列表*/
    .brand_list{ background:#fff; margin-top:10px;}

    .telbox {
        padding: 0.1rem 0.2rem;
        background: #FFF;
        border-bottom: 1px solid #DDD;
        border-top: 1px solid #DDD;
        margin-bottom: 10px;
    }
    .telbox dl {
        margin: 0 auto;
    }
    .telbox dt {
        font-size: 0.3rem;
        font-weight: normal;
        text-align: center;
        line-height: 0.6rem;
        color: #D90D26;
    }
    .telbox dd {
        font-size: 0.3rem;
        font-weight: normal;
        text-align: left;
        line-height: 0.6rem;
    }
    .telbox dd .telinput1{
        width: 30%;
        display: inline-block;
        background: #FFF;
        border: 2px solid #ffa32e;
        padding: 0px;
        height: 0.6rem;
        line-height: 0.6rem;
        font-size: 0.25rem;
        text-align: left;
        text-indent: 5px;
        overflow: hidden;
        vertical-align: middle;
        -moz-border-radius: 0px;
        -webkit-border-radius: 0px;
        border-radius: 0px;
        float: left;
        margin-right: 3px;
    }
    .telbox dd .telinput {
        width: 38%;
        display: inline-block;
        background: #FFF;
        border: 2px solid #ffa32e;
        padding: 0px;
        height: 0.6rem;
        line-height: 0.6rem;
        font-size: 0.25rem;
        text-align: left;
        text-indent: 5px;
        overflow: hidden;
        vertical-align: middle;
        -moz-border-radius: 0px;
        -webkit-border-radius: 0px;
        border-radius: 0px;
        float: left;
    }
    .telbox dd .telbut {
        width: 24%;
        display: inline-block;
        background: #ffa32e;
        border: 2px solid #ffa32e;
        height: 0.67rem;
        line-height: 0.6rem;
        color: #FFF;
        font-size: 0.3rem;
        text-align: center;
        overflow: hidden;
        vertical-align: middle;
    }
    .search-list-container {
        width:6.9rem;
        margin: 0.3rem auto;
        overflow: hidden;
        background-color: #fff;
        border-radius: 0.1rem;
        box-shadow: 0 2px 4px #ccc;
        padding-bottom: 0.3rem;
        border-top: 0px;
        margin-bottom: 0.117rem;
        font-family: "Microsoft Yahei", "Helvetica", "黑体", "Hiragino Sans GB", sans-serif;
    }
    .flex {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
    .flex-align-center {
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .brand-detail-list-all .title {
        width: 100%;
        height: 0.9rem;
        border-bottom: 1px #F5F5F5 solid;
    }
    .brand-detail-list-all .title .num-icon {
        width: 0.84rem;
    }

    .brand-detail-list-all .title .num-icon span.top {
        width: 0.5rem;
        height: 0.5rem;
        display: inline-block;
        float: left;
        margin: 0 0 0 0.2rem;
        background: url(/mobile/images/web-bg1.png) repeat-y;
        border-radius: 0.27rem;
        text-align: center;
        line-height: 0.5rem;
        background-size: 100%;
        color: #fff;
        font-size: 0.24rem;
    }
    .brand-detail-list-all .title i {
        font-family: "Microsoft Yahei", "Helvetica", "黑体", "Hiragino Sans GB", sans-serif;
        font-size: 0.3520rem;
    }
    .brand-detail-list-all .title .num-icon i.top1 {
        background-position: -0.22rem -0.22rem;
    }
    .brand-detail-list-all .title .title-text {
        font-size: 0.3rem;
        color: #333;
        width: 4rem;
    }
    .brand-detail-list-all .title .title-text a {
        word-break: break-all;
        font-size: 0.3rem;
        color: #333;
        font-family: "Microsoft Yahei", "Helvetica", "黑体", "Hiragino Sans GB", sans-serif;
    }
    .brand-detail-list-all .title .active {
        border: 1px #f74645 solid;
        border-radius: 0.1rem;
        width: 1.6rem;
        text-align: center;
        line-height: 0.54rem;
        height: 0.5rem;
        color: #f74645;
        font-size: 0.26rem;
        display: inline-block;
        background: none !important;
    }
    .brand-detail-list-all .clear {
        clear: both;
        overflow: hidden;
        height: 0;
        width: 100%;
    }
    .flex-align-center {
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
    }
    .flex-align-center a{line-height: 0rem;padding-right: .1rem;}
    .search-list-container dl {
        padding-top: 0.3rem;
    }
    .search-list-container .dt {
        width: 1.7rem;
        height: 0.8rem;
        text-align: center;
        border: 1px #e8e8e8 solid;
        margin-left: 0.24rem;
    }
    .search-list-container .dt span {
        width: 1.46rem;
        height: 0.66rem;
        margin: 0 auto;
        line-height: 0rem;
    }
    .search-list-container .dt img {
        width: 100%;
        max-height: .66rem;
    }
    .search-list-container dd.big-data {
        width: 4.6rem;
        white-space: normal;
        line-height: 0.4rem;
        word-break: break-all;
        margin-left: 0.2rem;
    }
    .search-list-container dd.big-data .data {
        color: #666666;
        font-size: 0.24rem;
        width: 4.6rem;
        overflow: hidden;
        height: 0.4rem;
    }
    .search-list-container dd.big-data .data span {
        color: #666;
        font-size: 0.24rem;
    }
    .search-list-container:first-of-type {
        border-top: 0px;
        margin-bottom: 0.117rem;
    }
    .search-list-container dd.big-data .data div {
        width: 1.8rem;
        display: inline-block;
        float: left;
        margin-right: 0.1rem;
        height: 0.4rem;
        overflow: hidden;
    }
    .search-list-container .spe-msg {
        color: #999;
        font-size: 0.23rem;
        line-height: 0.4rem;
        width: 6.4rem;
        margin: 0.24rem auto;
    }

    .bt_bg{
        background: #dadada;
        background: -webkit-gradient(linear, 0 0, 0 40%, from(#dadada), to(#f1f1f1));
        background: -moz-linear-gradient(top, #dadada, #f1f1f1 40%);
        background: linear-gradient(top, #dadada, #f1f1f1 40%);
    }
    .bt_bg1{
        background: #c61006;
        background: -webkit-gradient(linear, 0 0, 0 40%, from(#bc0d03), to(#c61006));
        background: -moz-linear-gradient(top, #bc0d03, #c61006 40%);
        background: linear-gradient(top, #bc0d03, #c61006 40%);
    }
    @media screen and (min-width: 320px) {
        .search-list-container {width:5.9rem;}
        .search-list-container .spe-msg{width: 5.6rem;}
    }
    @media screen and (min-width: 370px) {
        .search-list-container {width:6.9rem;}
        .search-list-container .spe-msg{width: 6.4rem;}
    }
    .autoWH{display: inline; margin: 1px 0px; width:73px; height: 31px;}
    /*最新品牌*/
    .index_item{background:#fff;}
    .index_item .bd{overflow:hidden; zoom:1; padding:10px 10px 0 10px; font-size: 12px;}
    .index_item .bd li{ border-bottom:1px solid #EEE; padding:10px 0; overflow:hidden; zoom:1;}
    .index_item .bd li:hover,.index_item .bd li:active{ background:#F6F6F6;}
    .index_item .bd li a{display:block; overflow:hidden; zoom:1;}
    .index_item .bd .img_show{float:left; margin-right:10px;}
    .index_item .bd .img_show img{ width:100px; height:70px;}
    .index_item .bd .tit{font-size:14px; font-weight:bold; padding-bottom:3px;}
    .index_item .bd .desc{color:#999;padding-bottom:3px; }
    .index_item .bd .price{color:#999;}
    .index_item .bd .price em{ color:#D71318; font-size:14px; font-weight:bold; }
    .index_item .list{ padding-bottom:5px;}
    .index_item .list li{ border-bottom:1px dotted #D5D5D5; height:36px; line-height:36px; padding:0 10px; font-size: 12px;}
    .index_item .list li:last-child{ border-bottom:none;}
    .index_item .list li:hover,.index_item .list li:active{background-color:#F6F6F6;}
    .index_item .list li a{ display:block; overflow:hidden; zoom:1;}
    .index_item .list i{ display:inline-block; width:16px; height:16px; line-height:16px; text-align:center; background:#CBCECD; color:#fff; border-radius:2px; margin-right:5px;}
    .index_item .list li:nth-child(1) i,.index_item .list li:nth-child(2) i ,.index_item .list li:nth-child(3) i{ background:#D71318;}
    .index_item .list span{ padding-right:10px;}
    .index_item .list em{ color:#999;}
    /*品牌列表*/
    .brand_list{ background:#fff; margin-top:10px; padding-top: 10px ;}
    .brand_list ul{ padding-bottom:20px;}
    .brand_list ul li{ border-bottom:1px solid #EEE; padding:15px; overflow:hidden; zoom:1;}
    .brand_list ul li:hover,.brand_list ul li:active{background:#F6F6F6;}
    .brand_list .img_show{float:left; margin-right:10px;}
    .brand_list .img_show img{ width:100px; height:70px; border:1px solid #EEE;}
    .brand_list .tit{font-size:14px; font-weight:bold;}
    .brand_list .info{color:#999;height:18px; line-height:18px; overflow:hidden;text-overflow:ellipsis;white-space: nowrap; }
    .brand_list .price{color:#999;}
    .brand_list .price em{ color:#D71318; font-size:14px; font-weight:bold; }
    .brand_list .desc{ height:18px; line-height:18px; overflow:hidden; color:#999;padding-bottom:3px; text-overflow:ellipsis;white-space: nowrap;}
    .brand_list .btn{}
    .brand_list .btn a{ display:inline-block; width:62px; height:22px; line-height:22px; background:#5CB85C; color:#fff; text-align:center; margin-right:5px; border-radius:3px; }
    .brand_list .btn a.btn_intro{ background:#FF4D4D; }
    .common_tit{ height:36px; line-height:36px; overflow:hidden; zoom:1; border-bottom:2px solid #F2F2F2; }
    .common_tit a.tit{ float:left; background:url(/mobile/images/dot1.gif) no-repeat 10px 11px; font-size:16px; font-weight:bold;  color:#333; padding-left:20px;}
    .common_tit span.tit{ float:left; background:url(/mobile/images/dot1.gif) no-repeat 10px 11px; font-size:16px; font-weight:bold;  color:#333; padding-left:20px;}
    .common_tit  a.more{float:right; font-size:12px; padding-right:10px; color:#666;}
    .common_tit  a.more:hover{color:#E73727;}
    /*分页*/
    .page{padding: 10px 0 10px 0; color:#666666;text-align:center;*zoom:1; background:#fff;     line-height: .3rem;}
    .page:after{content:".";display:block;height:0;clear:both;visibility:hidden;line-height:0;font-size:0;}
    .page .pagination{ display:inline-block; *display:inline; *zoom:1; font-size: .1rem;}
    .brand_list .page ul.pagination li{display:inline-block;*display:inline; *zoom:1; padding: 0;}
    .page li{display:inline-block;*display:inline; *zoom:1;}
    .page li a,.page li span{display:inline-block; vertical-align:middle; font-size: .15rem;  padding: .05rem .1rem;   border:1px solid #ddd;background-color:#f5f5f5; *display:inline; *zoom:1;}
    .page li a{ background:#fff;}
    .page li a:hover{text-decoration:none; background-color:#D71318; border-color:#D71318; color:#fff;}
    .page .active span{background-color:#D71318; border-color:#D71318; color:#fff;}
    .page .disabled span{ border:none; background:#fff; padding:0; font-family:"宋体"}
    .page .goto{ display:inline-block; *display:inline; *zoom:1;}
    /************************************产品文档**************************************/
    .body_tit .tit { background: url(/mobile/images/dot1.gif)  no-repeat left bottom ;    font-size:16px;  line-height: 14px;  font-weight: bold;    color: #333;    padding-left: 10px;}
    .body_tit h2{ background: url(/mobile/images/dot1.gif)  no-repeat left bottom ;    font-size:16px;  line-height: 14px;   font-weight: bold;    color: #333;    padding-left: 10px;}
    .zhaodao{font-size: .3rem;    background: #fff;    padding: .12rem;}
    /*热门列表*/
    .hostlist ul li {    width: 20%;    float: left;    font-size: 0.2rem;    color: #222;    text-align: center;    overflow: hidden;    padding: 0.16rem 0rem;}
    .hotlibox img {    width: 0.68rem;    height: 0.68rem;    margin: 0 auto;}
    .hotlist-text {    font-size: 0.24rem;    /*color: #808080;*/    margin-top: 0.04rem;}
    .block-box {    overflow: hidden;}
    .none-box {    overflow: hidden;    display: none;}
    /*小列表*/
    .smalllist {    background: #FFFFFF;    overflow: hidden;    position: relative;}
    .small-box {    width: 25%;    float: left;    height: 100%;}
    .small-box img {    width: 0.8rem;    height: 0.8rem;    position: relative;    top: 0.3rem;    left: 25%;    min-width: 0.8rem;    max-width: 0.8rem;    display: inline-block;}
    .small-box a {    display: block;    font-size: 0.28rem;    color: #808080;    height: 100%;}
    .small-box a span {    font-size: 0.2rem;    color: #808080;    display: block;    text-align: center;    margin-top: 0.4rem;}
    .small-box .rightbox {    border-right: 0 none;}
    .hr1 {    width: 42%;    border-top: 2px solid #dedede;    position: absolute;    top: 0.76rem;    left: 0.3rem;}
    .hr2 {    width: 42%;    border-top: 2px solid #dedede;    position: absolute;    top: 0.76rem;    right: 0.3rem;}
    /*加盟网推荐*/
    .recommend p {    font-size: 0.3rem;    line-height: .90rem;    height: .90rem;    font-weight: 700;    float: left;}
    .recommend span {    color: #ff7f0e;    font-size: 14px;    line-height: .90rem;    height: .90rem;    display: block;    float: left;    width: 3.5rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;}
    .recommend span a {    color: #ff7f0e;    font-size: 14px;    line-height: .90rem;}
    #moocBox {    float: left;    margin-top: .30rem;    margin-left: 1.30rem;    height: .30rem;    line-height: .30rem;    overflow: hidden;    width: 3.5rem;    position: relative;}
    #moocBox ul li {    color: #ff7f0e;    font-size: 14px;    line-height: .30rem;    height: .30rem;    display: block;    float: left;    width: 3.5rem;    text-overflow: ellipsis;    white-space: nowrap;    overflow: hidden;}
    #moocBox ul li a {    color: #ff7f0e;    font-size: 0.28rem;    line-height: .30rem;}
    .nonetext {    display: none;}
    /*分类*/
    .category{    font-size: .26rem;    color: #666;    background: #F2F2F2;    overflow: hidden;}
    .category-pre{    /*background: #F2F2F2;*/    /*overflow: hidden;*/}
    .cy{    width: 19%;    height: .52rem;    line-height: .52rem;    margin:.12rem 2.4%;    border-radius: .26rem;    text-align: center;    background: #F2F2F2;}
    /*.cy a{*//*color: #666;*//*}*/
    .btn-more{    width: 12%;    height: .76rem;    /*background: red;*/}
    .active{    background: #ff7113!important;    color: #fff;}
    .btn-more-icon{    width: .37rem;    height: .37rem;   margin: .2rem .25rem 0 0.1rem;}
    .related-tit {    line-height: 0.8rem;    color: #282828;    font-size:.28rem;    padding:0 .3rem;    overflow: hidden;}
    .related-tit > span{    display: block;    width: 1.1rem;    height: 0.27rem;    float: left;    margin-top: 0.2rem;}
    .related-tit > span.xptj{    background: url(/mobile/images/xinpintuijian.png) no-repeat center;    background-size: 100%;}
    .related-tit > span.jpxm{    background: url(/mobile/images/jinpinxiangmu.png) no-repeat center;    background-size: 100%;}
    .btn-one-more{    color: #999;    font-size:.24rem;}
    .ic-one-more{    width: .25rem;    height: .25rem;    margin-top: 0.2rem;    margin-left: 0.1rem;    background: url(/mobile/images/icon-huanyipi.png) no-repeat center;    background-size: 100%;    float: right;}
    .lookmore-box,.lookmore{    display: block;    height: 0.74rem;    width: 100%;}
    .lookmore {    background: #fff;}
    .newslist1 {    overflow: hidden;    background: #FFFFFF;    border-bottom: 1px solid #DEDEDE;    padding: 0.3rem 0;}
    .bd0{    border:0;}
    /*.newslist1:last-of-type{*/    /*border:0;*//*}*/
    .h120{    height: 1.2rem;}
    .newslist1 dt img{    width: 1.6rem;    height: 1.0rem;    border-radius: 0.1rem;}
    .mgr150{    margin-right: .15rem; display: inline-block; width: auto;}
    .newslist1 .dt-two1 .mip-layout-container{width: auto; display: inline-block;}
    .newslist1 dd .p-two{    font-size: 0.28rem;    color: #333333;    height: 0.3rem;    line-height: 0.28rem;    width: 5.8rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;    font-weight: 700;}
    .newslist1 dd .p1-two{    font-size: 0.24rem;    color: #666666;    height: 0.26rem;    line-height: 0.24rem;    width: 5.0rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;    margin-top: 0.1rem;}
    .newslist1 .span-two1{    margin-top: 0.1rem;    display: inline-block;}
    .newslist1 .dd-two{    float: none;}
    .newslist1 .dt-two img{    width: 1.8rem;    height: 1.12rem;    border-radius: 0.1rem; display: inline-block; max-width: 1.8rem; min-width: 1.8rem;}
    .newslist1 .dt-two{    float: left;    margin-top: 0.1rem;    margin-left: 0.1rem;}
    .newslist1 .dt-two1{    float: left;    margin-top: 0.1rem;    margin-left: 0rem;}
    .newslist-tit{    font-size: 0.26rem;    color: #282828;    /*height: 0.6rem;*/    line-height: 0.34rem;    width: 4rem;    padding-top:0.05rem;    float: left;    overflow: hidden;    text-overflow: ellipsis;    display: -webkit-box;    -webkit-line-clamp: 2;    -webkit-box-orient: vertical;}
    .newslist-text{    font-size: 0.24rem;    color: #666666;    height: 0.34rem;    line-height: 0.34rem;    width: 3.8rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;    padding-top:0.05rem;}
    .mgt15{    margin-top:0.15rem;}
    .opa0{    opacity:0;    filter: Alpha(Opacity=0);    height: 0.2rem!important;}
    .newslist-bj{    font-size: 0.2rem;    color: #999999;    height: 0.34rem;    line-height: 0.34rem;    width: 1.6rem;    text-overflow: ellipsis;    white-space: nowrap;    margin-top: 0.18rem;    display: block;    float: left;}
    .newslist-time{    font-size: 0.2rem;    color: #999999;    height: 0.34rem;    line-height: 0.34rem;    width: 1.8rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;    display: block;    float: left;    text-align: left;    margin-left: 0.1rem;}
    .newslist1 .publish{    font-size: 0.22rem;    color: #999999;    /*height: 0.32rem;*/    /*line-height: 0.32rem;*/    overflow: hidden;    width: 100%;    padding-top: 0.18rem;}
    .newslist1 .publish-text{    font-size: 0.2rem;    color: #999999;    height: 0.24rem;    line-height: 0.22rem;    padding-top:0;    width: 2.6rem;}
    .newslist1 .p-two {    font-size: 0.26rem;    color: #292929;    line-height: 0.34rem;    width: 100%;}
    .newslist1 .p1-two{    width: 5.8rem;}
    .lxmore{    width: 100%;    height: 0.8rem;    line-height: 0.8rem;    font-size: 0.24rem;    text-align: center;    display: block;    position: relative;    margin-top: 0.2rem;}
    .lxmore a{    color: #ff9300;    display: block;}
    .lxmore i{    display: block;    width: 0.09rem;    height: 0.16rem;    background: url(/mobile/images/arrow-orange.png) no-repeat center;    background-size: 100%;    position: absolute;    top: 0.3rem;    right: 39%;}
    /*猜你喜欢*/
    .pdt10{    padding-top:10px;}
    .pdl-3{    padding-left:3%;}
    .pdr-3{    padding-right:3%;}
    .w-46{    width: 46%;}
    .bdb{    border-bottom: 1px solid #f2f2f2;}
    .ratio-box{    display: block;    width: 100%;    padding-top:50%;}
    .img-ctn{    position: relative;}
    .pro-img{    width: 100%;    height: 100%;}
    .pro-name{    height: .38rem;    width: 2.92rem;    overflow: hidden;    line-height: .38rem;    padding-top:.1rem;    font-size:.26rem;    color: #333;}
    .money{    font-size:.2rem;    color: #666;    height: .32rem;    line-height: .32rem;    padding-bottom: .12rem;}
    .money-num{    font-size:.26rem;    color: #ef1c1c;}
    .abs{    position: absolute;    top: 0;    left: 0;}
    .num{    font-size:.2rem;    padding-left:.02rem;    color: #fff;    transform:scale(0.8)}
    .triangle{    width: .39rem;    height: .39rem;      background-size: 8.05rem 5.01rem;}
    .next-page{    width: .2rem;    height: .32rem;     background-size: 8.05rem 5.01rem;    margin: .2rem;}
    /*一横条图文*/
    .title-box{    height: .68rem;    line-height: .68rem;    font-size:.24rem;    color: #ff7112;    text-indent:.12rem;    border-bottom:1px solid #F2F2F2;    border-top:1px solid #F2F2F2;    background: #fff;}
    .title-box a{    color: #ff7112;}
    .tabs-ctn .content{    display: none;    padding: 0 0.3rem;    margin-left: -0.24rem;    margin-bottom: -0.2rem;    overflow: hidden;}
    .news-content{    display: none;    padding: 0 0.3rem;    margin-bottom: -0.2rem;    overflow: hidden;}
    .tabs-ctn .content:nth-of-type(1),.news-content:nth-of-type(1){    display: block;}
    .content li{  background: #FFFFFF;    border-bottom: 1px solid #DEDEDE;    position: relative;    float: left;    width: 46%;    height: 2.75rem;    margin-left: 0.24rem;    margin-bottom: 0.2rem;    border-radius: 0.1rem;    box-shadow: 0 0.05rem 0.1rem rgba(0,0,0,0.1);}
    .content li img{    width: 100%;    height: 1.4rem;    display: block;    border-top-left-radius: 0.1rem;    border-top-right-radius: 0.1rem;}
    .content li p{    overflow: hidden;    padding: 0 0.08rem;}
    #pcontent li{height: auto; width: 100%; float: none;}
    .online-title{    color: #292929;    font-size: 0.26rem;    line-height: 0.3rem;    height: 0.3rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;    margin-top: 0.15rem;}
    .online-name{    color: #999;    font-size: 0.18rem;    line-height: 0.30rem;    height: 0.30rem;    margin-top: 0.08rem;    overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap;}
    .rmb{    /*position: absolute;*/    top: 0.02rem;    left: -0.14rem;    font-size: 0.22rem;    line-height: 0.26rem;}
    .online-money{    color: #e50012;    font-size: 0.24rem;    line-height: 0.30rem;    margin-top: 0.12rem;    height: 0.30rem;    float: left;}
    .timespan{    height: 0.2rem;    line-height: 0.2rem;    float: right;    display: block;    margin-top: 0.18rem;    font-size: 0.2rem;    margin-right: 0.13rem;    color:#999;}
    /*新闻资讯  选项卡*/
    .news {    margin-top: 0.2rem;    background: #FFFFFF;}
    .favor-header-bar {    /*height: 0.7rem;*/    background: #FFFFFF;    line-height: 0.7rem;    /*margin-bottom: 0.02rem;*/    padding: 0 0.3rem;    overflow: hidden;    margin-top: 0.4rem;}
    .favor-header-bar ul li {    width: 25%;    height: 0.65rem;    float: left;    text-align: center;}
    .favor-header-bar ul li {    color: #666;    font-size: 0.26rem;    text-align: center;    position: relative;}
    .favor-header-bar ul li i{    display: block;    position: absolute;    bottom: 0;    left: 0.53rem;    width: 0.3rem;    height: 0.04rem;    background: #fff;    border-radius: 0.02rem;}
    .favor-header-bar ul li.on {    color: #dc0011;}
    .favor-header-bar ul li.on i{    background: #dc0011;}
    .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {    bottom: 0px;    left: 0;    width: 100%;    height: 30px;    line-height: 8px;}
    .content1 li {    background: #FFFFFF;    padding: 0 0.3rem;    position: relative;    overflow: hidden;}
    .online-name1{	color: #666666;    font-size: 0.22rem;    line-height: 0.30rem;    margin-bottom: 0.3rem;    overflow: hidden;}
    .adbigbox {    margin-top: 0.1rem;    padding: 0.14rem;    background: #FFFFFF;}
    .adboxtext {    background: #FFFFFF;    overflow: hidden;    /* border: 1px solid #E1E1E1; */}
    .adboxtext ul li {    /* padding: 0 0.04rem; */    /* padding-left: 6px; */    height: 0.4rem;    overflow: hidden;    border: 1px solid #E1E1E1;}
    .adboxtext ul li a {    display: block;    height: 0.4rem;    line-height: 0.4rem;    overflow: hidden;    width: 1.48rem;    font-size: 0.16rem;    box-sizing: border-box;    color: #999;    text-align: center;}
    .mgtop40{    margin-top: 40px;}
    .toggleshow{	height: 0.6rem;	line-height: 0.6rem;	background: #fff;	font-size: 0.26rem;	text-align: center;	color: #888;}
    .toggleclassdown{	max-height: 3.04rem;	overflow: hidden;}
    .recommend {    height: 0.88rem;    background: #FFFFFF;    padding-left: 0.2rem;}
    .recommend img {    display: block;    width: 1.4rem;  max-width: 1.4rem; min-width: 1.4rem;   height: 0.24rem;    float: left;    margin-right: 0.3rem;    margin-top: 0.32rem;}
    #moocBox {    float: left;    height: 40px;    line-height: 40px;    overflow: hidden;    width: 4rem;    margin: 0;    margin-top: 2px;}
    #moocBox ul li {    color: #4d4d4d;    font-size: 14px;    line-height: 0.88rem;    height: 40px;    display: block;    float: left;    width: 4rem;    text-overflow: ellipsis;    white-space: nowrap;    overflow: hidden;}
    #moocBox ul li a {    color: #4d4d4d;    font-size: 16px;    line-height: 40px;}
    .btn-one-more{    color: #999;    font-size:.24rem;}
    .ic-one-more{    width: .25rem;    height: .25rem;    margin-top: 0.25rem;    margin-left: 0.1rem;    background: url(/mobile/images/icon-huanyipi.png) no-repeat center;    background-size: 100%;    float: right;}
    .mip-vd-tabs-nav-selected {    border-bottom: 1px solid #38f;    color: #dc0011;}

    .swiper-container{margin:0 auto;position:relative;overflow:hidden;z-index:1}.swiper-container-no-flexbox .swiper-slide{float:left}.swiper-container-vertical>.swiper-wrapper{-webkit-box-orient:vertical;-moz-box-orient:vertical;-ms-flex-direction:column;-webkit-flex-direction:column;flex-direction:column}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-transition-property:-webkit-transform;-moz-transition-property:-moz-transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;transition-property:transform;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.swiper-container-android .swiper-slide,.swiper-wrapper{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-o-transform:translate(0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.swiper-container-multirow>.swiper-wrapper{-webkit-box-lines:multiple;-moz-box-lines:multiple;-ms-flex-wrap:wrap;-webkit-flex-wrap:wrap;flex-wrap:wrap}.swiper-container-free-mode>.swiper-wrapper{-webkit-transition-timing-function:ease-out;-moz-transition-timing-function:ease-out;-ms-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out;margin:0 auto}.swiper-slide{-webkit-flex-shrink:0;-ms-flex:0 0 auto;flex-shrink:0;width:100%;height:100%;position:relative}.swiper-container-autoheight,.swiper-container-autoheight .swiper-slide{height:auto}.swiper-container-autoheight .swiper-wrapper{-webkit-box-align:start;-ms-flex-align:start;-webkit-align-items:flex-start;align-items:flex-start;-webkit-transition-property:-webkit-transform,height;-moz-transition-property:-moz-transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;transition-property:transform,height}.swiper-container .swiper-notification{position:absolute;left:0;top:0;pointer-events:none;opacity:0;z-index:-1000}.swiper-wp8-horizontal{-ms-touch-action:pan-y;touch-action:pan-y}.swiper-wp8-vertical{-ms-touch-action:pan-x;touch-action:pan-x}.swiper-button-next,.swiper-button-prev{position:absolute;top:50%;width:27px;height:44px;margin-top:-22px;z-index:10;cursor:pointer;-moz-background-size:27px 44px;-webkit-background-size:27px 44px;background-size:27px 44px;background-position:center;background-repeat:no-repeat}.swiper-button-next.swiper-button-disabled,.swiper-button-prev.swiper-button-disabled{opacity:.35;cursor:auto;pointer-events:none}.swiper-button-prev,.swiper-container-rtl .swiper-button-next{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");left:10px;right:auto}.swiper-button-prev.swiper-button-black,.swiper-container-rtl .swiper-button-next.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-prev.swiper-button-white,.swiper-container-rtl .swiper-button-next.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next,.swiper-container-rtl .swiper-button-prev{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");right:10px;left:auto}.swiper-button-next.swiper-button-black,.swiper-container-rtl .swiper-button-prev.swiper-button-black{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")}.swiper-button-next.swiper-button-white,.swiper-container-rtl .swiper-button-prev.swiper-button-white{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")}.swiper-pagination{position:absolute;bottom: 3%;width: 100%; text-align:center;-webkit-transition:.3s;-moz-transition:.3s;-o-transition:.3s;transition:.3s;-webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0);z-index:10}.swiper-pagination.swiper-pagination-hidden{opacity:0}.swiper-container-horizontal>.swiper-pagination-bullets,.swiper-pagination-custom,.swiper-pagination-fraction{bottom:0px;left:0;width:100%}.swiper-pagination-bullet{width:8px;height:8px;display:inline-block;border-radius:100%;background:#000;opacity:.2}button.swiper-pagination-bullet{border:none;margin:0;padding:0;box-shadow:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;appearance:none}.swiper-pagination-clickable .swiper-pagination-bullet{cursor:pointer}.swiper-pagination-white .swiper-pagination-bullet{background:#fff}.swiper-pagination-bullet-active{opacity:1;background:#fd3335}.swiper-pagination-white .swiper-pagination-bullet-active{background:#fff}.swiper-pagination-black .swiper-pagination-bullet-active{background:#000}.swiper-container-vertical>.swiper-pagination-bullets{right:10px;top:50%;-webkit-transform:translate3d(0,-50%,0);-moz-transform:translate3d(0,-50%,0);-o-transform:translate(0,-50%);-ms-transform:translate3d(0,-50%,0);transform:translate3d(0,-50%,0)}.swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet{margin:5px 0;display:block}.swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet{margin:0 5px}.swiper-pagination-progress{background:rgba(0,0,0,.25);position:absolute}.swiper-pagination-progress .swiper-pagination-progressbar{background:#007aff;position:absolute;left:0;top:0;width:100%;height:100%;-webkit-transform:scale(0);-ms-transform:scale(0);-o-transform:scale(0);transform:scale(0);-webkit-transform-origin:left top;-moz-transform-origin:left top;-ms-transform-origin:left top;-o-transform-origin:left top;transform-origin:left top}.swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar{-webkit-transform-origin:right top;-moz-transform-origin:right top;-ms-transform-origin:right top;-o-transform-origin:right top;transform-origin:right top}.swiper-container-horizontal>.swiper-pagination-progress{width:100%;height:4px;left:0;top:0}.swiper-container-vertical>.swiper-pagination-progress{width:4px;height:100%;left:0;top:0}.swiper-pagination-progress.swiper-pagination-white{background:rgba(255,255,255,.5)}.swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar{background:#fff}.swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar{background:#000}.swiper-container-3d{-webkit-perspective:1200px;-moz-perspective:1200px;-o-perspective:1200px;perspective:1200px}.swiper-container-3d .swiper-cube-shadow,.swiper-container-3d .swiper-slide,.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top,.swiper-container-3d .swiper-wrapper{-webkit-transform-style:preserve-3d;-moz-transform-style:preserve-3d;-ms-transform-style:preserve-3d;transform-style:preserve-3d}.swiper-container-3d .swiper-slide-shadow-bottom,.swiper-container-3d .swiper-slide-shadow-left,.swiper-container-3d .swiper-slide-shadow-right,.swiper-container-3d .swiper-slide-shadow-top{position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:none;z-index:10}.swiper-container-3d .swiper-slide-shadow-left{background-image:-webkit-gradient(linear,left top,right top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(right,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to left,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-right{background-image:-webkit-gradient(linear,right top,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(left,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to right,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-top{background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(bottom,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to top,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-3d .swiper-slide-shadow-bottom{background-image:-webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.5)),to(rgba(0,0,0,0)));background-image:-webkit-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-moz-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:-o-linear-gradient(top,rgba(0,0,0,.5),rgba(0,0,0,0));background-image:linear-gradient(to bottom,rgba(0,0,0,.5),rgba(0,0,0,0))}.swiper-container-coverflow .swiper-wrapper,.swiper-container-flip .swiper-wrapper{-ms-perspective:1200px}.swiper-container-cube,.swiper-container-flip{overflow:visible}.swiper-container-cube .swiper-slide,.swiper-container-flip .swiper-slide{pointer-events:none;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;backface-visibility:hidden;z-index:1}.swiper-container-cube .swiper-slide .swiper-slide,.swiper-container-flip .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-active .swiper-slide-active,.swiper-container-flip .swiper-slide-active,.swiper-container-flip .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-container-cube .swiper-slide-shadow-bottom,.swiper-container-cube .swiper-slide-shadow-left,.swiper-container-cube .swiper-slide-shadow-right,.swiper-container-cube .swiper-slide-shadow-top,.swiper-container-flip .swiper-slide-shadow-bottom,.swiper-container-flip .swiper-slide-shadow-left,.swiper-container-flip .swiper-slide-shadow-right,.swiper-container-flip .swiper-slide-shadow-top{z-index:0;-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-ms-backface-visibility:hidden;backface-visibility:hidden}.swiper-container-cube .swiper-slide{visibility:hidden;-webkit-transform-origin:0 0;-moz-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;width:100%;height:100%}.swiper-container-cube.swiper-container-rtl .swiper-slide{-webkit-transform-origin:100% 0;-moz-transform-origin:100% 0;-ms-transform-origin:100% 0;transform-origin:100% 0}.swiper-container-cube .swiper-slide-active,.swiper-container-cube .swiper-slide-next,.swiper-container-cube .swiper-slide-next+.swiper-slide,.swiper-container-cube .swiper-slide-prev{pointer-events:auto;visibility:visible}.swiper-container-cube .swiper-cube-shadow{position:absolute;left:0;bottom:0;width:100%;height:100%;background:#000;opacity:.6;-webkit-filter:blur(50px);filter:blur(50px);z-index:0}.swiper-container-fade.swiper-container-free-mode .swiper-slide{-webkit-transition-timing-function:ease-out;-moz-transition-timing-function:ease-out;-ms-transition-timing-function:ease-out;-o-transition-timing-function:ease-out;transition-timing-function:ease-out}.swiper-container-fade .swiper-slide{pointer-events:none;-webkit-transition-property:opacity;-moz-transition-property:opacity;-o-transition-property:opacity;transition-property:opacity}.swiper-container-fade .swiper-slide .swiper-slide{pointer-events:none}.swiper-container-fade .swiper-slide-active,.swiper-container-fade .swiper-slide-active .swiper-slide-active{pointer-events:auto}.swiper-scrollbar{border-radius:10px;position:relative;-ms-touch-action:none;background:rgba(0,0,0,.1)}.swiper-container-horizontal>.swiper-scrollbar{position:absolute;left:1%;bottom:3px;z-index:50;height:5px;width:98%}.swiper-container-vertical>.swiper-scrollbar{position:absolute;right:3px;top:1%;z-index:50;width:5px;height:98%}.swiper-scrollbar-drag{height:100%;width:100%;position:relative;background:rgba(0,0,0,.5);border-radius:10px;left:0;top:0}.swiper-scrollbar-cursor-drag{cursor:move}.swiper-lazy-preloader{width:42px;height:42px;position:absolute;left:50%;top:50%;margin-left:-21px;margin-top:-21px;z-index:10;-webkit-transform-origin:50%;-moz-transform-origin:50%;transform-origin:50%;-webkit-animation:swiper-preloader-spin 1s steps(12,end) infinite;-moz-animation:swiper-preloader-spin 1s steps(12,end) infinite;animation:swiper-preloader-spin 1s steps(12,end) infinite}.swiper-lazy-preloader:after{display:block;content:"";width:100%;height:100%;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");background-position:50%;-webkit-background-size:100%;background-size:100%;background-repeat:no-repeat}.swiper-lazy-preloader-white:after{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")}@-webkit-keyframes swiper-preloader-spin{100%{-webkit-transform:rotate(360deg)}}@keyframes swiper-preloader-spin{100%{transform:rotate(360deg)}}

</style>