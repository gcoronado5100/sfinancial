<?php 
/**
 * GabeCode Plus - Dashboard Principal
 * Página principal del plugin con acceso a todas las opciones
 */

function gcp_dashboard_page() {
    ob_start(); 
    ?>
    <div class="gcp-admin-page">
        <div class="gcp-container">
            <div class="gcp-header">
                <h1>
                    <img src="<?php echo GABECODE_PLUS_PLUGIN_URL . 'icon.svg'; ?>" alt="GabeCode Plus" height="45" width="45">
                    <?php _e('GabeCode Plus Dashboard', 'gabecode-plus'); ?>
                </h1>
                <p><?php _e('Welcome to the administration panel of GabeCode Plus. From here you can manage all the configurations of your website.', 'gabecode-plus');?></p>
            </div>

            <div class="gcp-grid gcp-grid-2">
                <div class="gcp-card">
                    <div class="gcp-card__icon" style="width: 64px; height: 64px; background: linear-gradient(135deg, var(--gcp-primary-color), var(--gcp-secondary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: var(--gcp-spacing-md);">
                        <i class="fa-solid fa-share-nodes" style="color: white; font-size: 24px;"></i>
                    </div>
                    <h3><?php _e('Social Links', 'gabecode-plus'); ?></h3>
                    <p class="gcp-mb-md"><?php _e('Configure the links to your social profiles', 'gabecode-plus'); ?></p>
                    <a href="<?php echo admin_url('admin.php?page=gcp_social_links'); ?>" class="gcp-btn gcp-btn-primary">
                        <i class="fa-solid fa-arrow-right gcp-mb-0" style="margin-left: 8px;"></i>
                        <?php _e('Configure', 'gabecode-plus'); ?>
                    </a>
                </div>

                <div class="gcp-card">
                    <div class="gcp-card__icon" style="width: 64px; height: 64px; background: linear-gradient(135deg, var(--gcp-green-color), var(--gcp-teal-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: var(--gcp-spacing-md);">
                        <i class="fa-solid fa-code" style="color: white; font-size: 24px;"></i>
                    </div>
                    <h3><?php _e('Skills Configuration', 'gabecode-plus'); ?></h3>
                    <p class="gcp-mb-md"><?php _e('Manage your technical skills', 'gabecode-plus'); ?></p>
                    <a href="<?php echo admin_url('admin.php?page=gcp_skills_page'); ?>" class="gcp-btn gcp-btn-primary">
                        <i class="fa-solid fa-arrow-right gcp-mb-0" style="margin-left: 8px;"></i>
                        <?php _e('Configure', 'gabecode-plus'); ?>
                    </a>
                </div>
            </div>

            <div class="gcp-card">
                <h2><i class="fa-solid fa-info-circle" style="margin-right: 8px;"></i><?php _e('Plugin Information', 'gabecode-plus'); ?></h2>
                
                <div class="gcp-plugin-info">
                    <div class="gcp-info-item">
                        <div class="gcp-info-icon" style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--gcp-primary-color), var(--gcp-secondary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: var(--gcp-spacing-md);">
                            <i class="fa-solid fa-code-branch" style="color: white; font-size: 18px;"></i>
                        </div>
                        <div class="gcp-info-content">
                            <h4><?php _e('Version', 'gabecode-plus'); ?></h4>
                            <p class="gcp-version"><?php echo GABECODE_PLUS_PLUGIN_VERSION; ?></p>
                        </div>
                    </div>

                    <div class="gcp-info-item">
                        <div class="gcp-info-icon" style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--gcp-green-color), var(--gcp-teal-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: var(--gcp-spacing-md);">
                            <i class="fa-solid fa-user" style="color: white; font-size: 18px;"></i>
                        </div>
                        <div class="gcp-info-content">
                            <h4><?php _e('Author', 'gabecode-plus'); ?></h4>
                            <p class="gcp-author">Gabriel Coronado</p>
                        </div>
                    </div>

                    <div class="gcp-info-item">
                        <div class="gcp-info-icon" style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--gcp-purple-color), var(--gcp-secondary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: var(--gcp-spacing-md);">
                            <i class="fa-solid fa-headset" style="color: white; font-size: 18px;"></i>
                        </div>
                        <div class="gcp-info-content">
                            <h4><?php _e('Support', 'gabecode-plus'); ?></h4>
                            <a href="https://gabecode.com" target="_blank" class="gcp-support-link">
                                <i class="fa-solid fa-external-link-alt" style="margin-left: 4px; font-size: 12px;"></i>
                                gabecode.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $page = ob_get_contents();
    ob_end_clean();

    echo $page;
}


