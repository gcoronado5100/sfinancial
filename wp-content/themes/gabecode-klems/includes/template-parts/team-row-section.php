<?php

function gabecode_team_row_section() {
    ob_start();
?>
    <section class="team">
        <div class="container">
            <div class="team-header">
                <h2 class="section-title">Our Team</h2>
                <p class="section-subtitle">Meet the professionals behind our exceptional service</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="images/klem-silva.jpg" alt="Klem Silva - Founder" loading="lazy">
                    </div>
                    <h3 class="member-name">Klem Silva</h3>
                    <p class="member-title">Founder & CEO</p>
                    <p class="member-description">QuickBooks Certified ProAdvisor and Intuit Certified Bookkeeper with 10+ years of experience helping small businesses organize their finances.</p>
                    <div class="member-social">
                        <a href="#" class="social-link" aria-label="LinkedIn">in</a>
                        <a href="#" class="social-link" aria-label="Email">✉</a>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="images/team-member-2.jpg" alt="Team member" loading="lazy">
                    </div>
                    <h3 class="member-name">Maria Gonzalez</h3>
                    <p class="member-title">Senior Bookkeeper</p>
                    <p class="member-description">Specialist in bank reconciliation and financial reporting with broad industry experience.</p>
                    <div class="member-social">
                        <a href="#" class="social-link" aria-label="LinkedIn">in</a>
                        <a href="#" class="social-link" aria-label="Email">✉</a>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="images/team-member-3.jpg" alt="Team member" loading="lazy">
                    </div>
                    <h3 class="member-name">Carlos Rodriguez</h3>
                    <p class="member-title">Tax Specialist</p>
                    <p class="member-description">Expert in tax preparation and compliance for small businesses and freelancers.</p>
                    <div class="member-social">
                        <a href="#" class="social-link" aria-label="LinkedIn">in</a>
                        <a href="#" class="social-link" aria-label="Email">✉</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $output = ob_get_clean();
    return $output;
}