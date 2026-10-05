# Technical SEO Scan — SoboRejo

**Scan date:** 18 Sep 2026  
**Site:** https://soborejo.com  
**Stack:** Laravel 12 + Filament 3 + Blade theme  
**Overall technical SEO:** **~3.2 / 10** → target **~8.5 / 10**

---

## Scorecard

| # | Part | Current | Goal | Ringkasan gap |
|---|------|---------|------|---------------|
| 1 | Meta tags (title, description) | **3** | **9** | Ada title/description, tapi masih template default; detail page tidak pakai konten entity |
| 2 | Open Graph & Twitter Cards | **1** | **9** | Belum ada sama sekali |
| 3 | Canonical URL | **1** | **9** | Belum ada; risiko duplicate URL |
| 4 | robots.txt + Sitemap XML | **2** | **9** | `robots.txt` minimal; sitemap belum ada |
| 5 | Structured data (JSON-LD) | **1** | **9** | Organization / WebSite / BreadcrumbList belum ada |
| 6 | HTML lang & semantic | **4** | **9** | Landmark ada, tapi `lang="zxx"` salah; heading hierarchy lemah di detail |
| 7 | URL structure (slug) | **4** | **9** | `/projects/{id}` numeric; legal doc “slug” masih ID |
| 8 | Image SEO (alt, lazy, size) | **3** | **8** | Banyak `alt=""` / `alt="png"`; no lazy-load / srcset |
| 9 | Performance / CWV | **2** | **8** | ~1MB CSS blocking, Google Fonts via `@import`, banyak JS sync |
| 10 | HTTPS & host canonical | **4** | **9** | Trailing slash 301 ada; force HTTPS / www belum di project |
| 11 | Favicon & PWA icons | **3** | **8** | Favicon static; CMS favicon tidak dipakai; no apple-touch |
| 12 | Breadcrumbs (SEO) | **4** | **8** | Visual ada; BreadcrumbList schema belum; label detail generik |
| 13 | Mobile / viewport | **7** | **9** | Viewport + responsive sudah cukup baik |
| 14 | Indexing control (`noindex`, 404) | **3** | **8** | Meta robots belum; demo `/home-2` berisiko ter-index |
| 15 | Internal linking | **4** | **8** | Nav banyak hash `#`; multi-page linking lemah |
| 16 | Content freshness (CMS pages) | **5** | **8** | Home/projects/legal DB-backed; blog masih static demo |

---

## Detail temuan per area

### 1. Meta tags (title, description, OG, Twitter, canonical)

| Item | Status | Lokasi |
|------|--------|--------|
| `<title>` | Partial | `resources/views/components/common/head.blade.php` |
| Meta description | Partial (hardcoded / template default) | Same + page `@section`s |
| Meta keywords (`name="tags"`) | Present tapi low value | `head.blade.php` |
| Author | Hardcoded `PreoIt` | `head.blade.php` |
| Open Graph | **Missing** | — |
| Twitter Cards | **Missing** | — |
| Canonical | **Missing** | — |
| `robots` meta | **Missing** | — |

**Implementasi head saat ini:**

```blade
<meta name="author" content="PreoIt">
<meta name="description" content="@yield('meta_description', 'Building & Construction Services Laravel 12 Template')">
<meta name="tags" content="@yield('meta_tags', 'architecture, building, construction, ...')">
<title>@yield('title', $settings->title) | {{$settings->description}}</title>
```

**Catatan:**
- Home pakai `$generalSetting->title` + description generik
- Halaman lain: title static (`Blog`, `Contact`, dll.) + meta template yang sama
- Detail page **tidak** memakai judul/konten Project / LegalDocument untuk description
- `GeneralSetting.description` dipakai sebagai **suffix title**, bukan meta description

---

### 2. robots.txt dan sitemap.xml

| Item | Status | Path |
|------|--------|------|
| `robots.txt` | Exists, minimal | `public/robots.txt` |
| Sitemap XML | **Missing** | — |
| Sitemap link di robots | **Missing** | — |

Isi `robots.txt` saat ini:

```
User-agent: *
Disallow:
```

Link “Sitemap” di footer dikomentari / tidak mengarah ke XML sitemap.

---

### 3. Structured data / JSON-LD

**Missing entirely.** Tidak ada `application/ld+json` / schema.org di views atau controllers.

Idealnya bisa dibangun dari `GeneralSetting` (title, phone, email, address, logo) untuk:
- `Organization` / `LocalBusiness`
- `WebSite`
- `BreadcrumbList`

---

### 4. Semantic HTML

| Item | Status | Notes |
|------|--------|-------|
| `<header>`, `<nav>`, `<main>`, `<footer>`, `<section>` | Present | Layouts + header/footer |
| `<html lang>` | **Bad** | `lang="zxx"` (bukan bahasa valid) |
| Heading hierarchy | Partial | Breadcrumb `<h1>` di inner pages; home hero punya `<h1>` |
| ARIA / skip link | Minimal / missing | — |

Layouts:
- `resources/views/layouts/layout.blade.php`
- `resources/views/layouts/layout-detail.blade.php`

---

### 5. Image alt & lazy loading

| Item | Status |
|------|--------|
| Alt attributes | Inconsistent — banyak meaningful, banyak kosong/`png`/`svg`/`jpg` |
| `loading="lazy"` pada images | **Missing** |
| Lazy pada iframe | Present (map contact saja) |

CMS images (clients, values, projects) biasanya lebih baik kalau title ada.

---

### 6. Performance (Vite, caching, compression)

| Item | Status |
|------|--------|
| Vite untuk public site | **Tidak dipakai** — tidak ada `@vite` di Blade; asset via `asset()` |
| CSS payload | Berat — ~8 stylesheet blocking; all.min + main + Bootstrap ≈ **~1MB CSS** |
| JS | Banyak sync scripts di bottom (`jquery`, bootstrap, swiper, wow, dll.) |
| Cache-Control / expires | Tidak di project `.htaccess` |
| Compression (gzip/brotli) | Tidak dikonfigurasi di repo |
| Preloader | Ada — bisa mengganggu persepsi LCP |

---

### 7. Mobile friendliness / viewport

| Item | Status |
|------|--------|
| Viewport meta | Present (`width=device-width, initial-scale=1`) |
| Responsive layout | Theme Bootstrap + meanmenu mobile nav |
| Anti-pattern viewport | Tidak ditemukan |

---

### 8. HTTPS / redirects / trailing slash

| Item | Status | Path |
|------|--------|------|
| Trailing-slash → non-slash `301` | Present | `public/.htaccess` |
| Force HTTPS | **Missing** | — |
| WWW / non-WWW canonical host | **Missing** | — |

---

### 9. URL structure

| Route | Pattern | SEO notes |
|-------|---------|-----------|
| Home | `/` | Clean |
| About | `/about` | Clean |
| Legal docs | `/legal-document`, `/legal-document/{slug}` | Path clean; param “slug” masih ID; model tanpa kolom slug |
| Projects | `/projects`, `/projects/{id}` | **Numeric IDs**, bukan slug |
| Blog | `/blogs`, `/blogs/{slug}` | Slug ada (data demo static) |
| Contact | `/contact` | Clean |
| Demo home | `/home-2` | Template leftover — berisiko ter-index |

---

### 10. hreflang / multilingual

| Item | Status |
|------|--------|
| `hreflang` | Missing |
| App locale | `en` di config |
| HTML `lang` | Salah: `zxx` |

---

### 11. Favicon / apple-touch-icon / manifest

| Item | Status |
|------|--------|
| Favicon | Static `assets/images/favicon.png` |
| `GeneralSetting.favicon` | Disimpan di admin, **tidak dipakai** di head |
| `apple-touch-icon` | Missing |
| Web app manifest | Missing |

Logo dari settings **dipakai** di header. Footer memakai `$settings->image` (kemungkinan mismatch vs field `logo`).

---

### 12. Breadcrumbs

| Item | Status |
|------|--------|
| Visual breadcrumbs | Present — `resources/views/components/common/breadcrumb.blade.php` |
| Digunakan di | about, blog, contact, projects, services, 404 |
| BreadcrumbList JSON-LD | **Missing** |
| Dynamic labels | Lemah — detail sering “Blog Details” / “Projects Details”, bukan judul entity |

---

### 13. Schema Organization / LocalBusiness / WebSite

**Missing.** Contact fields ada di `GeneralSetting` dan di-share via `AppServiceProvider`, tapi belum di-emit sebagai schema.

---

### 14. Core Web Vitals–related

| Factor | Finding |
|--------|---------|
| Fonts | Google Fonts via `@import` di CSS (`Rajdhani`) — render-blocking |
| CSS | Banyak sync `<link>` di `<head>` |
| Images | No lazy-load, no `srcset`/`sizes`, no modern formats |
| Preloader | Full-screen preloader |
| JS | Large sync stack di akhir body |
| LCP | Hero images tanpa `fetchpriority` |

---

### 15. `.htaccess` / server config

**File:** `public/.htaccess`

**Present:** Laravel front controller, Authorization header, trailing-slash 301.  
**Missing:** HTTPS redirect, www canonical, gzip/brotli, browser caching, security headers (HSTS), sitemap rewrite.

---

### 16. Struktur konten / halaman

**Page templates (~11):** home, home-2 (demo), about, legal docs, projects, blog, contact, 404.

**Dynamic CMS (Filament):**
- `GeneralSetting`, `Headline`, `CompanyOverview`, `OurValue`, `OurClient`, `ScopeOfWork`, `LegalDocument`, `Project`

**Masih static / demo:**
- Blog: hardcoded di `ThemeDataService::blogData()`
- About / home-2 / FAQs / testimonials: largely `ThemeDataService`
- Primary nav banyak hash anchors (`#company`, `#project`, …)

**GeneralSetting fields:** `title`, `description`, `phone`, `email`, `address`, `favicon`, `logo`  
**Tidak ada field SEO khusus:** meta title/description per page, OG image, robots, social URLs.

**SEO packages:** tidak ada di `composer.json` (tidak ada spatiesitemap / seotools, dll.).

---

## Prioritas implementasi (impact tinggi dulu)

1. **Meta + OG + canonical** per page (termasuk dari Project / LegalDocument)
2. **Fix `lang`** (`id` atau `en`) + buang template meta default
3. **Sitemap XML** + link di `robots.txt`
4. **JSON-LD** Organization + WebSite (+ BreadcrumbList)
5. **Slug URL** untuk projects & legal documents
6. **Image alt + lazy-load** + kurangi CSS/JS blocking
7. **HTTPS redirect** + caching headers di server
8. **Hapus / noindex** halaman demo (`/home-2`)

---

## File kunci terkait SEO

| File | Peran |
|------|--------|
| `resources/views/components/common/head.blade.php` | Meta / title / favicon |
| `resources/views/layouts/layout.blade.php` | HTML shell + `lang` |
| `resources/views/layouts/layout-detail.blade.php` | Layout detail |
| `resources/views/components/common/breadcrumb.blade.php` | Breadcrumb visual |
| `public/robots.txt` | Crawler rules |
| `public/.htaccess` | Redirect / rewrite |
| `routes/web.php` | URL structure |
| `app/Models/GeneralSetting.php` | Site identity untuk schema/meta |
| `app/Providers/AppServiceProvider.php` | Share `$settings` ke views |
| `seo/KEYWORD.txt` | Target keyword list |

---

## Catatan

Scan ini fokus **technical SEO** (crawlability, indexability, meta, schema, URL, performance).  
Content/keyword strategy ada di `seo/KEYWORD.txt`. Hasil implementasi nanti bisa dicatat di `seo/RESULT.md`.
