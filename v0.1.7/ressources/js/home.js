$(document).ready(function(){
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
	
	connectWith();
	scrollSpy();
	slider();

})