/*
 * jQuery Denves Lite theme functions file
 * https://www.themeinprogress.com
 *
 * Copyright 2019, ThemeinProgress
 * Licensed under MIT license
 * https://opensource.org/licenses/mit-license.php
 */

jQuery.noConflict()(function($){

	"use strict";
	
/* ===============================================
   HEADER CART
   ============================================= */
	
	$('div.header-cart').hover(
		
		function () {
			$(this).children('div.header-cart-widget').stop(true, true).fadeIn(100);
		}, 
		function () {
			$(this).children('div.header-cart-widget').stop(true, true).fadeOut(400);		
		}
			
	);
	
/* ===============================================
   FIXED HEADER
   =============================================== */

	function denves_lite_header() {

		var menuHeight = $('#menu-wrapper').innerHeight();
		var headerHeight = $('#header').innerHeight() + $('#logo-wrapper').innerHeight();
	
		if( $(window).scrollTop() > headerHeight ) {
			$('#menu-wrapper').addClass('fixed');
			$('body').css({'padding-top': menuHeight});
		} else {
			$('#menu-wrapper').removeClass('fixed');
			$('body').css({'padding-top': 0});
		}
	
	}
	
	$( document ).ready(denves_lite_header);
	$( window ).scroll(denves_lite_header);
	$( window ).resize(denves_lite_header);

/* ===============================================
   SCROLL SIDEBAR
   =============================================== */

	$(document).ready(function() {

		$("#scroll-sidebar").niceScroll(".wrap", {
			cursorwidth: "5px",
			cursorborder: "1px solid #333",
			railpadding: {
				top: 0,
				left: 0,
				bottom: 0,
				right: 0
			}
		});

		$('nav#mobilemenu ul > li > a').click(function(){
			setTimeout(function(){
			  $("#scroll-sidebar").getNiceScroll().resize();
			}, 500);
		});
		
	});

	$(window).load(function() {

		$(".mobile-navigation").click(function() {

			$('#overlay-body').fadeIn(500).addClass('visible');
			$('body').addClass('overlay-active').addClass('no-scrolling');
			$('#wrapper').addClass('open-sidebar');

		});

		if ( $(window).width() < 992 ) {

			$("#overlay-body").swipe({
	
				swipeLeft:function() {
					$('#overlay-body').fadeOut(500);
					$('body').removeClass('overlay-active').removeClass('no-scrolling');
					$('#wrapper').removeClass('open-sidebar');
				},
	
				threshold:0
		
			});

			$("#sidebar-wrapper .mobile-navigation").click(function() {
				
				$('#overlay-body').fadeOut(600);
				$('body').removeClass('overlay-active').removeClass('no-scrolling');
				$('#wrapper').removeClass('open-sidebar');
		
			});

		} else if ( $(window).width() > 992 ) {

			$("#sidebar-wrapper .mobile-navigation, #overlay-body").click(function() {
				$('#overlay-body').fadeOut(600);
				$('body').removeClass('overlay-active').removeClass('no-scrolling');
				$('#wrapper').removeClass('open-sidebar');
			});

		}
		
	});

/* ===============================================
   Mobile menu
   =============================================== */

	$('nav#mobilemenu ul > li').each(function(){
		
		if( $('ul', this).length > 0 ) {
			
			$(this)
				.children('a')
				.append('<span class="sf-sub-indicator"><i class="fa fa-caret-down"></i></span>'); 
		
		}
	
	});

/* ===============================================
   Mobile menu 1
   =============================================== */

	$('nav#mobilemenu.mobile-menu-1 ul > li .sf-sub-indicator, nav#mobilemenu.mobile-menu-1 ul > li > ul > li .sf-sub-indicator ').click(function(e){
		
		e.preventDefault();

		if(
			$(this).closest('a').next('ul.sub-menu').css('display') === 'none' ||
			$(this).closest('a').next('ul.children').css('display') === 'none' ||
			$(this).next('ul.children').css('display') === 'none'
		) {	
			$(this).html('<i class="fa fa-caret-up"></i>');
		} else {	
			$(this).html('<i class="fa fa-caret-down"></i>');
		}
		
		$(this)
			.closest('a')
			.next('ul.sub-menu')
			.stop(true,false)
			.slideToggle(500);
	
		$(this)
			.closest('a')
			.next('ul.children')
			.stop(true,false)
			.slideToggle(500);
	
	});

/* ===============================================
   Mobile menu 2
   =============================================== */

	$('nav#mobilemenu.mobile-menu-2 > ul ').children('li').each(function(){
		if( $('ul', this).length > 0 ) {
			$(this).addClass('submenuitem-level-1'); 
		}
	});

	$('nav#mobilemenu.mobile-menu-2 ul > li > a').click(function(e){
		
		e.preventDefault();

		if(
			$(this).next('ul.sub-menu').css('display') === 'none' ||
			$(this).next('ul.children').css('display') === 'none'
		) {	
			
			$(this)
				.find('.sf-sub-indicator')
				.html('<i class="fa fa-caret-up"></i>');
			
			$('nav#mobilemenu.mobile-menu-2 > ul > li')
				.not($(this)
				.parents('.submenuitem-level-1:visible'))
				.children('a')
				.children('.sf-sub-indicator')
				.html('<i class="fa fa-caret-down"></i>');

			$('nav#mobilemenu.mobile-menu-2 > ul > li')
				.not($(this)
				.parents('.submenuitem-level-1:visible'))
				.find('ul.sub-menu')
				.slideUp(500)
				.find('.sf-sub-indicator')
				.html('<i class="fa fa-caret-down"></i>');

			$(this)
				.next('ul.sub-menu')
				.stop(true,false)
				.slideDown('slow');
			$(this)
				.next('ul.children')
				.stop(true,false)
				.slideDown(500);
			
			return false;

		} else {	
		
			if ( $(this).attr('href') === '#' ) {
				
				$(this)
					.find('.sf-sub-indicator')
					.html('<i class="fa fa-caret-down"></i>');
				
				$(this)
					.next('ul')
					.stop(true,false)
					.slideUp(500);
				
				return false;

			} else {
				
				window.location.href = $(this).attr('href');
				return true;
			
			}

		}

	});

/* ===============================================
   Header search 
   =============================================== */
	
	$('.header-search i').click(function(){

		$(this).prev('.search-form').find('input[type=text]').focus().val('');

		if( !$('.header-search .search-form').hasClass('is-open')) {
			
			$('.header-search .search-form').addClass('is-open');
			$('body').addClass('no-scrolling');
			return false;
		
		} else {	
			
			$('.header-search .search-form').removeClass('is-open');
			$('body').removeClass('no-scrolling');
		
		}

    });


/* ===============================================
   Footer fix
   =============================================== */

	function denves_lite_footer() {
	
		var footerHeight = $('#footer').innerHeight();
		$('#wrapper').css({'padding-bottom':footerHeight});
	
	}
	
	$( document ).ready(denves_lite_footer);
	$( window ).resize(denves_lite_footer);

/* ===============================================
   Main menu
   =============================================== */

	$('nav.header-menu li').hover(
		
		function () {
			$(this).children('ul').stop(true, true).fadeIn(100);
		}, 
		function () {
			$(this).children('ul').stop(true, true).fadeOut(400);		
		}
			
	);

/* ===============================================
   Scroll to top Plugin
   =============================================== */

	$(window).scroll(function() {
		
		if( $(window).scrollTop() > 400 ) {
			$('#back-to-top').fadeIn(500);
		} else {
			$('#back-to-top').fadeOut(500);
		}
		
	});

	$('#back-to-top').click(function(){
		$("html, body").animate({scrollTop: 0}, 700);
		return false;
	});

/* ===============================================
   Masonry
   =============================================== */

	function denves_lite_masonry() {
		
		$('.masonry').imagesLoaded(function () {
	
			$('.masonry').masonry({
				itemSelector: '.masonry-item',
				isAnimated: true
			});
	
		});

	}
   
	$(document).ready(function(){
		denves_lite_masonry();
	});

	$(window).resize(function(){
		denves_lite_masonry();
	});

/* ===============================================
   fitVids
   =============================================== */

	function denves_lite_embed() {

		$('#wrapper').imagesLoaded(function () {
			$('.embed-container, .video-container, .maps-container').fitVids();
			denves_lite_masonry();
		});
		
	}

	$(window).load(denves_lite_embed);
	$(document).ready(denves_lite_embed);

/* ===============================================
   Swipebox gallery
   =============================================== */

	$(document).ready(function(){
		
		var counter = 0;

		$('div.gallery').each(function(){
			
			counter++;
			
			$(this).find('.swipebox').attr('data-rel', 'gallery-' + counter );
		
		});
		
		$('.swipebox').swipebox();

	});

/* ===============================================
   OWL CAROUSEL
   ============================================= */

	$(document).ready(function(){

	/* ===============================================
		HOMEPAGE CAROUSEL
		============================================= */
	
		$('.owl-carousel-slideshow').each(function(){
	
			var mobilecolums = 1;
			var colums = parseInt($(this).attr('data-columns'));
			if ( colums >= 3 ) { mobilecolums = 2 ;}
	
			$(this).children('.owl-home-slideshow').owlCarousel({
			
				items:colums,
				nav:true,
				dots:false,
				margin:10,
				loop:true,
				stagePadding: 50,
				navText:[
					'<div class="owl-carousel-arrow prev-arrow"><span class="dashicons dashicons-arrow-left-alt"></span></div>',
					'<div class="owl-carousel-arrow next-arrow"><span class="dashicons dashicons-arrow-right-alt"></span></div>'
				],
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:mobilecolums,
					},
					992:{
						items:colums,
					}
				}
			});
		
		});
		
	});

});          