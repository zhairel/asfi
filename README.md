# ASFI Official Website

Production-ready website for **AMIS Sadaqah Family Incorporated (ASFI)** in Davao City, Philippines.

The official ASFI Profile and Guidelines has been translated into dedicated, readable website pages. Public impact figures and member-benefit amounts are taken from that handbook; the PDF itself is not published on the website and unverified donation account details are intentionally excluded.

## Stack

- PHP 8+ for broad shared-host compatibility
- Modern semantic HTML5
- Custom responsive CSS (no framework or build step)
- Dependency-free vanilla JavaScript
- Apache `.htaccess` for HTTPS, caching, compression, and security headers

## Local preview

From this directory:

```bash
php -S localhost:8080
```

Then open `http://localhost:8080`.

## Deploy to GoDaddy, Hostinger, cPanel, or hPanel

1. Point the domain or subdomain to the hosting account.
2. Open the host's File Manager and locate the domain document root—usually `public_html/` or a subdomain folder.
3. Upload the **contents of this project root** (not the enclosing `amis_asfi` folder).
4. Ensure all root PHP pages, `.htaccess`, `includes/`, `images/`, `css/`, and `js/` are in that document root.
5. Select PHP 8.1 or newer in the hosting control panel.
6. Enable the host's free SSL certificate. The included `.htaccess` redirects the live domain to HTTPS.
7. Visit the live URL and verify every page, email link, mobile menu, and the Sadaqah action dialog.

No Node.js server, database, Composer install, or command-line build is required.

## Before accepting online donations

Replace the verification-only donation dialog only after ASFI has confirmed all of the following:

- Official account holder name
- GCash/Maya number or bank account
- Donation receipt workflow
- Privacy and financial-control process

This prevents placeholder or outdated payment information from appearing on the live site.

## Main files

- `index.php` — home page
- `about.php` — history, vision, mission, objectives, and values
- `programs.php` — SMILE, Masjid Cleaners Assistance, and wider programs
- `membership.php` — eligibility, requirements, rights, duties, and joining process
- `benefits.php` — complete member-benefit categories and conditions
- `assistance.php` — benefit application, documents, evaluation, and reminders
- `includes/` — shared navigation, footer, and dialogs
- `css/style.css` — full visual system and responsive layout
- `js/app.js` — navigation, scroll effects, accessible dialogs, and counters
- `.htaccess` — shared-host server configuration

Production domain: `https://asfi.amis.edu.ph`
