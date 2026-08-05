<?php $currentYear = date('Y'); ?>
    <footer class="footer">
        <div class="container footer__top">
            <a class="brand brand--footer" href="index.php">
                <img src="images/asfi-logo-160.png" alt="" width="64" height="64" loading="lazy" decoding="async">
                <span class="brand__copy"><strong>ASFI</strong><small>Faith · Compassion · Community</small></span>
            </a>
            <p>Serving Allah by serving His creation—with sincerity, compassion, and excellence.</p>
            <div class="footer__links">
                <a href="about.php">About</a>
                <a href="programs.php">Programs</a>
                <a href="membership.php">Membership</a>
                <a href="benefits.php">Benefits</a>
                <a href="assistance.php">Get Assistance</a>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>© <?= htmlspecialchars($currentYear, ENT_QUOTES, 'UTF-8') ?> AMIS Sadaqah Family Incorporated. All rights reserved.</p>
            <a href="mailto:amissadaqahfamilyincorporated@gmail.com">Official email</a>
            <p>Designed for service. Built for trust.</p>
        </div>
    </footer>

    <button class="back-to-top" type="button" aria-label="Back to top">↑</button>

    <div class="modal" id="donate-modal" role="dialog" aria-modal="true" aria-labelledby="donate-title" hidden>
        <div class="modal__backdrop" data-close-modal></div>
        <div class="modal__panel">
            <button class="modal__close" type="button" aria-label="Close dialog" data-close-modal>×</button>
            <span class="modal__mark" aria-hidden="true">♥</span>
            <p class="eyebrow"><span></span> Give with confidence</p>
            <h2 id="donate-title">Request a verified Sadaqah channel.</h2>
            <p>For your protection, request the current official GCash or bank details directly from ASFI before sending funds.</p>
            <div class="modal__notice"><strong>Safety reminder</strong><p>Confirm the account name with ASFI and keep your transaction receipt.</p></div>
            <a class="button button--dark button--full" href="mailto:amissadaqahfamilyincorporated@gmail.com?subject=Request%20for%20Verified%20ASFI%20Sadaqah%20Channel&body=Assalamu%20Alaikum%20ASFI%2C%0A%0AI%20would%20like%20to%20request%20your%20currently%20verified%20Sadaqah%20payment%20details.%0A%0AJazakAllahu%20Khairan.">Request official details <span aria-hidden="true">↗</span></a>
        </div>
    </div>

    <noscript><div class="noscript">JavaScript is disabled. Email <a href="mailto:amissadaqahfamilyincorporated@gmail.com">ASFI directly</a> for membership, assistance, or donation details.</div></noscript>
</body>
</html>
