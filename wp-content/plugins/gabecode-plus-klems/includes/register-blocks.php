<?php

/**
 * Register Blocks
 * 
 * @package gabecode-plus
 * @since 1.0
 */

function gcp_register_blocks() {

    $blocks = [
        // ['name' => 'card-block', 'options' => ['render_callback' => 'gcp_card_block_render_callback']],
    ];

    foreach ( $blocks as $block ) {
        register_block_type( 
            GABECODE_PLUS_PLUGIN_PATH . 'build/blocks/' . $block['name'],
            isset( $block['options']) ? $block['options'] : []  
        );
    }

}