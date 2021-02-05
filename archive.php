<?php get_header(); ?>

<div id="main" <?php post_class(); ?> role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php remove_filter ('the_content', 'wpautop'); ?>
	<?php the_content(); ?>
	<?php //advanced custom fields プラグイン the_field("prefecture", $post->ID); ?>
	
	<?php endwhile; else: ?>
	
	<?php endif; ?>
	
	<?php the_posts_pagination( array( 'mid_size' => 3, 'prev_text' => '<<', 'next_text' => '>>', 'screen_reader_text' => '',  ));  ?>
	
	</div>
	<!-- /#main -->
			
<?php get_footer(); ?>