<?php

/**
 * WPinProgress
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('denves_lite_homepage_slider_function')) {

	function denves_lite_homepage_slider_function($columns, $size) {
		
		$placeholder = ( denves_lite_setting('denves_lite_enable_featuredlinks_section') == true ) ? 'placeholder-650x415.jpg' : 'placeholder-940x600.jpg' ;
		
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => denves_lite_setting('denves_lite_slideshow_limit', 5),
		);

		$query = new WP_Query($args); 
		
		if ( $query->have_posts() ) :  
                                
?>

        <div class="owl-carousel-slideshow" data-columns="<?php echo esc_attr($columns);?>">

            <div class="owl-carousel owl-home-slideshow">

			<?php
        
                while ( $query->have_posts() ) : $query->the_post(); 
        
                    global $post;

			?>
			
                    <div class="owl-article item">
                        
                    	<?php

                    		if ( '' != get_the_post_thumbnail() ) { 
								
                    			the_post_thumbnail($size);
								
                    		} else {
								
                    			echo '<img src="' . get_template_directory_uri()."/assets/images/".$placeholder . '" alt="'.esc_attr(get_the_title()).'">';
						
                    		}
                            
                    	?>
							
                    	<a class="entry-button" href="<?php echo esc_url(get_permalink($post->ID)); ?>"></a>

                    	<?php if ( denves_lite_setting('denves_lite_enable_slideshow_overlay', true) == true ) : ?>
                    	
                    		<div class="owl-overlay">
								
                    			<div class="owl-overlay-wrapper">
								
                    				<div class="owl-overlay-content">
                                
                    					<span class="entry-date">
                    						<?php echo esc_html__('Written by ','denves-lite') . get_the_author_posts_link() . esc_html__(' on ','denves-lite') . get_the_date(); ?>
                    					</span>	
                                            
										<h2 class="title"><?php echo esc_html(get_the_title()); ?></h2>
                    					<span class="entry-category"><?php the_category(' . ');?></span>
								
                    				</div>
								
                    			</div>
								
                    		</div>
                    	
                    	<?php endif; ?>
                            
                    </div>
			
			<?php

				endwhile; 
                wp_reset_query();
                wp_reset_postdata();

			?>

            </div>
            
        </div>

<?php

        endif;
	
	}

	add_action( 'denves_lite_homepage_slider', 'denves_lite_homepage_slider_function', 10, 2);

}

?>