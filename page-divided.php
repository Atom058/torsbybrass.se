<?php 
 /**
 *	The template that are used by all pages by default.
*	Template Name: Uppdelad sida
 *	@package Wordpress
 *	@subpackage torsbybrass
 *	@since torsbybrass v.1.0
 **/
 ?>

 <?php get_header(); ?>

<div class="posts divided">
<?php while( have_posts() ) : the_post(); ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>