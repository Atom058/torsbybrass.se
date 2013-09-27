<?php 
 /**
 *	The header of torsby brass theme
 *
 *	@package Wordpress
 *	@subpackage torsbybrass
 *	@since torsbybrass v.1.0
 **/
 ?>
 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>
 <head>
 	<meta charset="<?php bloginfo( 'charset' )?>" />
 	<title><?php wp_title(); ?></title>
 	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
 	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
 	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

 	<?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
 	<!--div id="contact-form" class="contact-form d-bg-white">
 		<form class="contact-form">
 			<label for="name">Your name:</label>
 			<input id="name" name="" type="text">
 			<label for="email">Your email:</label>
 			<input id="email" name="" type="text">
 			<label for="message">Your message</label>
 			<textarea id="message" name="message" rows="6"></textarea>
 			<input name="submit" type="submit" value="Send message!">
 		</form>
 	<div-->
 	<div id="header" class="">
 		<header class="">
 		</header>
 	</div>
 	<nav id="site-nav" class="d-bg-main" role="navigation">
 		<?php wp_nav_menu( array( 
 			'menu' => '1'
 			, 'menu_class' => 'main-navigation l-pagewide l-center') ); ?>
 	</nav>