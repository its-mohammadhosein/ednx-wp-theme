Edunex WordPress Theme
=======================

A WordPress theme for **Edunex**, an education/LMS site. It's a port of the
static `ednx-html` Bootstrap 5 template into working WordPress templates,
scaffolded from [_tw (underscoreTW)](https://underscoretw.com/) for its
Tailwind CSS v4 + esbuild build pipeline.

The template's own Bootstrap/jQuery/GSAP/Swiper CSS and JS are kept as-is and
enqueued as theme assets rather than rewritten in Tailwind — markup, menus
and loops are converted to PHP/WordPress, but the original styling and
interaction scripts are untouched.

## What's in here

- `theme/` — the actual theme; this is the folder that gets installed into
  `wp-content/themes/`.
- `tailwind/`, `javascript/`, `node_scripts/`, config files — build tooling
  for `theme/`'s Tailwind CSS (`theme/style.css`) and the esbuild-bundled
  `theme/js/script.min.js` / `block-editor.min.js`. None of this is required
  to reproduce the ported Bootstrap design; it's available for any new,
  theme-native work.

### Theme structure

- `theme/assets/{css,js,fonts,images}` — the Edunex template's original
  Bootstrap/jQuery/GSAP/Swiper/VenoBox/nice-select/meanmenu assets, copied
  verbatim and enqueued in `functions.php`. Not renamed, since `main.js`/
  `main.css` depend on this exact structure.
- `header.php`, `footer.php`, `template-parts/layout/` — shared chrome,
  with the nav wired to `wp_nav_menu()` and the footer to a widget area.
- `template-parts/content/` — reusable card partials (course, instructor,
  event, blog) used across archives, singles and loops.
- `inc/custom-post-types.php` — registers the `course`, `instructor` and
  `event` custom post types + a `course_category` taxonomy. Per-type data
  not covered by core fields (price, duration, rating, social links, event
  date, etc.) uses plain custom fields rather than Advanced Custom Fields,
  to avoid adding a plugin dependency — the full list of recognized meta
  keys is documented at the top of that file.
- `inc/template-functions.php` / `inc/template-tags.php` — small helpers,
  including `ednx_meta()` for reading those custom-field values.
- Page templates (`template-*.php`) — one per static Edunex page (About,
  Contact, FAQ, Pricing, Privacy Policy, Login/Sign In/Forgot Password,
  Coming Soon, and the Shop/Cart/Checkout/Wishlist pages, which are ported
  as static markup only — no WooCommerce wiring).
- `archive-course.php` / `single-course.php` (and the `instructor`/`event`
  equivalents) — CPT archive and single templates.
- `front-page.php`, `home.php`, `single.php`, `archive.php`, `search.php`,
  `404.php` — standard WordPress template hierarchy entries.

## Quickstart

### Installation

1. Move (or symlink) the `theme/` folder into `wp-content/themes/` in your
   local WordPress install.
2. In this folder, run:
   ```
   npm install
   composer install
   ```
3. Activate the theme in `wp-admin → Appearance → Themes`.

### Development

4. Run `npm run watch` — rebuilds `theme/style.css`/`style-editor.css`
   (Tailwind) and `theme/js/*.min.js` (esbuild) on change.
5. Run `npm run lint` (ESLint + Prettier) / `composer run lint` (phpcs)
   before committing. Vendored template assets under `theme/assets/js/`
   are intentionally excluded from JS linting — they're ported as-is and
   must stay byte-for-byte what the template shipped.
6. After activating the theme, set up in `wp-admin`:
   - **Appearance → Menus** — a Primary menu (and optionally a Footer
     Menu) assigned to the matching menu locations.
   - **Appearance → Widgets** — populate the footer sidebar.
   - **Settings → General** / **Appearance → Site Icon** — site title,
     tagline, favicon.
   - Add `course`, `instructor` and `event` posts (see the meta key
     reference in `theme/inc/custom-post-types.php`).

### Deployment

7. Run `npm run bundle` — builds production assets and zips the theme to
   `ednx.zip` (also bumps `EDNX_VERSION` in the zipped `functions.php` to a
   build timestamp).
8. Upload `ednx.zip` via **Appearance → Themes → Add New → Upload Theme**,
   or deploy however your hosting setup normally handles it.

## Known gaps / deliberate scope cuts

- **WooCommerce** — not installed/configured. The shop/cart/checkout/
  wishlist templates are static ports only.
- **ACF** — intentionally not used (see `inc/custom-post-types.php`); course/
  instructor/event extra data is edited via WordPress's default Custom
  Fields box until/unless that changes.

## _tw build pipeline reference

For background on the underlying Tailwind/esbuild tooling this theme is
scaffolded from:

- [Installation](https://underscoretw.com/docs/installation/)
- [Development](https://underscoretw.com/docs/development/)
- [Deployment](https://underscoretw.com/docs/deployment/)
- [Troubleshooting](https://underscoretw.com/docs/troubleshooting/)
- [JavaScript Bundling with esbuild](https://underscoretw.com/docs/esbuild/)
- [Linting and Code Formatting](https://underscoretw.com/docs/linting-code-formatting/)
- [On Tailwind and WordPress](https://underscoretw.com/docs/wordpress-tailwind/)
