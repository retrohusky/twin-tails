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
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'tax_query' => [
                [
                    'taxonomy' => 'volume',
                    'field' => 'slug',
                    'terms' => $this->getVolume()->slug,
                ],
            ],
        ]);
    }

    static public function getAdjacent($term, $taxonomy, $previous = true) {
        $terms = get_terms([
            'taxonomy'   => $taxonomy,
            'hide_empty' => false,
            'orderby'    => 'term_id',
        ]);

        $current_index = array_search($term->term_id, wp_list_pluck($terms, 'term_id'), true);

        if (false === $current_index) {
            return null;
        }

        if ($previous) {
            return $current_index > 0 ? $terms[$current_index - 1] : null;
        } else {
            return $current_index < count($terms) - 1 ? $terms[$current_index + 1] : null;
        }
    }
}
