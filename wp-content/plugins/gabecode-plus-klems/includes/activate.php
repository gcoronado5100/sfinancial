<?php
/**
 * Activate plugin function, this function will be called when the plugin is activated
 * 
 * @package gabecode-plus
 * @since 1.0
 */
function gcp_activate_plugin() {

    if (version_compare(get_bloginfo('version'), '5.2', '<')) {
        wp_die(__('You must update WordPress to use this plugin.', 'gabecode-plus'));
    }

    /**
     * Add social media options
    **/
    $socialOptions = get_option('gcp_social_options');
    if (!$socialOptions) {
        $socialOptions = [
            'tiktok' => '',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'linkedin' => '',
            'github' => '',
            'youtube' => '',
        ];
        update_option('gcp_social_options', $socialOptions);
    }

    /**
     * Call to action options
    **/
    $ctaOptions = get_option('gcp_cta_options');
    if (!$ctaOptions) {
        $ctaOptions = [
            'contact_phone' => '',
            'contact_email' => '',
            'main_enquiry_url' => '',
            'contact_url' => '',
        ];
        update_option('gcp_cta_options', $ctaOptions);
    }
}