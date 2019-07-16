// JavaScript Document
$(function(){
	
$(".linkeList").click(function(){$(".linkeList").css("height","auto");}); $('.ShowMore').mousemove(function(){$(this).addClass("Over").next(".SubLink").slideDown();}); $('.ShowMore').mouseleave(function(){$(this).removeClass("Over").next(".SubLink").slideUp("fast");});	
	
$('#category_second').chained('#category_first');
/***找项目上下滚动*/
$('#demo_zxm').scrollQ({line:5, scrollNum:1, scrollTime:2000});
$('#demo_zxm1').scrollQ({line:4, scrollNum:1, scrollTime:2000});

/***热门品牌*/
$('.incomeType li:first').addClass('hoverMenus');
$(".layout_hot_bd").each(function() {
	$('.incomeType li').hover(function(){
		$(this).addClass('hoverMenus').siblings().removeClass('hoverMenus');
		$(this).parents(".hot_top").next().find("ul").eq($(this).index()).show().siblings().hide();
	}).eq(0).hover();
});

/***创业互动轮换*/
$('#ISL_Cont').imageScroller({next:'zj_left',prev:'zj_right',frame:'List1',width:110,child:'LI',auto:true});

/***图片轮换*/
$('#focusPic').smallslider({showText:false});
/***项目点评*/
$('#xmdp_zcd h4:first').addClass('kjy_a');
$('#xmdp_zcd h4').mouseover(function(){$('#xmdp_zcd h4').removeClass('kjy_a');$(this).addClass('kjy_a');
$('#tab_content .xmdpzcd').hide();$('.'+ $(this).attr('id')).show();});

/***选项目*/
$('#c_3cerh h4').mouseover(function(){$('#c_3cerh h4').removeClass('kjy_a');$(this).addClass('kjy_a');
$('.c_cer2top .c_cer2t').hide();$('.'+ $(this).attr('id')).show();});

/***加盟聚焦切换*/
$('#jmjj div.jm_small').mouseover(function()
{$(this).hide().next('div.jm_big').show().siblings('div.jm_big').hide();
$(this).siblings().show().next('div.jm_big').hide();});
$('.ShowMore').mousemove(function(){$(this).addClass('Over').next('.SubLink').slideDown();});
$('.ShowMore').mouseleave(function(){$(this).removeClass('Over').next('.SubLink').slideUp('fast');});
$('#newkefu_bar').hover(function(){$('#group_pad').show('slow'),$('#newkefu_bar').attr('src','images/1150_advert_29.jpg')},function(){$('#newkefu_right').hover(function(){$('#group_pad').show('slow'),$('#newkefu_bar').attr('src','images/1150_advert_29.jpg')},function(){$('#group_pad').hide('slow'),$('#newkefu_bar').attr('src','images/1150_advert_29.jpg')})});
	
	
$('#companyPhoto').smallslider({showText:false});

$('.js_join_1').click(function(){
	var sTop=$('#js_join_1').offset().top-45;
	$('html,body').animate({scrollTop:sTop+"px"},500);
});
$('.js_join_2').click(function(){
	var sTop=$('#js_join_2').offset().top-45;
	$('html,body').animate({scrollTop:sTop+"px"},500);
});
$('.js_join_3').click(function(){
	var sTop=$('#js_join_3').offset().top-45;
	$('html,body').animate({scrollTop:sTop+"px"},500);
});
$('.js_join_4').click(function(){
	var sTop=$('#js_join_4').offset().top-45;
	$('html,body').animate({scrollTop:sTop+"px"},500);
});
$('.js_join_5').click(function(){
	var sTop=$('#js_join_5').offset().top-45;
	$('html,body').animate({scrollTop:sTop+"px"},500);
});
$('.js_join_6').click(function(){
	var sTop=$('#js_join_6').offset().top-45;
	$('html,body').animate({scrollTop:sTop+"px"},500);
});
	
//客户留言
jQuery("#js_msg").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:3,interTime:50,pnLoop:false,trigger:"click"});	
$(".liuyan-right li").click(function(){
	 $(".liuyan-cen textarea").val($(this).text());  
});

//轮播广告
jQuery("#slideBox").slide({mainCell:".bd ul",autoPlay:true});

//新闻图片大小
$(".newsContent img").each(function(){
if($(this).width() > 617){
	$(this).css("width","617px");
	$(this).css("height","auto");
}});

//内容页固定导航
if($(".article-product").length>0){
$(document).scroll(function(){
	//获取窗口的滚动条的垂直位置
	var s = $(document).scrollTop();
	//当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐
	if( s > 576){
		$(".article-product").addClass("article-product-fixed");
	}else{
		$(".article-product").removeClass("article-product-fixed");
		}
 });
}

if($(".c_bar").length>0){
$(document).scroll(function(){
	//获取窗口的滚动条的垂直位置
	var s = $(document).scrollTop();
	//当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐
	if( s > 429){
		$(".c_bar").addClass("c_bar_fixed");
	}else{
		$(".c_bar").removeClass("c_bar_fixed");
		}
 });
}
	
});