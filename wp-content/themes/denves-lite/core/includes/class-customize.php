<?php

/**
 * Contains methods for customizing the theme customization screen.
 * @link http://codex.wordpress.org/Theme_Customization_API
 * 
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if( !class_exists( 'denves_lite_customize' ) ) {

	class denves_lite_customize {
	
		public $theme_fields;
	
		public function __construct( $fields = array() ) {
	
			$this->theme_fields = $fields;

			add_action ('admin_init' , array( &$this, 'admin_scripts' ) );
			add_action ('customize_register' , array( &$this, 'customize_panel' ) );
			add_action ('customize_controls_enqueue_scripts' , array( &$this, 'customize_scripts' ) );

		}

		public function admin_scripts() {
	
			global $wp_version, $pagenow;

			$file_dir = get_template_directory_uri() . '/core/admin/assets/';
			
			if ( $pagenow == 'post.php' || $pagenow == 'post-new.php' || $pagenow == 'edit.php' ) {
				wp_enqueue_style ( 'denves-lite-panel',  $file_dir . 'css/panel.css', array(), '1.0.0' ); 
				wp_enqueue_script( 'denves-lite-script', $file_dir . 'js/panel.js', array('jquery', 'jquery-ui-core', 'jquery-ui-tabs'),'1.0.0', TRUE ); 
			}
			
		}
		
		public function customize_scripts() {
	
			wp_enqueue_style ( 
				'denves-lite-customizer', 
				get_template_directory_uri() . '/core/admin/assets/css/customize.css', 
				array(), 
				''
			);
	
		}
		
		public function customize_panel ( $wp_customize ) {
			
			global $wp_version;

			$theme_panel = $this->theme_fields ;
	
			foreach ( $theme_panel as $element ) {
				
				switch ( $element['type'] ) {
						
					case 'panel' :
					
						$wp_customize->add_panel( $element['id'], array(
						
							'title' => $element['title'],
							'priority' => $element['priority'],
							'description' => $element['description'],
						
						) );
				 
					break;
					
					case 'section' :
							
						$wp_customize->add_section( $element['id'], array(
						
							'title' => $element['title'],
							'panel' => $element['panel'],
							'priority' => $element['priority'],
							'description' => $element['description'],

						));
						
					break;
	
					case 'text' :
								
						$wp_customize->add_setting( $element['id'], array(

							'default' => $element['std'],
							'sanitize_callback' => 'sanitize_text_field',
	
						) );
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						) );
								
					break;
	
					case 'pixel_size' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'default' => $element['std'],
							'sanitize_callback' => array( &$this, 'pixel_size_sanize' ),

						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => 'text',
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'slideshow_limit' :
								
						$wp_customize->add_setting( $element['id'], array(

							'sanitize_callback' => array( &$this, 'slideshow_limit_sanize' ),
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => 'number',
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
							'input_attrs' => array('min' => -1)
										
						));
								
					break;
	
					case 'number' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'absint',
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'checkbox' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => array( &$this, 'checkbox_sanize' ),
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => 'checkbox',
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'upload' :
								
						$wp_customize->add_setting( $element['id'], array(
	
							'default' => $element['std'],
							'capability' => 'edit_theme_options',
							'sanitize_callback' => 'absint'
	
						));
	
						$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, $element['id'], array(
						
							'label' => $element['label'],
							'mime_type' => 'image',
							'description' => $element['description'],
							'section' => $element['section'],
							'settings' => $element['id'],
							'width' => 940,
							'height' => 522,
						
						)));
	
					break;
	
					case 'url' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'esc_url_raw',
							'default' => $element['std'],
	
						) );
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'color' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'sanitize_hex_color',
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'button' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => array( &$this, 'button_sanize' ),
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => 'url',
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'textarea' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'sanitize_textarea_field',
							'default' => $element['std'],
	
						) );
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'select' :
								
						$wp_customize->add_setting( $element['id'], array(
	
							'sanitize_callback' => array( &$this, 'select_sanize' ),
							'default' => $element['std'],
	
						) );
	
						$wp_customize->add_control( $element['id'] , array(
							
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
							'choices'  => $element['options'],
										
						));
								
					break;

					case 'denves-lite-customize-info' :
	
						$wp_customize->add_section( $element['id'], array(
						
							'title' => $element['title'],
							'priority' => $element['priority'],
							'capability' => 'edit_theme_options',
	
						));
	
						$wp_customize->add_setting(  $element['id'], array(
							'sanitize_callback' => 'esc_url_raw'
						));
						 
						$wp_customize->add_control( new Denveslite_Customize_Info_Control( $wp_customize,  $element['id'] , array(
							'section' => $element['section'],
						)));		
											
					break;

				}
				
			}

		}

		public function select_sanize ($value, $setting) {

			global $wp_customize;
			
			$getControl = $wp_customize->get_control($setting->id);
			$getSetting = $wp_customize->get_setting($setting->id);
			
			return (array_key_exists( $value, $getControl->choices)) ? $value : $getSetting->default;

		}

		public function button_sanize ( $value, $setting ) {
			
			$sanize = array (
			
				'denves_lite_email_button' => 'mailto:',
				'denves_lite_skype_button' => 'skype:',
				'denves_lite_whatsapp_button' => 'tel:',
			
			);
	
			if (!isset($value) || $value == '' || $value == $sanize[$setting->id]) {

				return '';

			} elseif (!strstr($value, $sanize[$setting->id])) {
	
				return $sanize[$setting->id] . $value;
	
			} else {
	
				return esc_url_raw($value, array('mailto', 'skype', 'tel'));
	
			}
	
		}
		
		/* Custom function to sanize the pixel size options */
		
		public function pixel_size_sanize($value, $setting) {

			global $wp_customize;
			
			$getSetting = $wp_customize->get_setting($setting->id);
			$newValue = ($value == '') ? $getSetting->default : intval($value) . 'px';
			return $newValue;

		}

		/* Custom function to sanize the slideshow limit options */

		public function slideshow_limit_sanize($value, $setting) {

			global $wp_customize;
			
			$getSetting = $wp_customize->get_setting($setting->id);
			$newValue = ($value <= 0) ? $getSetting->default : absint($value);
			return $newValue;
	
		}
		
		/* Custom function to sanize the checkbox */
		
		public function checkbox_sanize( $input ) {
			return $input ? true : false;
		}

	}

}

if ( class_exists( 'WP_Customize_Control' ) ) {

	class Denveslite_Customize_Info_Control extends WP_Customize_Control {

		public $type = "denves-lite-customize-info";

		public function render_content() { ?>

            <div class="inside">

				<h2><?php esc_html_e('Denves premium version','denves-lite');?></h2> 

                <p><?php esc_html_e("Upgrade to the premium version of Denves, to enable 600+ Google Fonts, unlimited widget areas, portfolio section and much more.","denves-lite");?></p>

                <ul>
                
                    <li><a class="button purchase-button" href="<?php echo esc_url( 'https://www.themeinprogress.com/denves-clean-and-modern-news-and-magazine-wordpress-and-woocommerce-theme/?ref=2&campaign=denves-lite-panel' ); ?>" title="<?php esc_attr_e('Upgrade to Denves premium','denves-lite');?>" target="_blank"><?php esc_html_e('Upgrade to Denves premium','denves-lite');?></a></li>
                
                </ul>

            </div>
            
            <div class="inside">

                <h2><?php esc_html_e('Become a supporter','denves-lite');?></h2> 

                <p><?php esc_html_e("If you like this theme and support, I'd appreciate any of the following:","denves-lite");?></p>

                <ul>
                
                    <li><a class="button" href="<?php echo esc_url( 'https://wordpress.org/support/view/theme-reviews/'.get_stylesheet().'#postform' ); ?>" title="<?php esc_attr_e('Rate this Theme','denves-lite');?>" target="_blank"><?php esc_html_e('Rate this Theme','denves-lite');?></a></li>
                    <li><a class="button" href="<?php echo esc_url( 'https://www.themeinprogress.com/reserved-area/' ); ?>" title="<?php esc_attr_e('Subscribe our newsletter','denves-lite');?>" target="_blank"><?php esc_html_e('Subscribe our newsletter','denves-lite');?></a></li>
                
                </ul>
    
            </div>
    
		<?php

		}
	
	}

}

?>