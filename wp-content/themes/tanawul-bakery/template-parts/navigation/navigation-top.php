<?php
/**
 * Displays top navigation
 */
?>

<img role="img" src="<?php echo esc_html(get_template_directory_uri() . '/assets/images/headingdesign1.png');?>" class="header-updesign">
<div class="header-menu">
	<div class="row m-0">
		<div class="col-lg-5 col-md-5">
			<nav id="site-navigation" class="main-navigation" role="navigation" >
				<?php wp_nav_menu( array(
					'theme_location' => 'left-menu',
				) ); ?>				
			</nav>
		</div>
		<div class="col-lg-2 col-md-2">
	     	<div class="<?php if(has_custom_logo()) { ?>logo-img"<?php } else { ?>logo-text <?php } ?>">
				<?php if( has_custom_logo() ){ the_custom_logo();
	             }else{ ?>
	            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	            <?php $description = get_bloginfo( 'description', 'display' );
	            if ( $description || is_customize_preview() ) : ?> 
	              <p class="site-description"><?php echo esc_html($description); ?></p>
	            <?php endif; }?>
	        </div>
		</div>
		<div class="col-lg-5 col-md-5">
			<nav id="site-navigation" class="main-navigation" role="navigation" >
				<?php wp_nav_menu( array(
					'theme_location' => 'right-menu',
				) ); ?>				
			</nav>
		</div>
	</div>
</div>
<img role="img" src="<?php echo esc_html(get_template_directory_uri() . '/assets/images/headingdesign2.png');?>" class="header-downdesign">