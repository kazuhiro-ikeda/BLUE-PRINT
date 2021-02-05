<?php get_header(); ?>
	
	<article id="archive_news">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="box">
			<a href="<?php the_permalink( '' ); ?>">
				<figure>
				<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail( 'ランドスケープM' ); ?>
				
				<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/news/img.jpg" alt="">
				
				<?php endif; ?>
				
				</figure>
				
				<div class="data">
					<?php 
					    /*$term  = wp_get_object_terms($post->ID, 'genre_news');
					    $term_slug = $term[0]->slug;
					    $term_name = $term[0]->name;*/
					 ?>
					 
					<div class="information">
						<span class="label_news"><?php echo $term_name; ?></span>
						<span class="date"><?php echo get_the_date( 'Y.m.d' ); ?></span>
						
					</div>
					<!-- /.info -->
					
					<h2 class="title"><?php echo get_the_title(); ?></h2>
					
					<span class="btn">
						<img class="image" src="<?php echo get_template_directory_uri(); ?>/images/news/btn_more.png" alt="詳しく見る">
						<img class="image_s" src="<?php echo get_template_directory_uri(); ?>/images/news/btn_more_s.png" alt="">
					</span>
				</div>
				<!-- /.data -->
			
			</a>
			
		</div>
		<!-- /.box -->
			
		<?php endwhile; else: ?>
		
		<?php endif; ?>
	
	</article>
	<!-- /#archive_news -->
	
	<?php the_posts_pagination( array( 'mid_size' => 3, 'prev_text' => '<<', 'next_text' => '>>', 'screen_reader_text' => '',  ));  ?>
			
<?php get_footer(); ?>