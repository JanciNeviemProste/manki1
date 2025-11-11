# MANKI.sk - Premium Green Facades WordPress Site

WordPress website for MANKI.sk featuring a custom premium green facades service page.

## Features

- **Premium Design**: Luxury design targeting high-ticket (10,000€+) projects
- **Deep Forest Green Theme**: Professional color scheme (#0D3B2E)
- **Responsive Layout**: Mobile, tablet, and desktop optimized
- **Interactive Sections**:
  - Hero with dual CTAs
  - Tabbed content showcase
  - Team member profiles (7 experts)
  - Process timeline (6 steps)
  - Contact CTA

## Tech Stack

- WordPress CMS
- Divi Theme (Parent)
- Custom Divi Child Theme
- PHP 8.0+
- Custom CSS & JavaScript

## Structure

```
app/public/wp-content/themes/Divi-Child-Theme/
├── functions.php                 # Theme functions & enqueue scripts
├── style.css                     # Child theme styles
├── green-facades-premium.css     # Premium page styles
├── page-zelene-fasady.php       # Green facades page template
└── assets/images/               # Service page images
```

## Local Development

This site is developed using Local by Flywheel for WordPress development.

## Deployment

Configured for Vercel hosting with `vercel.json` configuration.

### Deploy to Vercel

1. Import repository to Vercel
2. Configure environment variables for WordPress database
3. Deploy

## Custom Page Template

The green facades page uses a custom template: `page-zelene-fasady.php`

To use this template in WordPress:
1. Create a new page
2. Select "Zelené fasády - Service Page" template
3. Publish

---

🤖 Generated with [Claude Code](https://claude.com/claude-code)
