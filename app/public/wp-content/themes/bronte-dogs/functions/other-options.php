<?php

/**
 * Nothing here is included in the theme. These are just common functions.
 * As part of initial theme setup, please move ones you want to use into other functions/*.php files and delete this file
 */

/**
 * Disable XML RPC
 * @note not required if WP Cerber is installed since this does it already
 * @source https://wordpress.org/plugins/disable-xml-rpc/
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Use custom cap for managing Redirections
 */
add_filter('redirection_role', function () {
    return 'manage_redirects';
});

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);
