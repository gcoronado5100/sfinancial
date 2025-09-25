<?php 
/**
 * GabeCode Plus - Página de Configuración de Habilidades
 * Administración de habilidades técnicas
 */

function gcp_feature_not_ready_page() {
    ob_start();
    ?>
    <div class="gcp-admin-page">
        <div class="gcp-container">
            <div class="gcp-header">
                <h1><?php _e('Sorry', 'gabecode-plus'); ?></h1>
                <p><?php _e('This functionality is not available yet', 'gabecode-plus');?></p>
            </div>

            <div class="gcp-card gcp-text-center">
                <div style="width: 120px; height: 120px; background: linear-gradient(135deg, var(--gcp-orange-color), var(--gcp-gold-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--gcp-spacing-lg) auto;">
                    <i class="fa-solid fa-tools" style="color: white; font-size: 48px;"></i>
                </div>
                <h2><?php _e('Coming Soon', 'gabecode-plus'); ?></h2>
                <p class="gcp-mb-lg"><?php _e('This functionality will be available in a future update of the plugin.', 'gabecode-plus'); ?></p>
                <a href="<?php echo admin_url('admin.php?page=gabecode-plus-dashboard'); ?>" class="gcp-btn gcp-btn-primary">
                    <i class="fa-solid fa-arrow-left" style="margin-right: 8px;"></i>
                    <?php _e('Back to Dashboard', 'gabecode-plus'); ?>
                </a>
            </div>
        </div>
    </div>
    <?php
    $page = ob_get_contents();
    ob_end_clean();

    echo $page;
}
