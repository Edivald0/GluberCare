

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
	$('.right i').click(nextSlider);
	$('.left i').click(prevSlider);


	setInterval(function(){
		nextSlider();
	}, 15000);


	function pagination()
	{

		var paginationPos = $(this).index() + 1;
		
		$('.slider li').hide();
		//$('.slider li:nth-child(2)').fadeIn();	//muestra la diapositiva 2 cada que se le da clic al circulo
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
		$('.pagination li:nth-child('+ imgPos+ ')').css({'color': '#CD6E2E'});

		$('.slider li').hide();
		//$('.slider li:nth-child(2)').fadeIn();
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
		$('.pagination li:nth-child('+ imgPos+ ')').css({'color': '#CD6E2E'});

		$('.slider li').hide();
		//$('.slider li:nth-child(2)').fadeIn();
		$('.slider li:nth-child('+ imgPos +')').fadeIn(0);
	}

	});