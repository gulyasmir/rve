$(document).ready(function () {

		$('#opentext').click(function(){
			$('.box').addClass('box_open');
			$('.box_open').removeClass('box');
			$('#opentext').css('display','none');
			$('#closetext').css('display','block');
		});

		$('#closetext').click(function(){
			$('.box_open').addClass('box');
			$('.box').removeClass('box_open');
			$('#closetext').css('display','none');
			$('#opentext').css('display','block');
		});


	// Слайдер
	$('.staff').slick({
		nextArrow:'<button type="button" class="slick-next"><img src="/frontend/web/img/next.png" alt="Вперед"></button>',
		prevArrow: '<button type="button" class="slick-prev"><img src="/frontend/web/img/prev.png" alt="Назад"></button>',
		dots: true,
		centerMode: false, // Центрирывать активный элемент
 		centerPadding: '0', //
		infinite: false, //Бесконечная прокрутка
		slidesToShow: 6,  // Количество слайдов для показа
		slidesToScroll: 6, // Количество слайдов за скролл
		  responsive: [ // Адаптив
		    {
		      breakpoint: 1200,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 4,
		        infinite: false,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 992,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: false,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: false,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        infinite: false,
		        dots: true
		      }
		    }
		  ]
	});

	$('.product-slider').slick({
		nextArrow:'<button type="button" class="slick-next"><img src="/frontend/web/img/next.png" alt="Вперед"></button>',
		prevArrow: '<button type="button" class="slick-prev"><img src="/frontend/web/img/prev.png" alt="Назад"></button>',
		dots: true,
		centerMode: true, // Центрирывать активный элемент
 		centerPadding: '0', //
		infinite: false, //Бесконечная прокрутка
		slidesToShow: 1,  // Количество слайдов для показа
		slidesToScroll: 1
	});

	$('.mobile-slider').slick({
		nextArrow:'<button type="button" class="slick-next"><img src="/frontend/web/img/next.svg" alt="Вперед"></button>',
		prevArrow: '<button type="button" class="slick-prev"><img src="/frontend/web/img/back.svg" alt="Назад"></button>',
		dots: false,
		centerMode: true, // Центрирывать активный элемент
 		centerPadding: '0', //
		infinite: false, //Бесконечная прокрутка
		slidesToShow: 1,  // Количество слайдов для показа
		slidesToScroll: 1
	});

	var slide_count = $('.staff .slick-dots li:last-child button').text();
	$('.staff .slick-dots').prepend('<p class="st-count">' + slide_count + '</p>');
	$(window).resize(function () {
		if (!($('.staff .slick-dots p').is('.st-count'))) {
			var slide_count = $('.staff .slick-dots li:last-child button').text();
			$('.staff .slick-dots').prepend('<p class="st-count">' + slide_count + '</p>');
		};
		var slide_count = $('.staff .slick-dots li:last-child button').text();
		$('.staff .slick-dots li.st-count').text(slide_count);
	});

	var slide_count_2 = $('.product-slider .slick-dots li:last-child button').text();
	$('.product-slider .slick-dots').prepend('<p class="st-count">' + slide_count_2 + '</p>');
	$(window).resize(function () {
		if (!($('.product-slider .slick-dots p').is('.st-count'))) {
			var slide_count_2 = $('.product-slider .slick-dots li:last-child button').text();
			$('.product-slider .slick-dots').prepend('<p class="st-count">' + slide_count_2 + '</p>');
		};
		var slide_count_2 = $('.product-slider .slick-dots li:last-child button').text();
		$('.product-slider .slick-dots li.st-count').text(slide_count_2);
	});

	// top line
/*    $(window).scroll(function(){
	    if ($(this).scrollTop()>150) {
	       	$('.top-line').addClass('scroll');

					$('.top-line-brown').addClass('scroll');

	    	$('.product-page .search-btn img').attr("src", "img/magn.svg") // замена цвета значка поиска
	    } else {
	    	$('.product-page .search-btn img').attr("src", "img/black.svg") // замена цвета значка поиска
	    	$('.top-line').removeClass('scroll');
				$('.top-line-brown').removeClass('scroll');
	    }
	});
*/
	// main menu
	$("body").niceScroll({
		cursorcolor: "#000",
    	cursoropacitymin: 1
	});

	$('.bars').click(function () {
		if ($('.bars').hasClass("el-active")) {
			$('.header .search-btn img').attr("src", "/frontend/web/img/black.svg") // замена цвета значка поиска
			$('.bars').removeClass('el-active');
			$('.m-wrapp').removeClass('el-active');
			$("body").niceScroll();
			$(".m-wrapp__sub").getNiceScroll().resize();
		} else {
			$('header .search-btn img').attr("src", "/frontend/web/img/magn.svg") // замена цвета значка поиска
			$("body").niceScroll().hide();
			$('.bars').addClass('el-active');
			$('.m-wrapp').addClass('el-active');
			$(".m-wrapp__sub").getNiceScroll().resize();
		}
	});

	$('.bars1').click(function () {
		if ($('.bars1').hasClass("el-active")) {
			$('.header .search-btn img').attr("src", "/frontend/web/img/black.svg") // замена цвета значка поиска
			$('.bars1').removeClass('el-active');
			$('.m-wrapp').removeClass('el-active');
			$("body").niceScroll();
			$(".m-wrapp__sub").getNiceScroll().resize();
		} else {
			$('header .search-btn img').attr("src", "/frontend/web/img/magn.svg") // замена цвета значка поиска
			$("body").niceScroll().hide();
			$('.bars1').addClass('el-active');
			$('.m-wrapp').addClass('el-active');
			$(".m-wrapp__sub").getNiceScroll().resize();
		}
	});

	// Search
	$('.search-btn').click(function () {
		$('.search').addClass('el-active');
		$('.search').css('display', 'block');
		$('.search').animate({
			'width': '327px'
		}, 200);
	});
	$('.search__close').click(function () {
		$('.search').removeClass('el-active');
		$('.search').css({
			'display': 'none',
			'width': '100px'
		});
	});

	// Nice scroll
	$ (".m-wrapp__sub").niceScroll({
		cursorcolor : "#000000",
		cursorborder: "none"
	});
});
