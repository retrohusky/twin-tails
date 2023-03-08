<?php

namespace App\Services;

class RewriteService
{
    public function __construct()
    {
        add_filter('post_type_link', [$this, 'custom_chapter_permalink_structure'], 10, 3);
        add_action('init', [$this, 'custom_chapter_rewrite_rule']);
    }

    public function custom_chapter_permalink_structure($permalink, $post, $leavename)
    {
        if ($post->post_type === 'chapter' && !empty($post->post_name)) {
            $terms = wp_get_post_terms($post->ID, 'volume');
            if (!empty($terms) && !is_wp_error($terms)) {
                $volume_slug = $terms[0]->slug;
                $permalink = str_replace('%volume%', $volume_slug, $permalink);
                $permalink = str_replace('%postname%', $post->post_name, $permalink);
            }
        }
        return $permalink;
    }

    public function custom_chapter_rewrite_rule()
    {
        add_rewrite_rule(
            '^volumes/([^/]*)/([^/]*)/?',
            'index.php?chapter=$matches[2]&volume=$matches[1]',
            'top'
        );
    }
}
