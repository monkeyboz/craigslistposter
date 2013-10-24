$(document).ready(function(){
	$.fn.hoverInfo = function(){
		$(this).find('.userInfo').removeClass('userInfo').addClass('userInfoJava');
		$(this).find('.userInfoJava').animate({opacity: 0}, 0);
		$(this).hover(showInfo, hideInfo);
	}
	
	function showInfo(){
		var javaHolder = $(this).find('.userInfoJava');
		javaHolder.stop();
		javaHolder.css('display', 'block');
		javaHolder.animate({opacity:1}, 500);
	}
	
	function hideInfo(){
		var javaHolder = $(this).find('.userInfoJava');
		javaHolder.stop();
		javaHolder.animate({opacity:0}, 500, function(){ $(this).find('.userInfoJava').css('display', 'none'); });
	}
	
	$('.userHolder').each(function(){
		$(this).hoverInfo();
	})
})