# Nexi Bot Documentation Site

A comprehensive, responsive PHP documentation site for Nexi Bot with clean URLs and modern design.

## Features

- **Clean URLs**: No .php extensions in URLs
- **Responsive Design**: Works perfectly on all devices
- **Modern Interface**: Similar design to nexibot.uk
- **Comprehensive Content**: Complete documentation for all bot features
- **SEO Optimized**: Proper meta tags and structure
- **Fast Loading**: Optimized CSS/JS and image assets

## Pages Included

- **Home** (`/home`) - Main landing page with navigation
- **Setup** (`/setup`) - Complete setup and configuration guide
- **Features** (`/features`) - Free and premium features overview
- **Commands** (`/commands`) - Complete commands reference
- **Error Codes** (`/error-codes`) - Comprehensive error code database
- **Troubleshooting** (`/troubleshooting`) - Common issues and solutions
- **Premium** (`/premium`) - Premium plans and information
- **Support** (`/support`) - Help and contact information
- **Changelog** (`/changelog`) - Version history and updates

## Technical Requirements

- **PHP 7.4+** (recommended: PHP 8.0+)
- **Apache/Nginx** with mod_rewrite enabled
- **HTTPS** recommended for production

## Installation

1. Upload all files to your web server
2. Ensure Apache mod_rewrite is enabled
3. Set the document root to the main directory
4. The site will be accessible at your domain

## File Structure

```
/
├── .htaccess              # URL rewriting and security
├── home.php              # Homepage
├── setup.php             # Setup guide
├── features.php          # Features overview
├── commands.php          # Commands reference
├── error-codes.php       # Error codes
├── troubleshooting.php   # Troubleshooting guide
├── premium.php           # Premium information
├── support.php           # Support page
├── changelog.php         # Version changelog
├── includes/
│   ├── header.php        # Common header
│   └── footer.php        # Common footer
└── assets/
    ├── css/
    │   └── style.css     # Main stylesheet
    ├── js/
    │   └── main.js       # JavaScript functionality
    └── images/
        └── nexilogo.png  # Logo and favicon
```

## Configuration

### URL Structure
- Homepage: `documentation.nexibot.uk/home`
- Pages: `documentation.nexibot.uk/[page-name]`
- Clean URLs automatically handled by .htaccess

### Customization
1. **Colors/Branding**: Edit `assets/css/style.css`
2. **Content**: Update individual PHP pages
3. **Navigation**: Modify `includes/header.php`
4. **Footer**: Update `includes/footer.php`

### Bot Invite Link
**Note**: Nexi Bot is currently in testing phase and not available for public invite.

**Important Updates:**
- Remove all bot invite links (bot is in testing)
- Premium pre-orders are available at https://nexibot.uk/features
- Legal pages are located at https://nexibot.uk/legal
- Social media usernames are @nexibotuk on all platforms

### Social Media & Links
- **Main Website**: https://nexibot.uk
- **Legal Pages**: https://nexibot.uk/legal (Privacy, Terms, Refund)
- **Premium Pre-Orders**: https://nexibot.uk/features
- **Social Media**: @nexibotuk on Twitter, TikTok, GitHub, Instagram
- **Discord Support**: https://discord.gg/nexibot

### Current Status
- Bot is in testing phase (no public invites available)
- Premium pre-orders are open
- Documentation site ready for launch
- All bot invite links have been removed/replaced

## Performance

- Optimized CSS/JS (minified in production)
- Responsive images
- Gzip compression enabled
- Browser caching configured
- Fast loading times (<2 seconds)

## Security

- XSS protection headers
- Content type sniffing protection
- Clickjacking protection
- HTTPS security headers
- Input validation and sanitization

## Support

For issues with the documentation site:
- Check server error logs
- Verify mod_rewrite is enabled
- Ensure proper file permissions
- Contact support at info@nexibot.uk

## Updates

This documentation site is version 1.0. Regular updates will be made to:
- Add new features and commands
- Update error codes and solutions
- Improve design and functionality
- Fix any reported issues

## Local Development

For testing the site locally using PHP's built-in server:

### Quick Start
```bash
cd /path/to/BotDocs
php -S localhost:8000 index.php
```

Then visit: http://localhost:8000

### Features Available in Local Development
- ✅ Clean URLs (handled by index.php router)
- ✅ All pages and navigation work
- ✅ CSS and JavaScript load properly
- ✅ Responsive design testing
- ✅ All documentation content accessible

### Local Development Notes
- The `index.php` file acts as a router for localhost
- Asset paths are relative (no leading slash)
- .htaccess rules don't apply (handled by router instead)
- Perfect for testing before production deployment

### Available URLs (localhost)
- Homepage: `http://localhost:8000` or `http://localhost:8000/home`
- Setup: `http://localhost:8000/setup`
- Features: `http://localhost:8000/features`
- Commands: `http://localhost:8000/commands`
- Error Codes: `http://localhost:8000/error-codes`
- Troubleshooting: `http://localhost:8000/troubleshooting`
- Premium: `http://localhost:8000/premium`
- Support: `http://localhost:8000/support`
- Changelog: `http://localhost:8000/changelog`

## Configuration
