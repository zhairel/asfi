<?php
declare(strict_types=1);

$pageTitle = 'ASFI Foundation | Shared Care, Stronger Families';
$pageDescription = 'AMIS Sadaqah Family Incorporated is a community foundation building a halal, takaful-inspired system of mutual support through Sadaqah.';
$activePage = 'home';
require __DIR__ . '/includes/site-header.php';
?>

<main id="main">
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero__glow hero__glow--one"></div>
        <div class="hero__glow hero__glow--two"></div>
        <div class="container hero__grid">
            <div class="hero__content reveal">
                <p class="eyebrow eyebrow--light"><span></span> Halal mutual assistance through Sadaqah</p>
                <h1 id="hero-title">Shared care.<br><em>Stronger families.</em></h1>
                <p class="hero__lede">ASFI is a community foundation inspired by the takaful spirit of mutual care—turning sincere giving into practical support, stronger livelihoods, and protection through life’s difficult moments.</p>
                <div class="hero__actions">
                    <button class="button button--gold" type="button" data-open-modal="donate-modal">Give Sadaqah <span aria-hidden="true">→</span></button>
                    <a class="button button--ghost" href="membership.php">Become a member</a>
                </div>
                <div class="hero__trust">
                    <span class="trust-mark" aria-hidden="true">✓</span>
                    <p><strong>Dedicated ASFI foundation</strong><br>SEC-registered · Non-stock · Non-profit</p>
                </div>
            </div>

            <div class="hero__visual reveal reveal--delay">
                <div class="foundation-visual">
                    <div class="foundation-visual__top">
                        <span><i aria-hidden="true"></i> Compassion, organized.</span>
                        <span>Davao City · PH</span>
                    </div>
                    <div class="foundation-visual__seal">
                        <span class="seal-ring" aria-hidden="true"></span>
                        <img src="images/asfi-logo-1000.webp" alt="ASFI 2026 official seal" width="420" height="420" fetchpriority="high" decoding="async">
                        <p>Give with faith.<br>Serve with dignity.</p>
                    </div>
                    <div class="foundation-visual__bottom">
                        <div class="impact-total"><strong>61</strong><span>documented participants supported across two community programs</span></div>
                        <div class="stewardship-note"><span>Our promise</span><p>Every gift is treated as a sacred trust.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="proof" aria-label="ASFI impact at a glance">
        <div class="container proof__grid">
            <div class="proof__intro reveal"><span class="proof__icon" aria-hidden="true">✦</span><p>Small acts, multiplied<br>by a caring community.</p></div>
            <div class="stat reveal"><strong data-count="19">19</strong><span>Mothers supported through the SMILE livelihood program</span></div>
            <div class="stat reveal"><strong data-count="42">42</strong><span>Masjid cleaners supported across Davao communities</span></div>
            <div class="stat reveal"><strong data-count="2024">2024</strong><span>The year the journey began as AMIS Family</span></div>
        </div>
    </section>

    <section class="section home-intro">
        <div class="container home-intro__grid">
            <div class="section-heading reveal">
                <p class="eyebrow"><span></span> Who we are</p>
                <h2>A family built around sincere giving.</h2>
            </div>
            <div class="home-intro__copy reveal reveal--delay">
                <p class="lead">ASFI is a SEC-registered, non-stock, non-profit Islamic charitable organization established to strengthen the culture of Sadaqah and mutual assistance.</p>
                <p>Every contribution—large or small—is treated as a sacred trust and directed toward compassionate, sustainable support.</p>
                <a class="text-link" href="about.php">Discover our history, vision &amp; mission <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="section home-pathways">
        <div class="container">
            <div class="section-heading section-heading--split reveal">
                <div><p class="eyebrow"><span></span> Explore ASFI</p><h2>Everything you need,<br>organized clearly.</h2></div>
                <p>The official handbook is now translated into dedicated web pages so members can find policies, programs, and processes quickly.</p>
            </div>
            <div class="pathway-grid">
                <a class="pathway-card reveal" href="programs.php"><span>01</span><i aria-hidden="true">◌</i><h3>Programs</h3><p>SMILE, Masjid Cleaners Assistance, education, welfare, and community development.</p><strong>View programs →</strong></a>
                <a class="pathway-card reveal" href="membership.php"><span>02</span><i aria-hidden="true">◇</i><h3>Membership</h3><p>Eligibility, requirements, rights, responsibilities, and the complete application journey.</p><strong>How to join →</strong></a>
                <a class="pathway-card reveal" href="benefits.php"><span>03</span><i aria-hidden="true">＋</i><h3>Benefits</h3><p>Hospitalization, education, unemployment, family welfare, and bereavement support.</p><strong>View benefits →</strong></a>
                <a class="pathway-card pathway-card--dark reveal" href="assistance.php"><span>04</span><i aria-hidden="true">↗</i><h3>Get Assistance</h3><p>Documents, verification, approval, release, and important reminders for benefit applications.</p><strong>Start here →</strong></a>
            </div>
        </div>
    </section>

    <section class="section home-feature">
        <div class="container home-feature__grid">
            <div class="home-feature__visual reveal">
                <div class="home-feature__number">19</div>
                <p>mothers supported with livelihood opportunities</p>
                <span>SMILE Program</span>
            </div>
            <div class="home-feature__content reveal reveal--delay">
                <p class="eyebrow"><span></span> Flagship initiative</p>
                <h2>Support that grows into self-reliance.</h2>
                <p>The SMILE Program—Support Miskin into Livelihood Education—pairs livelihood capital with Islamic learning so mothers can build sustainable income while caring for their children.</p>
                <div class="program-metric"><strong>₱10,000</strong><span>livelihood capital provided to selected participants</span></div>
                <a class="button button--dark" href="programs.php">Explore all programs <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="section quote-section">
        <div class="container quote-section__inner reveal">
            <img src="images/asfi-logo-160.png" alt="" width="90" height="90" loading="lazy" decoding="async">
            <blockquote>“Every contribution entrusted to ASFI—large or small—is a sacred trust.”</blockquote>
            <p>Honesty · Transparency · Accountability · Fairness</p>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container contact__card reveal">
            <div class="contact__copy">
                <p class="eyebrow eyebrow--light"><span></span> Start a conversation</p>
                <h2>Let’s turn compassion into action.</h2>
                <p>Ask about membership, assistance, partnerships, volunteering, or verified Sadaqah channels.</p>
            </div>
            <div class="contact__actions">
                <a class="button button--gold" href="mailto:amissadaqahfamilyincorporated@gmail.com?subject=ASFI%20Inquiry">Email ASFI <span aria-hidden="true">↗</span></a>
                <a class="button button--ghost" href="assistance.php">Assistance process</a>
            </div>
            <div class="contact__details">
                <div><span>Email</span><a href="mailto:amissadaqahfamilyincorporated@gmail.com">amissadaqahfamilyincorporated@gmail.com</a></div>
                <div><span>Serving</span><p>Davao City, Philippines</p></div>
                <div><span>Organization</span><p>SEC-registered · Non-stock · Non-profit</p></div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/site-footer.php'; ?>
