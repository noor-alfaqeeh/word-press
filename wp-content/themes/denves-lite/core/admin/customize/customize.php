<?php

/**
 * Array with the list of all options of Denves Lite
 */

if (!function_exists('denves_lite_customize_panel_function')) {

	function denves_lite_customize_panel_function() {
		
		$theme_panel = array ( 

			/* Support section */ 

			array(
			
				'title' => esc_html__( 'Upgrade to Denves Premium','denves-lite'),
				'id' => 'denves-lite-customize-info',
				'type' => 'denves-lite-customize-info',
				'section' => 'denves-lite-customize-info',
				'priority' => '08',

			),

			/* Colors */ 
	
			array(
					
				'label' => esc_html__('Logo text color','denves-lite'),
				'description' => esc_html__('Choose your custom color for the logo.','denves-lite'),
				'id' => 'denves_lite_logo_text_color',
				'type' => 'color',
				'section' => 'colors',
				'std' => '#616161',
			),

			/* WooCommerce > Denves Lite settings */ 

			array( 

				'title' => esc_html__( 'Denves Lite settings','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the settings of WooCommerce.','denves-lite'),
				'type' => 'section',
				'id' => 'woocommerce_section',
				'panel' => 'woocommerce',
				'priority' => '21',

			),

			array(
				
				'label' => esc_html__('WooCommerce header cart','denves-lite'),
				'description' => esc_html__('Do you want to show the header cart?','denves-lite'),
				'id' => 'denves_lite_enable_woocommerce_header_cart',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,
			
			),

			array(
				
				'label' => esc_html__( 'Cross sell products','denves-lite'),
				'description' => esc_html__( 'Do you want to display the cross sell products on cart page?','denves-lite'),
				'id' => 'denves_lite_enable_woocommerce_cross_sell_cart',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,
			
			),

			array(
				
				'label' => esc_html__( 'Related products','denves-lite'),
				'description' => esc_html__( 'Do you want to display the related products on product page?','denves-lite'),
				'id' => 'denves_lite_enable_woocommerce_related_products',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,
			
			),

			array(
				
				'label' => esc_html__( 'Up sell products','denves-lite'),
				'description' => esc_html__( 'Do you want to display the up sell products on product page?','denves-lite'),
				'id' => 'denves_lite_enable_woocommerce_upsell_products',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,
			
			),
			
			array(
				
				'label' => esc_html__( 'WooCommerce linkable product thumbnails','denves-lite'),
				'description' => esc_html__( 'Do you want to make linkable the product thumbnails on WooCommerce category pages?','denves-lite'),
				'id' => 'denves_lite_enable_woocommerce_linkable_product_thumbnails',
				'type' => 'checkbox',
				'section' => 'woocommerce_section',
				'std' => false,
			
			),

			array(
				
				'label' => esc_html__('WooCommerce Category Layout','denves-lite'),
				'description' => esc_html__('Select a layout for the woocommerce categories.','denves-lite'),
				'id' => 'denves_lite_woocommerce_category_layout',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','denves-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','denves-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','denves-lite'),
				),
				
				'std' => 'right-sidebar',
			
			),

			/* Main Settings */ 

			array( 
				
				'title' => esc_html__( 'Denves Lite Main Settings','denves-lite'),
				'description' => esc_html__( 'Denves Lite Main Settings','denves-lite'),
				'type' => 'panel',
				'id' => 'general_panel',
				'priority' => '10',
				
			),

			/* Main Settings > Color scheme*/ 

			array( 

				'title' => esc_html__( 'Color Scheme','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the color scheme of Denves Lite.','denves-lite'),
				'type' => 'section',
				'panel' => 'general_panel',
				'priority' => '11',
				'id' => 'colorscheme_section',

			),

			array(
				
				'label' => esc_html__( 'Body Color Schemes','denves-lite'),
				'description' => esc_html__('Choose your body color scheme.','denves-lite'),
				'id' => 'denves_lite_skin',
				'type' => 'select',
				'section' => 'colorscheme_section',
				'options' => array (
				   'cyan' => esc_html__( 'Cyan','denves-lite'),
				   'orange' => esc_html__( 'Orange','denves-lite'),
				   'blue' => esc_html__( 'Blue','denves-lite'),
				   'red' => esc_html__( 'Red','denves-lite'),
				   'pink' => esc_html__( 'Pink','denves-lite'),
				   'purple' => esc_html__( 'Purple','denves-lite'),
				   'yellow' => esc_html__( 'Yellow','denves-lite'),
				   'green' => esc_html__( 'Green','denves-lite'),
				   'black' => esc_html__( 'Black','denves-lite'),
				),
				
				'std' => 'orange',
			
			),

			/* Main Settings > Page width */ 

			array( 

				'title' => esc_html__( 'Page width','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the page width of Denves Lite.','denves-lite'),
				'type' => 'section',
				'id' => 'pagewidth_section',
				'panel' => 'general_panel',
				'priority' => '11',

			),

			array( 

				'label' => esc_html__( 'Screen greater than 768px','denves-lite'),
				'description' => esc_html__( 'Set a width, for a screen greater than 768 pixel (for example 750 and not 750px ) ','denves-lite'),
				'id' => 'denves_lite_screen1',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '750',

			),

			array( 

				'label' => esc_html__( 'Screen greater than 992px','denves-lite'),
				'description' => esc_html__( 'Set a width, for a screen greater than 992 pixel (for example 940 and not 940px ) ','denves-lite'),
				'id' => 'denves_lite_screen2',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '970',

			),

			array( 

				'label' => esc_html__( 'Screen greater than 1200px','denves-lite'),
				'description' => esc_html__( 'Set a width, in px, for a screen greater than 1200 pixel (for example 1170 and not 1170px ) ','denves-lite'),
				'id' => 'denves_lite_screen3',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '1170',

			),

			/* Main Settings > Mobile menu */ 

			array( 

				'title' => esc_html__( 'Mobile menu','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the settings of the mobile menu.','denves-lite'),
				'type' => 'section',
				'id' => 'mobile_menu_section',
				'panel' => 'general_panel',
				'priority' => '12',

			),
			
			array(
				
				'label' => esc_html__('Sub items','denves-lite'),
				'description' => esc_html__('How to open the sub items?','denves-lite'),
				'id' => 'denves_lite_mobile_menu',
				'type' => 'select',
				'section' => 'mobile_menu_section',
				'options' => array (
				   'mobile-menu-1' => esc_html__( 'Clicking on the down arrow','denves-lite'),
				   'mobile-menu-2' => esc_html__( 'Clicking on the whole link','denves-lite'),
				),
				'std' => 'mobile-menu-1',
			
			),

			/*Main Settings > General settings */ 
			
			array( 

				'title' => esc_html__( 'General settings','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the general settings of Denves Lite.','denves-lite'),
				'type' => 'section',
				'id' => 'settings_section',
				'panel' => 'general_panel',
				'priority' => '13',

			),

			array(
				
				'label' => esc_html__( 'Enable the topbar','denves-lite'),
				'description' => esc_html__( 'Do you want to enable the topbar?','denves-lite'),
				'id' => 'denves_lite_enable_topbar',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,
			
			),

			array(
				
				'label' => esc_html__( 'Enable the breadcrumb','denves-lite'),
				'description' => esc_html__( 'Do you want to enable the breadcrumb on whole website (except the homepage)?','denves-lite'),
				'id' => 'denves_lite_enable_breadcrumb',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => false,
			
			),

			array(
				
				'label' => esc_html__( 'Category title','denves-lite'),
				'description' => esc_html__( 'Do you want to enable the category title, under the black container?','denves-lite'),
				'id' => 'denves_lite_enable_category_title',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,
			
			),

			array(
				
				'label' => esc_html__( 'Searched item','denves-lite'),
				'description' => esc_html__( 'Do you want to enable the searched item, under the black container?','denves-lite'),
				'id' => 'denves_lite_enable_searched_item',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,
			
			),

			array(
				
				'label' => esc_html__( 'Post Icon','denves-lite'),
				'description' => esc_html__( 'Do you want to enable the post format icon at hover?','denves-lite'),
				'id' => 'denves_lite_enable_post_icon',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,
			
			),

			array(
				
				'label' => esc_html__( 'Post Format','denves-lite'),
				'description' => esc_html__( 'Do you want to use a different layout for the Aside, Link and Quote posts?','denves-lite'),
				'id' => 'denves_lite_enable_post_format_layout',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,
			
			),

			array(
				
				'label' => esc_html__( 'Read more','denves-lite'),
				'description' => esc_html__( 'Do you want to enable the read more button?','denves-lite'),
				'id' => 'denves_lite_enable_readmore_button',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,
			
			),

			array(
				
				'label' => esc_html__( 'Back to top button','denves-lite'),
				'description' => esc_html__( 'Do you want to enable a button to back on the top of the site?','denves-lite'),
				'id' => 'denves_lite_enable_backtotop_button',
				'type' => 'checkbox',
				'section' => 'settings_section',
				'std' => true,
			
			),

			/* Main Settings > Layouts */ 

			array( 

				'title' => esc_html__( 'Layouts','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the layouts of Denves Lite.','denves-lite'),
				'type' => 'section',
				'id' => 'layouts_section',
				'panel' => 'general_panel',
				'priority' => '16',

			),
			
			array(
				
				'label' => esc_html__('Home Blog Layout','denves-lite'),
				'description' => esc_html__('If you&#39;ve set the latest articles, for the homepage, choose a layout.','denves-lite'),
				'id' => 'denves_lite_home_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','denves-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','denves-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','denves-lite'),
				   'col-md-4' => esc_html__( 'Masonry','denves-lite'),
				),
				
				'std' => 'col-md-4',
			
			),
	
			array(
				
				'label' => esc_html__('Category Layout','denves-lite'),
				'description' => esc_html__('Select a layout for category pages.','denves-lite'),
				'id' => 'denves_lite_category_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','denves-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','denves-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','denves-lite'),
				   'col-md-4' => esc_html__( 'Masonry','denves-lite'),
				),
				
				'std' => 'col-md-4',
			
			),

			array(
				
				'label' => esc_html__('Search Layout','denves-lite'),
				'description' => esc_html__('Select a layout for the search section.','denves-lite'),
				'id' => 'denves_lite_search_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','denves-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','denves-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','denves-lite'),
				   'col-md-4' => esc_html__( 'Masonry','denves-lite'),
				),
				
				'std' => 'col-md-4',
			
			),

			array(
				
				'label' => esc_html__('Read More Layout','denves-lite'),
				'description' => esc_html__('Select a layout for the read more button.','denves-lite'),
				'id' => 'denves_lite_readmore_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
					'default' => esc_html__( 'Default Button','denves-lite'),
					'nobutton' => esc_html__( 'Replace with => [...]','denves-lite'),
				),
				
				'std' => 'default',
			
			),

			/* Main Settings > Copyright and social links */ 

			array( 

				'title' => esc_html__( 'Copyright and social links','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the copyright text and social links','denves-lite'),
				'type' => 'section',
				'id' => 'copyright_section',
				'panel' => 'general_panel',
				'priority' => '17',

			),

			array( 

				'label' => esc_html__( 'Copyright Text','denves-lite'),
				'description' => esc_html__( 'Insert your copyright text.','denves-lite'),
				'id' => 'denves_lite_copyright_text',
				'type' => 'textarea',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Facebook Url','denves-lite'),
				'description' => esc_html__( 'Insert Facebook Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_facebook_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Twitter Url','denves-lite'),
				'description' => esc_html__( 'Insert Twitter Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_twitter_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Flickr Url','denves-lite'),
				'description' => esc_html__( 'Insert Flickr Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_flickr_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Linkedin Url','denves-lite'),
				'description' => esc_html__( 'Insert Linkedin Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_linkedin_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Slack Url','denves-lite'),
				'description' => esc_html__( 'Insert Slack Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_slack_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Pinterest Url','denves-lite'),
				'description' => esc_html__( 'Insert Pinterest Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_pinterest_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Tumblr Url','denves-lite'),
				'description' => esc_html__( 'Insert Tumblr Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_tumblr_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Soundcloud Url','denves-lite'),
				'description' => esc_html__( 'Insert Soundcloud Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_soundcloud_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Spotify Url','denves-lite'),
				'description' => esc_html__( 'Insert Spotify Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_spotify_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Youtube Url','denves-lite'),
				'description' => esc_html__( 'Insert Youtube Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_youtube_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Vimeo Url','denves-lite'),
				'description' => esc_html__( 'Insert Vimeo Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_vimeo_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'VK Url','denves-lite'),
				'description' => esc_html__( 'Insert VK Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_vk_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Instagram Url','denves-lite'),
				'description' => esc_html__( 'Insert Instagram Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_instagram_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Deviantart Url','denves-lite'),
				'description' => esc_html__( 'Insert Deviantart Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_deviantart_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Github Url','denves-lite'),
				'description' => esc_html__( 'Insert Github Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_github_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Xing Url','denves-lite'),
				'description' => esc_html__( 'Insert Xing Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_xing_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),
			
			array( 

				'label' => esc_html__( 'Dribbble Url','denves-lite'),
				'description' => esc_html__( 'Insert Dribbble Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_dribbble_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),
			
			array( 

				'label' => esc_html__( 'Dropbox Url','denves-lite'),
				'description' => esc_html__( 'Insert Dropbox Url (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_dropbox_button',
				'type' => 'url',
				'section' => 'copyright_section',
				'std' => '',

			),
			
			array( 

				'label' => esc_html__( 'Whatsapp Number','denves-lite'),
				'description' => esc_html__( 'Insert Whatsapp number (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_whatsapp_button',
				'type' => 'button',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Telegram Account','denves-lite'),
				'description' => esc_html__( 'Insert Telegram Account (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_telegram_button',
				'type' => 'button',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Skype Url','denves-lite'),
				'description' => esc_html__( 'Insert Skype ID (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_skype_button',
				'type' => 'button',
				'section' => 'copyright_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Email Address','denves-lite'),
				'description' => esc_html__( 'Insert Email Address (leave empty if you want to hide the button)','denves-lite'),
				'id' => 'denves_lite_email_button',
				'type' => 'button',
				'section' => 'copyright_section',
				'std' => '',

			),

			array(
				
				'label' => esc_html__( 'Feed Rss Button','denves-lite'),
				'description' => esc_html__( 'Do you want to display the Feed Rss button?','denves-lite'),
				'id' => 'denves_lite_rss_button',
				'type' => 'select',
				'section' => 'copyright_section',
				'options' => array (
				   'off' => esc_html__( 'No','denves-lite'),
				   'on' => esc_html__( 'Yes','denves-lite'),
				),
				
				'std' => 'off',
			
			),

			/* Featured Area */ 

			array( 
				
				'title' => esc_html__( 'Denves Lite Featured Area','denves-lite'),
				'description' => esc_html__( 'Denves Lite Featured Area','denves-lite'),
				'type' => 'panel',
				'id' => 'featured_area_panel',
				'priority' => '10',
				
			),

			/* Featured Area > Featured area settings*/ 

			array( 

				'title' => esc_html__( 'Featured Area Settings','denves-lite'),
				'description' => esc_html__('Featured Area Settings','denves-lite'),
				'type' => 'section',
				'panel' => 'featured_area_panel',
				'priority' => '09',
				'id' => 'featured_area_settings',

			),

			array(
				
				'label' => esc_html__( 'Enable the featured area','denves-lite'),
				'description' => esc_html__( 'Do you want to enable the featured area?','denves-lite'),
				'id' => 'denves_lite_enable_featuredarea_section',
				'type' => 'checkbox',
				'section' => 'featured_area_settings',
				'std' => false,
			
			),

			array(
				
				'label' => esc_html__( 'Enable the featured links section','denves-lite'),
				'description' => esc_html__( 'Do you want to display the featured links section?','denves-lite'),
				'id' => 'denves_lite_enable_featuredlinks_section',
				'type' => 'checkbox',
				'section' => 'featured_area_settings',
				'std' => false,
			
			),

			/* Featured Area > Slideshow settings */ 

			array( 

				'title' => esc_html__( 'Slideshow settings','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the settings of featured area slideshow.','denves-lite'),
				'type' => 'section',
				'id' => 'slideshow_section',
				'panel' => 'featured_area_panel',
				'priority' => '10',

			),
			
			array(
				
				'label' => esc_html__( 'Caption Overlay','denves-lite'),
				'description' => esc_html__( 'Do you want to display the caption overlay on homepage slideshow?','denves-lite'),
				'id' => 'denves_lite_enable_slideshow_overlay',
				'type' => 'checkbox',
				'section' => 'slideshow_section',
				'std' => true,
			
			),

			array( 

				'label' => esc_html__( 'Limit','denves-lite'),
				'description' => esc_html__( 'How many items you want to display? (set -1 to load all items)','denves-lite'),
				'id' => 'denves_lite_slideshow_limit',
				'type' => 'slideshow_limit',
				'section' => 'slideshow_section',
				'std' => '5',

			),

			/* Featured Area > #Featured Link #1 */ 

			array( 

				'title' => esc_html__( 'Featured Link #1','denves-lite'),
				'description' => esc_html__('Featured Link #1','denves-lite'),
				'type' => 'section',
				'panel' => 'featured_area_panel',
				'priority' => '11',
				'id' => 'featured_link_1',

			),

			array( 

				'label' => esc_html__( 'Image','denves-lite'),
				'description' => esc_html__( 'Upload the image','denves-lite'),
				'id' => 'denves_lite_featured_link_1_image',
				'type' => 'upload',
				'section' => 'featured_link_1',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Title','denves-lite'),
				'description' => esc_html__( 'Insert the title of this slide','denves-lite'),
				'id' => 'denves_lite_featured_link_1_title',
				'type' => 'text',
				'section' => 'featured_link_1',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Url','denves-lite'),
				'description' => esc_html__( 'Insert the url of this slide','denves-lite'),
				'id' => 'denves_lite_featured_link_1_url',
				'type' => 'url',
				'section' => 'featured_link_1',
				'std' => '',

			),

			/* Featured Area > #Featured Link #2 */ 

			array( 

				'title' => esc_html__( 'Featured Link #2','denves-lite'),
				'description' => esc_html__('Featured Link #2','denves-lite'),
				'type' => 'section',
				'panel' => 'featured_area_panel',
				'priority' => '12',
				'id' => 'featured_link_2',

			),

			array( 

				'label' => esc_html__( 'Image','denves-lite'),
				'description' => esc_html__( 'Upload the image','denves-lite'),
				'id' => 'denves_lite_featured_link_2_image',
				'type' => 'upload',
				'section' => 'featured_link_2',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Title','denves-lite'),
				'description' => esc_html__( 'Insert the title of this slide','denves-lite'),
				'id' => 'denves_lite_featured_link_2_title',
				'type' => 'text',
				'section' => 'featured_link_2',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Url','denves-lite'),
				'description' => esc_html__( 'Insert the url of this slide','denves-lite'),
				'id' => 'denves_lite_featured_link_2_url',
				'type' => 'url',
				'section' => 'featured_link_2',
				'std' => '',

			),

			/* Typography */ 

			array( 
				
				'title' => esc_html__( 'Denves Lite Typography','denves-lite'),
				'description' => esc_html__( 'Denves Lite Typography','denves-lite'),
				'type' => 'panel',
				'id' => 'typography_panel',
				'priority' => '11',
				
			),

			/* Typography > Logo */ 

			array( 

				'label' => esc_html__( 'Logo top margin','denves-lite'),
				'description' => esc_html__( 'Add a space between the topmenu and the logo ','denves-lite'),
				'id' => 'denves_lite_logo_top_margin',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '-10px',

			),

			array( 

				'title' => esc_html__( 'Logo','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the logo.','denves-lite'),
				'type' => 'section',
				'id' => 'logo_section',
				'panel' => 'typography_panel',
				'priority' => '10',

			),

			array( 

				'label' => esc_html__( 'Font size','denves-lite'),
				'description' => esc_html__( 'Insert a size, for logo font','denves-lite'),
				'id' => 'denves_lite_logo_font_size',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '70px',

			),
			
			array( 

				'label' => esc_html__( 'Description font size','denves-lite'),
				'description' => esc_html__( 'Insert a size, for logo description','denves-lite'),
				'id' => 'denves_lite_logo_description_font_size',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '11px',

			),

			array( 

				'label' => esc_html__( 'Description top margin','denves-lite'),
				'description' => esc_html__( 'Add a space between the logo and the description','denves-lite'),
				'id' => 'denves_lite_logo_description_top_margin',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '10px',

			),

			array( 

				'label' => esc_html__( 'Description bottom margin','denves-lite'),
				'description' => esc_html__( 'Add a space between the description and the mainmenu','denves-lite'),
				'id' => 'denves_lite_logo_description_bottom_margin',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '-10px',

			),

			array(
				
				'label' => esc_html__('Weight','denves-lite'),
				'description' => esc_html__('Choose a font weight for the logo.','denves-lite'),
				'id' => 'denves_lite_logo_font_weight',
				'type' => 'select',
				'section' => 'logo_section',
				'options' => array(
					'100' => esc_html__( '100','denves-lite'),
					'300' => esc_html__( '300','denves-lite'),
					'400' => esc_html__( '400','denves-lite'),
					'700' => esc_html__( '700','denves-lite'),
				),

				'std' => '700',
			
			),
			
			array(
				
				'label' => esc_html__('Text transform','denves-lite'),
				'description' => esc_html__('Do you want to display an uppercase logo?.','denves-lite'),
				'id' => 'denves_lite_logo_text_transform',
				'type' => 'select',
				'section' => 'logo_section',
				'options' => array(
					'none' => esc_html__( 'None','denves-lite'),
					'uppercase' => esc_html__( 'Uppercase','denves-lite'),
				),

				'std' => 'uppercase',
			
			),
			
			/* Typography > Top menu */ 

			array( 

				'title' => esc_html__( 'Top Menu','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the top menu.','denves-lite'),
				'type' => 'section',
				'id' => 'topmenu_section',
				'panel' => 'typography_panel',
				'priority' => '11',

			),

			array( 

				'label' => esc_html__( 'Font size','denves-lite'),
				'description' => esc_html__( 'Insert a size, for top menu font (For example, 12px) ','denves-lite'),
				'id' => 'denves_lite_topmenu_font_size',
				'type' => 'pixel_size',
				'section' => 'topmenu_section',
				'std' => '12px',

			),

			array(
				
				'label' => esc_html__('Menu weight','denves-lite'),
				'description' => esc_html__('Choose a font weight for the top menu.','denves-lite'),
				'id' => 'denves_lite_topmenu_font_weight',
				'type' => 'select',
				'section' => 'topmenu_section',
				'options' => array(
					'100' => esc_html__( '100','denves-lite'),
					'300' => esc_html__( '300','denves-lite'),
					'400' => esc_html__( '400','denves-lite'),
					'700' => esc_html__( '700','denves-lite'),
				),

				'std' => '700',
			
			),
			
			array(
				
				'label' => esc_html__('Text transform','denves-lite'),
				'description' => esc_html__('Do you want to display an uppercase top menu?.','denves-lite'),
				'id' => 'denves_lite_topmenu_text_transform',
				'type' => 'select',
				'section' => 'topmenu_section',
				'options' => array(
					'none' => esc_html__( 'None','denves-lite'),
					'uppercase' => esc_html__( 'Uppercase','denves-lite'),
				),

				'std' => 'uppercase',
			
			),
			
			/* Typography > Menu */ 

			array( 

				'title' => esc_html__( 'Menu','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the menu.','denves-lite'),
				'type' => 'section',
				'id' => 'menu_section',
				'panel' => 'typography_panel',
				'priority' => '11',

			),

			array( 

				'label' => esc_html__( 'Font size','denves-lite'),
				'description' => esc_html__( 'Insert a size, for menu font (For example, 14px) ','denves-lite'),
				'id' => 'denves_lite_menu_font_size',
				'type' => 'pixel_size',
				'section' => 'menu_section',
				'std' => '12px',

			),

			array(
				
				'label' => esc_html__('Menu weight','denves-lite'),
				'description' => esc_html__('Choose a font weight for the menu.','denves-lite'),
				'id' => 'denves_lite_menu_font_weight',
				'type' => 'select',
				'section' => 'menu_section',
				'options' => array(
					'100' => esc_html__( '100','denves-lite'),
					'300' => esc_html__( '300','denves-lite'),
					'400' => esc_html__( '400','denves-lite'),
					'700' => esc_html__( '700','denves-lite'),
				),

				'std' => '700',
			
			),
			
			array(
				
				'label' => esc_html__('Text transform','denves-lite'),
				'description' => esc_html__('Do you want to display an uppercase menu?.','denves-lite'),
				'id' => 'denves_lite_menu_text_transform',
				'type' => 'select',
				'section' => 'menu_section',
				'options' => array(
					'none' => esc_html__( 'None','denves-lite'),
					'uppercase' => esc_html__( 'Uppercase','denves-lite'),
				),

				'std' => 'uppercase',
			
			),
			
			/* Typography > Content */ 

			array( 

				'title' => esc_html__( 'Content','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the content.','denves-lite'),
				'type' => 'section',
				'id' => 'content_section',
				'panel' => 'typography_panel',
				'priority' => '12',

			),

			array( 

				'label' => esc_html__( 'Font size','denves-lite'),
				'description' => esc_html__( 'Insert a size, for content font (For example, 14px) ','denves-lite'),
				'id' => 'denves_lite_content_font_size',
				'type' => 'pixel_size',
				'section' => 'content_section',
				'std' => '14px',

			),


			/* HEADLINES */ 

			array( 

				'title' => esc_html__( 'Headlines','denves-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the headlines.','denves-lite'),
				'type' => 'section',
				'id' => 'headlines_section',
				'panel' => 'typography_panel',
				'priority' => '13',

			),

			array( 

				'label' => esc_html__( 'H1 headline','denves-lite'),
				'description' => esc_html__( 'Insert a size, for for H1 elements (For example, 24px) ','denves-lite'),
				'id' => 'denves_lite_h1_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '24px',

			),

			array( 

				'label' => esc_html__( 'H2 headline','denves-lite'),
				'description' => esc_html__( 'Insert a size, for for H2 elements (For example, 22px) ','denves-lite'),
				'id' => 'denves_lite_h2_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '22px',

			),

			array( 

				'label' => esc_html__( 'H3 headline','denves-lite'),
				'description' => esc_html__( 'Insert a size, for for H3 elements (For example, 20px) ','denves-lite'),
				'id' => 'denves_lite_h3_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '20px',

			),

			array( 

				'label' => esc_html__( 'H4 headline','denves-lite'),
				'description' => esc_html__( 'Insert a size, for for H4 elements (For example, 18px) ','denves-lite'),
				'id' => 'denves_lite_h4_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '18px',

			),

			array( 

				'label' => esc_html__( 'H5 headline','denves-lite'),
				'description' => esc_html__( 'Insert a size, for for H5 elements (For example, 16px) ','denves-lite'),
				'id' => 'denves_lite_h5_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '16px',

			),

			array( 

				'label' => esc_html__( 'H6 headline','denves-lite'),
				'description' => esc_html__( 'Insert a size, for for H6 elements (For example, 14px) ','denves-lite'),
				'id' => 'denves_lite_h6_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '14px',

			),
			
			array(
				
				'label' => esc_html__('Titles weight','denves-lite'),
				'description' => esc_html__('Choose a font weight for the titles.','denves-lite'),
				'id' => 'denves_lite_titles_font_weight',
				'type' => 'select',
				'section' => 'headlines_section',
				'options' => array(
					'400' => esc_html__( '400','denves-lite'),
					'700' => esc_html__( '700','denves-lite'),
					'900' => esc_html__( '900','denves-lite'),
				),

				'std' => '700',
			
			),
			
			array(
				
				'label' => esc_html__('Text transform','denves-lite'),
				'description' => esc_html__('Do you want to display an uppercase title?.','denves-lite'),
				'id' => 'denves_lite_titles_text_transform',
				'type' => 'select',
				'section' => 'headlines_section',
				'options' => array(
					'none' => esc_html__( 'None','denves-lite'),
					'uppercase' => esc_html__( 'Uppercase','denves-lite'),
				),

				'std' => 'none',
			
			),

		);
		
		new denves_lite_customize($theme_panel);
		
	} 
	
	add_action( 'denves_lite_customize_panel', 'denves_lite_customize_panel_function' );

}

do_action('denves_lite_customize_panel');

?>