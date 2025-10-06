# Database Setup Guide - ForeverBox Initiative

## Overview

The ForeverBox Initiative website is now **fully database-driven**. All page content (Origin, Science, Case Studies, Forever Fit, Investment, and Vision) is stored in a MariaDB/MySQL database and rendered dynamically via PHP.

## Quick Setup

For a fresh installation, follow these steps:

### 1. Prerequisites

- PHP 8.3+ with PDO MySQL extension
- MySQL 8.0+ or MariaDB 10.5+
- Git (for cloning the repository)

### 2. Clone and Configure

```bash
# Clone the repository
git clone https://github.com/quiddity-sea/THE-FOREVERBOX-INITIATIVE.git
cd THE-FOREVERBOX-INITIATIVE

# Create environment file
cp .env.example .env
```

### 3. Edit .env File

Update the database credentials in `.env`:

```env
DB_HOST=localhost
DB_NAME=foreverbox_initiative
DB_USER=foreverbox
DB_PASSWORD=foreverbox123
```

### 4. Create Database

```bash
# Connect to MySQL as root or admin user
mysql -u root -p

# In MySQL console:
CREATE DATABASE foreverbox_initiative CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'foreverbox'@'localhost' IDENTIFIED BY 'foreverbox123';
GRANT ALL PRIVILEGES ON foreverbox_initiative.* TO 'foreverbox'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 5. Import Schema and Data

```bash
# Import database schema (creates tables)
mysql -u foreverbox -pforeverbox123 foreverbox_initiative < config/db-files/schema.sql

# Import seed data (populates content)
mysql -u foreverbox -pforeverbox123 foreverbox_initiative < config/db-files/comprehensive_seed.sql
```

### 6. Start Development Server

```bash
php -S localhost:8000
```

### 7. Access the Site

Open your browser to:
- Homepage: http://localhost:8000
- Origin: http://localhost:8000/pages/origin.php
- Science: http://localhost:8000/pages/science.php
- Case Studies: http://localhost:8000/pages/case-studies.php
- Forever Fit: http://localhost:8000/pages/forever-fit.php
- Investment: http://localhost:8000/pages/investment.php
- Vision: http://localhost:8000/pages/vision.php

## Database Structure

### Tables

#### `pages` Table
Stores page metadata including titles, colors, and slugs.

| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary key |
| slug | VARCHAR(50) | URL-friendly page identifier |
| title | VARCHAR(255) | Page title |
| subtitle | TEXT | Page subtitle |
| color_primary | VARCHAR(7) | Primary color (hex) |
| color_secondary | VARCHAR(7) | Secondary color (hex) |
| display_order | INT | Order for navigation |

#### `content_sections` Table
Stores modular content sections for each page.

| Column | Type | Description |
|--------|------|-------------|
| id | INT | Primary key |
| page_id | INT | Foreign key to pages table |
| section_type | VARCHAR(50) | Type of section (hero, text, etc.) |
| heading | VARCHAR(255) | Section heading |
| subheading | TEXT | Section subheading |
| body | TEXT | HTML content |
| metadata | JSON | Additional structured data |
| image_url | VARCHAR(255) | Image path |
| css_classes | VARCHAR(255) | Custom CSS classes |
| animation_class | VARCHAR(100) | GSAP animation class |
| section_order | INT | Display order within page |

#### `settings` Table
Stores site-wide configuration values.

| Column | Type | Description |
|--------|------|-------------|
| setting_key | VARCHAR(100) | Setting identifier |
| setting_value | TEXT | Setting value |

## Architecture

### Dynamic Page Rendering

All content pages use the same pattern:

```php
<?php
// Include dynamic page template
include __DIR__ . '/../includes/page-template.php';

// Template handles everything - no additional code needed
return;
?>
```

### Page Template Flow

1. **page-template.php** loads the page slug from the URL
2. Connects to database using **config/database.php**
3. Fetches page data using **models/page.php**
4. Fetches content sections using **models/content-section.php**
5. Renders sections using **includes/content-renderer.php**
6. Includes header and footer

### Error Handling

The system includes graceful error handling:

- **Database Connection Failure**: Shows user-friendly error page with troubleshooting steps
- **404 Page Not Found**: Shows custom 404 page when page slug doesn't exist
- **Missing Sections**: Logs warning but continues rendering (page might be empty)

## Content Section Types

The system supports multiple section types:

- **hero**: Full-screen hero section with heading and subheading
- **text**: Standard text section with heading and body content
- **stats**: Statistics display with counters
- **timeline**: Timeline visualization
- **cards**: Grid of card components

New section types can be added by creating render methods in `includes/content-renderer.php`.

## Static vs Dynamic Pages

### Dynamic Pages (Database-Driven)
- Origin (`pages/origin.php`)
- Science (`pages/science.php`)
- Case Studies (`pages/case-studies.php`)
- Forever Fit (`pages/forever-fit.php`)
- Investment (`pages/investment.php`)
- Vision (`pages/vision.php`)

### Static Pages (Hardcoded)
- Homepage (`index.php`) - Landing page with navigation
- About & Contact (`pages/about.php`) - Contact information

## Verification

To verify the database setup is working:

```bash
# Check tables exist
mysql -u foreverbox -pforeverbox123 foreverbox_initiative -e "SHOW TABLES;"

# Check page count
mysql -u foreverbox -pforeverbox123 foreverbox_initiative -e "SELECT COUNT(*) as page_count FROM pages;"

# Check content sections count
mysql -u foreverbox -pforeverbox123 foreverbox_initiative -e "SELECT COUNT(*) as section_count FROM content_sections;"

# Expected results:
# - 3 tables (pages, content_sections, settings)
# - 6 pages
# - 32 content sections (6 hero + 26 text sections)
```

## Troubleshooting

### "Database connection failed"

1. Verify MySQL service is running: `sudo service mysql status`
2. Check credentials in `.env` file
3. Verify database exists: `mysql -u foreverbox -pforeverbox123 -e "SHOW DATABASES;"`
4. Test connection: `php -r "require 'config/database.php'; \$db = new Database(); var_dump(\$db->getConnection());"`

### "Page not found" (404)

1. Check page slug exists: `mysql -u foreverbox -pforeverbox123 foreverbox_initiative -e "SELECT slug FROM pages;"`
2. Verify URL matches slug (e.g., `/pages/origin.php` for slug `origin`)

### Pages show no content

1. Check sections exist: `mysql -u foreverbox -pforeverbox123 foreverbox_initiative -e "SELECT page_id, COUNT(*) FROM content_sections GROUP BY page_id;"`
2. Re-import seed data if needed

### CSS/Animations not working

1. Check internet connection (Tailwind CSS and GSAP load from CDN)
2. View browser console for JavaScript errors
3. Verify `includes/header.php` loads CSS and JS properly

## Admin Panel

The site includes an admin panel for managing content:

- URL: http://localhost:8000/admin/login.php
- Default credentials: username `admin`, password `admin123`
- Features: Manage pages, sections, view contacts

## Backup and Restore

### Create Backup

```bash
mysqldump -u foreverbox -pforeverbox123 foreverbox_initiative > backup_$(date +%Y%m%d).sql
```

### Restore Backup

```bash
mysql -u foreverbox -pforeverbox123 foreverbox_initiative < backup_20250106.sql
```

## Production Deployment

See `documentation/deployment.md` for production deployment instructions including:
- Server configuration
- Database security
- SSL/HTTPS setup
- Performance optimization

## Support

For issues or questions:
- Email: support@foreverbox.co.uk
- Check documentation in `documentation/` folder
- Review `.github/copilot-instructions.md` for development guidelines
