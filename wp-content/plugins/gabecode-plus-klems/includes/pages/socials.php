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
        <div class="gcp-admin-page">
            <div class="gcp-container">
                <div class="gcp-header">
                    <h1><?php _e('Social Links', 'gabecode-plus'); ?></h1>
                    <p><?php _e('This section allows you to edit the Social profile Links', 'gabecode-plus');?></p>
                </div>

                <?php if (isset($_GET['status']) && $_GET['status'] == 1) { ?>
                    <div class="gcp-message gcp-message-success">
                        <p><?php esc_html_e('Options saved successfully', 'gabecode-plus'); ?></p>
                    </div>
                <?php } ?>

                <form novalidate="novalidate" method="POST" action="admin-post.php" class="gcp-card">
                    <input type="hidden" name="action" value="gabecode_social_save_options">
                    <?php wp_nonce_field('gabecode_social_options_verify'); ?>

                    <h2><?php _e('Social Media Profiles', 'gabecode-plus'); ?></h2>
                    
                    <div class="gcp-grid gcp-grid-2">
                        <div class="gcp-form-group">
                            <label for="gabecode-plus-facebook">
                                <i class="fa-brands fa-facebook" style="color: #1877F2; margin-right: 8px;"></i>
                                Facebook
                            </label>
                            <input name="gabecode-plus-facebook" type="text" id="gabecode-plus-facebook" class="gcp-form-control" value="<?= esc_attr($social_links['facebook']) ?>" placeholder="https://facebook.com/yourprofile"/>
                        </div>

                        <div class="gcp-form-group">
                            <label for="gabecode-plus-twitter">
                                <i class="fa-brands fa-twitter" style="color: #1DA1F2; margin-right: 8px;"></i>
                                X (Formerly Twitter)
                            </label>
                            <input name="gabecode-plus-twitter" type="text" id="gabecode-plus-twitter" class="gcp-form-control" value="<?= esc_attr($social_links['twitter']) ?>" placeholder="https://x.com/yourprofile"/>
                        </div>

                        <div class="gcp-form-group">
                            <label for="gabecode-plus-instagram">
                                <i class="fa-brands fa-instagram" style="color: #E4405F; margin-right: 8px;"></i>
                                Instagram
                            </label>
                            <input name="gabecode-plus-instagram" type="text" id="gabecode-plus-instagram" class="gcp-form-control" value="<?= esc_attr($social_links['instagram']) ?>" placeholder="https://instagram.com/yourprofile"/>
                        </div>

                        <div class="gcp-form-group">
                            <label for="gabecode-plus-linkedin">
                                <i class="fa-brands fa-linkedin" style="color: #0077B5; margin-right: 8px;"></i>
                                LinkedIn
                            </label>
                            <input name="gabecode-plus-linkedin" type="text" id="gabecode-plus-linkedin" class="gcp-form-control" value="<?= esc_attr($social_links['linkedin']) ?>" placeholder="https://linkedin.com/in/yourprofile"/>
                        </div>
                        
                        <div class="gcp-form-group">
                            <label for="gabecode-plus-github">
                                <i class="fa-brands fa-github" style="color: #333; margin-right: 8px;"></i>
                                GitHub
                            </label>
                            <input name="gabecode-plus-github" type="text" id="gabecode-plus-github" class="gcp-form-control" value="<?= esc_attr($social_links['github']) ?>" placeholder="https://github.com/yourprofile"/>
                        </div>
                        
                        <div class="gcp-form-group">
                            <label for="gabecode-plus-youtube">
                                <i class="fa-brands fa-youtube" style="color: #FF0000; margin-right: 8px;"></i>
                                YouTube
                            </label>
                            <input name="gabecode-plus-youtube" type="text" id="gabecode-plus-youtube" class="gcp-form-control" value="<?= esc_attr($social_links['youtube']) ?>" placeholder="https://youtube.com/c/yourchannel"/>
                        </div>

                        <div class="gcp-form-group">
                            <label for="gabecode-plus-tiktok">
                                <i class="fa-brands fa-tiktok" style="color: #000000; margin-right: 8px;"></i>
                                TikTok
                            </label>
                            <input name="gabecode-plus-tiktok" type="text" id="gabecode-plus-tiktok" class="gcp-form-control" value="<?= esc_attr($social_links['tiktok']) ?>" placeholder="https://tiktok.com/@yourprofile"/>
                        </div>
                    </div>
                    
                    <div class="gcp-text-center" style="margin-top: var(--gcp-spacing-lg);">
                        <button type="submit" class="gcp-btn gcp-btn-success">
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