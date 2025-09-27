<?php

function gabecode_why_choose_block() {
    ob_start();
?>
    <section class="service-benefits">
        <div class="container">
            <div class="benefits-content">
                <div class="benefits-text">
                    <h2>Why Choose Our Bookkeeping Services?</h2>
                    <p>We don't just keep your books—we help you understand your business better and make informed decisions.</p>
                    
                    <div class="benefit-list">
                        <div class="benefit-item">
                            <div class="benefit-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/why1.json"></div></div>
                            <div class="benefit-content">
                                <h4>Save Time</h4>
                                <p>Focus on growing your business while we handle the financial details.</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/why2.json"></div></div>
                            <div class="benefit-content">
                                <h4>Reduce Costs</h4>
                                <p>No need for a full-time bookkeeper or expensive accounting software training.</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/why3.json"></div></div>
                            <div class="benefit-content">
                                <h4>Better Insights</h4>
                                <p>Get clear, actionable financial reports that help you make better business decisions.</p>
                            </div>
                        </div>
                        
                        <div class="benefit-item">
                            <div class="benefit-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI ?>/assets/animations/why4.json"></div></div>
                            <div class="benefit-content">
                                <h4>Stay Compliant</h4>
                                <p>Ensure your books are always audit-ready and tax-compliant.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="benefits-image">
                    <img src="<?= GABECODE_THEME_URI ?>/assets/app/images/Transition to Digital Clarity.jpeg" alt="Professional bookkeeping services" loading="lazy">
                </div>
            </div>
        </div>
    </section>
<?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}