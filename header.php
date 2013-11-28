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
 	<link rel="stylesheet" href="<?php bloginfo( 'template_url' )?>/styles/layout.css" type="text/css" />
 	<link rel="stylesheet" href="<?php bloginfo( 'template_url' )?>/styles/colour.css" type="text/css" />
 	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

 	<?php wp_head(); ?>
 </head>
 
<body <?php body_class($classes); ?>>
  <header> 
    <h1>Torsbybrass.se!</h1>
  </header>
  <nav>
    <?php wp_nav_menu( array('menu' => '1') ); ?>
  </nav>
