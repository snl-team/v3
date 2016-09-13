$(document).ready(function(){

	var windowWidth = $(window).width();

	var mobileMenu = function(){
		var button = $('.hamb-button'),
				menu = $('.header'),
				close = $('.close-menu');
		button.click(function(){
			if(menu.hasClass('open')){
				menu.removeClass('open');
			}else{
				menu.addClass('open');
			}
		});
		close.click(function(){
			menu.removeClass('open');
		});

	}


	mobileMenu();
	if(windowWidth > 1100){
		$('.parallax-section').parallax('center', 0.15, 0.1, true);		
	}

}) //end of jQuery