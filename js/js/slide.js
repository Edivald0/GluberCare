$(document).ready(function(){
	var imgPos = 1;
	var imgItems = $('.slider li').length;
	for (var i = 1; i <= imgItems; i++) {	
		$('.pagination').append('<li><i class="fa fa-circle"></i></li>');
	}			

	$('.slider li').hide();
	$('.slider li:first').show();
	$('.pagination li:first').css({'color': '#CD6E2E'});

	$('.pagination li').click(pagination);
	$('.right-slide i').click(nextSlider);
	$('.left-slide i').click(prevSlider);

	setInterval(function(){
		nextSlider();
	}, 6000);

	function pagination()
	{
		var paginationPos = $(this).index() + 1;
		$('.slider li').hide();
		$('.slider li:nth-child('+ paginationPos +')').fadeIn(0);
		$('.pagination li').css({'color': '#858585'});
		$(this).css({'color': '#CD6E2E'});
		imgPos = paginationPos;
	}

	function nextSlider()
	{
		if (imgPos >= imgItems) {
			imgPos = 1;
		} else{
			imgPos ++;
		}
		$('.pagination li').css({'color': '#858585'});
		$('.pagination li:nth-child('+ imgPos + ')').css({'color': '#CD6E2E'});
		$('.slider li').hide();
		$('.slider li:nth-child('+ imgPos +')').fadeIn(0);
	}

	function prevSlider()
	{
		if (imgPos <= 1) {
			imgPos = imgItems;
		} else{
			imgPos --;
		}
		$('.pagination li').css({'color': '#858585'});
		$('.pagination li:nth-child('+ imgPos + ')').css({'color': '#CD6E2E'});
		$('.slider li').hide();
		$('.slider li:nth-child('+ imgPos +')').fadeIn(0);
	}

/************************/
/*	Slideshow mobile	*/
/************************/

	var imgPos_mobile = 1;
	var imgItems_mobile = $('.slider li').length;
	for (var i = 1; i <= imgItems_mobile; i++) {	
		$('.pagination-mobile').append('<li><i class="fa fa-circle"></i></li>');
	}			

	$('.slider-mobile li').hide();
	$('.slider-mobile li:first').show();
	$('.pagination-mobile li:first').css({'color': '#CD6E2E'});

	$('.pagination-mobile li').click(pagination_mobile);
	$('.right-slide-mobile i').click(nextSlider_mobile);
	$('.left-slide-mobile i').click(prevSlider_mobile);

	setInterval(function(){
		nextSlider_mobile();
	}, 6000);

	function pagination_mobile()
	{
		var paginationPos_mobile = $(this).index() + 1;
		$('.slider-mobile li').hide();
		$('.slider-mobile li:nth-child('+ paginationPos_mobile +')').fadeIn(0);
		$('.pagination-mobile li').css({'color': '#858585'});
		$(this).css({'color': '#CD6E2E'});
		imgPos_mobile = paginationPos_mobile;
	}

	function nextSlider_mobile()
	{
		if (imgPos_mobile >= imgItems_mobile) {
			imgPos_mobile = 1;
		} else{
			imgPos_mobile ++;
		}
		$('.pagination-mobile li').css({'color': '#858585'});
		$('.pagination-mobile li:nth-child('+ imgPos_mobile + ')').css({'color': '#CD6E2E'});
		$('.slider-mobile li').hide();
		$('.slider-mobile li:nth-child('+ imgPos_mobile +')').fadeIn(0);
	}

	function prevSlider_mobile()
	{
		if (imgPos_mobile <= 1) {
			imgPos_mobile = imgItems_mobile;
		} else{
			imgPos_mobile --;
		}
		$('.pagination-mobile li').css({'color': '#858585'});
		$('.pagination-mobile li:nth-child('+ imgPos_mobile + ')').css({'color': '#CD6E2E'});
		$('.slider-mobile li').hide();
		$('.slider-mobile li:nth-child('+ imgPos_mobile +')').fadeIn(0);
	}
});





