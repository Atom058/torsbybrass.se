<?php 

	/*----- Register sidebars -----*/
	$args = array(
			'name' => __( 'Main Sidebar' )
			, 'id' => 'primary'
			, 'description' => 'The main sidebar of the site. Used on all pages by default.'
			, 'before_widget' => '<section>'
			, 'after_widget' => '</section>'
			, 'before_title' => '<h2>'
			, 'after_title' => '</h2>'
		);
	register_sidebar( $args );

?>
