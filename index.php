<?php get_header(); ?>

<div class="page-content">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
		<p>
			<?php the_date( 'F j, Y', 'Published on ', '', TRUE ) ?> by <?php echo(get_the_author()); ?>
		</p>
		<?php the_content(); ?>
	</article>
<?php endwhile; endif; ?>

<aside>
	<?php get_sidebar(); ?>
</aside>

</div>
<div class="clearfix"></div>

<?php get_footer(); ?>
