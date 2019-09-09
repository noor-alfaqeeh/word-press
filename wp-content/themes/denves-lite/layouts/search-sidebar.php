<div id="content" class="container">

	<div class="row">
    
        <div class="<?php echo denves_lite_template('span') . ' '. denves_lite_template('sidebar'); ?>">
        
        	<?php echo do_action('denves_lite_searched_item'); ?>

            <div class="row"> 
        
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                        <?php do_action('denves_lite_postformat'); ?>
                        <div class="clear"></div>
                        
                    </div>
		
				<?php 
                
                    endwhile; 
                    else:  
                
                ?>

                    <div class="post-container col-md-12" >
                
                        <article class="post-article not-found">
                                
                            <h1><?php esc_html_e( 'Not found', 'denves-lite' ) ?></h1>
                            <p><?php esc_html_e( 'Sorry, no posts matched your criteria', 'denves-lite' ) ?> <strong>: <?php echo esc_html($s); ?> </strong></p>
                 
                        </article>
                
                    </div>
	
				<?php 
                    
                    endif;
                
                ?> 
        
            </div>
        
        </div>
        
		<?php do_action( 'denves_lite_side_sidebar'); ?>
           
    </div>

	<?php do_action( 'denves_lite_pagination', 'archive'); ?>

</div>