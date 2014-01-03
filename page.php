<?php 
 /**
 *	The template that are used by all pages by default.
 *
 *	@package Wordpress
 *	@subpackage torsbybrass
 *	@since torsbybrass v.1.0
 **/
 ?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="posts">
<?php while( have_posts() ) : the_post(); ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>
</div>

<?php get_footer(); ?>