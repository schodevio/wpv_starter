<?php
/**
 * Theme basic setup
 *
 * @package wpv
 */

// Set the content width based on the theme's design and stylesheet
if ( ! isset( $content_width ) ) {
	$content_width = 720; /* pixels */
};

add_action( 'after_setup_theme', 'wpv_setup' );

if ( ! function_exists( 'wpv_setup' ) ) {
	function wpv_setup() {
		//Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

    // Set up the WordPress Theme logo feature
		add_theme_support( 'custom-logo' );

    // Adding Thumbnail basic support
		add_theme_support( 'post-thumbnails' );

    // Add support for responsive embedded content
		add_theme_support( 'responsive-embeds' );

		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/*
		 * Enable support for Post Formats
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Add nav menus declaration
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'wpv' ),
			)
		);
	}
}
