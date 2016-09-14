$(document).ready(function(){

	//global variables
	var windowWidth = $(window).width();


	//global functions
	var cl = function(tolog){
		console.log(tolog)
	}

	var animatedScroll = function(){
		$('a[href^="#"]').click(function(){
			var $target = $(this).attr("href");
			$('html, body').animate({scrollTop:$($target).offset().top - 50 + 'px'}, 250);
			return false;
		});
	}();

	var mobileMenu = function(){
		var button = $('.hamb-button'),
				menu = $('.header'),
				vPanel = $('.log-v-icons'),
				close = $('.close-menu');
		button.click(function(){
			if(menu.hasClass('open')){
				menu.removeClass('open');
				vPanel.removeClass('shown');
				$('body').removeClass('noverflow');
			}else{
				menu.addClass('open');
				vPanel.addClass('shown');
				$('body').addClass('noverflow');
			}
		});
		close.click(function(){
			menu.removeClass('open');
			vPanel.removeClass('shown');
			$('body').removeClass('noverflow');
		});
		$('.nav li').click(function(){
			menu.removeClass('open');
		});
	}

	var mobileIcon = function(){
		$('.l-icon').each(function(){
			var dataIcon = $(this).attr('data-icon');
			$(this).click(function(){
				if($('.logged-panels').hasClass('hide')){
					$('.logged-panels').removeClass('hide');
				}
				$('.l-icon').removeClass('current');
				$('.sub-panel').addClass('hide');
				$('.'+dataIcon+'-panel').removeClass('hide');
				$('.log-v-icons').addClass('shown');

				if($(this).hasClass('current')){
					$(this).removeClass('current');
				}else{
					$(this).addClass('current');					
				}
			});
		});

		$('.close-panel').click(function(){
			$('.l-icon').removeClass('current');
			$('.logged-panels').addClass('hide');
			$('.log-v-icons').removeClass('shown');
		});
	}

	$('.preventdefault').each(function(){
		$(this).click(function(e){
			e.preventDefault();
		});
	});


	//execution
	if(windowWidth > 1100){
		$('.parallax-section').parallax('center', 0.15, 0.1, true);		
	}
	mobileMenu();
	mobileIcon();

}) //end of jQuery


