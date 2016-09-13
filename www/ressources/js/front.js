$(document).ready(function(){

	var windowWidth = $(window).width();

	var cl = function(tolog){
		console.log(tolog)
	}

	var animatedScroll = function(){
		$('a[href^="#"]').click(function(){
			var $target = $(this).attr("href");
			$('html, body').animate({scrollTop:$($target).offset().top - 50 + 'px'}, 'slow');
			return false;
		});
	}();

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

	var scrollSpy = function(){
		
	}


	if(windowWidth > 1100){
		$('.parallax-section').parallax('center', 0.15, 0.1, true);		
	}
	mobileMenu();
	connectWith();

}) //end of jQuery