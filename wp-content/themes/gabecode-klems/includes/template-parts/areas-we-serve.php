<?php

function gabecode_areas_we_serve_block() {
    ob_start();
?>
    <section class="industries-served">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Industries We Serve</h2>
                <p class="section-subtitle">We have experience working with businesses across various industries, understanding their unique financial needs.</p>
            </div>
            
            <div class="industries-grid">
                <div class="industry-card">
                    <div class="industry-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/aws1.json"></div></div>
                    <h3>Retail & E-commerce</h3>
                    <p>Inventory management, sales tracking, and multi-channel revenue reconciliation.</p>
                </div>
                
                <div class="industry-card">
                    <div class="industry-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/aws2.json"></div></div>
                    <h3>Professional Services</h3>
                    <p>Project-based billing, time tracking, and client expense management.</p>
                </div>
                
                <div class="industry-card">
                    <div class="industry-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/aws3.json"></div></div>
                    <h3>Construction</h3>
                    <p>Job costing, progress billing, and equipment depreciation tracking.</p>
                </div>
                
                <div class="industry-card">
                    <div class="industry-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/aws4.json"></div></div>
                    <h3>Restaurants & Food Service</h3>
                    <p>Cost of goods sold, inventory management, and tip reporting.</p>
                </div>
                
                <div class="industry-card">
                    <div class="industry-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/aws5.json"></div></div>
                    <h3>Healthcare</h3>
                    <p>Patient billing, insurance claims, and HIPAA-compliant record keeping.</p>
                </div>
                
                <div class="industry-card">
                    <div class="industry-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/aws6.json"></div></div>
                    <h3>Transportation & Logistics</h3>
                    <p>Fleet management, fuel tracking, and driver payroll.</p>
                </div>
            </div>
        </div>
    </section>
<?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}