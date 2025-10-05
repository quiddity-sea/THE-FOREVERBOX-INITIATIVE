# Copilot Agent Instructions - ForeverBox Initiative

## Overview

PHP-based marketing website with GSAP animations, Tailwind CSS (CDN), and accessibility-first design. ~4,000 lines across 20+ files.

**Tech Stack:** PHP 8.3, MySQL 8.0 (optional), HTML5, Tailwind CSS (CDN), GSAP 3.12, vanilla JavaScript. No build step required.

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

**Database (Optional - site works without it):**
```bash
mysql -u root -p -e "CREATE DATABASE foreverbox_initiative;"
mysql -u root -p foreverbox_initiative < schema.sql
cp .env.example .env  # Edit with DB credentials
```

## Project Structure

```
├── .github/               # GitHub configuration
├── config/database.php    # PDO connection class
├── includes/
│   ├── header.php         # Nav, <head>, Tailwind config
│   └── footer.php         # Scripts, footer
├── pages/                 # 7 internal pages (283-765 lines each)
│   ├── about.php, case-studies.php, forever-fit.php
│   ├── investment.php, origin.php, science.php, vision.php
├── css/style.css          # Custom CSS (282 lines)
├── js/animations.js       # GSAP animations (269 lines)
├── images/                # Assets (currently gradients)
├── index.php              # Homepage (286 lines)
└── schema.sql, .env.example, docs (.md files)
```

**Key Facts:**

**1. Include Pattern:** All pages use:
```php
<?php
$pageTitle = "Name";
include __DIR__ . '/../includes/header.php';  // For pages/ subdirectory
?>
<!-- Content -->
<?php include __DIR__ . '/../includes/footer.php'; ?>
```

**$basePath auto-calculated in header.php:**
- Root pages: `$basePath = ''`
- pages/ subdirectory: `$basePath = '../'`

**Always use** `<?php echo $basePath; ?>` for CSS/JS/image links. Never hardcode paths.

**2. Color System** (Tailwind config in header.php):
- Origin: `from-origin-primary` (#1a237e/deep blue)
- Science: `from-science-primary` (#004d40/teal)
- Case Studies: `from-cases-primary` (#b71c1c/red)
- Forever Fit: `from-fit-primary` (#f57f17/amber)
- Investment: `from-investment-primary` (#4a148c/purple)
- Vision: `from-vision-primary` (#01579b/light blue)

**3. GSAP Animation Classes** (animations.js):
- `.fade-in`, `.slide-left`, `.slide-right` - Scroll-triggered animations
- `.scale-image`, `.stagger-list` - Image/list animations
- `.counter` (needs `data-target` attribute) - Animated counter
- `.hero-section` with `.hero-bg` - Parallax hero effect

**4. Accessibility:** Respects `prefers-reduced-motion`, high contrast mode, semantic HTML, keyboard navigation.

## Common Issues

**CSS/JS Not Loading:** Incorrect `$basePath` - always use `<?php echo $basePath; ?>` for asset paths.

**PHP Shows as Text:** Server not running - use `php -S localhost:8000` from repository root.

**Database Errors:** Database is optional. Site works without it. Ignore connection errors unless DB features needed.

**Animations Not Working:** Check browser console for errors. Verify GSAP loading from CDN (requires internet).

**Tailwind Classes Not Styling:** CDN requires internet. Header must load `<script src="https://cdn.tailwindcss.com"></script>`.

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

**Documentation:** README.md (setup), DEPLOYMENT.md (production), SITEMAP.md (structure), images/IMAGES-NEEDED.md (assets).

**Workflow:**
1. Start server: `php -S localhost:8000`
2. Make changes
3. Validate: `php -l file.php`
4. Test in browser (hard-refresh)
5. Database is optional - ignore DB errors

Search only if these instructions are incomplete or incorrect.
