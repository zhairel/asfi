<?php $currentYear = date('Y'); ?>
    <!-- Site Footer -->
    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__brand-col">
                <a class="brand brand--footer" href="index.php">
                    <img src="images/asfi-logo-160.png" alt="ASFI Foundation Logo" width="60" height="60" loading="lazy" decoding="async">
                    <span class="brand__copy">
                        <strong style="color: #ffffff;">ASFI Foundation</strong>
                        <small style="color: #a7f3d0;">Faith · Compassion · Community</small>
                    </span>
                </a>
                <p class="footer__mission">
                    AMIS Sadaqah Family Incorporated is a SEC-registered, non-stock, non-profit Islamic charitable foundation building a halal system of mutual support through voluntary Sadaqah.
                </p>
                <div class="footer__sec-badge">
                    <span class="sec-dot" aria-hidden="true">✓</span>
                    <span>SEC-Registered Non-Profit Corporation · Davao City</span>
                </div>
            </div>

            <div class="footer__links-col">
                <h4 class="footer__heading">Explore ASFI</h4>
                <ul class="footer__nav-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us &amp; History</a></li>
                    <li><a href="programs.php">Programs (SMILE &amp; Masjid)</a></li>
                    <li><a href="membership.php">Membership Guidelines</a></li>
                    <li><a href="benefits.php">Benefits Matrix</a></li>
                    <li><a href="assistance.php">Apply for Assistance</a></li>
                </ul>
            </div>

            <div class="footer__links-col">
                <h4 class="footer__heading">Family Support</h4>
                <ul class="footer__nav-list">
                    <li><a href="benefits.php#students">Student Educational Grants</a></li>
                    <li><a href="benefits.php#parents">Parent Hospitalization Aid</a></li>
                    <li><a href="benefits.php#special">Single Parent Support</a></li>
                    <li><a href="benefits.php#welfare">Janazah / Bereavement Aid</a></li>
                    <li><a href="assistance.php#documents">Document Checklist</a></li>
                </ul>
            </div>

            <div class="footer__contact-col">
                <h4 class="footer__heading">Office &amp; Inquiries</h4>
                <p class="footer__address">
                    <strong>AMIS Sadaqah Family Inc.</strong><br>
                    Davao City, Philippines
                </p>
                <div class="footer__contact-links">
                    <a href="tel:+639510990689" class="footer-contact-link">
                        <span aria-hidden="true">📞</span> 0951 099 0689
                    </a>
                    <a href="mailto:amissadaqahfamilyincorporated@gmail.com" class="footer-contact-link">
                        <span aria-hidden="true">✉️</span> amissadaqahfamilyincorporated@gmail.com
                    </a>
                </div>
                <button class="button button--gold button--small footer__donate-btn" type="button" data-open-modal="donate-modal">
                    <span>Give Voluntary Sadaqah 💛</span>
                </button>
            </div>
        </div>

        <div class="container footer__bottom">
            <p>© <?= htmlspecialchars($currentYear, ENT_QUOTES, 'UTF-8') ?> AMIS Sadaqah Family Incorporated. All rights reserved.</p>
            <p class="footer__subnote">Designed with care for all generations · Built for trust.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" type="button" aria-label="Back to top" title="Back to top of page">↑</button>

    <!-- Mobile Bottom Floating Quick Action Bar (Fixed on Mobile Screens) -->
    <aside class="mobile-quick-bar" aria-label="Quick action navigation">
        <button type="button" class="quick-bar-btn quick-bar-btn--gold" data-open-modal="donate-modal">
            <span class="quick-icon" aria-hidden="true">💛</span>
            <span class="quick-text">Give Sadaqah</span>
        </button>
        <a href="assistance.php" class="quick-bar-btn quick-bar-btn--primary">
            <span class="quick-icon" aria-hidden="true">🤝</span>
            <span class="quick-text">Get Help</span>
        </a>
        <a href="tel:+639510990689" class="quick-bar-btn quick-bar-btn--secondary">
            <span class="quick-icon" aria-hidden="true">📞</span>
            <span class="quick-text">Call Office</span>
        </a>
    </aside>

    <!-- Interactive Sadaqah / Donation Modal (Frictionless for Grandparents & Parents) -->
    <div class="modal" id="donate-modal" role="dialog" aria-modal="true" aria-labelledby="donate-title" hidden>
        <div class="modal__backdrop" data-close-modal></div>
        <div class="modal__panel">
            <button class="modal__close" type="button" aria-label="Close dialog" data-close-modal>×</button>
            
            <div class="modal__header">
                <span class="modal__badge">Sadaqah &amp; Infaq Channel</span>
                <h2 id="donate-title" class="modal__title">Give Sadaqah with Confidence</h2>
                <p class="modal__lede">
                    Ang Sadaqah ay kusang-loob at walang takdang halaga. Ang bawat kontribusyon ay itinatrato bilang sagradong <em>Amanah</em> para sa mga pamilyang nangangailangan.
                </p>
            </div>

            <!-- Payment Channels Cards with 1-Tap Copy -->
            <div class="donation-channels">
                <!-- GCash Card -->
                <div class="channel-card">
                    <div class="channel-card__header">
                        <div class="channel-card__title">
                            <span class="channel-badge channel-badge--gcash">GCash</span>
                            <strong>Official Mobile Wallet</strong>
                        </div>
                    </div>
                    <div class="channel-card__body">
                        <div class="channel-field">
                            <span class="field-label">Account Name</span>
                            <strong class="field-value">AMIS SADAQAH FAMILY INC.</strong>
                        </div>
                        <div class="channel-field">
                            <span class="field-label">GCash Mobile Number</span>
                            <div class="copy-input-wrap">
                                <span class="field-value field-value--number">0951 099 0689</span>
                                <button type="button" class="button-copy" data-copy="09510990689" title="Copy GCash number">
                                    📋 Copy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bank Transfer Card -->
                <div class="channel-card">
                    <div class="channel-card__header">
                        <div class="channel-card__title">
                            <span class="channel-badge channel-badge--bank">Bank Transfer</span>
                            <strong>Official Bank Account</strong>
                        </div>
                    </div>
                    <div class="channel-card__body">
                        <div class="channel-field">
                            <span class="field-label">Beneficiary Account Name</span>
                            <strong class="field-value">AMIS SADAQAH FAMILY INCORPORATED</strong>
                        </div>
                        <div class="channel-field">
                            <span class="field-label">Bank Name &amp; Contact</span>
                            <p class="field-desc">
                                For direct bank wire / check deposit, call our treasury desk directly for the account assignment:
                            </p>
                            <div class="copy-input-wrap">
                                <span class="field-value field-value--number">0951 099 0689</span>
                                <button type="button" class="button-copy" data-copy="09510990689" title="Copy contact number">
                                    📋 Copy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Receipt & Acknowledgment Guide -->
            <div class="modal__receipt-guide">
                <div class="receipt-guide__item">
                    <span class="guide-num">1</span>
                    <p>Ipadala ang inyong voluntary Sadaqah sa GCash number sa itaas.</p>
                </div>
                <div class="receipt-guide__item">
                    <span class="guide-num">2</span>
                    <p>Mag-send ng screenshot ng resibo via SMS/WhatsApp sa <strong>0951 099 0689</strong> o sa official email.</p>
                </div>
                <div class="receipt-guide__item">
                    <span class="guide-num">3</span>
                    <p>Makakatanggap kayo ng opisyal na Electronic Acknowledgment Receipt mula sa ASFI.</p>
                </div>
            </div>

            <div class="modal__footer-actions">
                <a class="button button--gold button--full" href="mailto:amissadaqahfamilyincorporated@gmail.com?subject=ASFI%20Sadaqah%20Receipt%20Submission&body=Assalamu%20Alaikum%20ASFI%2C%0A%0ANakapagpadala%20po%20ako%20ng%20voluntary%20Sadaqah.%20Pakisuri%20po%20ang%20kalakip%20na%20patunay.%0A%0AFrom%3A%20%0AAmount%3A%20%0ADate%3A%20%0AJazakAllahu%20Khairan.">
                    <span>Ipadala ang Resibo sa Email ↗</span>
                </a>
            </div>
        </div>
    </div>

    <noscript><div class="noscript">JavaScript is disabled. Email <a href="mailto:amissadaqahfamilyincorporated@gmail.com">ASFI directly</a> for membership, assistance, or donation details.</div></noscript>
</body>
</html>
