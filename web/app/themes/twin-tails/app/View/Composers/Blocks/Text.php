<?php

namespace App\View\Composers\Blocks;

use Roots\Acorn\View\Composer;

class Text extends Composer
{
    protected static $views = [
        'blocks.text'
    ];

    protected function with(): array
    {
        return [
            'blockData' => get_fields(),
        ];
    }
}
