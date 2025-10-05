# Copilot Agent Instructions - ForeverBox Initiative

## Repository Overview

**The ForeverBox Initiative** is a PHP-based marketing website for a neurodivergent-first biotechnology organization. The site features bold, cinematic design with GSAP animations, unique color identities per section, and accessibility-first principles.

**Tech Stack:**
- **Backend:** PHP 8.3 (compatible with PHP 7.4+)
- **Database:** MySQL 8.0 / MariaDB 5.7+ (optional - site works without DB)
- **Frontend:** HTML5, Tailwind CSS (CDN), vanilla JavaScript
- **Animations:** GSAP 3.12 with ScrollTrigger
- **Server:** PHP built-in server for development, Apache/Nginx for production

**Repository Size:** ~4,000 lines of PHP/JS/CSS code across 20+ files. This is a small, straightforward project with no complex build systems.

## Build and Validation

### No Build Step Required
This project has **NO compilation or build step**. It uses:
- Tailwind CSS via CDN (no build needed)
- GSAP via CDN
- Vanilla JavaScript (no transpilation)
- Native PHP (no Composer dependencies required)

### Running the Development Server

**Always use PHP's built-in server for testing:**
```bash
cd /home/runner/work/THE-FOREVERBOX-INITIATIVE/THE-FOREVERBOX-INITIATIVE
php -S localhost:8000
```

The server starts immediately and serves from the repository root. Access at `http://localhost:8000`.

**Important:** The server does NOT auto-reload. After making changes, test by:
1. Save your file changes
2. Refresh browser (Ctrl+F5 for hard refresh)
3. For JavaScript/CSS changes, always hard-refresh to bypass cache

### Syntax Validation

**Always check PHP syntax after editing PHP files:**
```bash
php -l filename.php
```

Or check all PHP files:
```bash
find . -name "*.php" -not -path "./vendor/*" -exec php -l {} \; | grep -v "No syntax errors"
```

This project has no automated linting or testing. Manual validation is required.

### Database Setup (Optional)

The database is **optional** - the site displays correctly without it. If database functionality is needed:

```bash
# 1. Create database
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS foreverbox_initiative CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# 2. Import schema
mysql -u root -p foreverbox_initiative < schema.sql

# 3. Configure credentials
cp .env.example .env
# Edit .env with your database credentials
```

**Note:** Database connection errors do NOT prevent the site from displaying. The site is primarily static with optional DB integration.

## Project Architecture

### Directory Structure

```
THE-FOREVERBOX-INITIATIVE/
├── .github/                  # GitHub configuration (add files here)
├── config/
│   └── database.php          # PDO database connection class
├── includes/
│   ├── header.php            # Site header with navigation, <head>, Tailwind config
│   └── footer.php            # Site footer with scripts
├── pages/                    # All internal pages (7 files)
│   ├── about.php             # Team and contact information
│   ├── case-studies.php      # Transformation case studies
│   ├── forever-fit.php       # Forever Fit app product page
│   ├── investment.php        # Investment opportunity page
│   ├── origin.php            # Founder story and timeline
│   ├── science.php           # Quantum biology research
│   └── vision.php            # Future vision and goals
├── css/
│   └── style.css             # Custom CSS (282 lines)
├── js/
│   └── animations.js         # GSAP animations and scroll triggers (269 lines)
├── images/                   # Image assets (currently uses gradients)
│   ├── .gitkeep
│   ├── IMAGES-NEEDED.md      # List of required images
│   └── README.md             # Image organization guide
├── index.php                 # Homepage (286 lines)
├── schema.sql                # Database schema (MariaDB)
├── .env.example              # Environment template
├── .gitignore                # Git ignore rules
└── README.md, DEPLOYMENT.md, SITEMAP.md  # Documentation
```

### Key Architecture Facts

**1. PHP Include Pattern:**
All pages follow the same structure:
```php
<?php
$pageTitle = "Page Name";
include __DIR__ . '/../includes/header.php';  // For pages/ subdirectory
?>
<!-- Page content -->
<?php include __DIR__ . '/../includes/footer.php'; ?>
```

**Important:** The `$basePath` variable is auto-calculated in header.php based on directory depth:
- Pages in root: `$basePath = ''`
- Pages in `pages/`: `$basePath = '../'`

This affects all asset links (CSS, JS, images). **Never hardcode paths** - always use `<?php echo $basePath; ?>`.

**2. Color System:**
Each section has a unique color identity defined in Tailwind config (includes/header.php):
- Origin: `#1a237e` / `#3949ab` (deep blue)
- Science: `#004d40` / `#00897b` (teal)
- Case Studies: `#b71c1c` / `#e53935` (red)
- Forever Fit: `#f57f17` / `#fbc02d` (amber)
- Investment: `#4a148c` / `#7b1fa2` (purple)
- Vision: `#01579b` / `#0288d1` (light blue)

Use classes like `from-origin-primary`, `to-science-secondary` in gradients.

**3. Animation Classes:**
GSAP animations are triggered by CSS classes (defined in js/animations.js):
- `.fade-in` - Fade in on scroll
- `.slide-left` / `.slide-right` - Slide animations
- `.scale-image` - Scale animation
- `.stagger-list` - Stagger children
- `.counter` - Animated counter (needs `data-target` attribute)
- `.hero-section` with `.hero-bg` - Parallax hero effect

**4. Accessibility Features:**
- Respects `prefers-reduced-motion` (disables animations)
- High contrast mode support
- Semantic HTML structure
- Keyboard navigation with visible focus indicators
- Skip-to-content link (in CSS)

## Common Pitfalls and Workarounds

### Issue: CSS/JS Not Loading
**Cause:** Incorrect `$basePath` variable usage
**Solution:** Always use `<?php echo $basePath; ?>` for asset links. Never hardcode `/css/style.css` or `../css/style.css`.

### Issue: PHP Showing as Plain Text
**Cause:** Not using PHP development server or web server misconfigured
**Solution:** Always run `php -S localhost:8000` from repository root for testing.

### Issue: Database Connection Errors
**Cause:** Database not configured or credentials incorrect
**Solution:** Database is optional. Site works without it. If needed, copy `.env.example` to `.env` and update credentials. The database class attempts connection but doesn't crash on failure.

### Issue: Animation Not Working
**Cause:** GSAP library not loading from CDN or JavaScript error
**Solution:** 
1. Check browser console for errors
2. Verify internet connection (CDN resources required)
3. Check if animation classes are properly applied to elements

### Issue: Tailwind Classes Not Styling
**Cause:** Tailwind is loaded via CDN in header.php, must have internet connection
**Solution:** Verify `<script src="https://cdn.tailwindcss.com"></script>` is in header and loading. For offline development, consider downloading Tailwind.

## Validation Steps

### Before Committing Changes:

**1. PHP Syntax Check:**
```bash
php -l path/to/modified/file.php
```

**2. Test Page Rendering:**
```bash
php -S localhost:8000
# Open browser to http://localhost:8000 and test affected pages
```

**3. Visual Inspection:**
- Check all modified pages in browser
- Test both desktop and mobile views (resize browser)
- Verify animations work (scroll down page)
- Check navigation links work
- Test with browser DevTools Console open (check for JS errors)

**4. Accessibility Check:**
- Test keyboard navigation (Tab key)
- Verify focus indicators are visible
- Check that text has sufficient contrast

### Testing Specific Features:

**Navigation:** Click all nav links - they should load without 404 errors
**Mobile Menu:** Click hamburger icon - menu should toggle
**Animations:** Scroll down page - elements should animate into view
**Color Scheme:** Each page should have distinct color gradients in hero section

## File Editing Guidelines

### When Editing PHP Pages:

1. **Maintain Structure:** Don't remove header/footer includes
2. **Use Existing Classes:** Follow the color and animation class patterns
3. **Preserve Accessibility:** Keep semantic HTML, ARIA labels, alt text
4. **Test Thoroughly:** PHP syntax errors break the entire page

### When Editing CSS (css/style.css):

1. **Check Specificity:** Custom CSS overrides Tailwind
2. **Test Animations:** Verify `@keyframes` work across browsers
3. **Accessibility:** Don't remove focus styles or reduced-motion queries

### When Editing JavaScript (js/animations.js):

1. **GSAP Context:** All animations are inside `if (typeof gsap !== 'undefined')` check
2. **Reduced Motion:** Code respects `prefers-reduced-motion` at the end of file
3. **Performance:** Animations use `will-change` and `force3D` for smoothness

## Quick Reference

### File Line Counts (for context):
- index.php: 286 lines
- pages/about.php: 283 lines
- pages/case-studies.php: 606 lines
- pages/forever-fit.php: 765 lines (largest)
- pages/investment.php: 345 lines
- pages/origin.php: 508 lines
- pages/science.php: 531 lines
- pages/vision.php: 390 lines
- css/style.css: 282 lines
- js/animations.js: 269 lines

### No CI/CD Pipeline
This repository has **no GitHub Actions, CI/CD, or automated tests**. Validation is entirely manual.

### Dependencies
- **Zero npm packages** - No node_modules
- **Zero Composer packages** - No vendor folder
- **All dependencies via CDN** - Tailwind, GSAP, Google Fonts

### Documentation Files
- README.md - Project overview and setup instructions
- DEPLOYMENT.md - Production deployment guide
- SITEMAP.md - Site structure and user journeys
- COMPLETION-SUMMARY.md - Project completion status
- images/IMAGES-NEEDED.md - Required image specifications

## Trust These Instructions

These instructions are comprehensive and verified by testing. When working on this repository:

1. **Start PHP server first:** `php -S localhost:8000`
2. **Check syntax after edits:** `php -l file.php`
3. **Test in browser immediately**
4. **No build step needed** - changes are immediate
5. **Database is optional** - don't worry about DB errors

Only search for additional information if these instructions are incomplete or you encounter unexpected behavior not documented here.
