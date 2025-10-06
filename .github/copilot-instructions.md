# Copilot Agent Instructions - ForeverBox Initiative

## Overview

**Fully dynamic PHP application** with MariaDB backend, admin CMS, GSAP animations, Tailwind CSS (CDN), and neurodivergent-first design. ~5,600 lines across 21 PHP files + CSS/JS.

**Tech Stack:** PHP 8.3+, MariaDB/MySQL 5.7+, HTML5, Tailwind CSS (CDN), GSAP 3.12, vanilla JavaScript ES6+. No build step required.

## Build & Run

**No compilation needed.** All dependencies via CDN (Tailwind, GSAP, Google Fonts).

**Development Server:**
```bash
php -S localhost:8000  # From repository root
```
Server starts instantly. Hard-refresh browser (Ctrl+F5) after changes.

**Validate PHP Syntax:**
```bash
php -l filename.php
# Or check all: find . -name "*.php" -exec php -l {} \; | grep -v "No syntax"
```

**Database (REQUIRED - site is now fully database-driven):**
```bash
# Create database
mysql -u root -p -e "CREATE DATABASE foreverbox_initiative CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Import schema
mysql -u root -p foreverbox_initiative < config/db-files/schema.sql

# Import seed data (development)
mysql -u root -p foreverbox_initiative < config/db-files/comprehensive_seed.sql

# Configure environment
cp .env.example .env  # Edit with DB credentials
```

**Admin Access:**
- URL: `http://localhost:8000/admin/login.php`
- Default: username `admin`, password `admin123`

## Project Structure

```
├── .github/               # GitHub configuration
├── admin/                 # Admin Backend (CMS)
│   ├── includes/         # Auth logic
│   ├── pages/            # Admin page managers
│   ├── index.php         # Dashboard with stats
│   ├── login.php         # Authentication
│   └── logout.php        # Session management
├── config/
│   ├── database.php       # PDO connection class
│   └── db-files/          # Database files
│       ├── schema.sql     # Database schema
│       └── comprehensive_seed.sql  # Seed data
├── documentation/         # Project documentation
│   ├── context/          # Source content files
│   ├── design-bible.md   # Complete design system (NEW)
│   ├── deployment.md     # Production deployment
│   ├── sitemap.md        # Site structure
│   └── *-info-doc.md     # Page-specific docs (7 pages)
├── includes/
│   ├── header.php         # Nav, <head>, Tailwind config
│   ├── footer.php         # Scripts, footer
│   ├── page-template.php  # Dynamic page renderer (NEW)
│   └── content-renderer.php # Content section renderer (NEW)
├── models/                # Database models (MVC)
│   ├── page.php          # Page CRUD operations
│   └── content-section.php # Section CRUD operations
├── pages/                 # 7 public pages (now dynamic)
│   ├── about.php, case-studies.php, forever-fit.php
│   ├── investment.php, origin.php, science.php, vision.php
├── css/style.css          # Custom CSS (282 lines)
├── js/animations.js       # GSAP animations (269 lines)
├── images/                # Assets (currently gradients)
├── index.php              # Homepage
└── .env.example, README.md
```

**Total:** 21 PHP files, ~5,600 lines of code

**Key Facts:**

**1. Database-Driven Architecture:**
All page content now stored in MariaDB and rendered dynamically via `includes/page-template.php`:
```php
<?php
// All pages now use this pattern:
include __DIR__ . '/../includes/page-template.php';
// Template fetches from database automatically
?>
```

**2. Include Pattern (for custom static pages):**
```php
<?php
$pageTitle = "Name";
include __DIR__ . '/../includes/header.php';
?>
<!-- Content -->
<?php include __DIR__ . '/../includes/footer.php'; ?>
```

**$basePath auto-calculated in header.php:**
- Root pages: `$basePath = ''`
- pages/ subdirectory: `$basePath = '../'`

**Always use** `<?php echo $basePath; ?>` for CSS/JS/image links. Never hardcode paths.

**3. Typography System (Inter font from Google Fonts):**
- H1: 3.75rem (60px), weight 800 - Hero headings
- H2: 2.25rem (36px), weight 700 - Section headings  
- H3: 1.5rem (24px), weight 700 - Subsections
- Body: 1rem (16px), weight 400 - Paragraphs (line-height 1.6)
- Small: 0.875rem (14px), weight 400 - Captions

**4. Color System** (Tailwind config in header.php):
- Origin: `from-origin-primary` (#1a237e/deep blue)
- Science: `from-science-primary` (#004d40/teal)
- Case Studies: `from-cases-primary` (#b71c1c/red)
- Forever Fit: `from-fit-primary` (#f57f17/amber)
- Investment: `from-investment-primary` (#4a148c/purple)
- Vision: `from-vision-primary` (#01579b/light blue)

Each page uses a three-color gradient:
```css
background: linear-gradient(to bottom right, primary, secondary, #000);
```

**5. GSAP Animation Classes** (animations.js):
- `.fade-in`, `.slide-left`, `.slide-right` - Scroll-triggered animations
- `.scale-image`, `.stagger-list` - Image/list animations
- `.counter` (needs `data-target` attribute) - Animated counter
- `.hero-section` with `.hero-bg` - Parallax hero effect

**6. Accessibility:** Respects `prefers-reduced-motion`, high contrast mode, semantic HTML, keyboard navigation, WCAG 2.1 AA compliant.

## Common Issues

**CSS/JS Not Loading:** Incorrect `$basePath` - always use `<?php echo $basePath; ?>` for asset paths.

**PHP Shows as Text:** Server not running - use `php -S localhost:8000` from repository root.

**Database Connection Errors:** 
- Verify credentials in `.env` file
- Check database service is running: `sudo service mysql status`
- Ensure database exists: `mysql -u user -p -e "SHOW DATABASES;"`
- Test connection: `php -r "new PDO('mysql:host=localhost;dbname=foreverbox_initiative', 'user', 'pass');"`

**Pages Return 500 Error:**
- Check PHP error log for details
- Verify database models don't reference missing columns
- Ensure all required tables exist in schema

**Animations Not Working:** Check browser console for errors. Verify GSAP loading from CDN (requires internet).

**Tailwind Classes Not Styling:** CDN requires internet. Header must load `<script src="https://cdn.tailwindcss.com"></script>`.

**Admin Login Fails:**
- Verify database has admin user (check `users` table)
- Ensure sessions are working in PHP
- Check cookies enabled in browser

## Validation Before Committing

**1. PHP Syntax:** `php -l path/to/file.php`

**2. Test in Browser:**
```bash
php -S localhost:8000
# Open http://localhost:8000, test modified pages
```

**3. Visual Check:**
- Desktop and mobile views (resize browser)
- Scroll for animations
- Navigation links work
- Browser console for errors

**4. Accessibility:**
- Tab key navigation works
- Focus indicators visible
- Text has contrast

**Specific Tests:**
- **Navigation:** All links load without 404
- **Mobile Menu:** Hamburger icon toggles menu
- **Animations:** Elements animate on scroll
- **Colors:** Each page has distinct hero gradients

## Editing Guidelines

**PHP Pages:**
- Keep header/footer includes
- Use existing color and animation classes
- Preserve semantic HTML and accessibility
- Test syntax after changes

**CSS (css/style.css):**
- Custom CSS overrides Tailwind
- Don't remove focus styles or reduced-motion queries

**JavaScript (js/animations.js):**
- All animations wrapped in `if (typeof gsap !== 'undefined')`
- Respects `prefers-reduced-motion` at end of file
- Uses `will-change` and `force3D` for performance

## Reference

**No CI/CD:** No GitHub Actions or automated tests. All validation is manual.

**Zero Dependencies:** No npm/Composer packages. All via CDN (Tailwind, GSAP, Google Fonts).

**Documentation:** 
- `README.md` - Complete project overview, setup, development
- `documentation/design-bible.md` - Full design system documentation
- `documentation/deployment.md` - Production deployment guide
- `documentation/sitemap.md` - Site structure
- `documentation/*-info-doc.md` - Page-specific documentation (7 pages)
- `documentation/images-needed.md` - Required image assets

**Workflow:**
1. Start server: `php -S localhost:8000`
2. Make changes (edit files or use admin at `/admin/login.php`)
3. Validate: `php -l file.php`
4. Test in browser (hard-refresh: Ctrl+F5)
5. Check database if content not appearing
6. Verify no console errors

**Database Tables:**
- `pages` - Page metadata (title, colors, slug)
- `content_sections` - Modular content blocks
- `settings` - App-wide configuration (future)
- `contact_submissions` - Contact forms (to be implemented)
- `newsletter_subscribers` - Email signups (to be implemented)
- `users` - Admin accounts (auth system)

Search only if these instructions are incomplete or incorrect.
