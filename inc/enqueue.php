<?php
/**
 * Enqueue scripts
 *
 * @package wpv
 */

function add_stylesheet( $name, $src_path ) {
  wp_enqueue_style(
    $name, get_template_directory_uri() . $src_path,
    array(), filemtime( get_stylesheet_directory() . $src_path )
  );
}

function add_script( $name, $src_path ) {
  wp_enqueue_script(
    $name, get_template_directory_uri() . $src_path,
    array(), filemtime( get_stylesheet_directory() . $src_path )
  );
}

if ( ! function_exists( 'wpv_assets' ) ) {
  // Load theme's JavaScript and CSS sources
  function wpv_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    /*
     * Main
     */
    add_stylesheet( 'wpv-main-style', '/src/dist/main.min.css' );
    add_script( 'wpv-main-script', '/src/dist/main.min.js' );

    /*
     * Page template
     */
    if ( is_page() ) {
      add_stylesheet( 'wpv-page-style', '/src/dist/hello_world.min.css' );
      add_script( 'wpv-page-script', '/src/dist/hello_world.min.js' );
    }
  }
}

add_action( 'wp_enqueue_scripts', 'wpv_assets' );
