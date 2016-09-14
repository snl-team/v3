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
		$('.nav li a').click(function(){
			menu.removeClass('open');
		});
	}

	var connectWith = function(){
		var so = $(document).find('.sign-options')
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

	var slider = function(){
		var owl = $('#news-slider'); 
	  owl.owlCarousel({	 
	      navigation : true,
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true	 
	 
	  });
	}

	var scrollSpy = function(){

		var sections = [];
		var id = false;
		var $nav = $('.nav')
		
		$('a.anchor-item', $nav).each(function(){
			sections.push($($(this).attr('href')));
		});

		$(window).scroll(function(e){
			var scrollTop = $(this).scrollTop() + ($(window).height() / 2);
			for(var i in sections){
				var section = sections[i];
				var top = section.offset().top
				if(scrollTop > section.offset().top){
					id = section.attr('id');
				}
			}


			var activeLink = $('a.anchor-item[href="#'+id+'"]')
			$('a.anchor-item', $nav).removeClass('active')
			activeLink.addClass('active')
		});


	}

	//execution
	if(windowWidth > 1100){
		$('.parallax-section').parallax('center', 0.15, 0.1, true);		
	}
	mobileMenu();
	connectWith();
	scrollSpy();
	slider();

}) //end of jQuery


