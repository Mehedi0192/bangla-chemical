if(! Modernizr.objectfit) {
$('.product-post-img').each(function () {
var $container = $(this),
imgUrl = $container.find('img').prop('src');
// $container.addClass('');
if(imgUrl) {
// debugger;

$container.addClass('compat-object-fit');
$container.css('backgroundImage', 'url(' + imgUrl + ')');
// alert('dfdfd');
// alert(imgUrl);
}
});
}

$(document).ready(function() {
	"use strict";

	
	// animate elements on scroll
	if ($('.on-reval').length > 0) {
		window.sr=ScrollReveal();sr.reveal(".on-reval",{reset:true,duration:500,viewOffset:{top:0}});
	}


	var windowWidth = $(window).width();


	// Dropdown select init
	$('.dropdown-select').selectpicker({
		container:'body'
	});

	// add this class to animate scroll to specific section
	$('.linkto').on('click', function(e) {
		var $this = $(this);
		$('html, body').stop().animate({
			scrollTop: $($this.attr('href')).offset().top
		}, 1000, 'easeInOutQuint');
		e.preventDefault();
	});


	// Current Year
	var current_year = new Date()
	$(".copyright-year").text(current_year.getFullYear());


	
	// close sidebar before changing page
	$(".item-submenu li a").on('click', function(e){
		e.preventDefault();
		e.stopPropagation();
		var $link_url = $(this).attr('href');


		$('html').removeClass("sidebar-is-show");
		$('#submenus_side').removeClass('side-is-show').addClass('side-is-hide');

		setTimeout(function(){
			location.href = $link_url;
		}, 700);

	});

	$('.navbar-overlay').on('click', function(e){
	    if ($('html').hasClass('sidebar-is-show'))
	    {
	        $('html').removeClass('sidebar-is-show overflow-fixed');
	        $('html').removeClass('overflow-hidden');
			$('.charkit-navbar').removeClass('opened-charkit-navbar');
			$('.mobile-nav').removeClass('open');
			$('.left-side-navbar .openedlink-submenu').removeClass('openedlink-submenu');
			$('#submenus_side').removeClass('side-is-show').addClass('side-is-hide');
			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');
			$('#submenus_side').hide(0);
		}
	});

	

	if (windowWidth < 991) {
		$('.navbar-toggle').on('click', function(event) {
			$('html').toggleClass('sidebar-is-show overflow-fixed');
			$('.charkit-navbar').toggleClass('opened-charkit-navbar');
			$('.mobile-nav').toggleClass('open');

			$('#submenus_side').removeClass('side-is-show').addClass('side-is-hide');
			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');
			$('#submenus_side').hide(0);
		});
		// Add active clase to sidebar menu when panel is shown
		$(".left-side-navbar li.has-submenu a").on('click', function(e){
			$(this).parent().addClass('openedlink-submenu');
			$('.left-side-navbar .openedlink-submenu').removeClass('openedlink-submenu');
			
			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');

			$('#submenus_side').show(0);
			if($('#submenus_side').hasClass('side-is-hide'))
			{
				$('#submenus_side').removeClass('side-is-hide').addClass('side-is-show');
			}
			$('#submenus_side .item-submenu[data-submenu="'+ $(this).data('submenu') +'"]').removeClass('is-hide').addClass('is-show');
		});

	} else {
		$('.navbar-toggle').on('click', function(event) {
			
			if($('html').hasClass('touch')){
				$('html').toggleClass('sidebar-is-show overflow-fixed');
			} else {
				$('html').toggleClass('sidebar-is-show overflow-hidden');
			}

			$('.charkit-navbar').toggleClass('opened-charkit-navbar');
			$('.mobile-nav').toggleClass('open');

			$('#submenus_side').removeClass('side-is-show').addClass('side-is-hide');
			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');
			$('#submenus_side').hide(0);
		});
		// Add active clase to sidebar menu when panel is shown
		$(".left-side-navbar li.has-submenu a").on('click', function(e){
			$('.left-side-navbar .openedlink-submenu').removeClass('openedlink-submenu');
			$(this).parent().addClass('openedlink-submenu');
			

			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');

			$('#submenus_side').show(0);
			if($('#submenus_side').hasClass('side-is-hide'))
			{
				if($('html').hasClass('touch')){
					$('html').addClass("sidebar-is-show overflow-fixed");
				} else {
					$('html').addClass("sidebar-is-show overflow-hidden");
				}
				$('.charkit-navbar').addClass('opened-charkit-navbar');
				$('#submenus_side').removeClass('side-is-hide').addClass('side-is-show');
			}
			$('#submenus_side .item-submenu[data-submenu="'+ $(this).data('submenu') +'"]').removeClass('is-hide').addClass('is-show');
		});
	}

		if (windowWidth > 1380) {
		$(".submenus--close").on('click', function(){
			$('html').removeClass('sidebar-is-show overflow-fixed');
			$('html').removeClass('sidebar-is-show overflow-hidden');
			
			$('.charkit-navbar').removeClass('opened-charkit-navbar');
			$('#submenus_side').removeClass('side-is-show').addClass('side-is-hide');
			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');
			$('.left-side-navbar .openedlink-submenu').removeClass('openedlink-submenu');
			$('#submenus_side').hide(0);
		});
	}
	else if (windowWidth < 1380 && windowWidth > 991){
		$(".submenus--close").on('click', function(){
			$('html').removeClass('sidebar-is-show overflow-fixed');
			$('html').removeClass('sidebar-is-show overflow-hidden');
			$('.charkit-navbar').removeClass('opened-charkit-navbar');
			$('#submenus_side').removeClass('side-is-show').addClass('side-is-hide');
			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');
			$('.left-side-navbar .openedlink-submenu').removeClass('openedlink-submenu');
			$('#submenus_side').hide(0);
		});
	} else if (windowWidth < 991){
		$(".submenus--close").on('click', function(){
			$('.charkit-navbar').removeClass('opened-charkit-navbar');
			$('#submenus_side').removeClass('side-is-show').addClass('side-is-hide');
			$('#submenus_side').find($('.item-submenu')).removeClass('is-show').addClass('is-hide');
			$('.left-side-navbar .openedlink-submenu').removeClass('openedlink-submenu');
			$('#submenus_side').hide(0);
		});
	}



	/* ============ Change object-fit if IE ============ */
	var isIE = !!navigator.userAgent.match(/Trident/g) || !!navigator.userAgent.match(/MSIE/g);
	if(isIE){
		// convert object-fit to background
		$('img.objFit').each(function(){
			var imgSrc = $(this).attr('src');
			var fitType = 'cover';

			if($(this).data('fit-type')) {
				fitType = $(this).data('fit-type');
			}

			$(this).parent().css({ 'background' : 'transparent url("'+imgSrc+'") no-repeat center center/'+fitType, });
			$(this).remove();
		});
	}

	//open the lateral panel
	$('.open-cart').on('click', function(event){
		event.preventDefault();
		$('.cart-panel').show(0);
		$('.cart-panel').addClass('is-visible');
		$('html').addClass('overflow-hidden');
	});
	//clode the lateral panel
	$('.cart-panel').on('click', function(event){
		if( $(event.target).is('.cart-panel') || $(event.target).is('.close-cart') ) {
			$('.cart-panel').removeClass('is-visible');
			$('html').removeClass('overflow-hidden');
			event.preventDefault();
		}
	});



	//$(".cart-items-btn").on('click', function () {
	  
	//	$(".cart-items").fadeOut(500, function(){
	//		$(".request-form").fadeIn(500);
	//		$(".cart-items-btn").addClass('hidden');
	//		$(".form-submit-btn").removeClass('hidden');
	//	});
	//});

	//$(".form-submit-btn").on('click', function() {
	//	// $("#thankyou_name").html($('#first_name').val() + $('#last_name').val());
	//	$(".request-form").fadeOut(500, function(){
	//		$(".thankyou-block").fadeIn(500);
	//		$(".form-submit-btn").addClass('hidden');
	//		$(".thnx-btn").removeClass('hidden');
	//	});
	//});


	//$(".thnx-btn").on('click', function() {

	//	$('.cart-panel').removeClass('is-visible');
	//	$('html').removeClass('overflow-hidden');
		
	//	$(".thankyou-block").fadeOut(500, function(){
	//		$(".cart-items").fadeIn(500);
	//		$(".thnx-btn").addClass('hidden');
	//		$(".cart-items-btn").removeClass('hidden');
	//		// $("#thankyou_name").text('');
	//		$("#request_form")[0].reset();
	//	});
	//});

	$(".mobile-navbar").autoHidingNavbar();
});