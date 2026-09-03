<?php
declare(strict_types=1);

$pageTitle = $pageTitle ?? 'ASFI | AMIS Sadaqah Family Incorporated';
$pageDescription = $pageDescription ?? 'AMIS Sadaqah Family Incorporated is a SEC-registered Islamic charitable organization serving communities in Davao City.';
$activePage = $activePage ?? '';

function navClass(string $page, string $activePage): string
{
    return $page === $activePage ? ' class="is-active" aria-current="page"' : '';
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#07382d">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/asfi-logo-1000.webp">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" type="image/png" href="images/asfi-logo-160.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=3.0.0">
    <script defer src="js/app.js?v=3.0.0"></script>
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <div class="announcement">
        <div class="container announcement__inner">
            <p><span class="status-dot" aria-hidden="true"></span> Faith-led mutual care · Serving Davao City</p>
            <a href="mailto:amissadaqahfamilyincorporated@gmail.com">Connect with ASFI <span aria-hidden="true">↗</span></a>
        </div>
    </div>

    <header class="site-header" id="top">
        <div class="container nav-wrap">
            <a class="brand" href="index.php" aria-label="ASFI home">
                <img src="images/asfi-logo-160.png" alt="" width="58" height="58" decoding="async">
                <span class="brand__copy">
                    <strong>ASFI</strong>
                    <small>AMIS Sadaqah Family Incorporated</small>
                </span>
            </a>

            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
                <span class="sr-only">Toggle navigation</span>
                <span></span><span></span><span></span>
            </button>

            <nav class="nav" id="primary-nav" aria-label="Primary navigation">
                <a href="about.php"<?= navClass('about', $activePage) ?>>About</a>
                <a href="programs.php"<?= navClass('programs', $activePage) ?>>Programs</a>
                <a href="membership.php"<?= navClass('membership', $activePage) ?>>Membership</a>
                <a href="benefits.php"<?= navClass('benefits', $activePage) ?>>Benefits</a>
                <a href="assistance.php"<?= navClass('assistance', $activePage) ?>>Get Assistance</a>
                <button class="button button--small button--gold" type="button" data-open-modal="donate-modal">Give Sadaqah</button>
            </nav>
        </div>
    </header>
