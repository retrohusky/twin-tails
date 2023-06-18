<?php

namespace App\View\Composers\Pages;

use Roots\Acorn\View\Composer;

class Embeds extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-media-embeds',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with(): array
    {
        return [
            'embeds' => $this->getEmbeds(),
        ];
    }

    private function getEmbeds()
    {
        if (!function_exists('get_field')) {
            return null;
        }

        $embeds = get_field('embeds', get_the_ID());

        if (!$embeds) {
            return null;
        }

        return $embeds;
    }
}
