<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="google" content="notranslate">

<?php if (is_mobile()) : //smartphone only ?>
<?php if(is_page( 'entry' ) || is_page( 'contact' )): ?>
<meta name="viewport" content="width=device-width, user-scalable=no">

<?php else: ?>
<meta name="viewport" content="width=device-width">

<?php endif; ?>
			
<?php else : //pc tablet ?>
<meta name="viewport" content="width=device-width">
			
<?php  endif ; //if_mobile ?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<script src="https://use.fontawesome.com/38e4e444a4.js"></script>
<link rel="alternate" hreflang="ja" href="<?php the_permalink(); ?>">
<meta name="format-detection" content="telephone=no">

<?php wp_deregister_script( 'jquery' ); wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), '1.11.0' ); ?>

<title>
	<?php if(is_singular( 'case' )): ?>
	<?php the_field( "title_case", $post->ID); ?>｜<?php bloginfo( 'name' ); ?>
	
	<?php else: ?>
	<?php full_title(); ?>
	
	<?php endif; ?>
</title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
<header class="normal">
	<div class="inner">
		<<?php diverge_site_id(); ?> class="logo"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a></<?php diverge_site_id(); ?>>
		
		<nav id="global">
			<?php get_template_part( 'drawer' ); ?>
			
		</nav>
		
	</div>
	<!-- /.inner -->

</header>

<div class="nav_drawer">
	<div class="drawer_bg"></div>
	<!-- /.drawer_bg -->
	
	<div class="inner">
		<a href="<?php echo home_url(); ?>/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo_s.png" alt="<?php bloginfo( 'name' ); ?>"></a>
		
	</div>
	<!-- /.inner -->
	
	<button type="button" class="drawer_button"></button>
	
	<nav class="drawer_nav_wrapper" id="drawer">
		<?php get_template_part( 'drawer_s' ); ?>
		
	</nav>
	
</div>
<!-- .nav_drawer -->
