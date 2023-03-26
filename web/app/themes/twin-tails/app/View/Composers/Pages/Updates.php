<?php

namespace App\View\Composers\Pages;

use Roots\Acorn\View\Composer;

class Updates extends Composer
{
    protected static $views = [
        'template-updates',
    ];

    public function with(): array
    {

        $paged = get_query_var('paged') ?: 1;

        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
        ];

        $query = new \WP_Query($args);

        $updates = $query->posts;

        foreach ($updates as $update) {
            $update->post_content = apply_filters('the_content', $update->post_content);
        }

        $updates = array_map(function (\WP_Post $update) {
            return [
                'title' => $update->post_title,
                'date' => get_the_date('d.m.Y', $update->ID),
                'content' => $update->post_content,
            ];
        }, $updates);

        return [
            'updates' => $updates,
            'query' => $query,
        ];
    }
}
