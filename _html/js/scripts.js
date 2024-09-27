$(document).ready(function(){

	/*- header -*/	
	$(window).load(function(){
		$(".header").sticky({ topSpacing: 0 });
    });
		
	/*- down scroll -*/	
	var $page = $('html, body');
		$('.to-bottom, .products-link, .history__btn, .product-navi-panel a').click(function() {
	    $page.animate({
	        scrollTop: $($.attr(this, 'href')).offset().top
	    }, 700);
	    return false;
	});

	/*- animation -*/
	jQuery('.first-animation').addClass("invisible").viewportChecker({
		classToAdd: 'visible animated fadeInLeftBig',
		offset: 100    
	}); 

	jQuery('.second-animation').addClass("invisible").viewportChecker({
		classToAdd: 'visible animated fadeInRightBig',
		offset: 100    
	}); 

	jQuery('.third-animation').addClass("invisible").viewportChecker({
		classToAdd: 'visible animated fadeInUpBig',
		offset: 100    
	});  

	jQuery('.fourth-animation').addClass("invisible").viewportChecker({
		classToAdd: 'visible animated fadeInDownBig',
		offset: 100    
	});    
	
	/*- menu-btn -*/
	var siteToggle = $('.menu-btn'),
		siteMenu= $('.header__sub-menu');


	siteToggle.on('click', function(){
		$(this).toggleClass("collapsed");
		  siteMenu.toggleClass("show");
		$('body').toggleClass('overflow-hd');
	});

	/*- language-selection-*/
	$('.language-selection__text').click(function(e) {
		
		if($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
		return false;
	});

	/*- header__sub-menu__navi-*/
	$('.header__sub-menu__navi__opening').click(function(e) {
		
		if($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$('.header__sub-menu__navi .changed').removeClass('open');
			$(this).parent().addClass('open');
		}
	});

	/*- promo 
	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
		$(".promo__photo").css({
			transform: 'translate3d(0%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll/20)/100+')',
		});
	});-*/

	/*- promo__mov-slider -*/
	$('.promo__mov-slider').slick({
		autoplay: false,
  		autoplaySpeed: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		fade: true,
		infinite: true
	});

	/*- works-slider -*/
	$('.works-slider').slick({
		autoplay: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		fade: true,
		infinite: true
	});
	
	/*- page__top-panel -*/
	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
		$(".page__top-panel__photo").css({
			transform: 'translate3d(0%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll/20)/100+')',
		});
	});

	/*- presentation-product__promo -*/
	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
		$(".presentation-product__promo__photo").css({
			transform: 'translate3d(0%, -'+(scroll/100)+'%, 0) scale('+(100 + scroll/20)/100+')',
		});
	});

	/*- presentation-product__promo type-file -*/
	$('.type-file__input').change(function() {
	    if ($(this).val() != '') $(this).prev().text('Выбрано файлов: ' + $(this)[0].files.length);
	    else $(this).prev().text('Выберите файлы');
	});
	
	/*- product-slider -*/
	$('.product-slider__big').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		infinite: true,
		asNavFor: '.product-slider__small'
	});

	$('.product-slider__small').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		asNavFor: '.product-slider__big',
		dots: false,
		centerMode: false,
		infinite: true,
		focusOnSelect: true
	});

	/*- tabs -*/
	$(".gl-tabs .js-tabs-link").aniTabs();

	$(".windowsills-tabs .js-tabs-link").aniTabs();

	/*- accessories__slider -*/
	$('.accessories__slider').slick({
		arrows: false,
		adaptiveHeight: true,
		dots: true,
		infinite: true,
		speed: 500,
		fade: false,
		cssEase: 'linear'
	});

	/*- promo-slider -*/
	$('.promo-slider').slick({
		autoplay: true,
		autoplaySpeed: 6000,
		adaptiveHeight: true,
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		responsive: [
	    	{
			breakpoint: 767,
			settings: {
				adaptiveHeight: true
				}
	    	}
	  	]
	});

	/*- regional-offices-slider -*/
	$('.regional-offices-slider').slick({
		autoplay: true,
  		autoplaySpeed: 2000,
		arrows: false,
		dots: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			breakpoint: 991,
			settings: {
				slidesToShow: 2
				}
	    	},
	    	{
			breakpoint: 767,
			settings: {
				slidesToShow: 2
				}
	    	},
	    	{
			breakpoint: 540,
			settings: {
				slidesToShow: 1
				}
	    	}
	  	]
	});

	/*- partners-slider -*/
	$('.partners-slider').slick({
		arrows: true,
		dots: false,
		infinite: true,
		slidesToShow: 5,
		speed: 500,
		responsive: [
			{
			breakpoint: 991,
			settings: {
				arrows: true,
				slidesToShow: 4
				}
	    	},
	    	{
			breakpoint: 767,
			settings: {
				arrows: true,
				slidesToShow: 3
				}
	    	},
	    	{
			breakpoint: 580,
			settings: {
				arrows: true,
				slidesToShow: 2
				}
	    	}
	  	]
	});

	/*- type-opening-slider -*/
	$('.type-opening-slider').slick({
		arrows: true,
		dots: false,
		infinite: true,
		slidesToShow: 5,
		speed: 500,
		responsive: [
			{
			breakpoint: 991,
			settings: {
				arrows: true,
				slidesToShow: 5
				}
	    	},
	    	{
			breakpoint: 767,
			settings: {
				arrows: true,
				slidesToShow: 3
				}
	    	},
	    	{
			breakpoint: 580,
			settings: {
				arrows: true,
				slidesToShow: 2
				}
	    	}
	  	]
	});

	/*- product-navi -*/
	$('#pvh-profile').slick({
		arrows: false,
		dots: false,
		infinite: false,
		slidesToShow: 8,
		speed: 500,
		responsive: [
			{
			breakpoint: 1440,
			settings: {
				arrows: true,
				slidesToShow: 6
				}
	    	},
	    	{
			breakpoint: 1060,
			settings: {
				arrows: true,
				slidesToShow: 4
				}
	    	},
	    	{
			breakpoint: 860,
			settings: {
				arrows: true,
				slidesToShow: 3
				}
	    	},
	    	{
			breakpoint: 670,
			settings: {
				arrows: true,
				slidesToShow: 2
				}
	    	},
	    	{
			breakpoint: 360,
			settings: {
				arrows: true,
				slidesToShow: 1
				}
    		}
	  	]
	});

	/*- aluminium-profile -*/
	$('#aluminium-profile').slick({
		arrows: true,
		dots: false,
		infinite: false,
		slidesToShow: 7,
		speed: 500,
		responsive: [
			{
			breakpoint: 1440,
			settings: {
				arrows: true,
				slidesToShow: 6
				}
	    	},
	    	{
			breakpoint: 1060,
			settings: {
				arrows: true,
				slidesToShow: 4
				}
	    	},
	    	{
			breakpoint: 860,
			settings: {
				arrows: true,
				slidesToShow: 3
				}
	    	},
	    	{
			breakpoint: 670,
			settings: {
				arrows: true,
				slidesToShow: 2
				}
	    	},
	    	{
			breakpoint: 360,
			settings: {
				arrows: true,
				slidesToShow: 1
				}
    		}
	  	]
	});

	/*- gl-tabs-slider -*/
	$('.gl-tabs-slider').slick({
		arrows: true,
		dots: false,
		infinite: false,
		slidesToShow: 5,
		speed: 500,
		responsive: [
			{
			breakpoint: 1200,
			settings: {
				arrows: true,
				slidesToShow: 4
				}
	    	},
	    	{
			breakpoint: 930,
			settings: {
				arrows: true,
				slidesToShow: 3
				}
    		},
    		{
			breakpoint: 680,
			settings: {
				arrows: true,
				slidesToShow: 2
				}
    		}
	  	]
	});

	/*- advantages-slider -*/
	$('.advantages-slider').slick({
		arrows: false,
		autoplay: true,
  		autoplaySpeed: 2000,
		dots: true,
		infinite: true,
		slidesToShow: 3,
		speed: 500,
		responsive: [
			{
			breakpoint: 1199,
			settings: {
				slidesToShow: 2
				}
	    	},
	    	{
			breakpoint: 767,
			settings: {
				slidesToShow: 2
				}
	    	},
	    	{
			breakpoint: 580,
			settings: {
				adaptiveHeight: true,
				slidesToShow: 1
				}
	    	}
	  	]
	});

	// sliders
	var progressbar = $(".mry-slider-progress-bar");

	var swiper = new Swiper(".mry-main-slider", {
		autoplay: {
			delay: 3000,
			disableOnInteraction: false
		},
		loop: true,
		parallax: true,
		//mousewheel: true,
		//mousewheel: {
			//releaseOnEdges: true,
		//},
		keyboard: true,
		speed: 1200,
		navigation: {
			nextEl: '.mry-button-next',
			prevEl: '.mry-button-prev',
		},
		pagination: {
			el: '.mry-slider-pagination',
			clickable: true,
		},
		on: {
			init: function () {
				progressbar.removeClass("animate");
				progressbar.removeClass("active");
				progressbar.eq(0).addClass("animate");
				progressbar.eq(0).addClass("active");
			},
			slideChangeTransitionStart: function () {
				progressbar.removeClass("animate");
				progressbar.removeClass("active");
				progressbar.eq(0).addClass("active");
			},
			slideChangeTransitionEnd: function () {
				progressbar.eq(0).addClass("animate");
			}
		}
	});

	/*- to-top -*/
	$(window).scroll(function () {
		if ($(this).scrollTop() > 0) {
			$('.to-top').fadeIn();
		} else {
			$('.to-top').fadeOut();
		}
	});

	// to-top
	$('.to-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 900);
		return false;
	});

	/*- categories__list__all -*/
	$('.categories__list__all span').click(function(e) {
        if ($(this).html() == 'Посмотреть все') {
            $(this).html('Скрыть');
            $(this).parent().addClass('open');
            $(this).parents('.categories__list ul').first().find('li.categories__list__close').removeClass('categories__list__close').addClass('categories__list__open');
        } else {
            $(this).html('Посмотреть все');
            $(this).parent().removeClass('open');
            $(this).parents('.categories__list ul').first().find('li.categories__list__open').removeClass('categories__list__open').addClass('categories__list__close');
        }
        return false;
    });

	$('body').on('input', '#name', function(){
		this.value = this.value.replace(/[^a-zа-яё\s]/gi, '');
	});

	/*- phone -*/
	$.mask.definitions['9'] = false;
	$.mask.definitions['5'] = "[0-9]";
	$("#phone").mask("998(55) 555-55-55");

	/*- form -*/
	$('#callback').on('submit',function (e) {
		$.ajax({
			type: 'post',
			url: 'mail_callback.php',
			data: $('#callback').serialize(),
			success: function () {
				$('#modal').modal('show');
				$("#callback").trigger('reset')
			}
		});
        e.preventDefault();
    });

    $('#vacancy').on('submit',function (e) {
		$.ajax({
			type: 'post',
			url: 'mail_vacancy.php',
			data: $('#vacancy').serialize(),
			success: function () {
				$('#modal').modal('show');
				$("#vacancy").trigger('reset')
			}
		});
        e.preventDefault();
    });

    $('#contact').on('submit',function (e) {
		$.ajax({
			type: 'post',
			url: 'mail_contacts.php',
			data: $('#contact').serialize(),
			success: function () {
				$('#modal').modal('show');
				$("#contact").trigger('reset')
			}
		});
        e.preventDefault();
    });

	/*- frame -*/
	var iframe = $('#frame', parent.document.body);
    iframe.height($(document.body).height());

});