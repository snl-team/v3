$(document).ready(function(){

	var windowWidth = $(window).width();

	var cl = function(tolog){
		console.log(tolog)
	}

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

	var connectWith = function(){
		var so = $(document).find('.sign-options')
		cl(so.length)
		if(so.length >= 1){
			$('.sign-options').click(function(){
				if($('.connect-with').hasClass('show')){
					$('.connect-with').removeClass('show');
					$('.connect-with').slideUp(250);
				}else{
					$('.connect-with').addClass('show');
					$('.connect-with').slideDown(250);
				}
			});
		}
	}


	if(windowWidth > 1100){
		$('.parallax-section').parallax('center', 0.15, 0.1, true);		
	}
	mobileMenu();
	connectWith();

	$('.news-slider').owlCarousel();

}) //end of jQuery