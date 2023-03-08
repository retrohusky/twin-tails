<?php

namespace App\Services;

use Roots\WPConfig\Config;

class AcfService
{
    public function __construct()
    {
        $this->registerCustomBlocks();
        $this->allowGutenbergBlocks();
    }

    private function registerCustomBlocks()
    {
        acf_register_block_type([
            'name' => 'text-with-image',
            'title' => __('Text with image'),
            'description' => '',
            'supports' => [
                'align' => false,
                'mode' => false,
                'jsx' => false,
            ],
            'render_callback' => [$this, 'renderCallback'],
            'mode' => 'edit'
        ]);

        acf_register_block_type([
            'name' => 'text',
            'title' => __('Text'),
            'description' => '',
            'supports' => [
                'align' => false,
                'mode' => false,
                'jsx' => false,
            ],
            'render_callback' => [$this, 'renderCallback'],
            'mode' => 'edit'
        ]);
    }

    private function allowGutenbergBlocks()
    {
        add_filter('allowed_block_types_all', function ($allowedBlocks, $editor) {
            return [
                'acf/text-with-image',
                'acf/text',
                'core/paragraph',
                'core/heading',
            ];
        }, 20, 2);
    }

    public function renderCallback($block)
    {
        $slug = str_replace('acf/', '', $block['name']);

        echo \Roots\view("blocks/${slug}", $block);
    }
}
