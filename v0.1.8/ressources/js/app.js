$(document).ready(function(){

	//global variables

	var windowWidth = $(window).width();


	//global functions

		var cl = function(tolog){
			console.log(tolog)
		}

		var wallImgSorter = function(){
			$('.post-content').each(function(){
				var imgs = $(this).find('img');
				if(imgs.length == 1){
					imgs.parent().addClass('img-1');
				}else if(imgs.length == 2){
					imgs.parent().addClass('img-2');
				}else if(imgs.length == 3){
					imgs.parent().addClass('img-3');
				}if(imgs.length == 4){
					imgs.parent().addClass('img-4');
				}
				var lastImg = $(this).find('img:last');
				if(lastImg.parent().hasClass('img-3')){
					lastImg.parent().addClass('full-img')
				}
			});
			$('.post-content-img').each(function(){
				var imgHeight = $(this).children().height();
				$(this).css('height', imgHeight);
			});
		}

		var wallImgSizer = function(){
			$('.img-1').each(function(){
				var imgWidth = $(this).children('img').width();
				$(this).css('width', imgWidth);
			});
		}

		var sideMenu = function(){
			$('.sidebar-icon').each(function(){
				var sidebarId = $(this).attr('id');
				$(this).click(function(){
					$('.sidebar-icon').removeClass('active');
					$('.sidebar-icon').removeClass('active-800');
					$(this).addClass('active');
					$('.sidebar-content').removeClass('open');
					$('.sidebar-content').removeClass('default-800');
					$('.'+sidebarId).addClass('open');					
				});
			});
		}

		var addFile = function(){			
			var placeHold = $('.files-added'),
					addIcon,
					addFileIcon = $('.add-files');

			addFileIcon.each(function(){
				var nextContainer = $(this).parent().find('.add-files-options');
				cl(nextContainer)
				$(this).click(function(){
					if(nextContainer.hasClass('open')){
						nextContainer.removeClass('open');
						nextContainer.slideUp(150);
					}else{
						nextContainer.addClass('open');
						nextContainer.slideDown(150);
					}
				});
			});


			$('.input-add').each(function(){
				$(this).change(function(){
					var fileAdded = $(this).val(),
					 fileAddedShorted = fileAdded.substring(12),
					 iconType = $(this).attr('id');

					 if(iconType === 'image'){
					 		addIcon = '<i class="fa fa-picture-o" aria-hidden="true"></i>';
					 }else if(iconType === 'video'){
					 		addIcon = '<i class="fa fa-film" aria-hidden="true"></i>';
					 }

					 var filePlace = '<div class="file-present">\
													<div class="file-present-img">'+addIcon+'</div>\
													<div class="file-present-name">'+fileAddedShorted+'</div>\
												</div>';
					if(placeHold.hasClass('empty')){
						placeHold.removeClass('empty')
						placeHold.slideDown();
					}
						placeHold.append(filePlace);
				});
			});
		}

		var mobileInfoConnect = function(){

			$('.info-bloc').each(function(){
				var connectButtonBlock = $(this).children('.info-connect');
				$(this).click(function(){
					connectButtonBlock.fadeIn();
				});
			});
			$('.info-connect a').each(function(){
				var pBlock = $(this).parent().parent();			
				$(this).click(function(){
					pBlock.slideUp(150);
					setTimeout(function() {
					  pBlock.remove();
					}, 250);
					setTimeout(function() {
					  var iBlocks = $(document).find('.info-bloc');
					  if(iBlocks.length === 0){
					  	$('.relations').slideUp(130);
					  	$('.main').removeClass('padded');
					  }
					}, 260);
				});
			});
		}

		var mobileInfoShow = function(){
			var ib = $('.infobar'),
					r = $('.relations'),
					m= $('.main')
					ns = [0,1,2,3],
					nRandom = Math.floor(Math.random()*ns.length),
					n = parseInt(ns[nRandom], 10);

					if(n === 3){
						r.show();
						mobileInfoConnect();
					  m.addClass('padded')
					}else{
						ib.addClass('empty');
						r.remove();
					}
		}
	//execution

	wallImgSorter();
	addFile();
	sideMenu();

	var responsive = function(){
		if(windowWidth < 1100){			
			mobileInfoShow();
		}
		else if(windowWidth > 1100){	
			$('.main').removeClass('padded');
			wallImgSizer();
		}		
	}
	
	$(document).ready(function(){
		responsive();		
	});

	$(window).resize(function(){
		windowWidth = $(window).width();
		responsive();	
	});

});