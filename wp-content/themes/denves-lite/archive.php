<?php 

	get_header();
	get_template_part('core/templates/breadcrumb'); 
	get_sidebar('top');
	get_sidebar('header');

	if ( !denves_lite_setting('denves_lite_category_layout') || denves_lite_setting('denves_lite_category_layout') == 'col-md-4' ) {
				
		get_template_part('layouts/archive','masonry'); 

	} else if ( strstr(denves_lite_setting('denves_lite_category_layout'), 'sidebar' )) { 

		get_template_part('layouts/archive','sidebar'); 

	} else { 
		
		get_template_part('layouts/archive','classic');
			
	}

	get_footer(); 

?>