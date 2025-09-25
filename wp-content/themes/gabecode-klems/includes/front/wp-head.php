<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
/**
 * WP Head
 * Add custom code to the head
 * 
 * @package gabecode-klems
 * @since 1.0
 */
function gabecode_wp_head() {
    ?>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <!-- Preconnect para fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php
}

/**
 * WP Body Open
 * Add custom code to the body open
 * 
 * @package gabecode-klems
 * @since 1.0
 */
function gabecode_wp_body_open() {
    ?>
    
    <?php
}


?>