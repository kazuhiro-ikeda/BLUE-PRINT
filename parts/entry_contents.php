
<div class="entry_contents">
	
	<?php 
		$image = get_field( 'img' );
		if( !empty($image) ): 

		// vars
		$url = $image['url'];
		$alt = $image['alt'];
	
		// thumbnail
		$size = 'エントリー';
		$thumb = $image['sizes'][ $size ];

	 ?>

		<figure><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"></figure>
		
	<?php else: ?>
			
	<?php endif; ?>
	
	<div class="single-content"><?php the_field( "text", $post->ID); ?></div>

</div>
<!-- /.entry_content -->

<div class="display_confirm">
	
</div>
<!-- /.display_confirm -->
			