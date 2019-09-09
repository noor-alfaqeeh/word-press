<?php
	$tanawul_bakery_theme_color_first = get_theme_mod('tanawul_bakery_theme_color_first');

	$custom_css = '';

	if($tanawul_bakery_theme_color_first != false){
		$custom_css .='.header-menu, span.cart-value, .readbutton a:hover, #we-offer hr, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, nav.woocommerce-MyAccount-navigation ul li, .post-link a:hover, .post-info, #sidebox h2, button.search-submit:hover, .search-form button.search-submit, .copyright, .widget .tagcloud a:hover,.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .main-navigation.toggled-on > div > ul,button,input[type="button"],input[type="submit"],.prev.page-numbers:focus,.prev.page-numbers:hover,.next.page-numbers:focus,.next.page-numbers:hover{';
			$custom_css .='background-color: '.esc_html($tanawul_bakery_theme_color_first).';';
		$custom_css .='}';
	}
	if($tanawul_bakery_theme_color_first != false){
		$custom_css .=' .contact-detail i, span.carousel-control-prev-icon i:hover,span.carousel-control-next-icon i:hover, #we-offer p, .logo-text h1 a, a{';
			$custom_css .='color: '.esc_html($tanawul_bakery_theme_color_first).';';
		$custom_css .='}';
	}
	if($tanawul_bakery_theme_color_first != false){
		$custom_css .='.readbutton a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .post-link a:hover{';
			$custom_css .='border-color: '.esc_html($tanawul_bakery_theme_color_first).';';
		$custom_css .='}';
	}
	if($tanawul_bakery_theme_color_first != false){
		$custom_css .='.site-footer ul li a:hover{';
			$custom_css .='color: '.esc_html($tanawul_bakery_theme_color_first).'!important;';
		$custom_css .='}';
	}

	/*---------------------------Theme color option-------------------*/

	$tanawul_bakery_theme_color_second = get_theme_mod('tanawul_bakery_theme_color_second');

	if($tanawul_bakery_theme_color_second != false){
		$custom_css .='button:hover,button:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus, .site-footer, .main-navigation li li a:hover,.main-navigation li li a.focus, button:hover,#masthead{';
			$custom_css .='background-color: '.esc_html($tanawul_bakery_theme_color_second).';';
		$custom_css .='}';
	}
	if($tanawul_bakery_theme_color_second != false){
		$custom_css .='#we-offer h3, #we-offer h4 a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .blogger h3 a, .post-link a, .main-navigation li li:focus > a,h2.woocommerce-loop-product__title,.woocommerce div.product .product_title, .main-navigation a:hover, .main-navigation ul ul li a, #slider .inner_carousel h2, .readbutton a,#slider .inner_carousel p,#slider .inner_carousel h2, h1, h2, h3, h4, h5, h6, .page .panel-content .entry-title, .page-title, body.page:not(.tanawul-bakery-front-page) .entry-title{';
			$custom_css .='color: '.esc_html($tanawul_bakery_theme_color_second).';';
		$custom_css .='}';
	}
	if($tanawul_bakery_theme_color_second != false){
		$custom_css .='.main-navigation ul ul,.post-link a, #sidebox .widget, .readbutton a{';
			$custom_css .='border-color: '.esc_html($tanawul_bakery_theme_color_second).';';
		$custom_css .='}';
	}