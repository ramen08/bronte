<?php

/**
 * Remove unneeded admin dashboards
 */
add_action('admin_init', function () {

    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
    remove_meta_box('dashboard_quick_press', 'dashboard', 'normal');
    remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'normal');
});

/**
 * Add footer credits
 */
add_filter('admin_footer_text', function () {

    echo '<a href="https://www.bronte.co.nz">Website by Bronte</a>';
});

/**
 * Always show Yoast low on the page in the backend
 */
add_filter('wpseo_metabox_prio', function () {
    return 'low';
});

/**
 * Change wp-login logo to link to homepage
 */
add_filter('login_headerurl', function () {
    return home_url();
});

/**
 * Prevent pasting weird formatting into TinyMCE
 */
add_filter('tiny_mce_before_init', function ($init) {

    $init['paste_as_text'] = true;
    return $init;
});

/**
 * Remove unwanted TinyMCE buttons from second row
 */
add_filter('mce_buttons_2', function ($buttons) {

    $remove = array('charmap', 'removeformat', 'wp_help', 'forecolor', 'strikethrough');
    return array_diff($buttons, $remove);
}, 2020);

/**
 * Remove h1 from TinyMCE Dropdown
 */
add_filter('tiny_mce_before_init', function ($args) {

    $args['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Pre=pre';
    return $args;
});

/**
 * Remove Appearance > Customize and Comments
 * @link https://stackoverflow.com/a/25877769
 */
add_action('admin_menu', function () {
    global $submenu;
    unset($submenu['themes.php'][6]); // Customize

    remove_menu_page('edit-comments.php');
});

/**
 * Remove unneeded options from black header toolbar
 */
add_action('admin_bar_menu', function ($wp_admin_bar) {

    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('searchwp');
}, 999);

/**
 * Disable plugin auto-update notification emails
 */
add_filter('auto_plugin_update_send_email', '__return_false');
add_filter('auto_theme_update_send_email', '__return_false');

/**
 * Remove unneeded contact fields for wp users
 */
add_filter('user_contactmethods', function ($contactmethods) {
    unset($contactmethods['facebook']);
    unset($contactmethods['instagram']);
    unset($contactmethods['linkedin']);
    unset($contactmethods['myspace']);
    unset($contactmethods['pinterest']);
    unset($contactmethods['soundcloud']);
    unset($contactmethods['tumblr']);
    unset($contactmethods['twitter']);
    unset($contactmethods['youtube']);
    unset($contactmethods['wikipedia']);
    return $contactmethods;
});
