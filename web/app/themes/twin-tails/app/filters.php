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

function custom_chapter_permalink_structure($permalink, $post, $leavename)
{
    if ($post->post_type === 'chapter' && ! empty($post->post_name)) {
        $terms = wp_get_post_terms($post->ID, 'volume');
        if (! empty($terms) && ! is_wp_error($terms)) {
            $volume_slug = $terms[0]->slug;
            $permalink = str_replace('%volume%', $volume_slug, $permalink);
            $permalink = str_replace('%postname%', $post->post_name, $permalink);
        }
    }
    return $permalink;
}
add_filter('post_type_link', 'App\custom_chapter_permalink_structure', 10, 3);

function custom_chapter_rewrite_rule()
{
    add_rewrite_rule(
        '^volumes/([^/]*)/([^/]*)/?',
        'index.php?chapter=$matches[2]&volume=$matches[1]',
        'top'
    );
}
add_action('init', 'App\custom_chapter_rewrite_rule');



add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
