
<article class="box">
    <div class="inner_wrap">
		<?php
		$term  = wp_get_object_terms($post->ID, 'genre');
		$term_slug = $term[0]->slug;
		$term_name = $term[0]->name;
		?>
        <span class="label <?php echo $term_slug; ?>"><?php echo $term_name; ?></span>

        <div class="inner_box">
            <div class="data">
                <h2 class="title"><?php the_field( "title_case", $post->ID); ?></h2>

                <table class="info_table">
                    <tr>
                        <th><?php the_field( "title_case", $post->ID); ?></th>
                        <td><figure>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets_recruit/img/case/img.jpg" alt="">

								<?php endif; ?>

                            </figure></td>
                    </tr>
                </table>

                <table class="data_table">
					<?php
					$detail = get_field('detail');
					if( !empty($detail) ):
						?>
                        <tr>
                            <th>仕事内容</th>
                            <td><?php
								$text = mb_substr(get_field('detail'),0 ,60 ,'utf-8');
								$str = $text;
								echo strip_tags( $str, '<br>');

								$number = mb_strlen(get_field('detail'));

								if($number > 60) {
									echo '…';
								}
								?></td>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets_recruit/img/case/img.jpg" alt="">

				<?php endif; ?>

            </figure>

        </div>
        <!-- /.inner_box -->

        <div class="btns_case">
            <a class="btn_inner n1" href="<?php the_permalink(); ?>">募集の詳細を見る</a>

            <a class="btn_inner n2" href="<?php echo home_url(); ?>/?page_id=59&post_id=<?php echo $post->ID; ?>">応募する</a>

        </div>
        <!-- /.btns -->


    </div>
    <!-- /.inner_wrap -->

</article>
<!-- /.box -->
