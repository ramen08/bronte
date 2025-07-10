<?php
add_filter('jpeg_quality', function ($arg) {
    return 100;
});

add_filter('big_image_size_threshold', '__return_false');

/**
 * Add Support for ACF Options page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

/**
 * Register CPT
 */
add_action('init', function () {

    register_post_type('post_faq', [
        'labels' => [
            'name' => __('FAQs'),
            'singular_name' =>  __('FAQ'),
            'add_new' =>  __('Add new'),
            'add_new_item' =>  __('Add new FAQ'),
            'edit' =>  __('Edit'),
            'edit_item' =>  __('Edit FAQ'),
            'new_item' =>  __('New FAQ'),
            'view' =>  __('View FAQs'),
            'view_item' =>  __('View FAQs'),
            'search_items' =>  __('Search FAQs'),
            'not_found' =>  __('No FAQs found'),
            'not_found_in_trash' =>  __('No FAQs found in Trash'),
        ],
        'rewrite' => [
            'with_front' => false
        ],
        'description'   => '',
        'menu_position' => 12,
        'public'        => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'supports'      => ['title'],
        'has_archive'   => false,
        // 'rewrite' => array('slug' => 'faq', 'with_front' => false),
        'menu_icon'     => 'dashicons-editor-help',
        // 'taxonomies' => ['faq_category'],
    ]);
});

/**
 * Register Taxonomies
 */
add_action('init', function () {

    register_taxonomy('faq_category', ['post_faq'], [
        'labels' => [
            'name' => "FAQ Category",
            'singular_name' => "FAQ Categories"
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => false,
        "query_var" => true,
        "rewrite" => ['slug' => 'faq-category', 'with_front' => false],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "rest_base" => "faq_category",
        "show_in_quick_edit" => true,
    ]);
});


