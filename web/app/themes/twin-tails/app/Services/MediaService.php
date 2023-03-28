<?php

namespace App\Services;

class MediaService
{
    public function __construct()
    {
        $this->addVideoCustomPostType();
    }

    private function addVideoCustomPostType()
    {
        add_action('init', function () {
            register_post_type('video', [
                'labels' => [
                    'name' => __('Videos'),
                    'singular_name' => __('Video'),
                    'add_new' => __('Add New'),
                    'add_new_item' => __('Add New Video'),
                    'edit_item' => __('Edit Video'),
                    'new_item' => __('New Video'),
                    'view_item' => __('View Video'),
                    'view_items' => __('View Videos'),
                    'search_items' => __('Search Videos'),
                    'not_found' => __('No Videos found.'),
                    'not_found_in_trash' => __('No Videos found in Trash.'),
                    'parent_item_colon' => __('Parent Video:'),
                    'all_items' => __('All Videos'),
                    'archives' => __('Video Archives'),
                    'attributes' => __('Video Attributes'),
                    'insert_into_item' => __('Insert into Video'),
                    'uploaded_to_this_item' => __('Uploaded to this Video'),
                    'featured_image' => __('Featured Image'),
                    'set_featured_image' => __('Set featured image'),
                    'remove_featured_image' => __('Remove featured image'),
                    'use_featured_image' => __('Use as featured image'),
                    'filter_items_list' => __('Filter Videos list'),
                    'items_list_navigation' => __('Videos list navigation'),
                    'items_list' => __('Videos list'),
                    'item_published' => __('Video published.'),
                    'item_published_privately' => __('Video published privately.'),
                    'item_reverted_to_draft' => __('Video reverted to draft.'),
                    'item_scheduled' => __('Video scheduled.'),
                    'item_updated' => __('Video updated.'),
                ],
                'public' => true,
                'has_archive' => true,
                'show_in_rest' => true,
                'rewrite' => ['slug' => 'videos', 'with_front' => false],
                'supports' => ['title'],
            ]);
        });
    }
}
