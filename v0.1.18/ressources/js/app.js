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

		var infoUser = function(){
			var infoUserName = function(){
				var userName = $('.info-user p a');
				userName.each(function(){
					var thisText = $(this).text(),
							tTLength = thisText.length
					if(tTLength > 20){
						$(this).text(thisText.substring(0, 16));
						$(this).addClass('tronquate');
					}
				});
			}();

			var userSheet = function(){
				var infoBloc = $('.info-bloc');
				infoBloc.each(function(){
					var userSheetBloc = $(this).children('.user-sheet');
					$(this).hover(function(){
						userSheetBloc.fadeIn(150);
					});
					$(this).mouseleave(function(){
						userSheetBloc.fadeOut(150);
					});
					userSheetBloc.each(function(){
						var userSheetBio = $(this).children('.user-sheet-bio'),
								usbText = userSheetBio.text();
						userSheetBio.text(usbText.substring(0, 140) + '[ ... ]')
					});
				});
			}();

			var deleteOffer = function(){
				var closeOffer = $('.decline');
				closeOffer.each(function(){
					var parentToClose = $(this).parent().parent();
					$(this).click(function(e){
						e.preventDefault();
						//parentToClose.slideUp(150);
						parentToClose.html('<div class="affine">Ok, nous affienons nos recommandations...</div>');
					})
				});
			}();
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

				var relationSearch = function(){				
					var searchProfilContent = function(toSearch, searchBar){
						toSearch.each(function(){
							var $rel = $(this),
									relationText = $(this).text(),
									matchRelation = relationText.toLowerCase();
							searchBar.keyup(function(){
								var relationSearchVal = $(this).val();
								if(matchRelation.search(relationSearchVal) >= 0){
									$rel.parent().removeClass('unconcluent')
									$rel.parent().addClass('concluent')
								}else{
									$rel.parent().removeClass('concluent')
									$rel.parent().addClass('unconcluent')
								}
							});
						});
					}


					var relations = $('.relation-col .post-header');
					var abonnements = $('.follow-col .post-header');	
					searchProfilContent(relations, $('#search-bar1'));
					searchProfilContent(abonnements, $('#search-bar2'));

				}();
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

				var _URL = window.URL;
				modifyFile.each(function(){
					var nextSubmit = $(this).parent().find('.submit'),
							selectedFile = $(this).parent().find('.selected-file'),
							prevLabel =  $(this).parent().find('label'),
							previewImage = $(this).parent().parent().find('.preview-image');
					$(this).change(function(){
						var uploadedFile = $(this).val(),
								shortedFile;
						if(uploadedFile.substring(2) === "C:"){
							shortedFile = uploadedFile.substring(12);
						}else{
							shortedFile = uploadedFile;
						}
						selectedFile.parent().removeClass('error')
						selectedFile.parent().children('i').removeClass('fa-exclamation-circle')
						selectedFile.parent().children('i').addClass('fa-info-circle')
						selectedFile.parent().addClass('info')
						selectedFile.text('Image choisie : ' + uploadedFile);
						prevLabel.text('Choisir une autre image');
						nextSubmit.fadeIn(fadeSpeed);
						if($(this).val() === ''){
							selectedFile.text('Erreur, veuillez selectionner une image');
							selectedFile.parent().children('i').removeClass('fa-info-circle');
							selectedFile.parent().children('i').addClass('fa-exclamation-circle');
							selectedFile.parent().removeClass('info');
							selectedFile.parent().addClass('error');
						}
						var readURL = function(input){
					    if (input.files && input.files[0]) {
				        var reader = new FileReader();
				        reader.onload = function (e) {
				        	//var fileSize = Math.round(input.files[0].size / 1024);
				          previewImage.children('img').attr('src', e.target.result);				        		
				        	/*if(fileSize <= 100){
				        	}else{
				        		selectedFile.html('Erreur, la taille du fichier est incorrecte, veuillez sélectionner un fichier de <strong>moins de 2Mo</strong>');
										selectedFile.parent().children('i').addClass('fa-exclamation-circle');
										selectedFile.parent().removeClass('info');
										selectedFile.parent().addClass('error');
				        	}*/
				        }
				        reader.readAsDataURL(input.files[0]);
					    }
						}
						readURL(this)
				    previewImage.children('img').load(function(){
				    	var modBloc = $(this).parent().parent('.modify-img');

				    	modBloc.each(function(){
				    		var checkImg = $(this).find('.preview-image img');
				    		// modifi pro
				    		if($(this).hasClass('modify-pro')){
						    	if(checkImg.width() > 150){
						    		selectedFile.html("Attention, l'image sélectionnée dépasse la <strong>largeur conseillée de 150px </strong>.<br> Votre image fait : <strong>"+checkImg.width()+'px de large</strong>.');
										selectedFile.parent().children('i').addClass('fa-exclamation-circle');
										selectedFile.parent().removeClass('info');
										selectedFile.parent().removeClass('error');
										selectedFile.parent().addClass('danger');
						    	}
						    }else if($(this).hasClass('modify-cover')){
						    	if(checkImg.width() > 1400){
						    		selectedFile.html("Attention, l'image sélectionnée dépasse la <strong>largeur conseillée de 1400px </strong>.<br> Votre image fait : <strong>"+checkImg.width()+'px de large</strong>.');
										selectedFile.parent().children('i').addClass('fa-exclamation-circle');
										selectedFile.parent().removeClass('info');
										selectedFile.parent().removeClass('error');
										selectedFile.parent().addClass('danger');
						    	}
						    }
				    	});				    	
				    	$(this).addClass('loaded');
				    	$(this).parent().parent().addClass('loaded');
				    });
					});
				});

				var resetUpload = function(){
					$(darkerModify).fadeOut(fadeSpeed);
					$('.modify-img').fadeOut(fadeSpeed);
					$('.selected-file').text('Aucune image choisie');
					$('.modify-file').val('');
					$('.submit').fadeOut(fadeSpeed);
					$('.modify-img label').text('Choisir une image');
					$('.preview-image').children('img').attr('src', '');
					$('.modify-img').removeClass('loaded');
					$('.selected-file').parent().removeClass('error');
					$('.selected-file').parent().removeClass('danger');
					$('.selected-file').parent().addClass('info');
					$('.selected-file').parent().children('i').removeClass('fa-exclamation-circle');
					$('.selected-file').parent().children('i').addClass('fa-info-circle');
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
						//$(this).children().children().children('textarea').text(placeholder)
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
					var defaultHeight = 'auto';
					editFormButton.each(function(){
						$(this).click(function(){
							$(this).parent().children('.edit-profil-form').fadeIn(250);
							$(this).parent().children('.edit-profil-form').children('p').children('span').text('Ajouter');
							if($(this).parent().children('.edit-profil-form').hasClass('last-page-form')){
								var longerPage = $('.profil-main').height() + $(this).parent().children('.last-page-form').height();
								$('.profil-main').css('height', longerPage + 'px');
							}
							$('.edit-darker').fadeIn(250);
						});
					});
					$('.edit-darker').click(function(){
						$(this).fadeOut(250);
						$('.edit-profil-form').fadeOut(250);
						$('.profil-main').css('height', defaultHeight);
					});
					$('.close-edit').click(function(){
						$('.edit-darker').fadeOut(250);
						$('.edit-profil-form').fadeOut(250);
						$('.profil-main').css('height', defaultHeight);
					});
				}();

				var editInfo = function(){
					var editLink = $('.edit-link');
					editLink.each(function(){
						var editLinkForm = $(this).parent().parent().parent().children('.modify-profil-form');
						$(this).click(function(){
							editLinkForm.fadeIn(250);
							$('.edit-darker').fadeIn(250);
						});
					});
				}();

				var removeInfo = function(){
					var removeLink = $('.remove-link');
					removeLink.each(function(){
						var ask = $(this).next('.remove-ask');
						$(this).click(function(){
							if(ask.hasClass('open')){
								ask.removeClass('open');
							}else{
								ask.addClass('open');
							}
							ask.children('div').click(function(){
								ask.removeClass('open');
							});
						});
					});
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

			var administrationContent = function(){
				var adminMenu = function(){
					var adminArrow = $('.admin-menu-title i');
					adminArrow.each(function(){
						var adminNav = $(this).parent().parent().parent().find('.admin-menu-content');
						$(this).click(function(){
							if(adminNav.hasClass('open')){
								adminNav.removeClass('open');
								adminNav.slideUp(150);
							}else{
								adminNav.addClass('open');
								adminNav.slideDown(150);
							}
						});
					});
				}();

				var adminSubmenu = function(){
					var hasChild = $('.has-child');
					hasChild.each(function(){
						var childSubmenu = $(this).find('.admin-menu-child');
						$(this).children('.has-child-link').click(function(e){
							e.preventDefault();
							if(childSubmenu.hasClass('open')){
								$(this).removeClass('submenu-active');
								childSubmenu.removeClass('open').slideUp(150);
							}else{
								$(this).addClass('submenu-active');
								childSubmenu.addClass('open').slideDown(150);
							}
						});
					});
				}();

				var adminTable = function(){
					$('.content-table-row').each(function(){
						$(this).append('<div class="clear"></div>');
					});
					$('.admin-container').each(function(){
						$(this).append('<div class="clear"></div>');
					});
					$('.content-table').each(function(){
						$(this).find('.content-table-row:last').addClass('last-item');
					});
					$('.content-table-row').each(function(){

						$(this).find('.content-cell:last').addClass('last-item');
					});
					$('.content-sort:odd').addClass('odd');
					$('.admin-home-table-row:odd').addClass('odd');
				}();

				var adminTableSort = function(pageNumber){
					$('.content-sort-table').each(function(){
					 	var currentPage = 0;
				    var numPerPage = pageNumber;
				    var $table = $(this);
				    $table.bind('repaginate', function() {
				      $table.find('.content-table-row').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
				    });
				    $table.trigger('repaginate');
				    var numRows = $table.find('.content-table-row').length;
				    var numPages = Math.ceil(numRows / numPerPage);
				    var $pager = $('<div class="pager"></div>');
				    for (var page = 0; page < numPages; page++) {
			        var pagination = $('<span class="page-number"></span>')
			        pagination.text(page + 1).bind('click', {
			          newPage: page
			        }, function(event) {
		            currentPage = event.data['newPage'];
		            $table.trigger('repaginate');
		            $(this).addClass('active').siblings().removeClass('active');
			        });
			        pagination.addClass('clickable');
			        $(document).find('.pager:last').remove();
			        $pager.append(pagination)
				    }
				    $pager.insertAfter($table.parent()).find('span.page-number:first').addClass('active');

				    $('.clickable').each(function(){
				    	var pageCurrent = $(this).text();
				    	$(this).click(function(){
				    		$('.page-current-number em').text(pageCurrent);
				    	});
				    });
					});
				}
				adminTableSort(10)
				$('.table-show').change(function(){
					adminTableSort($(this).val())
				})

				var pagesAll = $(document).find('.content-sort'),
						pageNumbersCurrent = $('.table-show').val();
				$('.table-search').keyup(function(){
					if($(this).val() != ''){
						adminTableSort(pagesAll.length);
					}else{
						adminTableSort(pageNumbersCurrent);					
					}
				});

				var adminTableSearch = function(){
					var sortLine = $('.content-sort'),
							tableSearch = $('.table-search')
					sortLine.each(function(){
						var $this = $(this);
						var matchContent = $(this).text();
						matchContent = matchContent.toLowerCase();
						tableSearch.keyup(function(){
							$this.addClass('concluent');
							var searchContent = $(this).val();	
							if(matchContent.search(searchContent) >= 0){
								$this.removeClass('unconcluent');
								$this.addClass('concluent');
							}else{
								$this.removeClass('concluent');								
								$this.addClass('unconcluent');								
							}
						});						
					});
				}();

				var adminValid = function(){
					var validLink = $('.content-cell ul li a');

					validLink.each(function(){
						var action = $(this).children('em').text(),
								controller = $(this).attr('href'),
								lineName = $(this).parent().parent().parent().parent('.content-table-row').find('.username').children().text()

						$(this).click(function(e){
							e.preventDefault();
							$('.action-name').text(action);
							$('.user-target').text(lineName);
							$('.box-valid a').attr('href', controller);
							$('.admin-valid').fadeIn(150);
						});

						$('.admin-valid').click(function(){
							$(this).fadeOut(150);
						});
					});
				}
				adminValid();

				var alphabetSort = function(){
					var headerCell = $('.content-table-header .content-cell');

					headerCell.each(function(){
						var lines = $('.content-sort'),
								underCell = $('.'+$(this).attr('id'));
						$(this).click(function(){
							var sortAlphabetical = function(a, b) {
					      return a.innerHTML.toLowerCase().localeCompare(b.innerHTML.toLowerCase());
					    }
					    var sortAnalphabetical = function(a, b) {
					      return b.innerHTML.toLowerCase().localeCompare(a.innerHTML.toLowerCase());
					    }

					    if($(this).hasClass('reversed-sort')){
					    	$('.content-table-header .content-cell').removeClass('reversed-sort');
					    	underCell.sort(sortAnalphabetical);
					    }else{
					    	$('.content-table-header .content-cell').addClass('reversed-sort');
					    	underCell.sort(sortAlphabetical);
					    }
					    adminTableSort(underCell.length);
					    $('.content-sort').removeClass('odd')
					    $('.content-sort-table .content-sort').remove();
					    for (var i = 0; i < underCell.length; i++){
					     	$('.content-sort-table').append($(underCell[i]).parent());
					    }
					    adminTableSort($('.table-show').val());
					    $('.content-sort:odd').addClass('odd');
					    adminValid();
						});
					});
				}();

				var adminForms = function(){
					$('.admin-content-content .d-row').each(function(){
						$(this).append('<div class="clear"></div>')
					});

					$('.admin-container .d-row').each(function(){
						$(this).addClass('clear');
					});

					$('.checkbox-label').each(function(){
						$(this).click(function(){
							if($(this).hasClass('checked')){
								$(this).removeClass('checked');
							}else{
								$(this).addClass('checked');
							}
						});
					});
					$('.radio-label').each(function(){
						$(this).click(function(){
							var otherLabel = $(this).parent().parent().parent('fieldset').find('label');
							otherLabel.removeClass('checked');
							$(this).addClass('checked');
						});
					});
				}();	

			}

			var notifications = function(){
				var notifs = $(document).find('.notification-bloc');
				var notifsItems = $(document).find('.notification');
				if(notifs.length >= 1){
					notifs.addClass('show');
					for(var i = 0; i < notifsItems.length; i++){
						$(notifsItems[i]).delay(1500).fadeIn(150);
						$(notifsItems[i]).css('transition-delay', 1 + (i*0.1) + 's');
						setTimeout(function(){ notifs.fadeOut(150); }, 1000 * notifsItems.length + 2000);
					}
				}
			}

			var todo = function(){
				var todoOpenning = function(){
					var todoProject = $('.todo-project');
					todoProject.each(function(){
						var openButton = $(this).find('.todo-project-open'),
								openButtonIcon = $(this).find('.todo-project-open i'),
								projectContent = $(this).find('.todo-project-content');
						openButton.click(function(){
							if(projectContent.hasClass('open')){
								projectContent.removeClass('open').slideUp(150);
								openButtonIcon.removeClass('fa-minus').addClass('fa-plus');
							}else{
								projectContent.addClass('open').slideDown(150);
								openButtonIcon.removeClass('fa-plus').addClass('fa-minus');
							}
						});
					});
				}();
			}

			var societyModule = function(){
				var societyMenuFix = function(){
					var societyMenu = $('.society-admin-menu'),
							societyLis = societyMenu.find('li');
							cl(societyLis)
					if(societyLis.length >= 9){
						societyMenu.addClass('scrollable');
					}
				}();

			}
		
	//execution

	infoUser();
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
	administrationContent();
	notifications();
	todo();
	societyModule();


	var responsive = function(){		
		if(windowWidth < 1100){			
			mobileInfoShow();
		}else if(windowWidth > 1100){	
			$('.main').removeClass('padded');
			wallImgSizer();
		}		

		/*if(windowWidth > 720){
			var profilPageHeight = $('.profil-sider').height() + 15 +'px';
			$('.profil-main').css('height', profilPageHeight);
		}*/

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