# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

WordPress child theme (`reload-cms2`) based on **Twenty Nineteen** as parent, using **Porto** (Bootstrap 4) CSS/JS framework via `vendor.min.css` and `vendor.min.js`. Site: **Спортско друштво Врање 1093** — a sports organization website.

There is no build step. Edit PHP/CSS directly; changes are live immediately on the local WordPress install at `Local Sites/sportskodrustvo1093`.

## File structure

| File | Purpose |
|---|---|
| `index.php` | Homepage — fully custom, all sections written by hand |
| `single.php` | Single post template |
| `page.php` | Static page template |
| `archive.php` | Category archive listing |
| `archive-all.php` | Full archive |
| `header.php` | Global header + navbar (two menus: `topmenu`, `mainmenu`) |
| `footer.php` | Global footer with logos |
| `inc/sidebar.php` | Sidebar partial — conditionally shows "Брзи линкови" on homepage |
| `functions.php` | Enqueues assets, registers `home-post-thumb` image size (400×225), adds `post-thumbnails` support |
| `style.css` | All CSS (~450KB) — Porto framework + custom `sd-*` component styles appended at the bottom |
| `mapa-sajta.php` | Sitemap page template |

## CSS architecture

`style.css` is a single large file. Custom homepage styles are **appended at the end** in two clearly marked blocks:

1. `/* HOMEPAGE REDESIGN — sd-* components */` — all homepage component styles (hero, stats bar, news cards, event cards, gallery, contact bar)
2. `/* BRAND PALETTE OVERRIDES — Navy #163070 + Gold #e8b800 */` — color overrides that take precedence over Porto defaults

**Always append new styles** to the end of `style.css` rather than editing the Porto framework section above. Use `!important` only in the overrides block.

## Brand colors (from club logo)

| Token | Hex | Usage |
|---|---|---|
| Navy (primary) | `#163070` | Buttons, stats bar, event dates, accents |
| Gold (accent) | `#e8b800` | Hero title, eyebrow, dots, btn-warning |
| Dark navy | `#0c1835` | Contact bar background, dark gradients |
| Secondary | `#f5f5f5` | Section backgrounds |

CSS variable: `--primary: #163070`, `--warning: #e8b800`

## Porto component classes to use

Porto classes available in `vendor.min.css` / `style.css`:

- **`.icon-box`** — card with icon, title, text, link. Variants: `.icon-box-horizontal`, `.icon-box-light-skin`
- **`.animated-digits`** — animated counter with `.animated-digits-digit`, `.animated-digits-text`
- **`.step`** / **`.step-with-icon`** — numbered step component
- **`.block-title`** — section heading with underline; use `<small>` inside for subtitle
- **`.widget-title`** — sidebar/widget heading with underline
- **`.dl-with-icon`** — definition list with icon prefix on `<dt>`
- **`.btn-style-5`** — button with diagonal sweep `::after` effect
- **`.tag-link`** — pill-shaped tag link
- **`.navi-link`** — nav link with icon support
- **`.box-shadow`** — standard card shadow
- **`.reload-link`** — internal link style (dark, bold, no underline)

Icons: **Feather icon font** via `fe-icon-*` classes (e.g. `fe-icon-calendar`, `fe-icon-users`, `fe-icon-award`, `fe-icon-map-pin`, `fe-icon-arrow-right`). Full list in `vendor.min.css`.

## Homepage sections (index.php)

Sections in order:
1. **`.sd-hero`** — dark overlay hero with background image + Owl Carousel on the right (`sd-hero-owl`)
2. **`.sd-stats-bar`** — 4-column stat strip (navy gradient)
3. **`.sd-section-main`** — `col-lg-9` main + `col-lg-3` sidebar:
   - Вести (category `6`): 3 posts as `.sd-news-card` (`col-md-4`)
   - Најава догађаја (category `7`): 4 posts as `.sd-event-card` (horizontal)
4. **`.sd-about-section`** — 3 `.icon-box` components on `bg-secondary`
5. **`.sd-gallery-section`** — Owl Carousel strip (5 images)
6. **`.sd-contact-bar`** — dark contact strip

**Default thumbnail**: `img/galerija/1.jpg` — used when a post has no featured image.

## Owl Carousel usage

Porto initializes any `.owl-carousel` element that has a `data-owl-carousel` JSON attribute on DOM ready. Do **not** hardcode `owl-loaded`, `owl-drag`, or inline `style` attributes — Porto's JS adds those automatically.

```html
<div class="owl-carousel" data-owl-carousel='{"loop":true,"items":1,"autoplay":true,"dots":true}'>
    <div>...</div>
</div>
```

## WordPress menus

- `topmenu` — top bar links
- `mainmenu` — main navbar links
- Mobile menu is manually coded in `header.php` as a static list (not `wp_nav_menu`)

## Post categories

- `6` — Вести (news)
- `7` — Најава догађаја (event announcements)

## Known patterns

- `get_posts()` is used instead of `WP_Query` for fetching posts on the homepage
- `wp_trim_words(strip_tags(get_the_content()), 15, '…')` is the excerpt fallback when no manual excerpt is set
- The `the_breadcrumb()` function is custom-defined in `functions.php`
- `btn-style-5.btn-warning::after` must be set to `#c9a400` (darker gold) — if set to navy it appears as a visible blue triangle on the gold button
