# THE-FOREVERBOX-INITIATIVE

ForeverBox Initiative website: a neurodivergent-first biotechnical odyssey. From Snowdonia labs to global digital health, we fuse quantum biology, AI-guided therapies, and ethical autonomy to launch Forever Fit and transform height, aging, and human potential. Join us.

## Overview

This is a PHP-based website with MariaDB backend, featuring HTML5, Tailwind CSS, and GSAP animations. The design is inspired by arcprojects.build with bold space use, cinematic photography, and fluid animations. Each editorial section has a unique color identity.

## Features

- **Six Editorial Pages**: Origin, Science, Case Studies, Forever Fit, Investment, Vision
- **About/Contact Page**: Team information, contact forms, and newsletter signup
- **Unique Color Identities**: Each page has its own distinct color palette
- **Neurodivergent-First Design**: Accessibility built-in from the ground up
- **GSAP Animations**: Smooth, cinematic animations with reduced-motion support
- **Responsive Design**: Works beautifully on all devices
- **PHP Backend**: Dynamic content management ready
- **MariaDB Database**: Structured content storage
- **Image Documentation**: Comprehensive guide for required visual assets

## Tech Stack

- **Backend**: PHP 7.4+
- **Database**: MariaDB/MySQL
- **Frontend**: HTML5, Tailwind CSS (CDN), vanilla JavaScript
- **Animations**: GSAP 3.12
- **Server**: Apache/Nginx with PHP support

## Installation

### Prerequisites

- PHP 7.4 or higher
- MariaDB/MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Composer (optional)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/quiddity-sea/THE-FOREVERBOX-INITIATIVE.git
   cd THE-FOREVERBOX-INITIATIVE
   ```

2. **Configure the database**
   - Create a MySQL/MariaDB database
   - Import the schema:
   ```bash
   mysql -u your_username -p your_database_name < schema.sql
   ```

3. **Configure environment**
   - Copy `.env.example` to `.env`
   - Update database credentials in `.env`

4. **Set up web server**
   
   **For Apache:**
   - Point document root to the repository root directory
   - Enable mod_rewrite
   - Sample `.htaccess` (create in root):
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
           fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
           fastcgi_index index.php;
           fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
           include fastcgi_params;
       }
   }
   ```

5. **For local development**
   ```bash
   php -S localhost:8000
   ```
   Then visit http://localhost:8000

## Project Structure

```
THE-FOREVERBOX-INITIATIVE/
├── config/
│   └── database.php          # Database configuration
├── includes/
│   ├── header.php            # Site header template
│   └── footer.php            # Site footer template
├── pages/
│   ├── origin.php            # Origin page
│   ├── science.php           # Science page
│   ├── case-studies.php      # Case Studies page
│   ├── forever-fit.php       # Forever Fit page
│   ├── investment.php        # Investment page
│   └── vision.php            # Vision page
├── css/
│   └── style.css             # Custom styles
├── js/
│   └── animations.js         # GSAP animations
├── images/                   # Image assets
├── index.php                 # Homepage
├── .env.example              # Environment variables template
├── .gitignore               # Git ignore rules
├── schema.sql               # Database schema
└── README.md                # This file
```

## Color Palette

Each section has a unique color identity:

- **Origin**: Deep blue (#1a237e, #3949ab)
- **Science**: Teal green (#004d40, #00897b)
- **Case Studies**: Deep red (#b71c1c, #e53935)
- **Forever Fit**: Amber/gold (#f57f17, #fbc02d)
- **Investment**: Purple (#4a148c, #7b1fa2)
- **Vision**: Light blue (#01579b, #0288d1)

## Neurodivergent-First Design Principles

- High contrast for readability
- Clear focus indicators for keyboard navigation
- Respects `prefers-reduced-motion` for animations
- Semantic HTML for screen readers
- Flexible typography and spacing
- Sensory-aware color choices

## Images & Visual Assets

The website currently uses gradient placeholders with SVG icons. For production deployment, actual images need to be added.

**See `/images/IMAGES-NEEDED.md` for a comprehensive list** of required images including:
- Hero backgrounds for each page (1920x1080+)
- Dr. Zeon7 portraits showing lupine features
- Forever Fit app mockups (phone and tablet)
- Laboratory and facility photography
- Welsh landscape imagery
- Scientific visualizations

**Priority images:**
1. Dr. Zeon7 professional portrait (main)
2. Homepage hero background
3. Forever Fit app mockups
4. Page hero images for Origin, Science, Case Studies, Investment, Vision

All images should be optimized for web (WebP with fallbacks), include appropriate alt text, and follow accessibility guidelines. See the images README for technical specifications.

## Development

### Adding New Pages

1. Create a new PHP file in `/pages`
2. Include header and footer templates
3. Use the established color system
4. Add GSAP animation classes (fade-in, slide-left, slide-right, etc.)

### Customizing Styles

Edit `/css/style.css` for custom styles. Tailwind classes are available via CDN.

### Animations

GSAP animations are configured in `/js/animations.js`. Common classes:
- `.fade-in` - Fade in on scroll
- `.slide-left` - Slide in from left
- `.slide-right` - Slide in from right
- `.stagger-list` - Stagger animation for list items
- `.counter` - Animated counter (use data-target attribute)

## Browser Support

- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Mobile browsers (iOS Safari, Chrome Mobile)

## Contributing

We welcome contributions! Please ensure any changes maintain:
- Accessibility standards (WCAG 2.1 AA minimum)
- Neurodivergent-first design principles
- Code quality and documentation
- Responsive design across devices

## License

[Specify your license here]

## Contact

For questions or inquiries about The ForeverBox Initiative:
- Website: [To be added]
- Email: [To be added]

## Acknowledgments

Design inspired by arcprojects.build - Bold typography, generous white space, and cinematic presentation.
