<?php 

	/*----- Register sidebars -----*/
	$args = array(
			'name' => __( 'Main Sidebar' )
			, 'id' => 'primary'
			, 'description' => 'The main sidebar of the site. Used on all pages by default.'
			, 'before_widget' => '<section id="%1$s">'
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

	/*----- Add adaptable main menu -----*/
	function register_tb_menu() {
		register_nav_menu( 'header-menu', __( 'Header Menu' ) );
	}
	add_action( 'init', 'register_tb_menu' );

	/*----- Reduce the number of posts on front page -----*/
	function tb_home_pagesize( $query ) {
	    if ( is_home() ) {
	        $query -> set( 'posts_per_page', 5 );
	        return;
	    }
	}
	add_action( 'pre_get_posts', 'tb_home_pagesize', 1 );

	/*----- [Section] shortcode for divided pages -----*/
	function tb_section_shortcode( $atts, $content = null ){
		$output = null;
		if( $content != null ){
			return '<section class="divided">' . do_shortcode($content) . '</section>';
		}
		return $output;
	}
	add_shortcode( 'tb_section', 'tb_section_shortcode');

?>
