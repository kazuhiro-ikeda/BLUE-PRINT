		
<article class="box">
	<div class="inner_wrap">
		<span class="label <?php
		
							$terms_name = wp_get_object_terms($post->ID, 'jobstyle');
							
							//タームを出力
							if(!empty($terms_name)){
							  if(!is_wp_error( $terms_name )){
							    foreach($terms_name as $term){
							      echo $term->slug; 
							    }
							  }
							}
							
							?>"><?php	
		$terms_name = wp_get_object_terms($post->ID, 'jobstyle');
		
		//タームを出力
		if(!empty($terms_name)){
		  if(!is_wp_error( $terms_name )){
		    foreach($terms_name as $term){
		      echo $term->name; 
		    }
		  }
		}
		
		?></span>
		
		<div class="inner_box">
			<div class="data">
				<h2 class="title"><?php the_field( "title_case", $post->ID); ?></h2>				
			
				<table class="data_table">
					<?php 
						$detail = get_field('detail');
						if( !empty($detail) ):
					?>
					<tr>
						<th>仕事内容</th>
						<td><?php if (is_mobile()) : //smartphone only ?>
							<?php $text = mb_substr(get_field('detail'), 0, 32, 'utf-8' ); echo $text.'…'; ?>
										
							<?php else : //pc tablet ?>
							<?php $text = mb_substr(get_field('detail'), 0, 62, 'utf-8' ); echo $text.'…'; ?>
										
							<?php  endif ; //if_mobile ?></td>
					</tr>
					
					<?php endif; ?>
					
					<?php 
						$place_archive = get_field('place_archive');
						if( !empty($place_archive) ):
					?>
					<tr>
						<th>勤務地</th>
						<td><?php the_field( "place_archive", $post->ID); ?></td>
					</tr>
					
					<?php endif; ?>
					
					<?php 
						$salary_archive = get_field('salary_archive');
						if( !empty($salary_archive) ):
					?>
					<tr>
						<th>給与</th>
						<td><?php the_field( "salary_archive", $post->ID); ?></td>
					</tr>
					
					<?php endif; ?>
					
				</table>
				
			</div>
			<!-- /.data -->
			
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
			
		</div>
		<!-- /.inner_box -->
		
		<div class="btns">
			<span class="text_label">募集詳細と応募はこちらから</span>
			
			<div class="inner_btns">
				<a class="btn_detail_more btn_inner" href="<?php the_permalink(); ?>">募集の詳細を見る</a>
			
				<a class="btn_dierct_entry btn_inner" href="<?php echo esc_url(home_url('/')); ?>?page_id=55&post_id=<?php echo $post->ID; ?>">応募する</a>
			
			</div>
			<!-- /.inner_btns -->
			
		</div>
		<!-- /.btns -->
	
	</div>
	<!-- /.inner_wrap -->
	
</article>
<!-- /.box -->
