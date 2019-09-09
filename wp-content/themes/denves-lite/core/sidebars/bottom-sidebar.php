<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('denves_lite_bottom_sidebar_function')) {

	function denves_lite_bottom_sidebar_function() {
	
		if ( is_active_sidebar('denves-lite-bottom-widget-area') ) : ?>
			
			<div id="bottom_sidebar" class="sidebar-area">
			
				<?php dynamic_sidebar('denves-lite-bottom-widget-area') ?>	
                			
			</div>
				
<?php 
	
		endif;
		
	}

	add_action( 'denves_lite_bottom_sidebar', 'denves_lite_bottom_sidebar_function');

}

?>