<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('denves_lite_banner_sidebar_function')) {

	function denves_lite_banner_sidebar_function() {
	
		if ( is_active_sidebar('denves-lite-banner-widget-area') ) : ?>
			
			<div class="col-md-8 header-banner">
			
				<?php dynamic_sidebar('denves-lite-banner-widget-area') ?>	
                			
			</div>
				
<?php 
	
		endif;
		
	}

	add_action( 'denves_lite_banner_sidebar', 'denves_lite_banner_sidebar_function');

}

?>