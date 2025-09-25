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
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
            
            <!-- CTA Buttons -->
            <div class="header-cta">
                <a href="contact.html" class="btn btn-outline btn-sm">Free Consultation</a>
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
                    <a href="contact.html" class="btn btn-outline">Free Consultation</a>
                    <a href="https://calendly.com/silva-financial" class="btn btn-primary" target="_blank">Schedule Meeting</a>
                </div>
                <ul class="mobile-nav-list">
                    <li class="mobile-nav-item">
                        <a href="index.html" class="mobile-nav-link">Home</a>
                    </li>
                    <li class="mobile-nav-item">
                        <a href="about.html" class="mobile-nav-link">About</a>
                    </li>
                    <li class="mobile-nav-item">
                        <a href="services.html" class="mobile-nav-link">Services</a>
                    </li>
                    <li class="mobile-nav-item">
                        <a href="blog.html" class="mobile-nav-link">Resources</a>
                    </li>
                    <li class="mobile-nav-item">
                        <a href="contact.html" class="mobile-nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

     <!-- Main Content -->
     <main id="main-content">