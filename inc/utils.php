<?php
/**
 * Theme utils
 *
 * @package wpv
 */

if ( ! function_exists( 'defer_parsing_of_js' ) ) {
  function defer_parsing_of_js( $tag, $handle ) {
    return str_starts_with($handle, 'wpv') ? str_replace( ' src', ' defer src', $tag ) : $tag;
  }
}

add_filter('script_loader_tag', 'defer_parsing_of_js', 10, 2 );
