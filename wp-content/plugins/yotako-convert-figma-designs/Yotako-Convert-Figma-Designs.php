<?php

/**
 * Plugin Name: Yotako - Convert Figma Designs
 * Description: Create professional WordPress themes with AI. Ready to download or publish online in 1 click. Ideal for designers, freelancers, and business owners.
 * Version: 1.2.20
 * Author: Yotako
 * Author URI: https://yotako.io/
 * Tags: ai, convert, domain, figma to website, figma to wordpress, figma wordpress, hosting, theme, website, wordpress design, wordpress theme   
 * License: GPL-2.0-or-later
 */

if (! defined('ABSPATH')) exit; // Exit if accessed directly

// Define plugin version constant (used for cache busting assets)
define('YTKFIG2WP_VERSION', '1.2.20');

function YTKFIG2WP_menu()
{
    add_menu_page(
        'Yotako - Convert Figma Designs',          // Page title
        'Yotako',          // Menu title
        'manage_options',     // Capability required to view
        'Yotako-Convert-Figma-Designs',          // Menu slug (used in URL)
        'YTKFIG2WP_admin_menu_callback', // Callback function to display content
        plugins_url('assets/icon.png', __FILE__), // Icon for the menu
        25                    // Position in the menu order
    );
}

function YTKFIG2WP_admin_menu_callback()
{
    echo '<div id="figma-to-wordpress-root"></div>';
}

function YTKFIG2WP_enqueue_assets($admin_page)
{
    $plugin_url = plugins_url('', __FILE__);
    wp_enqueue_script(
        'YTKFIG2WP_plugin',
        plugins_url('bundle.js', __FILE__),
        ['wp-element'], // WordPress React dependency
        YTKFIG2WP_VERSION,
        array(
            'in_footer' => true,
        )
    );
    wp_enqueue_style(
        'YTKFIG2WP_plugin',
        plugins_url('styles.css', __FILE__),
        [],
        YTKFIG2WP_VERSION
    );
    wp_localize_script('YTKFIG2WP_plugin', 'YTKFIG2WP_PluginData', array(
        'YTKFIG2WP_pluginUrl' => $plugin_url
    ));
}

add_action('admin_enqueue_scripts', 'YTKFIG2WP_enqueue_assets');
add_action('admin_menu', 'YTKFIG2WP_menu');

// Enable auto-updates by default for this plugin
add_filter('auto_update_plugin', function($update, $item) {
    if (isset($item->slug) && $item->slug === 'yotako-convert-figma-designs') {
        return true;
    }
    return $update;
}, 10, 2);
