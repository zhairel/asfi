<?php
declare(strict_types=1);

$pageTitle = $pageTitle ?? 'ASFI | AMIS Sadaqah Family Incorporated';
$pageDescription = $pageDescription ?? 'AMIS Sadaqah Family Incorporated is a SEC-registered Islamic charitable organization building a halal, takaful-inspired system of mutual support.';
$activePage = $activePage ?? '';

if (!function_exists('navClass')) {
    function navClass(string $page, string $activePage): string
    {
        return $page === $activePage ? ' class="is-active" aria-current="page"' : '';
    }
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#063a2f">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/asfi-logo-1000.webp">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" type="image/png" href="images/asfi-logo-160.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=4.0.0">
    <script defer src="js/app.js?v=4.0.0"></script>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <!-- Accessibility & Trust Banner (Top Bar) -->
    <div class="announcement" role="region" aria-label="Accessibility and organization status">
        <div class="container announcement__inner">
            <p class="announcement__status">
                <span class="status-dot" aria-hidden="true"></span>
                <strong>ASFI Foundation</strong> · <span>SEC-Registered Non-Profit · Davao City, PH</span>
            </p>
            <div class="accessibility-controls">
                <span class="accessibility-label" aria-hidden="true">Text Size:</span>
                <div class="text-size-group" role="group" aria-label="Adjust font size for easier reading">
                    <button type="button" class="text-size-btn is-active" data-font-size="normal" title="Standard text size" aria-label="Standard text size" aria-pressed="true">A</button>
                    <button type="button" class="text-size-btn" data-font-size="large" title="Large text size" aria-label="Large text size" aria-pressed="false">A+</button>
                    <button type="button" class="text-size-btn" data-font-size="xlarge" title="Extra large text size for seniors" aria-label="Extra large text size" aria-pressed="false">A++</button>
                </div>
                <a href="tel:+639510990689" class="top-contact-link" title="Call or text ASFI office">
                    <span aria-hidden="true">📞</span> 0951 099 0689
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="site-header" id="top">
        <div class="container nav-wrap">
            <a class="brand" href="index.php" aria-label="ASFI Foundation Home">
                <img src="images/asfi-logo-160.png" alt="ASFI Logo" width="56" height="56" decoding="async">
                <span class="brand__copy">
                    <span class="brand__title-row">
                        <strong>ASFI</strong>
                        <span class="brand__badge">Foundation</span>
                    </span>
                    <small>AMIS Sadaqah Family Incorporated</small>
                </span>
            </a>

            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav" aria-label="Toggle navigation menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="nav-toggle-icon" aria-hidden="true">
                    <span></span><span></span><span></span>
                </span>
                <span class="nav-toggle-text">Menu</span>
            </button>

            <nav class="nav" id="primary-nav" aria-label="Primary navigation">
                <div class="nav__inner">
                    <div class="nav__links">
                        <a href="index.php"<?= navClass('home', $activePage) ?>>
                            <span>Home</span>
                            <small class="nav-sub">Welcome to ASFI</small>
                        </a>
                        <a href="about.php"<?= navClass('about', $activePage) ?>>
                            <span>About Us</span>
                            <small class="nav-sub">Vision, Mission & Values</small>
                        </a>
                        <a href="programs.php"<?= navClass('programs', $activePage) ?>>
                            <span>Programs</span>
                            <small class="nav-sub">SMILE, Cleaners & Livelihood</small>
                        </a>
                        <a href="membership.php"<?= navClass('membership', $activePage) ?>>
                            <span>Membership</span>
                            <small class="nav-sub">How to Join & Guidelines</small>
                        </a>
                        <a href="benefits.php"<?= navClass('benefits', $activePage) ?>>
                            <span>Benefits</span>
                            <small class="nav-sub">Hospitalization & Janazah Aid</small>
                        </a>
                        <a href="assistance.php"<?= navClass('assistance', $activePage) ?>>
                            <span>Get Assistance</span>
                            <small class="nav-sub">Step-by-step claims guide</small>
                        </a>
                    </div>
                    
                    <div class="nav__actions">
                        <button class="button button--gold button--nav-donate" type="button" data-open-modal="donate-modal">
                            <span aria-hidden="true">💛</span>
                            <span>Give Sadaqah</span>
                        </button>
                    </div>

                    <!-- Mobile Drawer Extra Info for Families & Seniors -->
                    <div class="mobile-drawer-footer">
                        <p><strong>AMIS Sadaqah Family Incorporated</strong><br>SEC-Registered Community Foundation</p>
                        <div class="mobile-drawer-contacts">
                            <a href="tel:+639510990689" class="drawer-contact-btn">
                                <span>📞 Call: 0951 099 0689</span>
                            </a>
                            <a href="mailto:amissadaqahfamilyincorporated@gmail.com" class="drawer-contact-btn">
                                <span>✉️ Email Official Desk</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
