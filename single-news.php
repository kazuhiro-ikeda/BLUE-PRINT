<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="single_news">
		<?php 
		    /*$term  = wp_get_object_terms($post->ID, 'genre_news');
		    $term_slug = $term[0]->slug;
		    $term_name = $term[0]->name;*/
		 ?>
			
		<div class="information">
			<span class="label_news"><?php echo $term_name; ?></span>
			<span class="date"><?php the_date( 'Y.m.d' ); ?></span>
			
		</div>
		<!-- /.info -->
		
		<h1 class="title"><?php the_title(); ?></h1>
		
		<div class="single-content">
			<?php the_content(); ?>
			
		</div>
		<!-- /.single-content -->
		
	</article>
	<!-- /#single_news -->
	
	<a class="btn_news_single" href="<?php echo home_url(); ?>/news">
		<img class="image" src="<?php echo get_template_directory_uri(); ?>/images/news/btn_back.png" alt="一覧へ戻る">
		<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/images/news/btn_back_s.png" alt="">
	</a>
		
	<?php endwhile; else: ?>
		<p style="text-align:center; font-size:24px; font-weight:bold; color:#ddd; margin:100px auto; line-height:200%;">お探しの記事は準備中です。<br>近日中に公開となります。</p>
		
	<?php endif; ?>

<?php get_footer(); ?>