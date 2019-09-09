<?php

/**
 * Load all widget areas
 */

if (!function_exists('denves_lite_loadwidgets')) {

	function denves_lite_loadwidgets() {

		register_sidebar(array(
		
			'name' => esc_html__('Side widget area','denves-lite'),
			'id'   => 'denves-lite-side-widget-area',
			'description'   => esc_html__('This widget area will be shown after the content.', 'denves-lite'),
			'before_widget' => '<div id="%1$s" class="post-article  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

		register_sidebar(array(
		
			'name' => esc_html__('Banner widget area','denves-lite'),
			'id'   => 'denves-lite-banner-widget-area',
			'description'   => esc_html__('This widget area will be shown near the logo (Recommended for the image widget).', 'denves-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="no-padding">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));
	
		register_sidebar(array(
		
			'name' => esc_html__('Top widget area','denves-lite'),
			'id'   => 'denves-lite-top-widget-area',
			'description'   => esc_html__('This widget area will be shown at the top of your content (Recommended for Revolution Slider).', 'denves-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Header widget area','denves-lite'),
			'id'   => 'denves-lite-header-widget-area',
			'description'   => esc_html__('This widget area will be shown before the content.', 'denves-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

		register_sidebar(array(

			'name' => esc_html__('Bottom widget area','denves-lite'),
			'id'   => 'denves-lite-bottom-widget-area',
			'description'   => esc_html__('This widget area will be shown at the bottom of your content', 'denves-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Footer widget area','denves-lite'),
			'id'   => 'denves-lite-footer-widget-area',
			'description'   => esc_html__('This widget area will be shown after the content.', 'denves-lite'),
			'before_widget' => '<div id="%1$s" class="col-md-3 %2$s"><div class="widget-box">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

	}

	add_action( 'widgets_init', 'denves_lite_loadwidgets' );

}

?>