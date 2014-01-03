<?php 
 /**
 *	Standard view of categories
 *
 *	@package Wordpress
 *	@subpackage torsbybrass
 *	@since torsbybrass v.1.0
 **/
 ?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="posts">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
		<p class="meta">
			<?php the_date( 'j F, Y', 'Publicerat den ', '', TRUE ) ?> <?php if( get_the_author() !== admin ) echo( 'av ' . get_the_author() ); ?>
		</p>
		<?php the_excerpt(); ?>
		<?php 
			if( comments_open() ){
				echo '<p style="text-align: center"><a href="' . get_permalink() . '#commentform" rel="" title="Kommentera artikeln">';
				comments_number();
				echo '</a></p>';
			}
		?>
	</article>
<?php endwhile; endif; ?>

<div class="padded" style="text-align: center; margin: 2em 0;" >
	<?php 
		
		$next = get_next_posts_link( '<button><span class="button-text">Äldre inlägg</span></button>' );
		$previous = get_previous_posts_link( '<button><span class="button-text">Nyare inlägg</span></button>' );

		if( $next != null ) {
			echo $next;
		}
		if( $previous != null ){
			echo $previous;
		}
	?>
</div>

</div>

<?php get_footer(); ?>
