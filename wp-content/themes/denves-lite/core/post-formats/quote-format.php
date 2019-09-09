<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */
 

if (!function_exists('denves_lite_quote_format_function')) {

	function denves_lite_quote_format_function() {

	?>

        <div class="post-article quote">

            <span class="dashicons dashicons-format-quote"></span>
            <blockquote><p><?php the_content();?></p></blockquote>
            <p><?php echo esc_html(get_the_title());?></p>
            
        </div>

	<?php

	}

	add_action( 'denves_lite_quote_format', 'denves_lite_quote_format_function' );

}

?>