<?php

/**
 * Useful for quick debugging
 */
if (!function_exists('_log')) {
    function _log($message) {
        if (WP_DEBUG === true) {
            if (is_array($message) || is_object($message)) {
                error_log(print_r($message, true));
            } else {
                error_log($message);
            }
        }
    }
}

/**
 * Add title tag support
 */
add_theme_support('title-tag');

/**
 * Enqueue Stylesheets
 */
add_action('wp_enqueue_scripts', function () {
    // Google Fonts - Montserrat
    wp_enqueue_style('google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
    
    // Note: Bootstrap Grid only includes classes like col-*, m-md-3 and pt-2
    wp_enqueue_style('bootstrap_grid', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap-grid.min.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/style.css', null, filemtime(get_template_directory() . '/css/style.css'));
});

/**
 * Enqueue Javascript
 */
add_action('wp_enqueue_scripts', function () {

    // Deregister the default and add it back in to the footer
    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, NULL, true);
    wp_enqueue_script('jquery');
    wp_register_script('custom_scripts', get_template_directory_uri() . '/js/custom.js', 'jquery', filemtime(get_template_directory() . '/js/custom.js'), true);

    // Feed PHP data to custom_scripts
    $theme_vars = [
        'templateUrl' => get_bloginfo('template_url'),
        'websiteUrl' => site_url(),
        'ajaxUrl' => admin_url('admin-ajax.php')
    ];
    wp_localize_script('custom_scripts', 'themeData', $theme_vars);
    wp_enqueue_script('custom_scripts');
});

/**
 * Register Navs
 */
add_action('init', function () {

    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'mobile-menu' => __('Mobile Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
});

/**
 * Remove tags and categories from articles
 */
add_action('init', function () {

    unregister_taxonomy_for_object_type('post_tag', 'post');
    unregister_taxonomy_for_object_type('category', 'post');
});

/**
 * Add page slug to body class
 */
add_filter('body_class', function ($classes) {
    if (is_page()) {
        global $post;
        $classes[] = 'slug-' . $post->post_name;
    }
    return $classes;
});

/**
 * Disable unneeded default Wordpress crop sizes
 */
add_filter('intermediate_image_sizes_advanced', function ($sizes) {
    unset($sizes['medium']); // 300px
    unset($sizes['large']); // 1024px
    unset($sizes['medium_large']); // 768px
    unset($sizes['1536x1536']); // 1536x1536
    unset($sizes['2048x2048']); // 2048x2048
    return $sizes;
});



/**
 * Add support for Label-less Gravity Forms
 */
add_filter('gform_enable_field_label_visibility_settings', '__return_true');

/**
 * Scroll to Gravity Form confirmation message after form submission
 */
add_filter('gform_confirmation_anchor', '__return_true');

/**
 * Disable Block Editor custom color picker.
 */
add_action('after_setup_theme', function () {

    add_theme_support('disable-custom-colors');
});

/**
 * Limit Block Editor to certain blocks
 */
add_filter('allowed_block_types_all', function ($allowed_block_types, $post) {
    return [
        'core/buttons',
        'core/column',
        'core/columns',
        'core/cover',
        'core/group',
        'core/heading',
        'core/image',
        'core/list',
        'core/media-text',
        'core/paragraph',
        'core/pullquote',
        'core/quote',
        'core/separator',
        'core/shortcode',
        'core/spacer',
        'core/table',
        'core/text-columns',
        'core/gallery',
        'core/embed',
        'core-embed/vimeo',
        'core-embed/youtube',
        'gravityforms/form'
    ];
}, 10, 2);
