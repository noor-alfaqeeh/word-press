<?php

	if ( denves_lite_setting('denves_lite_enable_featuredarea_section' ) == true ) :

		echo '<div class="featured-area-wrapper">';
		
			echo '<div class="container">';
		
				echo '<div class="row">';
		
					echo ( denves_lite_setting('denves_lite_enable_featuredlinks_section') == true ) ? '<div class="col-md-8">' : '<div class="col-md-12">' ;
		
						do_action('denves_lite_homepage_slider', 1, ( denves_lite_setting('denves_lite_enable_featuredlinks_section') == true ) ? 'denves_lite_slideshow_small' : 'denves_lite_slideshow_large');
		
					echo '</div>';

					if ( denves_lite_setting('denves_lite_enable_featuredlinks_section') == true ) :

						echo '<div class="col-md-4">';
			
							if ( denves_lite_setting('denves_lite_featured_link_1_image') ) :
							
								$featured_image_1 = esc_attr(denves_lite_setting('denves_lite_featured_link_1_image'));
								$featured_link_1 = wp_get_attachment_url($featured_image_1);
								$featured_title_1 =  denves_lite_setting('denves_lite_featured_link_1_title');
				
								echo '<div class="featured-link-item">';
				
								if ( denves_lite_setting('denves_lite_featured_link_1_url') ) :
				
									echo '<a href="' . esc_url(denves_lite_setting('denves_lite_featured_link_1_url')) . '"></a>';
				
								endif;
				
								echo '<img src="' . esc_url($featured_link_1) . '" alt="' . esc_attr($featured_title_1) . '">';
				
								if ( denves_lite_setting('denves_lite_featured_link_1_title') ) :
				
									echo '<div class="featured-link-title">';
									echo '<h6>' . esc_html($featured_title_1) . '</h6>';
									echo '</div>';
						
								endif;
				
								echo '</div>';
							
							endif;
							
							if ( denves_lite_setting('denves_lite_featured_link_2_image') ) :
							
								$featured_image_2 = esc_attr(denves_lite_setting('denves_lite_featured_link_2_image'));
								$featured_link_2 = wp_get_attachment_url($featured_image_2);
								$featured_title_2 =  denves_lite_setting('denves_lite_featured_link_2_title');
				
								echo '<div class="featured-link-item">';
				
								if ( denves_lite_setting('denves_lite_featured_link_2_url') ) :
				
									echo '<a href="' . esc_url(denves_lite_setting('denves_lite_featured_link_2_url')) . '"></a>';
				
								endif;
				
								echo '<img src="' . esc_url($featured_link_2) . '" alt="' . esc_attr($featured_title_2) . '">';
				
								if ( denves_lite_setting('denves_lite_featured_link_2_title') ) :
				
									echo '<div class="featured-link-title">';
									echo '<h6>' . esc_html($featured_title_2) . '</h6>';
									echo '</div>';
						
								endif;
				
								echo '</div>';
							
							endif;
	
						echo '</div>';
					
					endif;
				
				echo '</div>';
			
			echo '</div>';

		echo '</div>';
		
	endif;

?>