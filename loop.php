		
<article class="box">
	<a href="<?php the_permalink(); ?>">
		<figure>
			<?php 
				$image = get_field( 'img_main', $post->ID );
				if( !empty($image) ): 
				
				// vars
				$url = $image['url'];
				$alt = $image['alt'];
			
				// thumbnail
				$size = '案件';
				$thumb = $image['sizes'][ $size ];
			
				 ?>
				 
			<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>">
			
			<?php else: ?>
			<img src="<?php bloginfo( 'template_url' ); ?>/images/case/img.jpg" alt="">
			
			<?php endif; ?>
			
		</figure>
		<span class="style_archive <?php
						$terms_name = wp_get_object_terms($post->ID, 'genre');
					
						//タームを出力
						if(!empty($terms_name)){
						  if(!is_wp_error( $terms_name )){
						    foreach($terms_name as $term){
						      echo $term->slug; 
						    }
						  }
						}
					?>"><?php the_field( "job", $post->ID); ?></span>
		<h2 class="title_archive"><?php the_field( "title_case", $post->ID); ?></h2>
		<table class="info_archive">
			<tr>
				<th>勤務地</th>
				<td><?php the_field( "place_archive", $post->ID); ?></td>
			</tr>
			<tr>
				<th>給与</th>
				<td><?php the_field( "salary_archive", $post->ID); ?></td>
			</tr>
		</table>
	</a>
</article>
<!-- /.box -->
