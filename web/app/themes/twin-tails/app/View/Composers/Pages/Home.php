<?php

namespace App\View\Composers\Pages;

use Illuminate\Support\Arr;
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
            'firstChapter' => $this->firstChapter(),
            'mainVideo' => $this->mainVideo(),
        ];
    }

    private function lastChapter()
    {
        $lastChapter = get_posts([
            'post_type' => 'chapter',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'post_status' => 'publish',
            'order' => 'DESC',
        ]);

        return Arr::get($lastChapter, 0, null);
    }

    private function firstChapter()
    {
        $firstChapter = get_posts([
            'post_type' => 'chapter',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'post_status' => 'publish',
            'order' => 'ASC',
        ]);

        return Arr::get($firstChapter, 0, null);
    }

    private function mainVideo()
    {
        if ( !function_exists( 'get_field' ) ) {
            return null;
        }

        $video = get_field('home_video');

        if ( !$video ) {
            return null;
        }

        return $video;
    }
}
