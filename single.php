<?php get_header(); ?>

<div id="main" <?php post_class(); ?> role="main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="single-content"><?php the_content(); ?></div>
		
	<?php endwhile; else: ?>
		<p style="text-align:center; font-size:24px; font-weight:bold; color:#ddd; margin:100px auto; line-height:200%;">お探しの記事は準備中です。<br>近日中に公開となります。</p>
		
	<?php endif; ?>
	
	</div>
	<!-- /#main -->

<?php get_footer(); ?>