<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('denves_lite_default_format_function')) {

	function denves_lite_default_format_function() {

		do_action(
			'denves_lite_thumbnail',
			'denves_lite_blog_thumbnail',
			esc_attr(denves_lite_setting('denves_lite_enable_post_icon', true))
		);
		
	?>
    
        <div class="post-article">
        
            <?php 
				
                do_action('denves_lite_before_content', 'post');
                do_action('denves_lite_after_content'); 
                
            ?>
        
        </div>

	<?php

	}

	add_action( 'denves_lite_default_format', 'denves_lite_default_format_function' );

}

?>