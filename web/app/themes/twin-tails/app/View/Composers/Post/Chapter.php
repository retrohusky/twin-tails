<?php

namespace App\View\Composers\Post;

use Roots\Acorn\View\Composer;

class Chapter extends Composer
{
    protected static $views = [
        'single-chapter',
    ];

    public function with()
    {
        return [
            'chapter' => $this->chapter(),
            'comic' => get_field('comic', $this->chapter()),
        ];
    }

    private function chapter()
    {
        return get_post();
    }
}
