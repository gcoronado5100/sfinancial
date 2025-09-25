<?php

/**
 * Social Theme options Page
 * 
 * @package gabecode-plus
 * @since 1.0
**/
function gcp_social_links_page() {
    $social_links = get_option('gcp_social_options');
    ob_start(); 
    ?>
        <div class="social_admin__container">
            <div class="admin__banner">
                <h1><i class="fa-solid fa-share-nodes"></i> <?php _e('Social Links', 'gabecode-plus'); ?></h1>
                <p><?= __('This section allows you to edit the Social profile Links', 'gabecode-plus');?></p>
            </div>

            <?php if (isset($_GET['status']) && $_GET['status'] == 1) { ?>
                <div class="notice notice-success">
                    <p><?php esc_html_e('Options saved successfully', 'gabecode-plus'); ?></p>
                </div>
            <?php } ?>

            <div class="page__body">
                <form novalidate="novalidate" method="POST" action="admin-post.php">
                    <input type="hidden" name="action" value="gabecode_social_save_options">
                    <?php wp_nonce_field('gabecode_social_options_verify'); ?>

                    <div class="input__container">
                        <i class="fa-brands fa-facebook"></i>
                        <h4>Facebook</h4>
                        <input name="gabecode-plus-facebook" type="text" id="gabecode-plus-facebook" class="regular-text" value="<?= esc_attr($social_links['facebook']) ?>" placeholder="Facebook URL"/>
                    </div>

                    <div class="input__container">
                        <i class="fa-brands fa-twitter"></i>
                        <h4>X (Formerly Twitter)</h4>
                        <input name="gabecode-plus-twitter" type="text" id="gabecode-plus-twitter" class="regular-text" value="<?= esc_attr($social_links['twitter']) ?>" placeholder="twitter URL"/>
                    </div>

                    <div class="input__container">
                        <i class="fa-brands fa-instagram"></i>
                        <h4>Instagram</h4>
                        <input name="gabecode-plus-instagram" type="text" id="gabecode-plus-instagram" class="regular-text" value="<?= esc_attr($social_links['instagram']) ?>" placeholder="Instagram URL"/>
                    </div>

                    <div class="input__container">
                        <i class="fa-brands fa-linkedin"></i>
                        <h4>LinkedIn</h4>
                        <input name="gabecode-plus-linkedin" type="text" id="gabecode-plus-linkedin" class="regular-text" value="<?= esc_attr($social_links['linkedin']) ?>" placeholder="Linked URL"/>
                    </div>
                    
                    <div class="input__container">
                        <i class="fa-brands fa-github"></i>
                        <h4>GitHub</h4>
                        <input name="gabecode-plus-github" type="text" id="gabecode-plus-github" class="regular-text" value="<?= esc_attr($social_links['github']) ?>" placeholder="GitHub URL"/>
                    </div>
                    
                    <div class="input__container">
                        <i class="fa-brands fa-youtube"></i>
                        <h4>YouTube</h4>
                        <input name="gabecode-plus-youtube" type="text" id="gabecode-plus-youtube" class="regular-text" value="<?= esc_attr($social_links['youtube']) ?>" placeholder="YouTube URL"/>
                    </div>

                    <div class="input__container">
                        <i class="fa-brands fa-tiktok"></i>
                        <h4>TikTok</h4>
                        <input name="gabecode-plus-youtube" type="text" id="gabecode-plus-youtube" class="regular-text" value="<?= esc_attr($social_links['tiktok']) ?>" placeholder="TikTok URL"/>
                    </div>
                    
                    <?php submit_button(); ?>
                </form>
            </div>
        </div>
    <?php
    $page = ob_get_contents();
    ob_end_clean();

    echo $page;
}

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
        <div class="cta_admin__container">
            <div class="admin__banner">
                <h1><i class="fa-solid fa-bullhorn"></i> <?php _e('Call to Action', 'gabecode-plus'); ?></h1>
                <p><?= __('This section allows you to edit the Call to Action Links', 'gabecode-plus');?></p>
            </div>

            <?php if (isset($_GET['status']) && $_GET['status'] == 1) { ?>
                <div class="notice notice-success">
                    <p><?php esc_html_e('Options saved successfully', 'gabecode-plus'); ?></p>
                </div>
            <?php } ?>

            <div class="page__body">
                <form novalidate="novalidate" method="POST" action="admin-post.php">
                    <input type="hidden" name="action" value="gabecode_cta_save_options">
                    <?php wp_nonce_field('gabecode_cta_options_verify'); ?>

                    <div class="input__container">
                        <i class="fa-solid fa-phone"></i>
                        <h4>Contact Phone</h4>
                        <input name="gabecode-plus-contact-phone" type="text" id="gabecode-plus-contact-phone" class="regular-text" value="<?= esc_attr($cta_options['contact_phone']) ?>" placeholder="Contact Phone"/>
                    </div>

                    <div class="input__container">
                        <i class="fa-solid fa-envelope"></i>
                        <h4>Contact Email</h4>
                        <input name="gabecode-plus-contact-email" type="text" id="gabecode-plus-contact-email" class="regular-text" value="<?= esc_attr($cta_options['contact_email']) ?>" placeholder="Contact Email"/>
                    </div>

                    <div class="input__container">
                        <i class="fa-solid fa-link"></i>
                        <h4>Main Enquiry URL</h4>
                        <input name="gabecode-plus-main-enquiry-url" type="text" id="gabecode-plus-main-enquiry-url" class="regular-text" value="<?= esc_attr($cta_options['main_enquiry_url']) ?>" placeholder="Main Enquiry URL"/>
                    </div>
                    
                    <?php submit_button(); ?>
                </form>
            </div>
        </div>
    <?php
    $page = ob_get_contents();
    ob_end_clean();

    echo $page;
}