
<?php

/**
 * Save social media links
 * 
 * @package gabecode-plus
 * @since 1.0
**/
function gabecode_plus_save_social_links_cb(){
    if (!current_user_can('edit_theme_options')) {
        wp_die(__('You are not allowed to access this page.', 'gabecode-plus'));
    }

    check_admin_referer('gabecode_social_options_verify');

    $options = get_option('gcp_social_options');

    $options['tiktok'] = sanitize_text_field($_POST['gabecode-plus-tiktok']);
    $options['facebook'] = sanitize_text_field($_POST['gabecode-plus-facebook']);
    $options['twitter'] = sanitize_text_field($_POST['gabecode-plus-twitter']);
    $options['instagram'] = sanitize_text_field($_POST['gabecode-plus-instagram']);
    $options['linkedin'] = sanitize_text_field($_POST['gabecode-plus-linkedin']);
    $options['github'] = sanitize_text_field($_POST['gabecode-plus-github']);
    $options['youtube'] = sanitize_text_field($_POST['gabecode-plus-youtube']);

    update_option('gcp_social_options', $options);

    wp_redirect(admin_url('admin.php?page=gcp_social_links&status=1'));
}

/**
 * Save call to action options
 * 
 * @package gabecode-plus
 * @since 1.0
**/
function gabecode_plus_save_cta_options_cb(){
    if (!current_user_can('edit_theme_options')) {
        wp_die(__('You are not allowed to access this page.', 'gabecode-plus'));
    }

    check_admin_referer('gabecode_cta_options_verify');

    $options = get_option('gcp_cta_options');

    $options['contact_phone'] = sanitize_text_field($_POST['gabecode-plus-contact-phone']);
    $options['contact_email'] = sanitize_text_field($_POST['gabecode-plus-contact-email']);
    $options['main_enquiry_url'] = sanitize_text_field($_POST['gabecode-plus-main-enquiry-url']);

    update_option('gcp_cta_options', $options);

    wp_redirect(admin_url('admin.php?page=gcp_call_to_action&status=1'));
}
