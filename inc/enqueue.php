<?php
/**
 * Enqueue scripts
 *
 * @package wpv
 */

if ( ! function_exists( 'wpv_assets' ) ) {
  // Load theme's JavaScript and CSS sources
  function wpv_assets() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Styles
    // wp_enqueue_style(
    //   'wpv-styles',
    //   get_template_directory_uri() . '/assets/dist/index.min.css',
    //   array(),
    //   filemtime( get_stylesheet_directory() . '/assets/dist/index.min.css' )
    // );

    // Scripts
    // wp_enqueue_script(
    //   'wpv-scripts',
    //   get_template_directory_uri() . '/assets/dist/main.js',
    //   array(),
    //   filemtime( get_stylesheet_directory() . '/assets/dist/index.min.css' )
    // );
  }
}

add_action( 'wp_enqueue_scripts', 'wpv_assets' );
