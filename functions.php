<?php /*Add image style support for theme*/
  if ( function_exists( 'add_theme_support' )  ) {
    add_theme_support( 'post-thumbnails' );
  }
/*  if ( function_exist( 'add_image_size' )  ) {
    add_image_size( 'post_large_image','600px' );
    add_filter( 'image_size_names_choose', 'post_large_image' );
  }*/
  if ( function_exists( 'update_option' ) ) {
    update_option( 'medium_size_w' , 600 );
  }
?>
