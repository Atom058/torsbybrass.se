<?php get_header(); ?>

<div id="content" class="l-pagewide">

	<div class="">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="l-margin-top-large">
					<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
					<div class="c-gray">
						<?php the_date( 'F j, Y', 'Published on ', '', TRUE ) ?> by <?php echo(get_the_author()); ?>
					</div>
					<div class="l-margin-top-small">
							<?php the_content(); ?>
					</div>
				</article>
				<?php wp_link_pages(); ?>
				<hr class="l-margin-top-large"> <?php //TODO: add check for more posts ?>
		<?php endwhile; else : ?>
			<!-- If no post were found, we have a fallback-->
			<p><?php _e('Sorry, could not find any posts...'); ?></p>
		<?php endif; ?>
	</div>

</div>

<?php get_footer(); ?>