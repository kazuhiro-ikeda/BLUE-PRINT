<?php get_header(); ?>

<div id="main" <?php post_class(); ?> role="main">
	<section id="entry">
		<div class="steps_form">
			<img class="image" src="<?php echo get_template_directory_uri(); ?>/images/form/step_1.jpg" alt="step_1">
			<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/images/form/step_1_s.jpg" alt="">
		</div>
		<!-- /.steps_form -->
		
		<div class="inner">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php remove_filter ( 'the_content', 'wpautop' ); ?>
			<?php the_content(); ?>
			
			<?php endwhile; else: ?>
				<p style="text-align:center; font-size:24px; font-weight:bold; color:#ddd; margin:100px auto; line-height:200%;">お探しの記事は準備中です。<br>近日中に公開となります。</p>
				
			<?php endif; ?>
			
		</div>
		<!-- /.inner -->
		
	</section>
	<!-- /#entry -->

</div><!-- /#main post_class -->

<?php get_footer(); ?>
