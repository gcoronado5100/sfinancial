<?php

/**
 * Expose the CTA options in the REST API
 * 
 * @package gabecode-plus
 * @since 1.0
 */
function gcp_expose_options_in_rest() {
    register_rest_route('gabecode-plus/v1', '/cta-options/', [
        'methods'  => 'GET',
        'callback' => function () {
            return get_option('gcp_cta_options', []);
        },
        'permission_callback' => '__return_true',
    ]);
}