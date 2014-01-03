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

	/*----- Adds image styles -----*/
	if ( function_exists( 'add_theme_support' )	) {
	
		if ( function_exists( 'add_image_size' )	) {
			add_image_size( 'post_stretched_large_image', 1024, true );
			add_filter( 'image_size_names_choose', 'my_custom_sizes' );
			
			function my_custom_sizes( $sizes ) {
				return array_merge( $sizes, array(
					'post_large_image' => 'Överskalad stor bild'
					)	
				);
			}
		}
		
	}

?>
