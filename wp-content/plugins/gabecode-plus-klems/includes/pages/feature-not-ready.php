<?php 
/**
 * GabeCode Plus - Página de Configuración de Habilidades
 * Administración de habilidades técnicas
 */

function gcp_skills_settings_page($pageTitle, $pageDescription) {
    ob_start();
    ?>
    <div class="gcp-admin-page__container">
        <div class="gcp-page__header">
            <h1><i class="fa-solid fa-code"></i> <?php _e($pageTitle, 'gabecode-plus'); ?></h1>
            <p><?= __($pageDescription, 'gabecode-plus');?></p>
        </div>

        <div class="gcp-admin-page__body">
            <div class="gcp-coming-soon">
                <div class="gcp-coming-soon__icon">
                    <i class="fa-solid fa-tools"></i>
                </div>
                <h3><?php _e('Coming Soon', 'gabecode-plus'); ?></h3>
                <p><?php _e('This functionality will be available in a future update of the plugin.', 'gabecode-plus'); ?></p>
                <a href="<?php echo admin_url('admin.php?page=gcp-plugin-options'); ?>" class="gcp-button gcp-button--primary">
                    <i class="fa-solid fa-arrow-left"></i>
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
