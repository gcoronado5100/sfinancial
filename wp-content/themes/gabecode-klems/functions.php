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