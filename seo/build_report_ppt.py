from pptx import Presentation
from pptx.util import Inches, Pt, Emu
from pptx.dml.color import RGBColor
from pptx.enum.text import PP_ALIGN
from pptx.enum.shapes import MSO_SHAPE
from pathlib import Path

OUT = Path(__file__).with_name("REPORT-5-Oct-2026.pptx")

# Brand-ish construction palette (avoid purple AI defaults)
NAVY = RGBColor(0x1A, 0x2A, 0x3A)
ACCENT = RGBColor(0xC1, 0x14, 0x25)  # site secondary
WHITE = RGBColor(0xFF, 0xFF, 0xFF)
DARK = RGBColor(0x22, 0x22, 0x22)
MUTED = RGBColor(0x55, 0x55, 0x55)
LIGHT = RGBColor(0xF5, 0xF6, 0xF8)
GREEN = RGBColor(0x1F, 0x7A, 0x4C)


def set_run(run, size=18, bold=False, color=DARK, font="Calibri"):
    run.font.size = Pt(size)
    run.font.bold = bold
    run.font.color.rgb = color
    run.font.name = font


def add_bg(slide, color):
    fill = slide.background.fill
    fill.solid()
    fill.fore_color.rgb = color


def add_bar(slide, top=False):
    shape = slide.shapes.add_shape(
        MSO_SHAPE.RECTANGLE,
        Inches(0),
        Inches(0) if top else Inches(7.15),
        Inches(13.333),
        Inches(0.18) if top else Inches(0.35),
    )
    shape.fill.solid()
    shape.fill.fore_color.rgb = ACCENT
    shape.line.fill.background()


def title_slide(prs, title, subtitle):
    slide = prs.slides.add_slide(prs.slide_layouts[6])
    add_bg(slide, NAVY)
    add_bar(slide, top=True)

    box = slide.shapes.add_textbox(Inches(0.8), Inches(2.2), Inches(11.5), Inches(1.5))
    tf = box.text_frame
    p = tf.paragraphs[0]
    p.alignment = PP_ALIGN.LEFT
    run = p.add_run()
    run.text = title
    set_run(run, 36, True, WHITE)

    box2 = slide.shapes.add_textbox(Inches(0.8), Inches(3.8), Inches(11.5), Inches(1.2))
    tf2 = box2.text_frame
    tf2.word_wrap = True
    p2 = tf2.paragraphs[0]
    run2 = p2.add_run()
    run2.text = subtitle
    set_run(run2, 18, False, RGBColor(0xDD, 0xDD, 0xDD))

    foot = slide.shapes.add_textbox(Inches(0.8), Inches(6.6), Inches(11.5), Inches(0.4))
    rf = foot.text_frame.paragraphs[0].add_run()
    rf.text = "PT Soborejo  ·  Technical SEO Report  ·  5 Oct 2026"
    set_run(rf, 12, False, RGBColor(0xAA, 0xAA, 0xAA))


def section_slide(prs, title, bullets, note=None):
    slide = prs.slides.add_slide(prs.slide_layouts[6])
    add_bg(slide, WHITE)
    add_bar(slide, top=True)

    # left accent stripe
    stripe = slide.shapes.add_shape(
        MSO_SHAPE.RECTANGLE, Inches(0), Inches(0.18), Inches(0.12), Inches(6.97)
    )
    stripe.fill.solid()
    stripe.fill.fore_color.rgb = NAVY
    stripe.line.fill.background()

    h = slide.shapes.add_textbox(Inches(0.7), Inches(0.45), Inches(11.8), Inches(0.7))
    hr = h.text_frame.paragraphs[0].add_run()
    hr.text = title
    set_run(hr, 28, True, NAVY)

    body = slide.shapes.add_textbox(Inches(0.7), Inches(1.3), Inches(11.8), Inches(5.2))
    tf = body.text_frame
    tf.word_wrap = True

    for i, item in enumerate(bullets):
        p = tf.paragraphs[0] if i == 0 else tf.add_paragraph()
        p.level = 0
        p.space_after = Pt(10)
        run = p.add_run()
        run.text = f"•  {item}"
        set_run(run, 18, False, DARK)

    if note:
        n = slide.shapes.add_textbox(Inches(0.7), Inches(6.55), Inches(11.8), Inches(0.4))
        nr = n.text_frame.paragraphs[0].add_run()
        nr.text = note
        set_run(nr, 12, False, MUTED)


def two_col_slide(prs, title, left_title, left_items, right_title, right_items):
    slide = prs.slides.add_slide(prs.slide_layouts[6])
    add_bg(slide, WHITE)
    add_bar(slide, top=True)

    h = slide.shapes.add_textbox(Inches(0.6), Inches(0.4), Inches(12), Inches(0.6))
    hr = h.text_frame.paragraphs[0].add_run()
    hr.text = title
    set_run(hr, 26, True, NAVY)

    # left card
    left = slide.shapes.add_shape(
        MSO_SHAPE.ROUNDED_RECTANGLE, Inches(0.5), Inches(1.2), Inches(5.9), Inches(5.4)
    )
    left.fill.solid()
    left.fill.fore_color.rgb = LIGHT
    left.line.fill.background()

    lt = slide.shapes.add_textbox(Inches(0.8), Inches(1.4), Inches(5.4), Inches(0.5))
    ltr = lt.text_frame.paragraphs[0].add_run()
    ltr.text = left_title
    set_run(ltr, 18, True, ACCENT)

    lb = slide.shapes.add_textbox(Inches(0.8), Inches(2.0), Inches(5.4), Inches(4.3))
    ltf = lb.text_frame
    ltf.word_wrap = True
    for i, item in enumerate(left_items):
        p = ltf.paragraphs[0] if i == 0 else ltf.add_paragraph()
        p.space_after = Pt(8)
        run = p.add_run()
        run.text = f"•  {item}"
        set_run(run, 14, False, DARK)

    # right card
    right = slide.shapes.add_shape(
        MSO_SHAPE.ROUNDED_RECTANGLE, Inches(6.8), Inches(1.2), Inches(5.9), Inches(5.4)
    )
    right.fill.solid()
    right.fill.fore_color.rgb = RGBColor(0xEA, 0xF5, 0xEF)
    right.line.fill.background()

    rt = slide.shapes.add_textbox(Inches(7.1), Inches(1.4), Inches(5.4), Inches(0.5))
    rtr = rt.text_frame.paragraphs[0].add_run()
    rtr.text = right_title
    set_run(rtr, 18, True, GREEN)

    rb = slide.shapes.add_textbox(Inches(7.1), Inches(2.0), Inches(5.4), Inches(4.3))
    rtf = rb.text_frame
    rtf.word_wrap = True
    for i, item in enumerate(right_items):
        p = rtf.paragraphs[0] if i == 0 else rtf.add_paragraph()
        p.space_after = Pt(8)
        run = p.add_run()
        run.text = f"•  {item}"
        set_run(run, 14, False, DARK)


def score_slide(prs):
    slide = prs.slides.add_slide(prs.slide_layouts[6])
    add_bg(slide, WHITE)
    add_bar(slide, top=True)

    h = slide.shapes.add_textbox(Inches(0.6), Inches(0.4), Inches(12), Inches(0.6))
    hr = h.text_frame.paragraphs[0].add_run()
    hr.text = "Scorecard Technical SEO"
    set_run(hr, 26, True, NAVY)

    rows = [
        ("Meta tags (title/description)", "3", "8"),
        ("Open Graph & Twitter Cards", "1", "8"),
        ("Canonical URL", "1", "9"),
        ("robots.txt + Sitemap XML", "2", "9"),
        ("Structured data (JSON-LD)", "1", "8"),
        ("HTML lang & semantic", "4", "8"),
        ("URL structure (slug)", "4", "8"),
        ("Indexing control", "3", "8"),
        ("Overall technical SEO", "~3.2 / 10", "~7.3 / 10"),
    ]

    table = slide.shapes.add_table(len(rows) + 1, 3, Inches(0.7), Inches(1.2), Inches(11.8), Inches(5.3)).table
    headers = ["Area", "Sebelum", "Sesudah (est.)"]
    for i, text in enumerate(headers):
        cell = table.cell(0, i)
        cell.text = text
        for p in cell.text_frame.paragraphs:
            for r in p.runs:
                set_run(r, 13, True, WHITE)
        cell.fill.solid()
        cell.fill.fore_color.rgb = NAVY

    for r_idx, (area, before, after) in enumerate(rows, start=1):
        values = [area, before, after]
        for c_idx, val in enumerate(values):
            cell = table.cell(r_idx, c_idx)
            cell.text = val
            for p in cell.text_frame.paragraphs:
                for run in p.runs:
                    bold = c_idx > 0
                    color = GREEN if c_idx == 2 else DARK
                    if r_idx == len(rows):
                        bold = True
                    set_run(run, 12, bold, color)
            if r_idx % 2 == 0:
                cell.fill.solid()
                cell.fill.fore_color.rgb = LIGHT


def main():
    prs = Presentation()
    prs.slide_width = Inches(13.333)
    prs.slide_height = Inches(7.5)

    title_slide(
        prs,
        "Technical SEO Report — PT Soborejo",
        "Ringkasan kondisi sebelum, hasil implementasi SEO,\ndan enhancement fitur terkait  ·  5 Oktober 2026",
    )

    section_slide(
        prs,
        "Ringkasan Eksekutif",
        [
            "Project: soborejo.com (Laravel 12 + Filament 3)",
            "Fokus: technical SEO (crawlability, indexability, meta, schema, URL)",
            "Baseline scan: ~3.2 / 10 → setelah implementasi: ~7.3 / 10",
            "Target jangka menengah: ~8.5 / 10 (masih ada ruang di performance/CWV)",
            "Keyword strategy mengacu ke daftar keyword inti (PT Soborejo, general contractor Indonesia, dll.)",
        ],
    )

    section_slide(
        prs,
        "Kondisi Sebelum (As-Is)",
        [
            "Meta title/description masih template default / generik",
            "Belum ada Open Graph, Twitter Card, dan canonical URL",
            "robots.txt minimal; sitemap XML belum tersedia",
            "Belum ada structured data JSON-LD (Organization / WebSite / Breadcrumb)",
            'HTML lang salah: lang="zxx"',
            "URL detail pakai ID numerik (/projects/1) — kurang SEO-friendly",
            "Halaman demo /home-2 berisiko ter-index",
            "Blog ordering & slug belum optimal untuk konten terbaru",
        ],
        note="Sumber: seo/SCAN.md (technical SEO scan)",
    )

    two_col_slide(
        prs,
        "Sebelum vs Sesudah SEO",
        "Sebelum",
        [
            "Meta generik / template",
            "Tanpa OG / Twitter / canonical",
            "Tanpa sitemap XML",
            "Tanpa JSON-LD schema",
            "lang=zxx",
            "URL pakai ID",
            "robots.txt sangat dasar",
            "Skor ~3.2 / 10",
        ],
        "Sesudah",
        [
            "Meta per-page + keyword alignment",
            "OG + Twitter + canonical aktif",
            "Sitemap /sitemap.xml + robots update",
            "Organization, WebSite, BreadcrumbList",
            "lang=id",
            "Slug URL + redirect 301 dari ID lama",
            "noindex untuk /home-2 & 404",
            "Skor ~7.3 / 10",
        ],
    )

    score_slide(prs)

    section_slide(
        prs,
        "Yang Sudah Diimplementasikan (SEO)",
        [
            "Rewrite head: title, description, keywords, robots, canonical, OG, Twitter, favicon CMS",
            "SEO copy untuk Home, About, Contact, Projects, Legal, Blog (+ detail entity)",
            "JSON-LD Organization + WebSite + BreadcrumbList",
            "SitemapController + robots.txt (Allow site, Disallow /admin & /home-2, Allow GPTBot)",
            "Slug untuk Project, Legal Document, dan Blog (+ 301 dari ID lama)",
            "HTTPS force di production + caching/deflate di .htaccess",
            "Footer link Sitemap; logo alt dari brand settings",
        ],
    )

    section_slide(
        prs,
        "Enhance Fitur (selain pure SEO)",
        [
            "Admin Blog: RichEditor bisa attach image di tengah konten",
            "Slug blog otomatis mengikuti title (panjang diperbolehkan)",
            "Table admin blog lebih rapi (cover, wrap title, sort tanggal)",
            "Recent Blogs homepage = 3 post aktif terbaru (order by date)",
            "Spacing blog detail mobile diperbaiki (UX paragraf lebih rapat)",
            "Dummy/seed data master untuk local testing",
            "Navbar hash & social TikTok/Instagram tetap dipertahankan (no mismatch deliver)",
        ],
    )

    section_slide(
        prs,
        "Verifikasi Cepat",
        [
            "View source homepage → ada og:title, canonical, JSON-LD, lang=id",
            "Buka /sitemap.xml → daftar URL halaman + detail slug",
            "Buka /robots.txt → ada Sitemap + aturan Allow/Disallow",
            "Cek /projects/1 → redirect 301 ke /projects/{slug}",
            "Cek Recent Blogs → 3 artikel terbaru",
            "Cek detail blog panjang → image inline tampil di tengah konten",
        ],
    )

    section_slide(
        prs,
        "Deploy Checklist (FileZilla / Server)",
        [
            "Upload: app/, resources/views/, routes/web.php, migrations, public/robots.txt, public/.htaccess",
            "Jangan overwrite: .env, storage/, vendor/ (kecuali sengaja install ulang)",
            "Jalankan: php artisan migrate --force",
            "Clear: config/cache/route/view",
            "Pastikan APP_URL=https://soborejo.com di production",
            "Submit sitemap di Google Search Console setelah live",
        ],
        note="Risiko utama jika miss migrate: error kolom slug di detail pages",
    )

    section_slide(
        prs,
        "Belum / Next Batch",
        [
            "Performance / Core Web Vitals (kurangi CSS/JS blocking, font strategy)",
            "Image pipeline (srcset / WebP) untuk skor image SEO lebih tinggi",
            "Meta SEO fields editorial per page di Filament (opsional)",
            "Keputusan WWW vs non-WWW di level DNS/hosting",
            "Target naik dari ~7.3 menuju ~8.5 / 10",
        ],
    )

    title_slide(
        prs,
        "Terima kasih",
        "PT Soborejo — Technical SEO & Feature Enhancement\nSiap untuk deploy & monitoring Search Console",
    )

    prs.save(OUT)
    print(f"Saved: {OUT}")


if __name__ == "__main__":
    main()
