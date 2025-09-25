<?php
/**
 * Plugin Name:       gabecode-klems Plus
 * Plugin URI:        https://github.com/gcoronado5100
 * Description:       Custom plugin for Silva Financial Inc, built with love by GabeCode.
 * Version:           1.0.0
 * Author:            Gabriel Coronado
 * Author URI:        https://gabecode.com/about-me/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gabecode-plus
 * Domain Path:       /languages
 * Requires at least: 6.2
 * Requires PHP:      7.4
 */

// Funny fallback if WordPress core functions are missing
if ( ! function_exists( 'add_action' ) ) {
    echo '
        <div style="display: flex; justify-content: center; align-items: center; height: 98vh; background-color: #000;">
            <img src="https://64.media.tumblr.com/5edf86e8983d3b704030e316e7643074/tumblr_inline_ng1ikyO2Bz1sj4qvu.gif" alt="Where are you going?">
        </div>
    ';
    exit;
}

// ----------------------------------------------------------

// Constants
define('GABECODE_PLUS_PLUGIN_URL', plugin_dir_url(__FILE__));
define('GABECODE_PLUS_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('GABECODE_PLUS_PLUGIN_VERSION', '1.0.0');

// Including the files
$allFiles = glob(GABECODE_PLUS_PLUGIN_PATH . 'includes/*.php');
$subdirectoryFiles = glob(GABECODE_PLUS_PLUGIN_PATH . 'includes/*/*.php');
$allFiles = array_merge($allFiles, $subdirectoryFiles);

foreach ($allFiles as $file) {
    include_once $file;
}

/**
 * -------------------------------------
 *                  HOOKS
 * -------------------------------------
**/

// Admin General Hooks 
register_activation_hook(__FILE__, 'gcp_activate_plugin');
add_action( 'admin_enqueue_scripts', 'gcp_admin_enqueue' );
add_action('admin_menu', 'gcp_admin_menu');
add_action('admin_post_gabecode_social_save_options', 'gabecode_plus_save_social_links_cb');
add_action('admin_post_gabecode_cta_save_options', 'gabecode_plus_save_cta_options_cb');
// ----------------------------------------------------------

// Register Plugin's Gutenberg Blocks
add_action('rest_api_init', 'gcp_expose_options_in_rest');
add_action( 'init', 'gcp_register_blocks');
// ----------------------------------------------------------