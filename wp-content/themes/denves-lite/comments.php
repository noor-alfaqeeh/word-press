<?php 

if ( have_comments() && post_password_required() == false ) : 

	echo comments_number( 
		'<h3 class="comments">' . esc_html__( 'No comments', 'denves-lite') . '</h3>', 
		'<h3 class="comments">1 ' . esc_html__( 'comment', 'denves-lite') . '</h3>', 
		'<h3 class="comments">% ' . esc_html__( 'comments', 'denves-lite') . '</h3>' 
	); 
	
?>

	<div id="comments">
	
    	<ul class="commentlist">
	
    		<?php wp_list_comments('type=comment&callback=denves_lite_comments'); ?>
	
    	</ul>
	
    </div>

<?php 

	endif;
	
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

		<div class="wp-pagenavi">
        
			<div class="alignleft"><?php previous_comments_link(esc_html__('&laquo;','denves-lite')) ?></div>
			<div class="alignright"><?php next_comments_link(esc_html__('&raquo;','denves-lite')) ?></div>
		
        </div> 

<?php 

	endif;

?>

<div class="clear"></div>

<div class="contact-form">

	<?php comment_form(); ?>
    <div class="clear"></div>

</div>