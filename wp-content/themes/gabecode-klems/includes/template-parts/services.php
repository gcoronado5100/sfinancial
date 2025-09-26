<?php 

function gabecode_services_pricing_block() {
    ob_start();
?>
    <section class="services-pricing">
        <div class="container">
            <div class="pricing-header">
                <h2 class="section-title">Service Packages</h2>
                <p class="section-subtitle"><?= __('Transparent pricing with no hidden fees. Choose the package that best fits your business needs.', 'gabecode') ?></p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card card">
                    <div class="card-header">
                        <h3 class="card-title">Starter</h3>
                        <p class="card-subtitle">Perfect for new businesses</p>
                    </div>
                    <div class="card-body">
                        <div class="pricing-price">
                            <span class="currency">$</span>299
                            <span class="period">/month</span>
                        </div>
                        <ul class="service-features">
                            <li>Up to 100 transactions/month</li>
                            <li>Bank reconciliation</li>
                            <li>Monthly financial reports (P&L, Balance Sheet)</li>
                            <li>QuickBooks setup & support</li>
                            <li>One-on-one financial review (email)</li>
                        </ul>
                        <a href="contact.html" class="btn btn-outline btn-block">Get Started</a>
                    </div>
                </div>
                
                <div class="pricing-card card featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="card-header">
                        <h3 class="card-title">Premium</h3>
                        <p class="card-subtitle">For growing businesses</p>
                    </div>
                    <div class="card-body">
                        <div class="pricing-price">
                            <span class="currency">$</span>599
                            <span class="period">/month</span>
                        </div>
                        <ul class="service-features">
                            <li>Up to 300 transactions/month</li>
                            <li>Bank reconciliation</li>
                            <li>Monthly financial reports</li>
                            <li>Accounts payable management</li>
                            <li>Accounts receivable management</li>
                            <li>Payroll processing (up to 5 employees)</li>
                            <li>Quarterly business review (video call)</li>
                        </ul>
                        <a href="contact.html" class="btn btn-primary btn-block">Get Started</a>
                    </div>
                </div>
                
                <div class="pricing-card card">
                    <div class="card-header">
                        <h3 class="card-title">Enterprise</h3>
                        <p class="card-subtitle">For established businesses</p>
                    </div>
                    <div class="card-body">
                        <div class="pricing-price">
                            <span class="currency">$</span>999
                            <span class="period">/month</span>
                        </div>
                        <ul class="service-features">
                            <li>Unlimited transactions</li>
                            <li>Full bookkeeping services</li>
                            <li>Advanced financial reporting</li>
                            <li>Payroll processing (unlimited employees)</li>
                            <li>Monthly business review (video call)</li>
                            <li>Priority support</li>
                            <li>Custom reporting</li>
                        </ul>
                        <a href="contact.html" class="btn btn-outline btn-block">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}