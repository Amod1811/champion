# Champions Mindset Blueprint WordPress Theme

A modern, conversion-optimized WordPress theme designed specifically for masterclass registration landing pages.

## Features

- **Fully Responsive Design** - Looks great on all devices
- **Conversion Optimized** - Built for maximum registration rates
- **Fast Loading** - Optimized for performance
- **SEO Friendly** - Clean, semantic HTML structure
- **Customizable** - Easy to modify through WordPress Customizer
- **Contact Form 7 Ready** - Styled registration form included
- **Modern Design** - Beautiful gradients and animations
- **Accessibility Compliant** - WCAG 2.1 AA standards

## Installation

1. **Upload Theme Files**
   - Download the theme folder
   - Upload to `/wp-content/themes/` directory
   - Activate through WordPress admin

2. **Required Plugins**
   - Install and activate **Contact Form 7** plugin
   - Create a contact form with these fields:
     - Full Name (text field)
     - Email (email field)
     - WhatsApp Number (tel field)
     - Reason for Joining (dropdown: Student/Graduate/Other)

3. **Setup Contact Form**
   - Go to Contact > Contact Forms
   - Create a new form or edit the default one
   - Copy the shortcode and replace `[contact-form-7 id="1" title="Registration Form"]` in index.php

## Customization

### WordPress Customizer
Navigate to **Appearance > Customize** to modify:

- **Hero Section**
  - Main Title
  - Main Subtitle
  - Hero Subtitle
  - Hero Description
  - Urgency Text

- **Event Details**
  - Event Date
  - Event Time
  - Host Name

- **Header**
  - Header Title
  - Header Subtitle
  - Header Date
  - Header Time

- **Site Identity**
  - Site Description (Meta)

### Custom CSS
Add custom styles through **Appearance > Customize > Additional CSS**

### Advanced Customization
- Edit template files directly for advanced modifications
- All styles use Tailwind CSS classes
- JavaScript functionality in `/js/script.js`

## File Structure

```
wordpress-theme/
├── style.css           # Main stylesheet with theme info
├── index.php          # Main template file
├── header.php         # Header template
├── footer.php         # Footer template
├── functions.php      # Theme functions and customizer
├── js/
│   └── script.js      # Custom JavaScript
├── screenshot.png     # Theme screenshot
└── README.md         # This file
```

## Contact Form Setup

### Sample Contact Form 7 Code:
```html
<p>
    <label>Full Name *<br>
    [text* full-name placeholder "Enter your full name"]</label>
</p>

<p>
    <label>Email ID *<br>
    [email* email placeholder "Enter your email address"]</label>
</p>

<p>
    <label>WhatsApp Number *<br>
    [tel* whatsapp placeholder "Enter your WhatsApp number"]</label>
</p>

<p>
    <label>Reason for Joining *<br>
    [select* reason "Student" "Graduate" "Other"]</label>
</p>

<p>
    [submit "🚀 Reserve My Free Spot Now"]
</p>
```

## Performance Optimization

The theme includes several performance optimizations:

- **Minimal Plugin Dependencies** - Only requires Contact Form 7
- **Optimized CSS** - Uses Tailwind CSS via CDN for smaller file sizes
- **Lazy Loading** - Images load as needed
- **Minified Assets** - Compressed CSS and JS
- **Caching Friendly** - Compatible with caching plugins

## SEO Features

- **Semantic HTML5** - Proper heading structure
- **Meta Tags** - Customizable descriptions
- **Schema Markup** - Event structured data
- **Fast Loading** - Core Web Vitals optimized
- **Mobile First** - Responsive design

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Analytics Integration

The theme is ready for analytics integration. Add your tracking codes to:

1. **Google Analytics 4** - Add gtag code to header.php
2. **Facebook Pixel** - Add pixel code to header.php
3. **Other Platforms** - Modify js/script.js trackEvent function

## Security Features

- **Hardened WordPress** - Removes unnecessary meta tags
- **XML-RPC Disabled** - Prevents brute force attacks
- **Version Hiding** - Removes WordPress version info
- **Input Sanitization** - All customizer inputs sanitized

## Support

For theme support and customization:

1. Check the documentation above
2. Review the code comments in each file
3. Test in a staging environment before making changes
4. Keep backups of your customizations

## Changelog

### Version 1.0
- Initial release
- Full landing page functionality
- WordPress Customizer integration
- Contact Form 7 styling
- Performance optimizations
- SEO enhancements

## License

This theme is licensed under GPL v2 or later.

---

**Note**: This theme is specifically designed for masterclass registration landing pages. For other use cases, modifications may be required.