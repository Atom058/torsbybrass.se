<?php 
 /**
 *	The landing-page of the theme.
 *
 *	@package Wordpress
 *	@subpackage torsbybrass
 *	@since torsbybrass v.1.0
 **/
 ?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="posts front">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
		<p class="meta">
			<?php the_date( 'j F, Y', 'Publicerat den ', '', TRUE ) ?> <?php if( get_the_author() !== admin ) echo( 'av ' . get_the_author() ); ?>
		</p>
		<?php the_content(); ?>
		<?php 
			if( comments_open() ){
				echo '<p style="text-align: center"><a href="' . get_permalink() . '" rel="" title="Kommentera artikeln">';
				comments_number();
				echo '</a></p>';
			}
		?>
	</article>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
