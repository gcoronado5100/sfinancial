<?php

function gabecode_cre_values_block() {
    ob_start();
?>
    <section class="values">
        <div class="container">
            <div class="values-header">
                <h2 class="section-title">Our Values</h2>
                <p class="section-subtitle">The principles that guide everything we do</p>
            </div>
            
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/app/animations/value1.json' ?>"></div></div>
                    <h3 class="value-title">Accuracy</h3>
                    <p class="value-description">We maintain the highest standards of accuracy across all bookkeeping services.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/app/animations/value2.json' ?>"></div></div>
                    <h3 class="value-title">Trust</h3>
                    <p class="value-description">We build long-term relationships based on transparency and honesty.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/app/animations/value3.json' ?>"></div></div>    
                    <h3 class="value-title">Efficiency</h3>
                    <p class="value-description">We leverage modern technology to deliver fast, precise results.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/app/animations/value4.json' ?>"></div></div>
                    <h3 class="value-title">Education</h3>
                    <p class="value-description">We empower clients with financial knowledge to make better decisions.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/app/animations/value5.json' ?>"></div></div>
                    <h3 class="value-title">Security</h3>
                    <p class="value-description">We protect client financial information with the highest security standards.</p>
                </div>
                
                <div class="value-item">
                    <div class="value-icon"><div class="lottie-icon" data-path="<?= GABECODE_THEME_URI . '/assets/app/animations/value6.json' ?>"></div></div>
                    <h3 class="value-title">Growth</h3>
                    <p class="value-description">We help clients grow with scalable and sustainable financial systems.</p>
                </div>
            </div>
        </div>
    </section>
<?php
    $output = ob_get_clean();
    return $output;
}

