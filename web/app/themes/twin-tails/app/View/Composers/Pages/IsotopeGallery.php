<?php

namespace app\View\Composers\Pages;

class IsotopeGallery extends \Roots\Acorn\View\Composer
{
    protected static $views = [
        'template-gallery',
    ];

    public function with(): array
    {
        return [
            'gallery' => $this->getGallery(),
        ];
    }

    private function getGallery()
    {
        if ( !function_exists('get_field') ) {
            return null;
        }

        $gallery = get_field('gallery', get_the_ID());

        if ( !$gallery ) {
            return null;
        }

        return $gallery;
    }
}
