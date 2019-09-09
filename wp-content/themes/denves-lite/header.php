<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php

if ( function_exists('wp_body_open') ) {
	wp_body_open();
}

?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'denves-lite' ); ?></a>

<?php do_action( 'denves_lite_mobile_menu' ); ?>

<div id="overlay-body"></div>

<div id="wrapper">

	<header id="header-wrapper" >

		<?php if ( denves_lite_setting('denves_lite_enable_topbar', true) == true ) : ?>
    
            <div id="header">
                            
                <div class="container">
                            
                    <div class="row">

                        <?php do_action('denves_lite_socials_links'); ?>

                        <div class="col-md-12" >
    
                            <nav id="top-menu" class="header-menu" >
                            
                                <?php 
                                                    
                                    wp_nav_menu( array(
                                        'theme_location' => 'top-menu',
                                        'container' => 'false'
                                    )); 
                                                    
                                ?>
                                                    
                            </nav> 
                        
                        </div>
                
                    </div>
                                
                </div>
                                        
            </div>
		
        <?php endif; ?>
        
        <div id="logo-wrapper">
    
            <div class="container">
                                
                <div class="row">
                                            
                    <div class="col-md-4" >
                                                
                        <div id="logo">
                        
                            <?php
                                
                                if ( get_theme_mod( 'custom_logo' ) ) {
                                        
                                    echo the_custom_logo();
                                        
                                } else {
                                    
                                    echo '<a class="text-logo" href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
                                            
                                        echo esc_html(get_bloginfo('name'));
                                        echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';
                                        
                                    echo '</a>';
                                        
                                }
                            
                            ?>
                    
                        </div>
                                            
                    </div>
                    
                    <?php get_sidebar('banner'); ?>
                                        
                </div>
                                    
            </div>
        
        </div>
        
        <div id="menu-wrapper">
    
            <div class="container">
                                
                <div class="row">
                                            
                    <div class="col-md-12">
                    
                        <div class="mobile-navigation"><i class="fa fa-bars"></i></div>

						<div class="header-search"> 
							<div class="search-form"><?php get_search_form();?></div>
                            <i class="fa fa-search" aria-hidden="true"></i>
						</div>

						<?php 
                            
                            if ( 
                                denves_lite_is_woocommerce_active() && 
                                denves_lite_setting('denves_lite_enable_woocommerce_header_cart') == true                            
                            ) :
                                
                                echo denves_lite_header_cart();
                            
                            endif;
                            
						?>
                       
                        <nav id="mainmenu" class="header-menu" >
                        
                            <?php 
                                                
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'container' => 'false'
                                )); 
                                                
                            ?>
                                                
                        </nav> 

                    </div>
                                            
                </div>
                                        
			</div>
                                    
		</div>
        
	</header>