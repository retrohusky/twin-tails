<?php

namespace App\Services;

class ComicService
{
    public function __construct()
    {
        $this->addChapterCustomPostType();
        $this->addVolumeTaxonomy();
    }

    private function addChapterCustomPostType()
    {
        add_action('init', function () {
            register_post_type('chapter', [
                'labels' => [
                    'name' => __('Chapters'),
                    'singular_name' => __('Chapter'),
                    'add_new' => __('Add New'),
                    'add_new_item' => __('Add New Chapter'),
                    'edit_item' => __('Edit Chapter'),
                    'new_item' => __('New Chapter'),
                    'view_item' => __('View Chapter'),
                    'view_items' => __('View Chapters'),
                    'search_items' => __('Search Chapters'),
                    'not_found' => __('No Chapters found.'),
                    'not_found_in_trash' => __('No Chapters found in Trash.'),
                    'parent_item_colon' => __('Parent Chapter:'),
                    'all_items' => __('All Chapters'),
                    'archives' => __('Chapter Archives'),
                    'attributes' => __('Chapter Attributes'),
                    'insert_into_item' => __('Insert into Chapter'),
                    'uploaded_to_this_item' => __('Uploaded to this Chapter'),
                    'featured_image' => __('Featured Image'),
                    'set_featured_image' => __('Set featured image'),
                    'remove_featured_image' => __('Remove featured image'),
                    'use_featured_image' => __('Use as featured image'),
                    'filter_items_list' => __('Filter Chapters list'),
                    'items_list_navigation' => __('Chapters list navigation'),
                    'items_list' => __('Chapters list'),
                    'item_published' => __('Chapter published.'),
                    'item_published_privately' => __('Chapter published privately.'),
                    'item_reverted_to_draft' => __('Chapter reverted to draft.'),
                    'item_scheduled' => __('Chapter scheduled.'),
                    'item_updated' => __('Chapter updated.'),
                ],
                'public' => true,
                'has_archive' => true,
                'show_in_rest' => true,
                'rewrite' => ['slug' => 'chapters', 'with_front' => false],
                'supports' => ['title', 'thumbnail',],
                'taxonomies' => ['volume'],
            ]);
        });
    }

    private function addVolumeTaxonomy()
    {
        add_action('init', function () {
            register_taxonomy('volume', 'chapter', [
                'labels' => [
                    'name' => __('Volumes'),
                    'singular_name' => __('Volume'),
                    'search_items' => __('Search Volumes'),
                    'all_items' => __('All Volumes'),
                    'parent_item' => __('Parent Volume'),
                    'parent_item_colon' => __('Parent Volume:'),
                    'edit_item' => __('Edit Volume'),
                    'view_item' => __('View Volume'),
                    'update_item' => __('Update Volume'),
                    'add_new_item' => __('Add New Volume'),
                    'new_item_name' => __('New Volume Name'),
                    'popular_items' => __('Popular Volumes'),
                    'separate_items_with_commas' => __('Separate Volumes with commas'),
                    'add_or_remove_items' => __('Add or remove Volumes'),
                    'choose_from_most_used' => __('Choose from the most used Volumes'),
                    'not_found' => __('No Volumes found.'),
                    'no_terms' => __('No Volumes'),
                    'items_list_navigation' => __('Volumes list navigation'),
                    'items_list' => __('Volumes list'),
                    'back_to_items' => __('&larr; Back to Volumes'),
                ],
                'public' => true,
                'hierarchical' => false,
                'show_in_rest' => true,
                'rewrite' => ['slug' => 'volumes', 'with_front' => false],
                'show_admin_column' => true,
            ]);
        });
    }
}
