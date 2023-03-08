<?php

namespace App\View\Composers\Taxonomies;

use Roots\Acorn\View\Composer;

class Volume extends Composer
{
    protected static $views = [
        'taxonomy-volume',
    ];

    public function with()
    {
        return [
            'volume' => $this->getVolume(),
            'chapters' => $this->getChapters(),
        ];
    }

    private function getVolume(): \WP_Term
    {
        return get_queried_object();
    }

    private function getChapters(): array
    {
        return get_posts([
            'post_type' => 'chapter',
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'volume',
                    'field' => 'slug',
                    'terms' => $this->getVolume()->slug,
                ],
            ],
        ]);
    }
}
