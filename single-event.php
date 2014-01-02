<?php 
 /**
 *	The template file for displaying all single posts
 *
 *	@package Wordpress
 *	@subpackage torsbybrass
 *	@since torsbybrass v.1.0
 **/
 ?>

<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<section class="content">
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
			<?php eo_get_template_part('event-meta','event-single'); ?>
			<?php the_content(); ?>
		</section>
		<?php 
		if( comments_open() || get_comments_number() )  {
			echo '<section class="comments">';
			comments_template();
			echo '</section>';
		}
		?>
	</article>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
