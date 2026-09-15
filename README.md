# E Repair — WordPress theme

Classic PHP WordPress theme for an electronics / device-repair shop. `style.css` names it **E Repair** (text domain `e-repair`). It is a clean rebuild of a legacy “E-repair” look: local fonts and images, no page-builder dependency.

## What it includes

- Front page, About, Gallery, Contact Us, blog, search, and author templates
- Full-width and sidebar page variants
- Custom post types: `testi` (testimonials), `portfolio` (+ `portfolio_category` taxonomy), `offers`, `events`
- Three widget sidebars
- Primary menu; fallback links are Home, Gallery, Contact Us, About
- Contact form posted to `admin_post_erepair_contact` (mail goes to the address configured in `functions.php`)
- Pretty 404 remaps for about / gallery / contact-us slugs
- Theme supports: title-tag, post thumbnails, HTML5 markup

## Stack

- PHP WordPress theme (`style.css`, `functions.php`, template hierarchy)
- `js/site.js` for front-end behaviour
- Bundled `fonts/` and `images/`
- `E-repair-not/` holds leftover assets from the old theme and is not the active theme

## Install

1. Copy this repository into `wp-content/themes/electronic-theme` (or any folder name you prefer).
2. In WordPress Admin → Appearance → Themes, activate **E Repair**.
3. Create pages titled About, Gallery, and Contact Us if you want the 404 remaps and nav fallback to resolve.
4. Assign a menu to the Primary location.
5. Add testimonials, portfolio items, offers, and events from the admin menus the theme registers.

There is no Composer file and no `.env`. Change the contact recipient in `functions.php` before going live. Do not commit `wp-config.php` or database dumps into this theme repo.

## Layout

```text
style.css            Theme header + styles
functions.php        Supports, CPTs, contact handler, sidebars
front-page.php
page-about.php
page-gallery.php
page-contact-us.php
js/site.js
fonts/  images/
E-repair-not/        Legacy copy — not activated
```

## License

See the theme header in `style.css`.
