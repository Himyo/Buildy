$(document).ready(
	function(){
		makeSlider($('.slider'));
	})

var images_total = 0
var current_image = 0;

function makeSlider(element){
	element.append('<div class="slides-container"></div>');
	element.children('img').each(
		function(index){
			console.log($(this).attr('src'));
			var src = $(this).attr('src');
			$(".slides-container").append('<div class="slide" style="background-image:url(\'' + src + '\'")></div>');
			element.addClass('slider');
			$(this).remove();
			images_total += 1;
		})
	element.append('<div class="nav"></div');
	$(".nav").append('<button class="nav-prev" onclick="prev();resetInterval()"></button>');
	$(".nav").append('<button class="nav-next" onclick="next();resetInterval()"></button>');
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
	$(".slides-container").on('transitionend',function(){
		enableNav();
	});

	if(current_image == images_total){
		var slide_1 = $($('.slide')[0]).clone();
		slide_1.attr('id','temp');
		$(".slides-container").append(slide_1);
		$(".slides-container").on('transitionend',function(){
			$(".slides-container").css('transition','none');
			current_image = 0;
			slide();
			$('.temp').remove();
			$(".slides-container").unbind( "transitionend" );
			setTimeout(function(){
				enableNav()
			},10)
		})
	}

	if(current_image == -1){
		var slide_end = $($('.slide')[images_total - 1]).clone();
		slide_end.attr('id','temp');
		$(".slides-container").prepend(slide_end);
		$(".temp").css({
			'position':'absolute',
			'width' : $('.slides-container').width() + 'px',
			'height' : $('.slides-container').height() + 'px',
			'top' : 0,
			'left' : - $('.slides-container').width() + 'px'
			});
		$(".slides-container").on('transitionend',function(){
			$(".slides-container").css('transition','none');
			current_image = images_total - 1;
			slide();
			$('.temp').remove();
			$(".slides-container").unbind( "transitionend" );
			setTimeout(function(){
				enableNav()
			},10)
		})
	}
	$('.slides-container').css('left', - current_image * $('.slides-container').width());
}

function enableNav(){
	$('.nav-prev').removeAttr('disabled');
	$('.nav-next').removeAttr('disabled');
	$('.nav').css('opacity', '1');
	$(".slides-container").css('transition','all 0.6s');
}

function disableNav(){
	$('.nav-prev').attr('disabled','');
	$('.nav-next').attr('disabled','');
	$('.nav').css('opacity', '0.5');
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
