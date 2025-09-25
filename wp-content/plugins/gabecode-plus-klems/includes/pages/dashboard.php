<?php 
/**
 * GabeCode Plus - Dashboard Principal
 * Página principal del plugin con acceso a todas las opciones
 */

function gcp_dashboard_page() {
    ob_start(); 
    ?>
    <div class="gcp-dashboard__container">
        <div class="gcp-dashboard__header">
            <h1>
                <img src="<?php echo GABECODE_PLUS_PLUGIN_URL . 'icon.svg'; ?>" alt="GabeCode Plus">
                <?php _e('GabeCode Plus Dashboard', 'gabecode-plus'); ?>
            </h1>
            <p><?= __('Welcome to the administration panel of GabeCode Plus. From here you can manage all the configurations of your website.', 'gabecode-plus');?></p>
        </div>

        <div class="gcp-dashboard__grid">
            <div class="gcp-dashboard__card">
                <div class="gcp-card__icon">
                    <i class="fa-solid fa-share-nodes"></i>
                </div>
                <div class="gcp-card__content">
                    <h3><?php _e('Social Links', 'gabecode-plus'); ?></h3>
                    <p><?php _e('Configure the links to your social profiles', 'gabecode-plus'); ?></p>
                    <a href="<?php echo admin_url('admin.php?page=gcp_social_links'); ?>" class="gcp-card__button">
                        <i class="fa-solid fa-arrow-right"></i>
                        <?php _e('Configure', 'gabecode-plus'); ?>
                    </a>
                </div>
            </div>

            <div class="gcp-dashboard__card">
                <div class="gcp-card__icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div class="gcp-card__content">
                    <h3><?php _e('Skills Configuration', 'gabecode-plus'); ?></h3>
                    <p><?php _e('Manage your technical skills', 'gabecode-plus'); ?></p>
                    <a href="<?php echo admin_url('admin.php?page=gcp_skills_page'); ?>" class="gcp-card__button">
                        <i class="fa-solid fa-arrow-right"></i>
                        <?php _e('Configure', 'gabecode-plus'); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="gcp-dashboard__info">
            <div class="gcp-info__card">
                <h4><i class="fa-solid fa-info-circle"></i> <?php _e('Plugin Information', 'gabecode-plus'); ?></h4>
                <p><strong><?php _e('Version:', 'gabecode-plus'); ?></strong> <?php echo GABECODE_PLUS_PLUGIN_VERSION; ?></p>
                <p><strong><?php _e('Autor:', 'gabecode-plus'); ?></strong> Gabriel Coronado</p>
                <p><strong><?php _e('Support:', 'gabecode-plus'); ?></strong> <a href="https://gabecode.com" target="_blank">gabecode.com</a></p>
            </div>
        </div>
    </div>
    <?php
    $page = ob_get_contents();
    ob_end_clean();

    echo $page;
}


