<?php

namespace App\View\Composers\Pages;

use Roots\Acorn\View\Composer;

class Comics extends Composer
{
    protected static $views = [
        'template-comics',
    ];

    public function with(): array
    {
        return [
            'volumes' => $this->getVolumes(),
        ];
    }

    private function getVolumes(): array
    {
        return get_terms([
            'taxonomy' => 'volume',
            'hide_empty' => true,
            'order' => 'DESC',
        ]);
    }
}
