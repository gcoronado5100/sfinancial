<?php

function gcp_admin_menu() {
    
    add_menu_page( 
        __('Dashboard', 'gabecode-plus'), 
        __('GabeCode', 'gabecode-plus'), 
        'edit_theme_options', 
        'gabecode-plus-dashboard', 
        'gcp_dashboard_page', 
        GABECODE_PLUS_PLUGIN_URL . 'icon.svg'
    );

    add_submenu_page( 
        'gabecode-plus-dashboard', 
        __('Social Links', 'gabecode-plus'), 
        __('Social Links', 'gabecode-plus'), 
        'edit_theme_options' , 
        'gcp_social_links', 
        'gcp_social_links_page'
    );

    add_submenu_page( 
        'gabecode-plus-dashboard', 
        __('Call to Action', 'gabecode-plus'), 
        __('Call to Action', 'gabecode-plus'), 
        'edit_theme_options' , 
        'gcp_call_to_action', 
        'gcp_call_to_action_page'
    );
}