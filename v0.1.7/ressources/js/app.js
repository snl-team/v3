$(document).ready(function(){

	//global variables



	//global functions

		var cl = function(tolog){
			console.log(tolog)
		}

		var wallImgSorter = function(){
			$('.post-content').each(function(){
				var imgs = $(this).find('img');
				if(imgs.length == 2){
					imgs.parent().addClass('img-2')
				}else if(imgs.length == 3){
					imgs.parent().addClass('img-3')
				}if(imgs.length == 4){
					imgs.parent().addClass('img-4')
				}
				var lastImg = $(this).find('img:last');
				if(lastImg.parent().hasClass('img-3')){
					lastImg.parent().addClass('full-img')
				}
			});
		}

	//execution

	wallImgSorter();

});