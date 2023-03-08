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
        return [
            'updates' => $this->updates(),
        ];
    }

    private function updates(): array
    {
        $updates = get_posts([
            'post_type' => 'post',
            'posts_per_page' => 10,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
        ]);


        foreach ($updates as $update) {
            $update->post_content = apply_filters('the_content', $update->post_content);
        }

        return array_map(function (\WP_Post $update) {
            return [
                'title' => $update->post_title,
                'date' => get_the_date('d.m.Y', $update->ID),
                'content' => $update->post_content,
            ];
        }, $updates);
    }
}
