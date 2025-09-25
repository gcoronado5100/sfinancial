<?php
/**
 * Call to Action Theme options Page
 * 
 * @package gabecode-plus
 * @since 1.0
**/
function gcp_call_to_action_page() {
    $cta_options = get_option('gcp_cta_options');
    ob_start(); 
    ?>
        <div class="gcp-admin-page">
            <div class="gcp-container">
                <div class="gcp-header">
                    <h1><?php _e('Call to Action', 'gabecode-plus'); ?></h1>
                    <p><?php _e('This section allows you to edit the Call to Action Links', 'gabecode-plus');?></p>
                </div>

                <?php if (isset($_GET['status']) && $_GET['status'] == 1) { ?>
                    <div class="gcp-message gcp-message-success">
                        <p><?php esc_html_e('Options saved successfully', 'gabecode-plus'); ?></p>
                    </div>
                <?php } ?>

                <form novalidate="novalidate" method="POST" action="admin-post.php" class="gcp-card">
                    <input type="hidden" name="action" value="gabecode_cta_save_options">
                    <?php wp_nonce_field('gabecode_cta_options_verify'); ?>

                    <h2><?php _e('Contact Information', 'gabecode-plus'); ?></h2>
                    
                    <div class="gcp-grid">
                        <div class="gcp-form-group">
                            <label for="gabecode-plus-contact-phone">
                                <i class="fa-solid fa-phone" style="color: var(--gcp-primary-color); margin-right: 8px;"></i>
                                Contact Phone
                            </label>
                            <input name="gabecode-plus-contact-phone" type="text" id="gabecode-plus-contact-phone" class="gcp-form-control" value="<?= esc_attr($cta_options['contact_phone']) ?>" placeholder="+1 (555) 123-4567"/>
                        </div>

                        <div class="gcp-form-group">
                            <label for="gabecode-plus-contact-email">
                                <i class="fa-solid fa-envelope" style="color: var(--gcp-primary-color); margin-right: 8px;"></i>
                                Contact Email
                            </label>
                            <input name="gabecode-plus-contact-email" type="email" id="gabecode-plus-contact-email" class="gcp-form-control" value="<?= esc_attr($cta_options['contact_email']) ?>" placeholder="contact@example.com"/>
                        </div>

                        <div class="gcp-form-group">
                            <label for="gabecode-plus-contact-url">
                                <i class="fa-solid fa-link" style="color: var(--gcp-primary-color); margin-right: 8px;"></i>
                                Contact URL
                            </label>
                                <input name="gabecode-plus-contact-url" type="url" id="gabecode-plus-contact-url" class="gcp-form-control" value="<?= esc_attr($cta_options['contact_url']) ?>" placeholder="https://example.com/contact"/>
                        </div>

                        <div class="gcp-form-group">
                            <label for="gabecode-plus-main-enquiry-url">
                                <i class="fa-solid fa-link" style="color: var(--gcp-primary-color); margin-right: 8px;"></i>
                                Main Enquiry URL
                            </label>
                            <input name="gabecode-plus-main-enquiry-url" type="url" id="gabecode-plus-main-enquiry-url" class="gcp-form-control" value="<?= esc_attr($cta_options['main_enquiry_url']) ?>" placeholder="https://example.com/contact"/>
                        </div>
                    </div>
                    
                    <div class="gcp-text-center" style="margin-top: var(--gcp-spacing-lg);">
                        <button type="submit" class="gcp-btn gcp-btn-primary">
                            <i class="fa-solid fa-save" style="margin-right: 8px;"></i>
                            <?php _e('Save Changes', 'gabecode-plus'); ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php
    $page = ob_get_contents();
    ob_end_clean();

    echo $page;
}