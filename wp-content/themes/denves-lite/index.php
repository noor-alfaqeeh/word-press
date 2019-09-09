<?php 

	get_header();
	
	get_sidebar('top');
	get_sidebar('header');
	
	get_template_part('core/templates/featured', 'area'); 
	
	if ( !denves_lite_setting('denves_lite_home_layout') || denves_lite_setting('denves_lite_home_layout') == 'col-md-4' ) {
				
		get_template_part('layouts/home', 'masonry'); 

	} else if ( strstr(denves_lite_setting('denves_lite_home_layout'), 'sidebar' )) { 

		get_template_part('layouts/home', 'sidebar'); 

	} else { 
		
		get_template_part('layouts/home', 'classic');
			
	}

	get_footer(); 
	
?>