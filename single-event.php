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

<div class="posts">
<?php while( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
		<section class="meta">
			<?php get_template_part('single', 'event-meta'); ?>
		</section>
		<section class="content">
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
</div>

<?php get_footer(); ?>
