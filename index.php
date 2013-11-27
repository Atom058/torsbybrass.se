<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>">
    <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="En permanent länk till artikeln '<?php the_title_attribute();?>'"><?php the_title(); ?></a></h1>
    <div>
      <?php the_date( 'F j, Y', 'Published on ', '', TRUE ) ?> by <?php echo(get_the_author()); ?>
    </div>
    <div>
      <?php the_content(); ?>
    </div>
  </article>

<?php endwhile; endif; ?>
<?php //get_footer(); ?>
