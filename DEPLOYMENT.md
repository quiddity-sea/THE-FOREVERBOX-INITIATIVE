# ForeverBox Initiative - Deployment & Setup Guide

## Prerequisites

- PHP 8.0 or higher
- MariaDB/MySQL 5.7 or higher
- Web server (Apache/Nginx) with PHP support
- Modern web browser for testing

## Installation Steps

### 1. Clone the Repository

```bash
git clone https://github.com/quiddity-sea/THE-FOREVERBOX-INITIATIVE.git
cd THE-FOREVERBOX-INITIATIVE
```

### 2. Configure Environment

Copy the example environment file and configure your settings:

```bash
cp .env.example .env
```

Edit `.env` with your database credentials:

```
DB_HOST=localhost
DB_NAME=foreverbox_initiative
DB_USER=your_db_user
DB_PASS=your_db_password
```

### 3. Set Up Database

Import the database schema:

```bash
mysql -u your_db_user -p < schema.sql
```

Or using MariaDB:

```bash
mariadb -u your_db_user -p < schema.sql
```

### 4. Configure Web Server

#### Apache Configuration

Create a virtual host configuration or use `.htaccess` for URL rewriting:

```apache
<VirtualHost *:80>
    ServerName foreverbox.local
    DocumentRoot /path/to/THE-FOREVERBOX-INITIATIVE
    
    <Directory /path/to/THE-FOREVERBOX-INITIATIVE>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/foreverbox_error.log
    CustomLog ${APACHE_LOG_DIR}/foreverbox_access.log combined
</VirtualHost>
```

#### Nginx Configuration

```nginx
server {
    listen 80;
    server_name foreverbox.local;
    root /path/to/THE-FOREVERBOX-INITIATIVE;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

### 5. Set Permissions

Ensure proper permissions for file uploads and caching (if needed):

```bash
chmod -R 755 /path/to/THE-FOREVERBOX-INITIATIVE
chmod -R 775 images/
```

### 6. Test Installation

Start PHP development server for local testing:

```bash
php -S localhost:8000
```

Visit `http://localhost:8000` in your browser.

## Content Management

### Adding Images

1. Place images in the appropriate subdirectories within `/images/`
2. Refer to `/images/IMAGES-NEEDED.md` for the complete list of required images
3. Update the corresponding PHP page files to reference actual image paths

Example:
```html
<!-- Replace placeholder -->
<div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl aspect-square"></div>

<!-- With actual image -->
<img src="/images/portraits/dr-zeon7-portrait-main.jpg" alt="Dr. Zeon7 Portrait" class="rounded-2xl w-full">
```

### Updating Content

Edit the PHP files directly in `/pages/` directory:
- `index.php` - Homepage
- `pages/origin.php` - Origin story
- `pages/science.php` - Science content
- `pages/case-studies.php` - Case studies
- `pages/forever-fit.php` - Forever Fit app
- `pages/investment.php` - Investment information
- `pages/vision.php` - Vision and roadmap
- `pages/about.php` - About and contact

## Performance Optimization

### Enable Caching

Add these headers to your web server configuration:

```apache
# Apache .htaccess
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
</IfModule>
```

### Image Optimization

Before adding images to the site:
1. Compress images using tools like ImageOptim, TinyPNG, or Squoosh
2. Create WebP versions for modern browsers
3. Implement responsive images with srcset attributes
4. Consider lazy loading for below-the-fold images

### CDN Resources

The site uses CDN resources for:
- Tailwind CSS: https://cdn.tailwindcss.com
- GSAP: https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/
- Google Fonts: https://fonts.googleapis.com

For production, consider self-hosting these resources for better performance and reliability.

## Accessibility Testing

Run accessibility tests using:
- WAVE browser extension
- axe DevTools
- Lighthouse in Chrome DevTools

Target scores:
- Performance: 90+
- Accessibility: 95+
- Best Practices: 90+
- SEO: 95+

## Security Considerations

1. **Environment Variables**: Never commit `.env` to version control
2. **Database Security**: Use strong passwords and limit database user privileges
3. **Input Validation**: Validate all user inputs (contact forms, newsletter signup)
4. **HTTPS**: Always use HTTPS in production
5. **Headers**: Set appropriate security headers (CSP, X-Frame-Options, etc.)

## Deployment Checklist

- [ ] Configure production database credentials
- [ ] Enable error logging (disable display_errors in production)
- [ ] Set up SSL/TLS certificate
- [ ] Configure security headers
- [ ] Test all pages and navigation
- [ ] Verify all forms work correctly
- [ ] Check mobile responsiveness
- [ ] Run accessibility audit
- [ ] Test animation performance
- [ ] Set up monitoring and analytics
- [ ] Configure automated backups
- [ ] Test contact email delivery

## Monitoring & Maintenance

### Regular Tasks

1. **Weekly**: Review error logs, check form submissions
2. **Monthly**: Update dependencies, review performance metrics
3. **Quarterly**: Review and update content, check for broken links

### Backup Strategy

Set up automated backups for:
- Database (daily)
- Images and uploaded files (weekly)
- Configuration files (on change)

## Troubleshooting

### Common Issues

**Issue**: Pages show PHP code instead of rendering
- **Solution**: Ensure PHP is properly configured in your web server

**Issue**: CSS/JS not loading
- **Solution**: Check CDN connectivity or self-host resources

**Issue**: Database connection errors
- **Solution**: Verify credentials in `config/database.php` and `.env`

**Issue**: Images not displaying
- **Solution**: Check file paths and permissions

**Issue**: Animations not working
- **Solution**: Ensure GSAP library is loading correctly

## Support

For issues or questions:
- Review documentation in `/README.md`
- Check image requirements in `/images/IMAGES-NEEDED.md`
- Contact: hello@foreverbox.co.uk

## Development Mode

For local development:

```bash
# Start PHP development server
php -S localhost:8000

# Watch for changes (if using file watchers)
# Add your preferred file watcher setup here
```

## Production Deployment

When deploying to production:

1. Set `display_errors = Off` in php.ini
2. Enable error logging to file
3. Use production database credentials
4. Enable caching and compression
5. Set up monitoring (e.g., New Relic, Sentry)
6. Configure CDN for static assets
7. Set up automated deployments (CI/CD)

## Version Control

This project uses Git for version control. Best practices:
- Create feature branches for new development
- Write descriptive commit messages
- Review changes before committing
- Keep commits focused and atomic

## License & Credits

© 2025 The ForeverBox Initiative. All rights reserved.

See LICENSE file for terms of use.
