<?php

namespace App\View\Composers\Blocks;

use Roots\Acorn\View\Composer;

class TextWithImage extends Composer
{
    protected static $views = [
        'blocks.text-with-image'
    ];

    protected function with(): array
    {
        return [
            'blockData' => get_fields(),
        ];
    }
}
