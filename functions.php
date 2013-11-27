<?php 
/*
 * Contains the functions of the torsby brass theme
*/

//Add the custom post type "Spelning"
add_action( 'init', 'create_post_type' ); //Adds the function to run during the init-hook

function create_post_type() {
	register_post_type( 'torsbybrass_spelning',
		array( 'labels' => array(
								'name' => __( 'Spelningar' ),
								'singular_name' => __( 'Spelning' )
								)
				, 'public' => true
				, 'has_archive' => true
			)
	);
}