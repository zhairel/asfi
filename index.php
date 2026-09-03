<?php
declare(strict_types=1);

$pageTitle = 'ASFI Foundation | Shared Care, Stronger Families';
$pageDescription = 'AMIS Sadaqah Family Incorporated (ASFI) is a SEC-registered community foundation building a halal, takaful-inspired system of mutual support through voluntary Sadaqah in Davao City.';
$activePage = 'home';
require __DIR__ . '/includes/site-header.php';
?>

<main id="main">
    <!-- ── 1. Hero Section (Accessible, High Contrast, Multi-Action) ──── -->
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero__glow hero__glow--one"></div>
        <div class="hero__glow hero__glow--two"></div>
        <div class="container hero__grid">
            <div class="hero__content reveal">
                <div class="hero__badge-row">
                    <span class="pill-badge pill-badge--gold">
                        <span class="dot-live"></span>
                        <span>Halal Mutual Assistance · Takaful Care</span>
                    </span>
                    <span class="pill-badge pill-badge--ghost">Davao City, PH</span>
                </div>

                <h1 id="hero-title">
                    Shared care.<br>
                    <em>Stronger families.</em>
                </h1>
                
                <p class="hero__tagline-filipino">
                    “Sama-samang Pagkalinga, Mas Matatag na Pamilya sa Gabay ng Pananampalataya.”
                </p>

                <p class="hero__lede">
                    ASFI is a SEC-registered non-profit Islamic foundation. We turn sincere, voluntary Sadaqah into immediate medical relief, livelihood capital for mothers, student educational grants, and compassionate family care.
                </p>

                <!-- 3 Clear Generational Action Buttons -->
                <div class="hero__actions">
                    <button class="button button--gold button--hero" type="button" data-open-modal="donate-modal">
                        <span aria-hidden="true">💛</span>
                        <span>Give Sadaqah <small>(Mag-ambag)</small></span>
                    </button>
                    <a class="button button--secondary button--hero" href="assistance.php">
                        <span aria-hidden="true">🤝</span>
                        <span>Get Assistance <small>(Humingi ng Tulong)</small></span>
                    </a>
                    <a class="button button--ghost button--hero" href="membership.php">
                        <span aria-hidden="true">📋</span>
                        <span>Join ASFI <small>(Maging Miyembro)</small></span>
                    </a>
                </div>

                <!-- Trust Guarantees for Elders & Donors -->
                <div class="hero__trust">
                    <div class="trust-item">
                        <span class="trust-check" aria-hidden="true">✓</span>
                        <p><strong>SEC-Registered Non-Profit</strong><br>Formal legal entity &amp; audited records</p>
                    </div>
                    <div class="trust-item">
                        <span class="trust-check" aria-hidden="true">✓</span>
                        <p><strong>100% Voluntary Sadaqah</strong><br>Walang fixed monthly dues o bayarin</p>
                    </div>
                </div>
            </div>

            <div class="hero__visual reveal reveal--delay">
                <div class="foundation-visual">
                    <div class="foundation-visual__top">
                        <span><i aria-hidden="true">✦</i> Compassion in Action</span>
                        <span>AMIS Foundation</span>
                    </div>
                    <div class="foundation-visual__seal">
                        <span class="seal-ring" aria-hidden="true"></span>
                        <img src="images/asfi-logo-1000.webp" alt="Official ASFI Foundation Seal" width="400" height="400" fetchpriority="high" decoding="async">
                        <p class="seal-quote">“Every gift is treated as a sacred trust (Amanah).”</p>
                    </div>
                    <div class="foundation-visual__bottom">
                        <div class="impact-total">
                            <strong>61+</strong>
                            <span>Families &amp; masjid personnel directly uplifted</span>
                        </div>
                        <div class="stewardship-note">
                            <span>Our Promise</span>
                            <p>Direct community release with strict transparency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 2. Impact Numbers Banner (Clear & Legible) ─────────────────── -->
    <section class="proof" aria-label="ASFI impact at a glance">
        <div class="container proof__grid">
            <div class="proof__intro reveal">
                <span class="proof__icon" aria-hidden="true">🤲</span>
                <p><strong>Tapat na Paglilingkod</strong><br>Organized mutual aid since 2024.</p>
            </div>
            <div class="stat reveal">
                <strong data-count="19">19</strong>
                <span>Mothers granted livelihood capital (₱10,000 each) via SMILE</span>
            </div>
            <div class="stat reveal">
                <strong data-count="42">42</strong>
                <span>Masjid cleaners supported with dignified monthly care</span>
            </div>
            <div class="stat reveal">
                <strong>100%</strong>
                <span>Voluntary contributions — give according to your capacity</span>
            </div>
        </div>
    </section>

    <!-- ── 3. Generational Fast-Tracks (Grandparents, Parents, Students) ── -->
    <section class="section generational-section" id="pathways" aria-labelledby="pathways-heading">
        <div class="container">
            <div class="section-heading section-heading--centered reveal">
                <p class="eyebrow"><span></span> Tulong Para sa Bawat Henerasyon</p>
                <h2 id="pathways-heading">Support designed for your family’s stage in life.</h2>
                <p class="section-subtext">Piliin ang kategoryang angkop sa inyo para sa agarang impormasyon at gabay sa paghingi ng tulong.</p>
            </div>

            <div class="generational-grid">
                <!-- Card 1: For Grandparents & Elders -->
                <article class="gen-card gen-card--elders reveal">
                    <div class="gen-card__badge">
                        <span class="gen-icon" aria-hidden="true">👵</span>
                        <span>Seniors &amp; Elders · Mga Lolo at Lola</span>
                    </div>
                    <h3>Healthcare &amp; Bereavement Care</h3>
                    <p class="gen-card__desc">
                        Magiliw at magalang na tulong medikal at suporta sa oras ng matinding karamdaman o pagpanaw ng kapamilya.
                    </p>
                    <ul class="gen-card__list">
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Hospitalization Aid:</strong> Up to ₱5,000 medical bill relief for hospitalized members.</span>
                        </li>
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Janazah / Burial Aid:</strong> ₱7,000 cash assistance released to family upon bereavement.</span>
                        </li>
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Masjid Caretaker Honorarium:</strong> Monthly dignified support for masjid cleaners.</span>
                        </li>
                    </ul>
                    <div class="gen-card__action">
                        <a href="benefits.php#welfare" class="button button--dark button--full">
                            <span>Alamin ang Tulong sa Kalusugan →</span>
                        </a>
                    </div>
                </article>

                <!-- Card 2: For Parents & Breadwinners -->
                <article class="gen-card gen-card--parents reveal reveal--delay">
                    <div class="gen-card__badge">
                        <span class="gen-icon" aria-hidden="true">👨‍👩‍👧</span>
                        <span>Parents &amp; Workers · Mga Magulang</span>
                    </div>
                    <h3>Livelihood &amp; Family Stability</h3>
                    <p class="gen-card__desc">
                        Kapital pangkabuhayan para sa mga nanay at proteksyon sa trabaho upang mapanatiling matatag ang tahanan.
                    </p>
                    <ul class="gen-card__list">
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>SMILE Program:</strong> ₱10,000 seed capital para sa maliliit na negosyo ng mga nanay.</span>
                        </li>
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Unemployment Aid:</strong> ₱1,000 monthly allowance sa biglaang pagkawala ng trabaho.</span>
                        </li>
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Single-Parent Discount:</strong> 30% tuition discount sa AMIS school para sa solo parents.</span>
                        </li>
                    </ul>
                    <div class="gen-card__action">
                        <a href="programs.php#smile" class="button button--gold button--full">
                            <span>SMILE &amp; Family Programs →</span>
                        </a>
                    </div>
                </article>

                <!-- Card 3: For Students & Youth -->
                <article class="gen-card gen-card--students reveal">
                    <div class="gen-card__badge">
                        <span class="gen-icon" aria-hidden="true">🎓</span>
                        <span>Students &amp; Youth · Mga Estudyante</span>
                    </div>
                    <h3>Education Grants &amp; Scholarships</h3>
                    <p class="gen-card__desc">
                        Suporta sa pag-aaral ng kabataan mula primarya hanggang kolehiyo, at pagsasanay sa pamumunong Islamiko.
                    </p>
                    <ul class="gen-card__list">
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Loyalty Grant:</strong> ₱10,000 one-time educational grant sa pagpasok ng kolehiyo.</span>
                        </li>
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Bereavement Scholarship:</strong> Libreng scholarship pathway para sa naulilang mag-aaral.</span>
                        </li>
                        <li>
                            <span class="check-icon" aria-hidden="true">✓</span>
                            <span><strong>Youth Volunteerism:</strong> Makabuluhang pagseserbisyo sa komunidad at kapatiran.</span>
                        </li>
                    </ul>
                    <div class="gen-card__action">
                        <a href="benefits.php#students" class="button button--dark button--full">
                            <span>Tingnan ang Student Grants →</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ── 4. How ASFI Works (Simple 4-Step Transparent Guide) ───────── -->
    <section class="section process-section" aria-labelledby="process-heading">
        <div class="container">
            <div class="section-heading section-heading--centered reveal">
                <p class="eyebrow"><span></span> Paano Gumagana ang ASFI</p>
                <h2 id="process-heading">Four clear, transparent steps of mutual care.</h2>
                <p class="section-subtext">Ang bawat piso ay itinatrato bilang banal na tiwala (Amanah) na may malinis na talaan at bukas na pananagutan.</p>
            </div>

            <div class="process-cards-grid">
                <div class="step-box reveal">
                    <div class="step-box__header">
                        <span class="step-num">01</span>
                        <span class="step-icon" aria-hidden="true">🤲</span>
                    </div>
                    <h4>Voluntary Giving</h4>
                    <p>Members and donors contribute voluntary monthly Sadaqah based on their capability. No fixed fees.</p>
                    <small class="step-tag">Kusang-loob na Pag-ambag</small>
                </div>

                <div class="step-box reveal reveal--delay">
                    <div class="step-box__header">
                        <span class="step-num">02</span>
                        <span class="step-icon" aria-hidden="true">📋</span>
                    </div>
                    <h4>Fair Evaluation</h4>
                    <p>The Welfare Committee evaluates requests, verifies documents, and assesses urgency with complete fairness.</p>
                    <small class="step-tag">Maingat na Pagsusuri</small>
                </div>

                <div class="step-box reveal">
                    <div class="step-box__header">
                        <span class="step-num">03</span>
                        <span class="step-icon" aria-hidden="true">⚡</span>
                    </div>
                    <h4>Direct Aid Release</h4>
                    <p>Approved assistance for hospitalization, death aid, or livelihood is released directly with official receipts.</p>
                    <small class="step-tag">Direktang Paglabas ng Tulong</small>
                </div>

                <div class="step-box reveal reveal--delay">
                    <div class="step-box__header">
                        <span class="step-num">04</span>
                        <span class="step-icon" aria-hidden="true">🌱</span>
                    </div>
                    <h4>Sustainable Growth</h4>
                    <p>Families recover from hardship, build small enterprises, and help inspire other community members.</p>
                    <small class="step-tag">Pagbangon ng Pamilya</small>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 5. Flagship Highlight: SMILE Program ──────────────────────── -->
    <section class="section home-feature" aria-labelledby="feature-heading">
        <div class="container home-feature__grid">
            <div class="home-feature__visual reveal">
                <div class="home-feature__number">₱10k</div>
                <p>Seed capital provided to start home-based livelihood</p>
                <span class="feature-tag">SMILE Flagship Program</span>
            </div>

            <div class="home-feature__content reveal reveal--delay">
                <p class="eyebrow"><span></span> Pangkabuhayan Para sa Kababaihan</p>
                <h2 id="feature-heading">Support that empowers mothers into self-reliance.</h2>
                <p class="feature-lede">
                    The <strong>SMILE Program</strong> (Support Miskin into Livelihood Education) pairs financial micro-capital with Islamic parenting and values seminars so mothers can earn sustainable income while raising their children.
                </p>
                <div class="program-metrics-row">
                    <div class="metric-pill">
                        <strong>19 Mothers</strong>
                        <span>Currently active in Davao</span>
                    </div>
                    <div class="metric-pill">
                        <strong>Islamic Seminars</strong>
                        <span>Faith &amp; financial stewardship</span>
                    </div>
                </div>
                <div class="feature-buttons">
                    <a class="button button--dark" href="programs.php">
                        <span>Alamin ang Lahat ng Programa →</span>
                    </a>
                    <button class="button button--gold" type="button" data-open-modal="donate-modal">
                        <span>Support SMILE with Sadaqah 💛</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ── 6. Direct Contact & Fast Help Card ────────────────────────── -->
    <section class="section contact-section" id="contact" aria-labelledby="contact-heading">
        <div class="container contact__card reveal">
            <div class="contact__copy">
                <p class="eyebrow eyebrow--light"><span></span> Makipag-ugnayan sa ASFI</p>
                <h2 id="contact-heading">Nandito kami upang tumulong.</h2>
                <p class="contact-desc">
                    May katanungan ukol sa membership, kailangan ng tulong medikal o pampalibing, o nais magbigay ng Sadaqah? Huwag mag-atubiling tumawag o mag-mensahe sa aming opisina.
                </p>
            </div>

            <div class="contact__quick-grid">
                <div class="quick-contact-box">
                    <span class="contact-icon" aria-hidden="true">📞</span>
                    <div>
                        <strong>Tawag o Text (Hotline)</strong>
                        <a href="tel:+639510990689" class="phone-link">0951 099 0689</a>
                        <small>Lunes hanggang Biyernes · 8:00 AM – 5:00 PM</small>
                    </div>
                </div>

                <div class="quick-contact-box">
                    <span class="contact-icon" aria-hidden="true">✉️</span>
                    <div>
                        <strong>Opisyal na Email Desk</strong>
                        <a href="mailto:amissadaqahfamilyincorporated@gmail.com" class="email-link">amissadaqahfamilyincorporated@gmail.com</a>
                        <small>Sasagutin sa loob ng 24 oras</small>
                    </div>
                </div>

                <div class="quick-contact-box">
                    <span class="contact-icon" aria-hidden="true">📍</span>
                    <div>
                        <strong>Lungsod at Rehiyon</strong>
                        <p>Davao City, Mindanao, Philippines</p>
                        <small>SEC Registration: Non-stock Non-profit</small>
                    </div>
                </div>
            </div>

            <div class="contact__cta-row">
                <a class="button button--gold" href="mailto:amissadaqahfamilyincorporated@gmail.com?subject=ASFI%20General%20Inquiry">
                    <span>Magpadala ng Mensahe ↗</span>
                </a>
                <a class="button button--ghost" href="assistance.php">
                    <span>Gabay sa Pag-apply ng Tulong →</span>
                </a>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/site-footer.php'; ?>

