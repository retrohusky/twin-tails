<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

// Modify permalink structure for Chapter custom post type based on Volume taxonomy
function custom_chapter_permalink( $url, $post ) {
    if ( 'chapter' === $post->post_type ) {
        $terms = get_the_terms( $post->ID, 'volume' );
        if ( $terms && ! is_wp_error( $terms ) ) {
            $term_slug = array_shift( $terms )->slug;
            $url = trailingslashit( home_url( "/$term_slug/{$post->post_name}/" ) );
        }
    }
    return $url;
}
add_filter( 'post_type_link', 'App\custom_chapter_permalink', 10, 2 );
