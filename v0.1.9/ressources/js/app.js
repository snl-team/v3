$(document).ready(function(){

	//global variables

	var windowWidth = $(window).width(),
			logoContainer = $('.logo img');


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
					addFileIcon = $('.add-files'),					
					inputCount = 1;

			addFileIcon.each(function(){
				var nextContainer = $(this).parent().find('.add-files-options');
				$(this).click(function(){
					if(nextContainer.hasClass('open')){
						nextContainer.removeClass('open');
						nextContainer.fadeOut(150);
					}else{
						nextContainer.addClass('open');
						nextContainer.fadeIn(150);
					}
				});
			});

			if(inputCount >= 1){
				$('.add-files-options').click(function(){
					$('.input-add').each(function(){
						var parentContainer = $(this).parent().parent(),
								id = $(this).attr('id'),
								linkedLabel = $('.'+id),
								llName = linkedLabel.children('span'),
								tempName = false;
						$(this).click(function(){
							tempName = llName.text();
						});
						$(this).change(function(){
									var fileName = $(this).val(),
									fileNameShorted = fileName.substring(12);
							llName.text(fileNameShorted)
							if(tempName != 'Ajouter une image'){
									inputCount = inputCount
							}else{
								if(inputCount === 4){
									parentContainer.parent().parent().find('h4').append('<span class="max-reach">Nombre d\'images maximum atteint !</span>');
								}else{
									inputCount++
									var li = '<li>\
															<label for="image'+inputCount+'" class="button label-add image'+inputCount+'">\
																<i class="fa fa-picture-o" aria-hidden="true"></i>\
																<span>Ajouter une image</span>\
															</label>\
															<input type="file" class="input-add hide" id="image'+inputCount+'">\
														</li>'
									linkedLabel.parent().after(li)
								}
							}
						});
					});
				});
			}
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
					  var iBlocks = $(document).find('.follow');
					  cl(iBlocks.length)
					  if(iBlocks.length === 0){
					  	$('.relations').slideUp(130);
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
						//mobileInfoConnect();
					}else{
					  m.addClass('padded')
						ib.addClass('empty');
						r.remove();
					}
		}

		var teamTab = function(){
			var team = $('.team-name');

			team.each(function(){
				var firstLetter = $(this).text().substring(0,1),
						teamLetter = $(this).parent().find('.team-letter');
				teamLetter.text(firstLetter)
			});
		}

		var openPostAction = function(){
			var postActionIcons = $('.open-content'),
					darker = $('.post-action-dark'),
					cancel = false;

			postActionIcons.each(function(){
				var actionIcon = $(this).children('i'),
						actionContent = $(this).children('.post-actions-content');
				
				cancel = actionContent.find('.cancel')
				
				actionIcon.click(function(){
					actionContent.fadeIn(150);
					darker.fadeIn(150);
				});
				cancel.click(function(){
					actionContent.fadeOut(150);
					darker.fadeOut(150);
				});
				darker.click(function(){
					actionContent.fadeOut(150);
					darker.fadeOut(150);
				});
			});
		}

		var quotePost = function(){
				var quoteIcon = $('.quote-icon'),
						darker = $('.post-action-dark')
				quoteIcon.each(function(){
					var actualPost = $(this).parent().parent().parent().children('.post-container'),
							quotePostBlock = $(this).parent().find('.quote-post'),
							cancel = $(this).parent().find('.cancel');
					$(this).click(function(){
						var clonePost = actualPost.clone()
						quotePostBlock.html(clonePost)
					});
					darker.click(function(){
						quotePostBlock.html(' ');
					});
					cancel.click(function(){
						quotePostBlock.html(' ');
					});
				});
			}
		
	//execution

	wallImgSorter();
	addFile();
	sideMenu();
	teamTab();
	openPostAction();
	quotePost();


	var responsive = function(){		
		if(windowWidth < 1100){			
			mobileInfoShow();
		}
		else if(windowWidth > 1100){	
			$('.main').removeClass('padded');
			wallImgSizer();
		}		

		if(windowWidth < 800){
			logoContainer.attr('src','ressources/images/logo-mobile.png');
		}else if(windowWidth < 800){
			logoContainer.attr('src','ressources/images/logo.png');
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