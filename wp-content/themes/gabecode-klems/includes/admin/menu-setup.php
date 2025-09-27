<?php 

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if (!function_exists('gabecode_setup_default_menu')) {
    function gabecode_setup_default_menu() {
        // Check if primary menu exists
        $menu_exists = wp_get_nav_menu_object('Primary Menu');
        
        if (!$menu_exists) {
            // Create the primary menu
            $menu_id = wp_create_nav_menu('Primary Menu');
            
            if (!is_wp_error($menu_id)) {
                // Add menu items
                $menu_items = array(
                    array(
                        'title' => 'Home',
                        'url' => home_url('/'),
                        'position' => 1
                    ),
                    array(
                        'title' => 'About',
                        'url' => home_url('/about/'),
                        'position' => 2
                    ),
                    array(
                        'title' => 'Services',
                        'url' => home_url('/services/'),
                        'position' => 3
                    ),
                    array(
                        'title' => 'Resources',
                        'url' => home_url('/resources/'),
                        'position' => 4
                    ),
                    array(
                        'title' => 'Contact',
                        'url' => home_url('/contact/'),
                        'position' => 5
                    )
                );
                
                foreach ($menu_items as $item) {
                    wp_update_nav_menu_item($menu_id, 0, array(
                        'menu-item-title' => $item['title'],
                        'menu-item-url' => $item['url'],
                        'menu-item-status' => 'publish',
                        'menu-item-position' => $item['position']
                    ));
                }
                
                // Assign menu to primary location
                $locations = get_theme_mod('nav_menu_locations');
                $locations['primary'] = $menu_id;
                set_theme_mod('nav_menu_locations', $locations);
            }
        }
    }
}

// Hook to run after theme setup
add_action('after_setup_theme', 'gabecode_setup_default_menu', 20);

