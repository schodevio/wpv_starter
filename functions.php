<?php
/**
 * Functions and definitions
 *
 * @package wpv
 */

// Includes directory
$wpv_inc_dir = 'inc';

// Array of files to include.
$wpv_includes = array(
	'/setup.php',         // Theme setup
	'/enqueue.php',				// Scripts and styles
	'/utils.php'					// Theme utils
);

// Include files.
foreach ( $wpv_includes as $file ) {
	require_once get_theme_file_path( $wpv_inc_dir . $file );
}
