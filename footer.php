<footer>
	<div id="global_foot">
		<?php get_template_part( 'drawer' ); ?>
		
	</div>
	<!-- /#global_foot -->
	
	<div id="global_foot_s">
		<?php get_template_part( 'drawer_s' ); ?>
		
	</div>
	<!-- /#global_foot_s -->
	
</footer>

<!--jQuery --> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/nav_drawer.js"></script>
<script>
	//usage with class="mailtoui"
	window.addEventListener('load', function(){
		if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){
			var script = $('<script>').attr({
			'type': 'text/javascript',
			'src': 'https://cdn.jsdelivr.net/npm/mailtoui@1.0.3/dist/mailtoui-min.js'
			});
			$('body')[0].appendChild(script[0]);
		}
	});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight.js"></script>
<script>
	$(function() {
	    $('.img_gallery').matchHeight();
	    $('.caption_gallery').matchHeight();
	    $('.style_archive').matchHeight();
	    $('.title_archive').matchHeight();
	    $('.info_archive').matchHeight();
	    $('#loop .box').matchHeight();
	});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script>
	$('.multiple-items').slick({
		autoplay: true,
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			breakpoint: 769,
				settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '20vw',
				slidesToShow: 1
				}
			}
		]
	});
</script>

<?php wp_footer(); ?>

</body>
</html>