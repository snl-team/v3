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
					inputCount = 1,
					addDark = $('.add-dark'),
					label = $('.label-add'),
					input = $('.input-add');

			addFileIcon.each(function(){
				var nextContainer = $(this).parent().find('.add-files-container');
				$(this).click(function(){
					if(nextContainer.hasClass('open')){
						nextContainer.removeClass('open');
						nextContainer.fadeOut(150);
						addDark.fadeOut(150);
					}else{
						nextContainer.addClass('open');
						nextContainer.fadeIn(150);
						addDark.fadeIn(150);
					}
				});
			});
			addDark.click(function(){
				$('.add-files-container').removeClass('open');
				$('.add-files-container').fadeOut(150);
				addDark.fadeOut(150);
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
					  var iBlocks = $(document).find('.follow');
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
					ns = [0,1,2,3,4],
					nRandom = Math.floor(Math.random()*ns.length),
					n = parseInt(ns[nRandom], 10);

					if(n === 4){
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

			var newPost = function(){
				var postForm = $('.add-post-form'),
						textarea = $('.add-post-form .add-message'),
						submit = $('.new-post');

				textarea.focus(function(){
					postForm.addClass('open');
				});
				/*textarea.blur(function(){
					if(textarea.val() != ''){
						return
					}else{
						postForm.removeClass('open');
					}
				});*/

				textarea.keyup(function(){
					if(textarea.val() != ''){
						submit.removeClass('unable');
					}else{
						submit.addClass('unable');
					}
				});
			}

			var profilContent = function(){
				var profilMenuA = $('.profil-top-menu li');
				profilMenuA.each(function(){
					var target = $('.profil-content-'+$(this).attr('id')),
							numbers = $(this).children('span').text(),
							numberContainer = target.find('.numbers');
							if(numbers != ''){
								numberContainer.append(' ('+numbers+')');
							}
					$(this).click(function(){
						profilMenuA.removeClass('active');
						$(this).addClass('active');
						$('.profil-content').removeClass('active');
						target.addClass('active');
					})
				});
			}

			var changeProfilImgs = function(){
				var modifyImgAction = $('.modify-action'),
						darkerModify = $('.darker-modify'),
						modifyFile = $('.modify-file'),
						fadeSpeed = 150;
				modifyImgAction.each(function(){
					var blocTarget = $('.'+$(this).attr('id'));
					$(this).click(function(){
						blocTarget.fadeIn(fadeSpeed);
						darkerModify.fadeIn(fadeSpeed)
					});
				});
				modifyFile.each(function(){
					var nextSubmit = $(this).parent().find('.submit'),
							selectedFile = $(this).parent().find('.selected-file'),
							prevLabel =  $(this).parent().find('label');
					$(this).change(function(){
						var file = $(this).val(),
								shortedFile = file.substring(12);
						selectedFile.parent().removeClass('error')
						selectedFile.parent().children('i').removeClass('fa-exclamation-circle')
						selectedFile.parent().children('i').addClass('fa-info-circle')
						selectedFile.parent().addClass('info')
						selectedFile.text('Image choisie : ' + shortedFile + ' | ' + file.width());
						prevLabel.text('Choisir une autre image');
						nextSubmit.fadeIn(fadeSpeed);
						if($(this).val() === ''){
							selectedFile.text('Erreur, veuillez selectionner une image');
							selectedFile.parent().children('i').removeClass('fa-info-circle');
							selectedFile.parent().children('i').addClass('fa-exclamation-circle');
							selectedFile.parent().removeClass('info');
							selectedFile.parent().addClass('error');
						}
					});
				});

				var resetUpload = function(){
					$(darkerModify).fadeOut(fadeSpeed);
					$('.modify-img').fadeOut(fadeSpeed);
					$('.selected-file').text('Aucune image choisie');
					$('.modify-file').val('');
					$('.submit').fadeOut(fadeSpeed);
					$('.modify-img label').text('Choisir une image')
				}

				darkerModify.click(function(){					
					resetUpload();
				});
				$('.close-modify').click(function(){
					resetUpload();
				});
			}

			var postEdit = function(){
				var postEditBtn = $('.modify-my-post-btn');
				postEditBtn.each(function(){
					var postEditMenu = $(this).parent().children('.modify-my-post-content');
					$(this).click(function(){
						if(postEditMenu.hasClass('open')){
							postEditMenu.removeClass('open');
							postEditMenu.hide();
						}else{
							postEditMenu.addClass('open');
							postEditMenu.show();
						}
					});
				});
			}

			var addSidebarItem = function(){
				var addInput = $('.add-more-input');
				addInput.each(function(){
					var check = $(this).prev('label').text();
					$(this).focus(function(){
						if($(this).val() === check){
							$(this).val('')
						}
					});
					$(this).blur(function(){
						if($(this).val() === ''){
							$(this).val(check)
						}
					});
				});
			}

			var profilEdit = function(){
				var editFormButton = $('.edit-profil'),
						editForm = $('.edit-profil-form');

				var editFormPlaceholder = function(){
					editForm.each(function(){
						var placeholder = $(this).parent().children('.profil-bloc-content').children('p').text();
						$(this).children().children().children('.text-input').attr('placeholder', placeholder);
						$(this).children().children().children('textarea').text(placeholder)
					});
				}();

				var editFormClean = function(){
					editForm.each(function(){
						var textarea = $(this).children().children().children('textarea');
						var label = $(this).children().children().children('label');
						var trash = $(this).children().children().children('label').children('i');
						var inputText = $(this).children().children().children('.text-input');
						trash.hover(function(){
							textarea.addClass('light-color')
						});
						trash.mouseout(function(){
							textarea.removeClass('light-color')
						});
						trash.click(function(){
							textarea.val(' ');
						});
					});
				}();

				var editShow = function(){
					editFormButton.each(function(){
						$(this).click(function(){
							$(this).parent().children('.edit-profil-form').fadeIn(250);
							$('.edit-darker').fadeIn(250);
						});
					});
					$('.edit-darker').click(function(){
						$(this).fadeOut(250);
						$('.edit-profil-form').fadeOut(250);
					})
				}();
			}

			var textareaRegexp = function(){
					var string;

					$('.add-message').keyup(function(){
						string = $(this).val();
						var hashtags = string.replace(/(^|\s)(#[a-z\d-]+)/ig, "$1<a href='#' class='hashtag'>$2</a>");
						$(this).html(hashtags);
						$('.final-message').html(hashtags);
					});

					$('.add-message').blur(function(){
					});

			}

			var channels = function(){
				var channelHeader = $('.main-header'),
						channelName = channelHeader.children('h2').text();
				var channelEdit = function(){
					var channelCog = $('.main-header h2 i');
					channelCog.each(function(){
						var channelOption = $(this).parent().parent().children('.channel-options');
						$(this).click(function(){
							if(channelOption.hasClass('open')){
								channelOption.removeClass('open');
								channelOption.slideUp(150);
							}else{
								channelOption.addClass('open')
								channelOption.slideDown(150);
							}
						});
						$('.post').click(function(){
							channelOption.removeClass('open');
							channelOption.slideUp(150);
						});
					});	
				}();

				var channelInputs = function(){
					$('#channel-name').val(channelName.substring(1))
				}();
			}
		
	//execution

	newPost();
	wallImgSorter();
	addFile();
	sideMenu();
	teamTab();
	openPostAction();
	quotePost();
	profilContent();
	changeProfilImgs();
	postEdit();
	textareaRegexp();
	profilEdit();
	addSidebarItem();
	channels();


	var responsive = function(){		
		if(windowWidth < 1100){			
			mobileInfoShow();
		}else if(windowWidth > 1100){	
			$('.main').removeClass('padded');
			wallImgSizer();
		}		

		if(windowWidth > 720){
			var profilPageHeight = $('.profil-sider').height() + 15 +'px';
			$('.profil-main').css('height', profilPageHeight);
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