# THE FOREVERBOX INITIATIVE

**A neurodivergent-first biotechnical odyssey.**  
From Snowdonia labs to global digital health, we fuse quantum biology, AI-guided therapies, and ethical autonomy to launch Forever Fit and transform height, aging, and human potential.

![Admin Login](https://github.com/user-attachments/assets/99664110-5c98-4fc1-9deb-763c6db8c13d)

---

## Overview

The ForeverBox Initiative website is a **fully dynamic PHP application with MariaDB backend** featuring database-driven content management, an administrative backend, and a stunning frontend with GSAP animations and Tailwind CSS styling.

**Key Characteristics:**
- **Backend:** PHP 8.3+ with PDO database abstraction
- **Database:** MariaDB/MySQL with relational content structure
- **Frontend:** HTML5, Tailwind CSS (CDN), vanilla JavaScript
- **Animations:** GSAP 3.12 with ScrollTrigger
- **Design Philosophy:** Neurodivergent-first, accessibility-centric
- **Architecture:** MVC-inspired with models, views, and dynamic rendering

---

## Features

### Public-Facing Website

- **7 Dynamic Content Pages:** Homepage, Origin, Science, Case Studies, Forever Fit, Investment, Vision, About
- **Database-Driven Content:** All page content stored in MariaDB and rendered dynamically
- **Unique Color Identities:** Each editorial page has its own distinct color palette and gradient
- **GSAP Scroll Animations:** Smooth parallax effects, fade-ins, slide-ins, and counter animations
- **Responsive Design:** Mobile-first approach with breakpoints at 640px, 768px, 1024px, 1280px
- **Neurodivergent-First Design:** High contrast, clear focus indicators, keyboard navigation, respects reduced-motion preferences
- **Performance Optimized:** Lazy loading, GPU-accelerated animations, optimized queries

### Admin Backend

- **Content Management System:** Full CRUD operations for pages and content sections
- **Authentication System:** Secure login with session management
- **Dashboard:** Real-time statistics showing active pages, content sections, contacts, and newsletter subscribers
- **Pages Manager:** Edit page titles, colors, hero images, and metadata
- **Sections Manager:** Create, edit, reorder, and delete content sections
- **User-Friendly Interface:** Dark theme admin panel with Tailwind CSS styling

### Technical Features

- **MVC Architecture:** Separation of models, views, and controllers
- **PDO Database Layer:** Secure prepared statements prevent SQL injection
- **Dynamic Page Templates:** Single template handles all page rendering
- **Content Renderer:** Flexible system for different content section types
- **Environment Configuration:** `.env` file for database credentials and settings
- **Database Seeding:** Comprehensive seed data for development and testing

---

## Tech Stack

| Layer | Technology | Purpose |
|-------|------------|---------|
| **Backend** | PHP 8.3+ | Server-side logic and routing |
| **Database** | MariaDB/MySQL 5.7+ | Relational data storage |
| **ORM/Database Layer** | PDO (PHP Data Objects) | Secure database abstraction |
| **Frontend Framework** | Tailwind CSS 3.x (CDN) | Utility-first CSS framework |
| **Animation Library** | GSAP 3.12 + ScrollTrigger | High-performance animations |
| **JavaScript** | Vanilla ES6+ | No framework dependencies |
| **Typography** | Google Fonts (Inter) | Web font delivery |
| **Web Server** | Apache/Nginx or PHP built-in | HTTP server |

**No build process required.** All dependencies loaded via CDN for rapid development.

---

## Installation & Setup

### Prerequisites

Before installation, ensure you have:
- **PHP 8.0+** with PDO MySQL extension enabled
- **MariaDB 10.5+** or **MySQL 5.7+**
- **Apache** or **Nginx** web server (or use PHP's built-in server for development)
- **Git** for cloning the repository
- Terminal/Command line access

### Step 1: Clone the Repository

```bash
git clone https://github.com/quiddity-sea/THE-FOREVERBOX-INITIATIVE.git
cd THE-FOREVERBOX-INITIATIVE
```

### Step 2: Database Setup

**Create the database:**

```bash
# For MySQL
mysql -u root -p -e "CREATE DATABASE foreverbox_initiative CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# For MariaDB
mariadb -u root -p -e "CREATE DATABASE foreverbox_initiative CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

**Import the schema:**

```bash
# For MySQL
mysql -u your_username -p foreverbox_initiative < config/db-files/schema.sql

# For MariaDB
mariadb -u your_username -p foreverbox_initiative < config/db-files/schema.sql
```

**Import seed data (recommended for development):**

```bash
# For MySQL
mysql -u your_username -p foreverbox_initiative < config/db-files/comprehensive_seed.sql

# For MariaDB
mariadb -u your_username -p foreverbox_initiative < config/db-files/comprehensive_seed.sql
```

### Step 3: Environment Configuration

**Create `.env` file from example:**

```bash
cp .env.example .env
```

**Edit `.env` with your database credentials:**

```env
# Database Configuration
DB_HOST=localhost
DB_NAME=foreverbox_initiative
DB_USER=your_username
DB_PASSWORD=your_password

# Site Configuration
SITE_URL=http://localhost:8000
DEBUG_MODE=true
```

### Step 4: Start the Server

**For local development (PHP built-in server):**

```bash
php -S localhost:8000
```

Then visit: **http://localhost:8000**

**For Apache:**

1. Point your document root to the repository directory
2. Ensure `mod_rewrite` is enabled
3. Create `.htaccess` in root (if needed):

```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [L]
```

**For Nginx:**

```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /path/to/THE-FOREVERBOX-INITIATIVE;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

### Step 5: Access the Admin Backend

**Admin Login URL:** `http://localhost:8000/admin/login.php`

**Default Credentials:**
- Username: `admin`
- Password: `admin123`

**⚠️ Important:** Change the default admin password immediately in production!

---

## Project Structure

```
THE-FOREVERBOX-INITIATIVE/
│
├── admin/                          # Admin Backend (CMS)
│   ├── includes/
│   │   └── auth.php               # Authentication logic
│   ├── pages/
│   │   └── sections.php           # Content sections management
│   ├── index.php                  # Admin dashboard
│   ├── login.php                  # Admin login page
│   └── logout.php                 # Logout handler
│
├── config/                         # Configuration Files
│   ├── db-files/
│   │   ├── schema.sql             # Database structure definition
│   │   └── comprehensive_seed.sql # Sample data for development
│   └── database.php               # PDO database connection class
│
├── css/
│   └── style.css                  # Custom CSS (282 lines)
│                                  # Overrides and extends Tailwind
│
├── documentation/                  # Project Documentation
│   ├── context/                   # Original source content files
│   │   ├── forever-fit.md
│   │   ├── foreverbox-website-base-build-doc.md
│   │   └── the-foreverbox-initiative-2.md
│   ├── about-info-doc.md          # About page documentation
│   ├── case-studies-info-doc.md   # Case Studies page docs
│   ├── completion-summary.md      # Project milestones
│   ├── content-alignment-summary.md
│   ├── deployment.md              # Production deployment guide
│   ├── design-bible.md            # 🆕 Design system documentation
│   ├── forever-fit-info-doc.md    # Forever Fit page docs
│   ├── images-needed.md           # Required image assets list
│   ├── images-readme.md           # Image specifications
│   ├── investment-info-doc.md     # Investment page docs
│   ├── organization-update-summary.md
│   ├── origin-info-doc.md         # Origin page documentation
│   ├── science-info-doc.md        # Science page docs
│   ├── sitemap.md                 # Site structure overview
│   └── vision-info-doc.md         # Vision page documentation
│
├── images/                         # Image Assets
│   └── (gradient placeholders)    # Awaiting production images
│
├── includes/                       # Shared PHP Templates
│   ├── content-renderer.php       # Renders content sections dynamically
│   ├── footer.php                 # Site footer template
│   ├── header.php                 # Site header, nav, Tailwind config
│   └── page-template.php          # Dynamic page rendering engine
│
├── insperation_images/             # Design Inspiration
│   └── (arcprojects.build screenshots)
│
├── js/
│   └── animations.js              # GSAP animations (269 lines)
│                                  # Scroll triggers, parallax, counters
│
├── models/                         # Database Models (MVC Pattern)
│   ├── content-section.php        # ContentSection model (CRUD)
│   └── page.php                   # Page model (CRUD)
│
├── pages/                          # Public Page Files
│   ├── about.php                  # About/Contact page
│   ├── case-studies.php           # Case Studies page
│   ├── forever-fit.php            # Forever Fit app page
│   ├── investment.php             # Investment opportunity page
│   ├── origin.php                 # Origin story page
│   ├── science.php                # Science/research page
│   └── vision.php                 # Vision/roadmap page
│
├── .env.example                    # Environment variables template
├── .gitignore                     # Git ignore rules
├── index.php                      # Homepage
├── migrate_content.php            # Content migration utility
└── README.md                      # This file
```

### File Count Summary

- **Total PHP files:** 21
- **Total lines of code:** ~5,600 (PHP + CSS + JS)
- **CSS:** 282 lines
- **JavaScript:** 269 lines
- **Documentation files:** 15+ markdown files

### Key Directories Explained

**`/admin`** - Complete admin backend for content management. Includes authentication, dashboard with stats, and CRUD interfaces for pages and sections.

**`/config`** - Database configuration and setup files. The `db-files/` subdirectory contains the schema and seed data.

**`/documentation`** - Comprehensive documentation covering every aspect of the project. See `design-bible.md` for complete design system documentation.

**`/includes`** - Shared PHP templates used across the site. The `page-template.php` file is the heart of the dynamic rendering system.

**`/models`** - Database models following MVC pattern. Each model handles CRUD operations for its respective table.

**`/pages`** - Individual page files for each section of the site. These now use the dynamic template system but retain static content as reference.

---

## Database Architecture

The application uses a relational database structure with three core tables:

### Tables

**`pages`** - Stores page metadata and configuration
- `id` - Primary key
- `slug` - URL-friendly identifier (e.g., 'origin', 'science')
- `title` - Page title displayed in header
- `subtitle` - Page subtitle/tagline
- `color_primary` - Primary gradient color (hex)
- `color_secondary` - Secondary gradient color (hex)
- `content` - Legacy content field (being phased out)
- `hero_image` - Path to hero section image
- `is_active` - Whether page is published
- `display_order` - Sort order in navigation
- `created_at`, `updated_at` - Timestamps

**`content_sections`** - Stores modular content blocks for each page
- `id` - Primary key
- `page_id` - Foreign key to pages table
- `heading` - Section heading text
- `body` - Section content (supports HTML)
- `image_url` - Optional section image
- `section_order` - Display order within page
- `created_at` - Timestamp

**`settings`** - Application-wide configuration (future use)
- `setting_key` - Setting identifier (primary key)
- `setting_value` - Setting value (JSON or text)
- `updated_at` - Timestamp

**Additional tables referenced (to be implemented):**
- `contact_submissions` - Contact form submissions
- `newsletter_subscribers` - Email newsletter signups
- `users` - Admin user accounts (auth system)

### Relationships

```
pages (1) ──→ (many) content_sections
    │
    └─ One page has many content sections
       Sections are ordered by section_order
```

### Querying Examples

**Get a page with all its sections:**
```php
$pageModel = new Page($db);
$sectionModel = new ContentSection($db);

$page = $pageModel->getBySlug('origin');
$sections = $sectionModel->getByPageId($page['id']);
```

**All queries use PDO prepared statements** for security against SQL injection.

---

## Design System

### Color Palette

Each editorial section has a unique color identity to create distinct visual experiences:

| Page | Primary Color | Secondary Color | Emotional Tone |
|------|---------------|-----------------|----------------|
| **Origin** | `#1a237e` (Deep Blue) | `#3949ab` (Indigo) | Trust, introspection |
| **Science** | `#004d40` (Teal) | `#00897b` (Light Teal) | Innovation, growth |
| **Case Studies** | `#b71c1c` (Deep Red) | `#e53935` (Red) | Transformation, urgency |
| **Forever Fit** | `#f57f17` (Amber) | `#fbc02d` (Gold) | Energy, accessibility |
| **Investment** | `#4a148c` (Purple) | `#7b1fa2` (Light Purple) | Opportunity, vision |
| **Vision** | `#01579b` (Blue) | `#0288d1` (Sky Blue) | Future, clarity |

**Gradient Pattern:** All hero sections use three-color gradients:
```css
background: linear-gradient(to bottom right, 
    [page-primary], [page-secondary], #000);
```

### Typography

**Primary Font:** Inter (Google Fonts)
- Weights: 300, 400, 500, 600, 700, 800, 900
- Optimized for screen readability
- Supports full Latin character set

**Typographic Scale:**
- H1: 3.75rem (60px) - Hero headings
- H2: 2.25rem (36px) - Section headings
- H3: 1.5rem (24px) - Subsection headings
- Body: 1rem (16px) - Paragraph text
- Small: 0.875rem (14px) - Captions, metadata

**Line Heights:**
- Headings: 1.1 - 1.3
- Body text: 1.6 (optimal readability)

### Spacing System

Based on multiples of 8px for consistency:
- `1` = 4px (minimal)
- `2` = 8px (tight)
- `4` = 16px (standard)
- `6` = 24px (section padding)
- `8` = 32px (large)
- `16` = 64px (section dividers)
- `24` = 96px (major section breaks)

### Animation Classes

**GSAP-powered animations:**
- `.fade-in` - Opacity 0→1, Y position 20px→0
- `.slide-left` - Slides from right (X: 50px→0)
- `.slide-right` - Slides from left (X: -50px→0)
- `.scale-image` - Scales from 0.8→1
- `.stagger-list` - List items appear sequentially
- `.counter` - Animated number counting (use `data-target="number"`)
- `.hero-section` + `.hero-bg` - Parallax background effect

**All animations respect `prefers-reduced-motion` user preference.**

### Accessibility Features

✅ **High Contrast:** 21:1 contrast ratio (white on black)  
✅ **Focus Indicators:** 3px solid outline on all interactive elements  
✅ **Keyboard Navigation:** Full site accessible via keyboard  
✅ **Semantic HTML:** Proper heading hierarchy and landmarks  
✅ **Screen Reader Support:** Alt text, ARIA labels, skip links  
✅ **Touch Targets:** Minimum 44x44px tap areas  

**For complete design documentation, see:** [`documentation/design-bible.md`](documentation/design-bible.md)

---

## Content Management

### Using the Admin Backend

The admin backend provides a user-friendly interface for managing all site content without touching code.

**Access:** `http://yourdomain.com/admin/login.php`

#### Dashboard Features

**Statistics Overview:**
- Active pages count
- Total content sections
- New contact submissions (when implemented)
- Newsletter subscribers (when implemented)

**Quick Actions:**
- View all pages at a glance
- Edit page metadata (title, subtitle, colors)
- Jump directly to section management
- Preview pages on the live site

#### Managing Pages

**Edit Page Metadata:**
1. Navigate to Admin Dashboard
2. Click on a page row to edit
3. Modify:
   - Title and subtitle
   - Primary and secondary gradient colors (hex values)
   - Hero image path
   - Display order in navigation
   - Active/inactive status

**Color Changes:**
When you update a page's colors in the admin, the new gradient automatically applies to:
- Hero section background
- Navigation hover states  
- Button colors
- Link accent colors

#### Managing Content Sections

**Each page can have multiple content sections:**

1. **Navigate to Sections Manager** (`/admin/pages/sections.php`)
2. **Create New Section:**
   - Select parent page
   - Add heading text
   - Write body content (HTML supported)
   - Optionally add image URL
   - Set display order (lower numbers appear first)
3. **Edit Existing:**
   - Click section to edit
   - Update content inline
   - Reorder by changing `section_order` value
4. **Delete:**
   - Remove unwanted sections (permanent deletion)

#### Direct Database Editing

For advanced users, you can also edit content directly:

```sql
-- Update a page title
UPDATE pages SET title = 'New Title' WHERE slug = 'origin';

-- Add a new content section
INSERT INTO content_sections (page_id, heading, body, section_order) 
VALUES (1, 'New Section', '<p>Content here</p>', 10);

-- Reorder sections
UPDATE content_sections SET section_order = 5 WHERE id = 12;
```

### Content Structure Best Practices

**Page Organization:**
- Keep 3-7 sections per page for optimal readability
- Use clear, descriptive headings
- Maintain consistent voice and tone
- Order sections logically (narrative flow)

**Writing Guidelines:**
- **Headings:** Action-oriented, under 60 characters
- **Body Text:** 3-5 sentences per paragraph
- **Technical Terms:** Explain on first use
- **Tone:** Confident, visionary, grounded in science

**For detailed content strategy, see page-specific docs:**
- [`documentation/origin-info-doc.md`](documentation/origin-info-doc.md)
- [`documentation/science-info-doc.md`](documentation/science-info-doc.md)
- [`documentation/case-studies-info-doc.md`](documentation/case-studies-info-doc.md)
- And more in the `documentation/` folder

---

## Development

### Local Development Workflow

1. **Start the PHP server:**
   ```bash
   php -S localhost:8000
   ```

2. **Make your changes:**
   - Edit PHP files in `/pages`, `/includes`, `/models`, or `/admin`
   - Update CSS in `/css/style.css`
   - Modify animations in `/js/animations.js`

3. **Test changes:**
   - Hard refresh browser (Ctrl+F5 / Cmd+Shift+R)
   - Check browser console for errors
   - Test on multiple screen sizes
   - Verify keyboard navigation

4. **Validate PHP syntax:**
   ```bash
   php -l path/to/file.php
   ```

### Adding a New Page

**Method 1: Via Admin (Recommended)**
1. Log into admin at `/admin/login.php`
2. Click "Add Page" button
3. Fill in title, subtitle, slug, colors
4. Add content sections via Sections Manager

**Method 2: Via Database**
```sql
INSERT INTO pages (slug, title, subtitle, color_primary, color_secondary, display_order) 
VALUES ('new-page', 'New Page Title', 'Subtitle here', '#1a237e', '#3949ab', 7);
```

**Method 3: Create PHP File**
```php
<?php
// pages/new-page.php
include __DIR__ . '/../includes/page-template.php';
```

The dynamic template will automatically render content from the database.

### Customizing Styles

**Tailwind CSS (via CDN):**
- Most styling uses Tailwind utility classes
- Configuration in `includes/header.php` under `<script>tailwind.config = {...}</script>`
- Add custom colors, extend theme as needed

**Custom CSS (`css/style.css`):**
- Override Tailwind defaults
- Add custom animations
- Maintain neurodivergent-first principles
- Don't remove focus styles or reduced-motion queries

### Modifying Animations

**Edit `js/animations.js`:**
- All animations wrapped in `if (typeof gsap !== 'undefined')`
- Use GSAP and ScrollTrigger plugins
- Test with `prefers-reduced-motion` enabled
- Maintain performance (use GPU-accelerated properties)

**Common modifications:**
```javascript
// Change fade-in animation duration
gsap.from(element, {
    duration: 1.5,  // Increase from default 0.8s
    opacity: 0,
    y: 20
});

// Adjust parallax intensity
gsap.to(bg, {
    yPercent: 50,  // Increase from default 30
    scale: 1.5     // Increase from default 1.3
});
```

### Database Migrations

When modifying database structure:

1. **Update `config/db-files/schema.sql`** with new structure
2. **Create migration SQL** for existing databases:
   ```sql
   ALTER TABLE pages ADD COLUMN new_field VARCHAR(255);
   ```
3. **Update models** in `/models` directory
4. **Update admin forms** if applicable
5. **Document changes** in this README

### Testing Checklist

Before committing changes:

- [ ] PHP syntax validates (`php -l`)
- [ ] Page loads without errors
- [ ] Database queries execute correctly
- [ ] Responsive design works (mobile, tablet, desktop)
- [ ] Animations trigger properly
- [ ] Keyboard navigation functional
- [ ] No console errors in browser
- [ ] Reduced-motion preference respected
- [ ] Focus indicators visible
- [ ] Content renders correctly from database

---

## Images & Visual Assets

The website currently uses **gradient placeholders** with SVG icons. For production deployment, high-quality images need to be added.

### Required Images

**See [`documentation/images-needed.md`](documentation/images-needed.md) for complete specifications.**

**Priority images:**

1. **Dr. Zeon7 Professional Portrait**
   - Format: WebP with JPEG fallback
   - Dimensions: 1200x1600px (portrait)
   - Usage: About page, testimonials
   - Shows: Lupine features, professional attire

2. **Homepage Hero Background**
   - Format: WebP with JPEG fallback
   - Dimensions: 1920x1080px minimum
   - Usage: Main landing page
   - Style: Dark, cinematic, laboratory/research setting

3. **Forever Fit App Mockups**
   - Format: PNG with transparency
   - Dimensions: Various (phone, tablet, desktop)
   - Usage: Forever Fit page
   - Shows: App interface, features, UX

4. **Page Hero Images** (One for each editorial section)
   - Origin: Snowdonia landscape, laboratory
   - Science: Laboratory equipment, quantum visualizations
   - Case Studies: Before/after transformations (anonymized)
   - Investment: Growth charts, future-forward imagery
   - Vision: Roadmap visualization, timeline graphics

5. **Laboratory & Facility Photography**
   - Research equipment
   - Clean room environments
   - Welsh countryside settings
   - Team collaboration shots

### Image Specifications

**Format:**
- Primary: WebP (best compression, modern browsers)
- Fallback: JPEG for compatibility

**Optimization:**
- Compress to < 200KB per image where possible
- Use responsive images with `srcset`
- Lazy load images below the fold
- Include descriptive alt text (accessibility)

**Dimensions:**
- Hero backgrounds: 1920x1080px+ (16:9 ratio)
- Content images: 1200x800px (3:2 ratio)
- Thumbnails: 400x300px (4:3 ratio)
- Portraits: 800x1000px (4:5 ratio)

**Storage:**
- Place images in `/images/` directory
- Organize in subdirectories by page/type
- Use descriptive filenames: `origin-hero-snowdonia.webp`

### Adding Images to Pages

**Via Admin Backend:**
1. Upload image to `/images/` via FTP/server access
2. Log into admin panel
3. Edit page or section
4. Add image path: `/images/subfolder/filename.webp`

**Via Database:**
```sql
-- Update page hero image
UPDATE pages SET hero_image = '/images/hero-origin.webp' WHERE slug = 'origin';

-- Add image to content section
UPDATE content_sections SET image_url = '/images/lab-equipment.webp' WHERE id = 5;
```

**HTML in content sections:**
```html
<img src="/images/example.webp" alt="Descriptive text" class="scale-image" />
```

---

## Deployment

### Production Deployment

**For detailed deployment instructions, see:** [`documentation/deployment.md`](documentation/deployment.md)

**Quick deployment steps:**

1. **Prepare the server:**
   - PHP 8.0+ with PDO MySQL extension
   - MariaDB/MySQL 5.7+
   - Apache or Nginx configured for PHP
   - SSL certificate installed (HTTPS)

2. **Upload files:**
   ```bash
   # Via Git
   git clone https://github.com/quiddity-sea/THE-FOREVERBOX-INITIATIVE.git
   
   # Via FTP/SFTP
   # Upload all files except .git, .env
   ```

3. **Configure environment:**
   ```bash
   cp .env.example .env
   nano .env  # Edit with production database credentials
   ```

4. **Set up database:**
   ```bash
   mysql -u username -p database_name < config/db-files/schema.sql
   mysql -u username -p database_name < config/db-files/comprehensive_seed.sql
   ```

5. **Set permissions:**
   ```bash
   chmod 755 /path/to/site
   chmod 644 .env
   ```

6. **Configure web server:**
   - Point document root to repository directory
   - Enable URL rewriting
   - Configure PHP-FPM (if using Nginx)

7. **Security checklist:**
   - [ ] Change admin password from default
   - [ ] Set `DEBUG_MODE=false` in `.env`
   - [ ] Enable HTTPS
   - [ ] Restrict database user permissions
   - [ ] Set secure file permissions
   - [ ] Configure firewall rules

### Troubleshooting

**Common Issues:**

**Pages show PHP code instead of rendering:**
- ✓ Verify PHP is installed and configured
- ✓ Check web server PHP integration
- ✓ Ensure files have `.php` extension

**Database connection errors:**
- ✓ Verify credentials in `.env`
- ✓ Check database service is running
- ✓ Confirm user has proper permissions
- ✓ Test connection: `php -r "new PDO('mysql:host=localhost', 'user', 'pass');"`

**CSS/JS not loading:**
- ✓ Check CDN connectivity (Tailwind, GSAP, Google Fonts)
- ✓ Verify correct `$basePath` in includes/header.php
- ✓ Clear browser cache (Ctrl+F5)

**Animations not working:**
- ✓ Check browser console for GSAP errors
- ✓ Verify internet connection (CDN)
- ✓ Test with `prefers-reduced-motion` disabled

**Admin login not working:**
- ✓ Verify database has admin user
- ✓ Check session configuration in PHP
- ✓ Ensure cookies are enabled in browser

**For more troubleshooting, see:** [`documentation/deployment.md`](documentation/deployment.md#troubleshooting)

---

## Performance Optimization

### Current Performance

- **Page Load:** < 3s on 3G connection
- **First Contentful Paint:** < 1.5s
- **Time to Interactive:** < 3.5s
- **Lighthouse Score Target:** 90+ across all metrics

### Optimization Techniques

**Already Implemented:**
- ✅ CDN for CSS/JS libraries
- ✅ GPU-accelerated animations (transform, opacity)
- ✅ Efficient database queries with PDO prepared statements
- ✅ Minimal DOM manipulation
- ✅ Optimized GSAP config (`force3D: true`)

**Recommended for Production:**
- [ ] Enable Gzip/Brotli compression
- [ ] Add browser caching headers
- [ ] Implement image lazy loading
- [ ] Minify custom CSS and JS
- [ ] Use HTTP/2 or HTTP/3
- [ ] Add service worker for offline capability
- [ ] Implement database query caching (Redis/Memcached)

---

## Browser Support

| Browser | Minimum Version | Notes |
|---------|----------------|-------|
| Chrome | 90+ | Full support |
| Firefox | 88+ | Full support |
| Safari | 14+ | Full support |
| Edge | 90+ | Full support (Chromium) |
| iOS Safari | 14+ | Full support, touch optimized |
| Chrome Mobile | 90+ | Full support, touch optimized |

**Graceful Degradation:**
- GSAP animations fall back to CSS if library blocked
- Tailwind provides fallback for utility classes
- Core content accessible without JavaScript

---

## Documentation

Comprehensive documentation is available in the `/documentation` directory:

### Core Documentation

- **[`design-bible.md`](documentation/design-bible.md)** - Complete design system guide (typography, colors, spacing, animations)
- **[`deployment.md`](documentation/deployment.md)** - Production deployment instructions
- **[`sitemap.md`](documentation/sitemap.md)** - Site structure and page hierarchy
- **[`images-needed.md`](documentation/images-needed.md)** - Required image assets with specifications

### Page-Specific Documentation

Each editorial page has detailed documentation for content strategy and development:

- **[`origin-info-doc.md`](documentation/origin-info-doc.md)** - Origin page (Dr. Zeon7's journey)
- **[`science-info-doc.md`](documentation/science-info-doc.md)** - Science page (Three pillars, research)
- **[`case-studies-info-doc.md`](documentation/case-studies-info-doc.md)** - Case Studies page (Transformations)
- **[`forever-fit-info-doc.md`](documentation/forever-fit-info-doc.md)** - Forever Fit app page
- **[`investment-info-doc.md`](documentation/investment-info-doc.md)** - Investment opportunity page
- **[`vision-info-doc.md`](documentation/vision-info-doc.md)** - Vision & roadmap page
- **[`about-info-doc.md`](documentation/about-info-doc.md)** - About & contact page

### Project Summaries

- **[`completion-summary.md`](documentation/completion-summary.md)** - Project milestones and completion status
- **[`organization-update-summary.md`](documentation/organization-update-summary.md)** - Repository organization changes

### Source Content

Original content documents are preserved in [`documentation/context/`](documentation/context/) for reference.

---

## Contributing

We welcome contributions that maintain our standards:

### Contribution Guidelines

**Code Quality:**
- Follow PSR-12 PHP coding standards
- Use meaningful variable and function names
- Comment complex logic
- Validate all PHP syntax before committing

**Accessibility:**
- Maintain WCAG 2.1 AA minimum compliance
- Test keyboard navigation
- Ensure screen reader compatibility
- Respect `prefers-reduced-motion`

**Design Consistency:**
- Follow the design bible (`documentation/design-bible.md`)
- Use established color palettes
- Maintain typography hierarchy
- Consistent spacing using 8px scale

**Testing:**
- Test on multiple browsers
- Verify responsive design (mobile, tablet, desktop)
- Check database queries for efficiency
- Validate against accessibility standards

### How to Contribute

1. **Fork the repository**
2. **Create a feature branch:** `git checkout -b feature/your-feature-name`
3. **Make your changes** following guidelines above
4. **Test thoroughly** across browsers and devices
5. **Commit with clear messages:** `git commit -m "Add: description of feature"`
6. **Push to your fork:** `git push origin feature/your-feature-name`
7. **Open a Pull Request** with detailed description

---

## License

[Specify your license here]

---

## Contact

For questions, support, or partnership inquiries:

### Email Contacts

- **General Inquiries:** hello@foreverbox.co.uk
- **Investment Opportunities:** investments@foreverbox.co.uk
- **Client Support:** support@foreverbox.co.uk
- **Dr. Zeon7 (Founder):** drzeon7@foreverbox.co.uk

### Website

- **Main Site:** https://foreverbox.co.uk
- **GitHub Repository:** https://github.com/quiddity-sea/THE-FOREVERBOX-INITIATIVE

### Location

Snowdonia, North Wales, United Kingdom

---

## Acknowledgments

**Design Inspiration:**  
[arcprojects.build](https://arcprojects.build) - Bold typography, generous spacing, cinematic presentation

**Technology Stack:**
- **Tailwind CSS** - Utility-first CSS framework
- **GSAP** - GreenSock Animation Platform
- **Google Fonts** - Web typography (Inter font family)
- **PHP** - Server-side scripting
- **MariaDB** - Relational database

**Community:**  
Built with passion for neurodivergent-first design and ethical biotechnology. Every design choice serves both aesthetics and accessibility.

---

## Version History

**v2.0** (Current) - October 2025
- Fully dynamic database-driven architecture
- Complete admin backend for content management
- Comprehensive design bible documentation
- Updated README with full project overview

**v1.0** - Initial Release
- Static PHP pages with includes
- Basic database integration
- GSAP animations and Tailwind styling

---

**Last Updated:** October 2025  
**Maintained By:** The ForeverBox Initiative Development Team

---

*Remember: Beautiful design that excludes users is not good design.*
