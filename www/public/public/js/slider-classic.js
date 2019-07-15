$(document).ready(
	function(){
		makeSlider($('.slider-classic'));
	})

var images_total = 0
var current_image = 0;

function makeSlider(element){
	element.append('<div class="slides-container-classic"></div>');
	element.children('img').each(
		function(index){
			console.log($(this).attr('src'));
			var src = $(this).attr('src');
			$(".slides-container-classic").append('<div class="slide-classic" style="background-image:url(\'' + src + '\'")></div>');
			element.addClass('slider');
			$(this).remove();
			images_total += 1;
		})
	element.append('<div class="nav-classic"></div');
	$(".nav-classic").append('<button class="nav-prev-classic" onclick="prev();resetInterval()"></button>');
	$(".nav-classic").append('<button class="nav-next-classic" onclick="next();resetInterval()"></button>');
}

function next(){
	current_image += 1;
	slide();
}

function prev(){
	current_image -= 1;
	slide();
}

function slide(){
	disableNav();
	$(".slides-container-classic").on('transitionend',function(){
		enableNav();
	});

	if(current_image == images_total){
		var slide_1 = $($('.slide-classic')[0]).clone();
		slide_1.attr('id','temp');
		$(".slides-container-classic").append(slide_1);
		$(".slides-container-classic").on('transitionend',function(){
			$(".slides-container-classic").css('transition','none');
			current_image = 0;
			slide();
			$('.temp').remove();
			$(".slides-container-classic").unbind( "transitionend" );
			setTimeout(function(){
				enableNav()
			},10)
		})
	}

	if(current_image == -1){
		var slide_end = $($('.slide-classic')[images_total - 1]).clone();
		slide_end.attr('id','temp');
		$(".slides-container-classic").prepend(slide_end);
		$(".temp").css({
			'position':'absolute',
			'width' : $('.slides-container-classic').width() + 'px',
			'height' : $('.slides-container-classic').height() + 'px',
			'top' : 0,
			'left' : - $('.slides-container-classic').width() + 'px'
			});
		$(".slides-container").on('transitionend',function(){
			$(".slides-container").css('transition','none');
			current_image = images_total - 1;
			slide();
			$('.temp').remove();
			$(".slides-container-classic").unbind( "transitionend" );
			setTimeout(function(){
				enableNav()
			},10)
		})
	}
	$('.slides-container-classic').css('left', - current_image * $('.slides-container-classic').width());
}

function enableNav(){
	$('.nav-prev-classic').removeAttr('disabled');
	$('.nav-next-classic').removeAttr('disabled');
	$('.nav-classic').css('opacity', '1');
	$(".slides-container-classic").css('transition','all 0.6s');
}

function disableNav(){
	$('.nav-prev-classic').attr('disabled','');
	$('.nav-next-classic').attr('disabled','');
	$('.nav-classic').css('opacity', '0.5');
}

var interval =setInterval(function(){
	next();
},4000);

function resetInterval(){
	clearInterval(interval);
	interval =setInterval(function(){
		next();
	},4000);
}
