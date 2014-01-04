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
<?php get_sidebar(); ?>

<div class="posts">
<?php while( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<section class="content">
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
		<p class="meta">
			<?php the_date( 'j F, Y', 'Publicerat den ', '', TRUE ) ?> <?php if( get_the_author() !== 'admin' ) echo( 'av ' . get_the_author() ); ?>
		</p>
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
