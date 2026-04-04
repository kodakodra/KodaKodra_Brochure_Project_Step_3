# KodaKodra — Step 3: PHP Includes, Contact Form & PHPMailer

## What This Is
The multipage brochure from Step 2 converted to PHP, with a working contact form, PHPMailer email delivery, reusable includes, and client-side JavaScript validation.

## What This Demonstrates
- PHP includes for reusable header, footer, and config — no more copy-pasting across pages
- Dynamic page titles and active navbar state via PHP
- Server-side form validation and sanitization
- Email delivery via PHPMailer over SMTP
- Client-side form validation and user feedback via JavaScript
- Async form submission using fetch() — no page reload
- Shared stylesheet extracted to style.css
- Shared scripts extracted to script.js

## File Structure
```
/
├── includes/
│   ├── config.php          — Site constants and mail settings
│   ├── header.php          — Reusable <head> and navbar
│   └── footer.php          — Reusable footer and script tags
├── vendor/                 — PHPMailer installed via Composer
├── index.php               — Home page
├── about.php               — About page
├── services.php            — Services page
├── contact.php             — Contact page with form
├── contact-handler.php     — Form processing and PHPMailer
├── style.css               — All custom styles
└── script.js               — Form validation and fetch submission
```

## Setup
1. Install PHPMailer via Composer: `composer require phpmailer/phpmailer`
2. Update `includes/config.php` with your SMTP credentials
3. Generate a Gmail App Password at myaccount.google.com/apppasswords
4. Never commit real credentials to a public repo

## Tech Used
- HTML5
- CSS3 (style.css)
- JavaScript (script.js)
- Bootstrap 5
- Font Awesome 6
- PHP
- PHPMailer

## Notes
- Server-side validation runs in contact-handler.php regardless of client-side checks
- Errors are logged server-side via error_log() — users see a safe generic message
- No database yet — submissions are emailed only at this stage
- All subsequent steps build on this same base without retrofitting
