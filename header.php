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
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
	<meta charset="<?php bloginfo( 'charset' )?>" />
	<title><?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style-plugins.css'; ?>" type="text/css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class($classes); ?>>
	<header> 
		<h1><a href="<?php echo get_home_url(); ?>" title="Till startsidan">Torsby Brass</a></h1>
		<div class="header-logo"></div>
	</header>
	<nav>
		<?php wp_nav_menu( array( 'theme-location' => 'header-menu' ) ); ?>
		<div class="clearfix"></div>
	</nav>
	<div class="page-content">