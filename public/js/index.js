var main = function () 
 	{
 		$('.trip').click(function()
 			{
				$('.active-photo').removeClass('active-photo');
				$(this).addClass('active-photo');
			}
		);

 		$('.arrow-next').click(function () 
 			{
 				var currentSlide = $('.active-photo').find('.active-slide');
 				var nextSlide = currentSlide.next();
 				// var currentDot = $('.active-dot');
 				// var nextDot = currentDot.next();
 				if (nextSlide.length === 0) 
 					{
 						nextSlide = $('.active-photo').find('.slide').first();
 						// nextDot = $('.dot').first();
 					}
 				currentSlide.removeClass('active-slide');
 				nextSlide.addClass('active-slide');
 				// currentDot.removeClass('active-dot');
 				// nextDot.addClass('active-dot');
 			}
 		);

 		$('.arrow-prev').click(function () 
 			{
 				var currentSlide = $('.active-photo').find('.active-slide');
 				var prevSlide = currentSlide.prev();
 				// var currentDot = $('.active-dot');
 				// var prevDot = currentDot.prev(); 
				if (prevSlide.length === 0) 
					{
						prevSlide = $('.active-photo').find('.slide').last();
						// prevDot = $('.dot').last();
					}
				currentSlide.removeClass('active-slide');
				prevSlide.addClass('active-slide');
					// currentDot.removeClass('active-dot');
					// prevDot.addClass('active-dot'); 
 			}
 		);
 	};

$(document).ready(main); 