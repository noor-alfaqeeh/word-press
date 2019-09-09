<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blogger">
		<?php if(has_post_thumbnail()) { ?>
			<div class="post-image">
			    <?php the_post_thumbnail(); ?>
		 	</div>
 		<?php } ?>
 		<h3><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
 		<div class="post-info">
			<i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"> <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_date()); ?></a></span>
		    <i class="fa fa-user" aria-hidden="true"></i><span class="entry-author"> <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>
		    <i class="fas fa-comments"></i><span class="entry-comments"><a href="<?php the_permalink(); ?>"><?php comments_number( __('0 Comments','tanawul-bakery'), __('0 Comments','tanawul-bakery'), __('% Comments','tanawul-bakery') ); ?></a></span>
		</div>
    	<p><?php the_excerpt();?></p>
	  	<div class="post-link">
	  		<a href="<?php echo esc_url( get_permalink() ); ?>"><span><?php esc_attr_e( 'Read More','tanawul-bakery' ); ?></span></a>
	  	</div>
	</div>
</article>