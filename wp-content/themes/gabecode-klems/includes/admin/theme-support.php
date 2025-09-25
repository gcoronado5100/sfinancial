<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if (!function_exists('gabecode_theme_support')) {
    function gabecode_theme_support() {

        update_option('default_comment_status', 'closed');
        update_option('default_ping_status', 'closed');

        register_nav_menus([
            'primary' => __('Primary Menu', 'gabecode'),
            'footerPages' => __('Footer Pages Menu', 'gabecode'),
            'footerActions' => __('Footer Action Menu', 'gabecode'),
        ]);

        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');

        add_theme_support('editor-styles');
    }
}