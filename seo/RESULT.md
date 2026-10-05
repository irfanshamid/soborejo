# Technical SEO Implementation Result — SoboRejo

**Date:** 5 Oct 2026  
**Based on:** `seo/SCAN.md` + `seo/KEYWORD.txt`  
**Ported from:** `soborejo-seo` into `soborejo` (branch `dev`)

## Yang sudah dikerjakan

1. Meta + OG + Twitter + Canonical (`head.blade.php`)
2. Per-page SEO copy (home, about, contact, projects, legal, blog, detail, 404, home-2 noindex)
3. `lang="id"` + JSON-LD Organization/WebSite + BreadcrumbList
4. Sitemap XML + robots.txt
5. Slug URL untuk Project, Legal Document, **dan Blog** (+ 301 dari ID lama)
6. HTTPS force (production) + `.htaccess` cache/deflate
7. Footer Sitemap link; logo alt dari brand settings
8. Keyword default selaras `KEYWORD.txt`

## Catatan

- Struktur navbar hash di homepage **dipertahankan** (sesuai deliver).
- Social TikTok/Instagram di footer **dipertahankan**.
- Blog sudah CMS (bukan ThemeDataService) — sitemap memakai model `Blog`.
