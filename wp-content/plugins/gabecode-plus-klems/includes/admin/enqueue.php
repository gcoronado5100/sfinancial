<?php

/**
 * Enqueue Styles and Scripts for Admin Pages
 * 
 * @package gabecode-plus
 * @since 1.0
**/
function gcp_admin_enqueue() {

    wp_enqueue_style( 'gabecode-admin-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], GABECODE_PLUS_PLUGIN_VERSION, 'all' );

    // Enqueue Plugins Admin Styles and Scripts
    wp_enqueue_style('gabecode-plus-admin-css', GABECODE_PLUS_PLUGIN_URL . 'assets/css/admin.css', array(), GABECODE_PLUS_PLUGIN_VERSION, 'all');
    wp_enqueue_script('gabecode-plus-admin-js', GABECODE_PLUS_PLUGIN_URL . 'assets/js/admin.js', array('jquery'), GABECODE_PLUS_PLUGIN_VERSION, true);
    
}