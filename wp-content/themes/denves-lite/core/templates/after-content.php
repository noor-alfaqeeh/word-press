<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('denves_lite_after_content_function')) {

	function denves_lite_after_content_function() { 
	
		if ( denves_lite_get_archive_title() || is_page_template() || is_search() || is_home() ) {
	
			if ( denves_lite_setting('denves_lite_enable_readmore_button', true) == true ) {
				
				the_excerpt(); 
			
			} else if (denves_lite_setting('denves_lite_enable_readmore_button') == false ) {
				
				the_content(); 
			
			}
	
		} else {
		
			the_content();
	
			the_tags( '<footer class="line"><span class="entry-info"><strong>Tags:</strong> ', ', ', '</span></footer>' );
	
			comments_template();
		
		}
	
	} 

	add_action( 'denves_lite_after_content', 'denves_lite_after_content_function' );

}

?>