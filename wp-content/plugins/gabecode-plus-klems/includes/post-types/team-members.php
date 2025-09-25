<?php

function gcp_team_members_post_type() {
    $labels = array(
        'name' => 'Team Members',
        'singular_name' => 'Team Member',
        'menu_name' => 'Team Members',
        'name_admin_bar' => 'Team Members',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Team Member',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-businessperson',
        'rewrite' => array('slug' => 'team-members'),
        'supports' => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('team_members', $args);
}   

