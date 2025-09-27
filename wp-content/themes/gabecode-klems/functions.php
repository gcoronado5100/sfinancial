<?php
// Variables
define('GABECODE_THEME_URI', get_template_directory_uri());
define('GABECODE_THEME_DIR', get_template_directory());
define('GABECODE_THEME_VERSION', wp_get_theme()->get('Version'));

// Includes
$rootFiles = glob(GABECODE_THEME_DIR . '/includes/*.php');
$subdirectoryFiles = glob(GABECODE_THEME_DIR . '/includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);

foreach ($allFiles as $file) {
    include_once($file);
}
// ----------------- Actions -----------------
add_action('tgmpa_register', 'gabecode_register_required_plugins');
add_action('after_setup_theme', 'gabecode_theme_support');
add_action('wp_head', 'gabecode_wp_head');
add_action('wp_enqueue_scripts', 'gabecode_enqueue_scripts');
add_action('wp_body_open', 'gabecode_wp_body_open');
add_action('wp_footer', 'gabecode_wp_footer');

// ----------------- Shortcodes -----------------
add_shortcode('gabecode_team_row_section', 'gabecode_team_row_section');
add_shortcode('gabecode_cre_values_block', 'gabecode_cre_values_block');
add_shortcode('gabecode_why_choose_block', 'gabecode_why_choose_block');
add_shortcode('gabecode_areas_we_serve_block', 'gabecode_areas_we_serve_block');
add_shortcode('gabecode_basic_cta_block', 'gabecode_basic_cta_block');

// ------------------------------------------------