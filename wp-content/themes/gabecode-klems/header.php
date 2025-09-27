<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class('gabecode-body'); ?>>
    <?php wp_body_open(); ?>

    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <!-- Logo -->
            <a href="<?= site_url(); ?>" class="logo">
                <div class="logo-text">
                    <span class="logo-title">Silva Financial Inc</span>
                    <span class="logo-subtitle">Bookkeeping Services</span>
                </div>
            </a>
            
            <!-- Navigation -->
            <nav class="nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-list',
                    'container'      => false,
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>
            
            <!-- CTA Buttons -->
            <div class="header-cta">
                <a href="<?= home_url('/contact/'); ?>" class="btn btn-outline btn-sm">Free Consultation</a>
                <a href="https://calendly.com/silva-financial" class="btn btn-primary btn-sm" target="_blank">Schedule Meeting</a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">
                <span class="hamburger"></span>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu" aria-hidden="true">
            <nav class="mobile-nav">
                <div class="mobile-cta">
                    <a href="<?= home_url('/contact/'); ?>" class="btn btn-outline">Free Consultation</a>
                    <a href="https://calendly.com/silva-financial" class="btn btn-primary" target="_blank">Schedule Meeting</a>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'mobile-nav-list',
                    'container'      => false,
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>
        </div>
    </header>

     <!-- Main Content -->
     <main id="main-content">