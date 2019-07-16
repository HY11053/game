$(function(){
//导航菜单下拉
$(".nav_cate_item").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");	
	});

$(".nav_cate").hover(function(){
		$(this).addClass("active");
		$(".IndexclassBox2").animate({marginLeft:"0px"});
	},function(){
		$(this).removeClass("active");
		$(".IndexclassBox2").animate({marginLeft:"-786px"});
	});	

//头部幻灯片
jQuery("#js_bn").slide({mainCell:".bd ul",effect:"top",autoPlay:true});
jQuery(".slideBox").slide({mainCell:".bd ul",effect:"left",autoPlay:true,delayTime:1000});
$(".slideBox").hover(function(){
	$(this).find(".prev,.next").show();
	},function(){
	$(this).find(".prev,.next").hide();
});
jQuery(".news_slide").slide({mainCell:".bd ul",effect:"left",autoPlay:true,delayTime:1000});

//首页排行榜
$(".notice_bd .notice_cont").eq(0).show().siblings().hide();
	$(".notice_hd li").hover(function(){
		$(this).addClass('on').siblings().removeClass("on");
		$(".notice_bd .notice_cont").eq($(this).index()).show().siblings().hide();
	});
	
//友情链接
$(".friend_links .link_box").eq(0).show().siblings().hide();
	$(".friend_links .hd li").hover(function(){
		$(this).addClass('on').siblings().removeClass("on");
		$(".friend_links .link_box").eq($(this).index()).show().siblings().hide();
	});	

//右侧固定
if($(".js_fixed").html()){
	$(document).scroll(function(){
		var curr = $(document).scrollTop();
		var rfbtm = $('.rela_hot_news').offset().top - $('.r_fixed_wrap').outerHeight()-112;
		var rf = $('.r_fixed_wrap');
		var jt=$('.js_fixed').offset().top-92;
		if(curr <= jt){
			rf.removeClass('r_fixed');
			rf.removeClass('r_fixed_b');
		}else if(curr > jt && curr < rfbtm){
			rf.addClass('r_fixed');
			rf.removeClass('r_fixed_b');
		}else{
			rf.addClass('r_fixed_b');
			rf.removeClass('r_fixed');
		}
		
		var iiw=$('.item_info_wrap').offset().top;
		var ii=$(".item_info");
		if(curr >= iiw){
			ii.addClass("item_info_fixed");
			}else{
			ii.removeClass("item_info_fixed");	
			}
	 });
 }
 
var rh=$(".r_fixed_wrap").height();
$(".news_cont_box").css("min-height",rh);


//弹窗留言
$(".js_popup").click(function(){
	$(".popup").show();
});

$(".popup_close").click(function(){
	$(".popup").hide();
});

$("#msg_cont").hover(function(){
		$(this).parent("li").addClass("hover");
	},function(){
		$(this).parent("li").removeClass("hover");
});
$(".quick_msg li").click(function(){
	 $("#msg_cont").val($(this).text());  
});



	
});