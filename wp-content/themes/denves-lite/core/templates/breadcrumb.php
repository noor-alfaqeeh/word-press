<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */
		
if ( !is_home() && denves_lite_setting('denves_lite_enable_breadcrumb') == true ) : ?>
    
	<div id="breadcrumb_wrapper">
        
		<div class="container">
            
			<div class="row">
                    
				<div class="col-md-12">
                    
					<?php 
							
						global $s;
						
						$delimiter = '<i class="fa fa-long-arrow-right"></i>';
						
						echo '<ul id="breadcrumb">';
					
						echo '<li><strong>' . esc_html__('You are here : ','denves-lite') . '</strong></li>';
					
						if ( !denves_lite_is_woocommerce_active('is_woocommerce') ) {
								
							echo '<li><a href="' . esc_url(home_url()) . '">' . esc_html__('Home','denves-lite') . '</a></li>' . $delimiter;
								
							if ( is_category() ) {
									
								echo '<li>' . denves_lite_get_archive_title() . '</li>';
					
							} elseif (is_single() && !is_attachment()) {
									
								echo '<li>';
								the_category(' , </li> <li>');
								echo '</li>' . $delimiter . '<li> ' . esc_html(get_the_title()) . '</li>';
						
							} elseif (is_page()) {
									
								echo '<li>' . esc_html(get_the_title()) . '</li>';
						
							} else if ( denves_lite_get_archive_title()) {
								
								echo '<li>' . denves_lite_get_archive_title() . '</li>';
								
							} else if ( is_search() ) {
					
								echo '<li>' . esc_html__( 'Search results for ', 'denves-lite' ) . esc_html($s) . '</li>';
							
							} else if ( is_404() ) {
					
								echo '<li>' . esc_html__( 'Page 404', 'denves-lite' ) . esc_html($s) . '</li>';
								
							} else if ( is_attachment() ) {
					
								echo '<li>' . esc_html__( 'Attachment: ', 'denves-lite' ) . esc_html(get_the_title()) . '</li>';
								
							} 
						
						} else if ( denves_lite_is_woocommerce_active('is_woocommerce') ) {
						
							woocommerce_breadcrumb(
									
								array(
									'delimiter'   => $delimiter,
									'wrap_before' => '',
									'wrap_after'  => '',
									'before'      => '<li>',
									'after'       => '</li>',
								)
							
							);
						
						}
							
						echo '</ul>';
						
					?>
                        
				</div>
    
			</div>
                
		</div>
        
	</div>
    
<?php endif; ?>