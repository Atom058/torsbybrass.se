<?php get_header(); ?>

<div id="content" class="">

	<div class="">
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>">
					<h1 class=""><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
					<div class="">
						<?php the_date( 'F j, Y', 'Published on ', '', TRUE ) ?> by <?php echo(get_the_author()); ?>
					</div>
					<div class="content">
							<?php the_content(); ?>
					</div>
					<div class="">
						<div class="">
							<?php echo( the_tags() ); ?><br/>
							Comments: <?php comments_popup_link(); ?>
						</div>
					</div>
				</article>
				<?php wp_link_pages(); ?>
		<?php endwhile; else : ?>
			<!-- If no post were found, we have a fallback-->
			<p><?php _e('Sorry, could not find any posts...'); ?></p>
		<?php endif; ?>
	</div>

</div>

<?php get_footer(); ?>