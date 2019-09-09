<?php 

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('denves_lite_mobile_menu_function')) {

	function denves_lite_mobile_menu_function() {

?>

        <div id="sidebar-wrapper">
            
            <div id="scroll-sidebar" class="clearfix">
				
                <div class="mobile-navigation"><i class="fa fa-times open"></i></div>	
                
                <div class="wrap">
				
                    <div class="mobilemenu-box">
                       
                        <nav id="mobilemenu" class="<?php echo esc_attr(denves_lite_setting('denves_lite_mobile_menu', 'mobile-menu-1'));?>">
							
							<?php 
								
								wp_nav_menu(
									
									array(
										'theme_location' => 'main-menu',
										'container' => 'false'
									)
									
								);
							
							?>
                            
                        </nav> 
                        
                    </div>
                
				</div>
                
            </div>
        
        </div>
        
<?php
	
	}

	add_action( 'denves_lite_mobile_menu', 'denves_lite_mobile_menu_function' );

}

?>