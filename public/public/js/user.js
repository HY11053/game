$(function(){
    //百分比
    $('.skillbar').each(function () {
        $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent')
        }, 1000);
    });	
	
	
	$(".edit_tab_box .edit_tab_cont").eq(0).show().siblings().hide();
	$(".edit_tab li").click(function(){
		$(this).addClass('on').siblings().removeClass("on");
		$(".edit_tab_box .edit_tab_cont").eq($(this).index()).show().siblings().hide();
	});
	
});