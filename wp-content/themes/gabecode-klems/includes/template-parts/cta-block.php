<?php

function gabecode_basic_cta_block() {
    ob_start();
?>
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Take Control of Your Finances?</h2>
                <p class="cta-description">Schedule your free consultation today and discover how we can help you stay organized, compliant, and focused on what you do best: growing your business.</p>
                <div class="cta-buttons">
                    <a href="https://calendly.com/silva-financial" class="btn btn-lg" target="_blank">Schedule Free Consultation</a>
                    <a href="contact.html" class="btn btn-outline btn-lg">Contact Now</a>
                </div>
            </div>
        </div>
    </section>
<?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}