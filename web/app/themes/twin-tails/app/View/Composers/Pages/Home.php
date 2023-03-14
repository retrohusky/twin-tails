<?php

namespace App\View\Composers\Pages;

use Roots\Acorn\View\Composer;

class Home extends Composer
{
    protected static $views = [
        'template-home',
    ];

    public function with(): array
    {
        return [
            'lastChapter' => $this->lastChapter(),
        ];
    }

    private function lastChapter()
    {
        $lastChapter = get_posts([
            'post_type' => 'chapter',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);

        return $lastChapter[0];
    }
}
