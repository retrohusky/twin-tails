<?php

namespace App\Services;

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
            'title' => __('Text with image', \_THEME_DOMAIN_),
            'description' => '',
            'supports' => [
                'align' => false,
                'mode' => false,
                'jsx' => false,
            ],
            'render_callback' => '\App\acf_block_render_callback',
            'mode' => 'edit'
        ]);
    }

    private function allowGutenbergBlocks()
    {
        add_filter('allowed_block_types_all', function ($allowedBlocks, $editor) {
            return [
                'acf/text-with-image',
            ];
        }, 20, 2);
    }
}
