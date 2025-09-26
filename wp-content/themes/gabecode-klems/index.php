<?php get_header(); ?>

<!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Professional Bookkeeping Services for Your Business</h1>
                    <p class="hero-subtitle">QuickBooks Certified ProAdvisor with transparent pricing and personalized service. Let us handle your finances so you can focus on growing your business.</p>
                    <div class="hero-cta">
                        <a href="https://calendly.com/silva-financial" class="btn btn-primary btn-lg" target="_blank">Schedule Free Consultation</a>
                        <a href="about.html" class="btn btn-secondary btn-lg">Learn More</a>
                    </div>
                    <div id="hero-lottie" aria-hidden="true" style="width: 320px; height: 320px; margin-top: 16px;"></div>
                </div>
            </div>
        </section>
        
        <!-- Services Section -->
        <section class="services">
            <div class="container">
                <div class="services-header">
                    <h2 class="section-title">Our Services</h2>
                    <p class="section-subtitle">We offer complete bookkeeping solutions designed for small businesses seeking financial clarity and control.</p>
                </div>
                
                <div class="services-grid">
                    <div class="service-card card">
                        <div class="card-body">
                            <div class="service-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/animations/service1.json' ?>"></div></div>
                            <h3 class="service-title">Bank Reconciliation</h3>
                            <p class="service-description">We compare your internal records with bank statements to catch discrepancies and maintain financial accuracy.</p>
                        </div>
                    </div>
                    
                    <div class="service-card card">
                        <div class="card-body">
                            <div class="service-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/animations/service2.json' ?>"></div></div>
                            <h3 class="service-title">Financial Reporting</h3>
                            <p class="service-description">We deliver clear and timely reports including P&L, Balance Sheet, and Cash Flow so you can make informed decisions.</p>
                        </div>
                    </div>
                    
                    <div class="service-card card">
                        <div class="card-body">
                            <div class="service-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/animations/service3.json' ?>"></div></div>
                            <h3 class="service-title">Accounts Payable Management</h3>
                            <p class="service-description">We help you manage bills and outgoing payments to vendors efficiently and cash-flow friendly.</p>
                        </div>
                    </div>
                    
                    <div class="service-card card">
                        <div class="card-body">
                            <div class="service-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/animations/service4.json' ?>"></div></div>
                            <h3 class="service-title">Accounts Receivable Management</h3>
                            <p class="service-description">We stay on top of invoicing and collections with aging reports to help you manage revenue effectively.</p>
                        </div>
                    </div>
                    
                    <div class="service-card card">
                        <div class="card-body">
                            <div class="service-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/animations/service5.json' ?>"></div></div>
                            <h3 class="service-title">Payroll Processing</h3>
                            <p class="service-description">We calculate wages, handle withholdings, and file tax forms accurately and on time with full compliance.</p>
                        </div>
                    </div>
                    
                    <div class="service-card card">
                        <div class="card-body">
                            <div class="service-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/animations/service6.json' ?>"></div></div>
                            <h3 class="service-title">Bookkeeping Health Checks</h3>
                            <p class="service-description">We audit your financial records for accuracy, structure, and compliance to give you peace of mind.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Pricing Section -->
        <?= gabecode_services_pricing_block(); ?>
        
        <!-- Why Choose Us Section -->
        <section class="why-choose-us">
            <div class="container">
                <div class="why-choose-us-content">
                    <div class="content-text">
                        <h2 class="section-title">¿Por qué elegir Silva Financial Inc.?</h2>
                        <p class="section-description">Somos más que un servicio de bookkeeping. Somos tu socio financiero confiable que te ayuda a tomar decisiones informadas y hacer crecer tu negocio.</p>
                        
                        <ul class="features-list">
                            <li class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div class="feature-text">QuickBooks Certified ProAdvisor con años de experiencia</div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div class="feature-text">Precios transparentes sin costos ocultos</div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div class="feature-text">Servicio personalizado 1 a 1</div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div class="feature-text">Sistemas financieros seguros en la nube</div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">✓</div>
                                <div class="feature-text">Consulta inicial gratuita</div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="content-image">
                        <img src="images/optimized/klems1_lg.png" 
                             srcset="images/optimized/klems1_xs.png 200w,
                                     images/optimized/klems1_sm.png 400w,
                                     images/optimized/klems1_md.png 800w,
                                     images/optimized/klems1_lg.png 1200w"
                             sizes="(max-width: 768px) 400px, (max-width: 1200px) 800px, 1200px"
                             alt="Equipo de Silva Financial trabajando" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        
        <?php echo gabecode_basic_cta_block(); ?>
        

<?php get_footer(); ?>