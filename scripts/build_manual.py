# -*- coding: utf-8 -*-
import os, sys, subprocess, shutil

sys.stdout.reconfigure(encoding='utf-8')
sys.path.append(os.path.dirname(os.path.abspath(__file__)))

from chapters_part1 import CHAPTERS_1_9
from chapters_part2 import CHAPTERS_10_18

CHAPTERS = CHAPTERS_1_9 + CHAPTERS_10_18
print(f"Tổng hợp thành công {len(CHAPTERS)} chương nghiệp vụ Hương Sơn.")

BASE_DIR = '/home/binhphan/matbao-ws/clients/huongsoncocomvn405.mbws.vn'
DOCS_DIR = os.path.join(BASE_DIR, 'docs')
PUBLIC_DOCS_DIR = os.path.join(BASE_DIR, 'public', 'docs')
os.makedirs(DOCS_DIR, exist_ok=True)
os.makedirs(PUBLIC_DOCS_DIR, exist_ok=True)

# 1. MARKDOWN
md_lines = [
    "# CẨM NANG QUẢN TRỊ HỆ THỐNG WEBSITE HUONGSONCO.COM.VN",
    "> **Đơn vị chủ quản:** CÔNG TY TNHH THƯƠNG MẠI VÀ DỊCH VỤ HƯƠNG SƠN (MST: 0102759269 · Thành lập 01/06/2008)",
    "> **Lĩnh vực:** Máy photocopy Toshiba / Konica Minolta, Máy in nhân bản kỹ thuật số Duplo Nhật Bản, Máy scan Ricoh, Vật tư & Mực in chính hãng Fansipan.",
    "> **Trụ sở & Văn phòng:** Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, quận Hai Bà Trưng, TP. Hà Nội",
    "> **Hotline hỗ trợ:** 091.113.8583 (Công ty) · 0912.304.058 (Kỹ thuật) · 024 3972 9484 (Văn phòng) | **Email:** info@huongsonco.com.vn (Cc: thuannc72@gmail.com)",
    "> **Hệ thống website:** https://huongsonco.com.vn | **Phiên bản:** Release v1.0.0 (2026) | Ngôn ngữ: 100% Tiếng Việt chuẩn hóa",
    "> **File PDF bàn giao in ấn:** `docs/Huong_Dan_Su_Dung_Admin_Huong_Son.pdf`",
    "",
    "---",
    "",
    "## MỤC LỤC CHI TIẾT (18 CHƯƠNG TOÀN DIỆN)",
    ""
]
for ch in CHAPTERS:
    md_lines.append(f"{ch['num']}. [{ch['title']}](#{ch['id']}) - *{ch['category']}* (`{ch['code']}`)")

md_lines.append("\n---\n")

for ch in CHAPTERS:
    md_lines.append(f"## CHƯƠNG {ch['num']}: {ch['title'].upper()}")
    md_lines.append(f"<a id=\"{ch['id']}\"></a>\n")
    md_lines.append(f"**Phân loại:** `{ch['category']}` | **Đặc tả nhãn:** `{ch['code']}`\n")
    md_lines.append(f"**Mô tả tổng quan:** {ch['desc']}\n")
    md_lines.append("### 1. Quy trình thao tác chuẩn từng bước")
    for s in ch['steps']:
        clean_s = s.replace('<code>', '`').replace('</code>', '`')
        md_lines.append(f"- {clean_s}")
    md_lines.append("\n### 2. Giao diện thực tế & Đường dẫn màn hình (Screenshots)")
    md_lines.append(f"> 🌐 **Đường dẫn màn hình:** `{ch['route']}`")
    md_lines.append(f"![Giao diện thực tế {ch['title']}]({ch['image']})\n")
    md_lines.append("### 3. Bảng tra cứu hành động & Ký hiệu thao tác")
    md_lines.append("| Ký hiệu | Khu vực / Tên trường | Hướng dẫn thao tác & Lưu ý nghiệp vụ |")
    md_lines.append("| :---: | :--- | :--- |")
    for act in ch['actions']:
        md_lines.append(f"| **{act[0]}** | **{act[1]}** | {act[2]} |")
    md_lines.append("\n### 4. Lưu ý nghiệp vụ quan trọng")
    for n in ch['notes']:
        md_lines.append(f"- 💡 **Lưu ý nghiệp vụ:** {n}")
    md_lines.append("\n---\n")

md_path = os.path.join(DOCS_DIR, 'HUONG_DAN_SU_DUNG_ADMIN_HUONG_SON.md')
with open(md_path, 'w', encoding='utf-8') as f:
    f.write("\n".join(md_lines))
print("✔ Đã tạo Markdown:", md_path)

# 2. SPA HTML
cats = {}
for ch in CHAPTERS:
    cname = ch['category']
    if cname not in cats:
        cats[cname] = []
    cats[cname].append(ch)

nav_html = []
for cname, ch_list in cats.items():
    nav_html.append(f"""
    <div class="category-group">
        <div class="category-header">
            <span class="category-title">{cname}</span>
            <span class="category-count">{len(ch_list)}</span>
        </div>
        <ul class="nav-list">
    """)
    for c in ch_list:
        nav_html.append(f"""
            <li class="nav-item">
                <a href="#{c['id']}" class="nav-link" data-target="{c['id']}">
                    <div class="nav-title-row">
                        <span class="nav-text"><span class="ch-badge">C{c['num']}</span> {c['title']}</span>
                        <span class="tag-badge">{c['tag']}</span>
                    </div>
                </a>
            </li>
        """)
    nav_html.append("</ul></div>")

sections_html = []
for idx, ch in enumerate(CHAPTERS):
    active_class = "active" if idx == 0 else ""
    steps_li = "\n".join([f"<li>{s}</li>" for s in ch['steps']])
    actions_tr = []
    for act in ch['actions']:
        actions_tr.append(f"""
        <tr>
            <td class="action-key-col"><span class="badge-key">{act[0]}</span></td>
            <td class="action-field-col"><strong>{act[1]}</strong></td>
            <td class="action-desc-col">{act[2]}</td>
        </tr>
        """)
    actions_rows = "\n".join(actions_tr)
    notes_div = []
    for n in ch['notes']:
        notes_div.append(f"""
        <div class="note-box">
            <div class="note-icon">💡</div>
            <div class="note-content"><strong>Lưu ý nghiệp vụ:</strong> {n}</div>
        </div>
        """)
    notes_html = "\n".join(notes_div)

    sections_html.append(f"""
    <section id="{ch['id']}" class="manual-section {active_class}">
        <div class="breadcrumb">
            <span>HƯƠNG SƠN ADMIN</span> / <span>{ch['category']}</span> / <span class="current">CHƯƠNG {ch['num']}</span>
        </div>
        <div class="section-header-box">
            <div class="section-title-wrap">
                <span class="badge-chapter">CHƯƠNG {ch['num']}</span>
                <h1 class="section-title">{ch['title']}</h1>
            </div>
            <div class="section-meta-tags">
                <span class="meta-tag tag-code">{ch['code']}</span>
                <span class="meta-tag tag-cat">{ch['category']}</span>
            </div>
        </div>
        <p class="section-desc">{ch['desc']}</p>

        <div class="steps-container">
            <div class="steps-heading">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                1. Quy Trình Thao Tác Chuẩn Từng Bước
            </div>
            <ol class="steps-list">
                {steps_li}
            </ol>
        </div>

        <div class="screenshot-wrapper">
            <div class="screenshot-topbar">
                <div class="window-controls">
                    <span class="control-dot red"></span>
                    <span class="control-dot yellow"></span>
                    <span class="control-dot green"></span>
                </div>
                <div class="browser-address">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#1A9900" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    <span>{ch['route']}</span>
                </div>
                <div class="window-actions">
                    <a href="{ch['route']}" target="_blank" class="btn-live-preview" title="Mở trang quản trị thực tế">Mở Trực Tiếp ↗</a>
                </div>
            </div>
            <div class="screenshot-canvas">
                <img src="/docs/assets/screenshots/{os.path.basename(ch['image'])}" alt="{ch['title']}" loading="lazy" class="img-screenshot">
            </div>
            <div class="screenshot-caption">
                <strong>Hình {ch['num']}:</strong> Giao diện thực tế module <em>{ch['title']}</em> trên hệ thống Hương Sơn.
            </div>
        </div>

        <div class="action-table-container">
            <div class="action-table-heading">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                3. Bảng Tra Cứu Hành Động & Ký Hiệu Thao Tác
            </div>
            <table class="action-table">
                <thead>
                    <tr>
                        <th style="width: 80px;">Ký hiệu</th>
                        <th style="width: 250px;">Khu vực / Tên trường</th>
                        <th>Hướng dẫn thao tác & Lưu ý nghiệp vụ</th>
                    </tr>
                </thead>
                <tbody>
                    {actions_rows}
                </tbody>
            </table>
        </div>

        <div class="notes-container">
            <div class="notes-heading">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1A9900" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                4. Lưu Ý Nghiệp Vụ Quan Trọng
            </div>
            {notes_html}
        </div>
    </section>
    """)

nav_str = "".join(nav_html)
sec_str = "".join(sections_html)

spa_template = """<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cẩm Nang Quản Trị Hệ Thống - Công Ty TNHH TM&DV Hương Sơn</title>
    <link rel="icon" type="image/svg+xml" href="/assets/images/brand/logo-huong-son.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1A9900;
            --primary-dark: #0d1626;
            --primary-hover: #147700;
            --primary-light: #eaf6ea;
            --accent: #ff9900;
            --bg-page: #F8FAFC;
            --bg-card: #FFFFFF;
            --border-color: #E2E8F0;
            --text-dark: #0F172A;
            --text-muted: #64748B;
            --sidebar-width: 340px;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-page);
            color: var(--text-dark);
            line-height: 1.6;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        #sidebar {
            width: var(--sidebar-width);
            background: #FFFFFF;
            border-right: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            height: 100vh;
        }
        .sidebar-brand {
            padding: 20px 24px;
            background: linear-gradient(135deg, var(--primary-dark) 0%, #16361a 60%, var(--primary) 100%);
            color: #FFFFFF;
        }
        .brand-badge {
            display: inline-block;
            background: rgba(26, 153, 0, 0.35);
            border: 1px solid rgba(255,255,255,0.2);
            color: #99f38c;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 6px;
        }
        .brand-title {
            font-size: 17.5px;
            font-weight: 800;
            letter-spacing: -0.3px;
            line-height: 1.3;
        }
        .brand-sub {
            font-size: 11.5px;
            color: #cbd5e1;
            margin-top: 4px;
        }
        .sidebar-search-box {
            padding: 14px 20px;
            border-bottom: 1px solid var(--border-color);
            background: #FFFFFF;
        }
        .search-input {
            width: 100%;
            padding: 9px 14px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            font-size: 13px;
            outline: none;
            background: #F1F5F9;
            transition: all 0.2s;
        }
        .search-input:focus {
            background: #FFFFFF;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(26, 153, 0, 0.12);
        }
        .sidebar-content {
            flex: 1;
            overflow-y: auto;
            padding: 16px 12px;
        }
        .category-group {
            margin-bottom: 20px;
        }
        .category-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 12px;
            margin-bottom: 4px;
        }
        .category-title {
            font-size: 11px;
            font-weight: 800;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }
        .category-count {
            font-size: 10px;
            font-weight: 700;
            background: #E2E8F0;
            color: var(--text-muted);
            padding: 1px 6px;
            border-radius: 10px;
        }
        .nav-list { list-style: none; }
        .nav-item { margin-bottom: 2px; }
        .nav-link {
            display: block;
            padding: 9px 12px;
            border-radius: 8px;
            text-decoration: none;
            color: #334155;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.15s ease;
        }
        .nav-link:hover {
            background: #F1F5F9;
            color: var(--primary-hover);
        }
        .nav-link.active {
            background: var(--primary-light);
            color: var(--primary-hover);
            font-weight: 700;
            box-shadow: inset 3px 0 0 var(--primary);
        }
        .nav-title-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
        }
        .ch-badge {
            display: inline-block;
            background: rgba(0,0,0,0.06);
            padding: 1px 5px;
            border-radius: 4px;
            font-size: 10.5px;
            font-weight: 700;
        }
        .nav-link.active .ch-badge {
            background: var(--primary);
            color: #FFFFFF;
        }
        .nav-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tag-badge {
            font-size: 9px;
            font-weight: 700;
            padding: 2px 5px;
            border-radius: 4px;
            background: #E2E8F0;
            text-transform: uppercase;
            letter-spacing: 0.3px;
            flex-shrink: 0;
        }
        .sidebar-footer {
            padding: 14px 20px;
            border-top: 1px solid var(--border-color);
            background: #FAFAFA;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .btn-action {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 9px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 12px;
            transition: all 0.2s;
            cursor: pointer;
            border: none;
        }
        .btn-pdf {
            background: var(--primary);
            color: #FFFFFF;
        }
        .btn-pdf:hover {
            background: var(--primary-hover);
        }
        .btn-print {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            color: var(--text-dark);
        }
        .btn-print:hover {
            background: #F1F5F9;
        }

        #main-content {
            flex: 1;
            height: 100vh;
            overflow-y: auto;
            padding: 36px 48px;
        }
        .manual-section {
            display: none;
            max-width: 1140px;
            margin: 0 auto;
            animation: fadeIn 0.25s ease-in-out;
        }
        .manual-section.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .breadcrumb {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-muted);
            margin-bottom: 8px;
            letter-spacing: 0.4px;
        }
        .breadcrumb .current {
            color: var(--primary);
            font-weight: 700;
        }
        .section-header-box {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 12px;
        }
        .badge-chapter {
            display: inline-block;
            background: var(--primary-light);
            color: var(--primary-hover);
            font-size: 12px;
            font-weight: 800;
            padding: 3px 10px;
            border-radius: 6px;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
        }
        .section-title {
            font-size: 26px;
            font-weight: 800;
            color: var(--text-dark);
            letter-spacing: -0.5px;
        }
        .section-meta-tags {
            display: flex;
            gap: 8px;
            flex-shrink: 0;
            margin-top: 8px;
        }
        .meta-tag {
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 6px;
            text-transform: uppercase;
        }
        .tag-code {
            background: #E0E7FF;
            color: #3730A3;
        }
        .tag-cat {
            background: #FEF3C7;
            color: #92400E;
        }
        .section-desc {
            font-size: 14.5px;
            color: #475569;
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .steps-container {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 22px 28px;
            margin-bottom: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }
        .steps-heading {
            font-size: 15px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .steps-heading svg {
            color: var(--primary);
        }
        .steps-list {
            padding-left: 20px;
        }
        .steps-list li {
            font-size: 13.5px;
            color: #334155;
            margin-bottom: 8px;
            line-height: 1.55;
        }
        .steps-list code {
            background: #F1F5F9;
            color: #0d1626;
            font-family: 'JetBrains Mono', monospace;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 12.5px;
            border: 1px solid #E2E8F0;
        }

        .screenshot-wrapper {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 24px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.05);
        }
        .screenshot-topbar {
            background: #F1F5F9;
            border-bottom: 1px solid var(--border-color);
            padding: 10px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }
        .window-controls {
            display: flex;
            gap: 6px;
        }
        .control-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        .control-dot.red { background: #EF4444; }
        .control-dot.yellow { background: #F59E0B; }
        .control-dot.green { background: #10B981; }
        .browser-address {
            flex: 1;
            max-width: 600px;
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            padding: 5px 12px;
            font-size: 12px;
            font-family: 'JetBrains Mono', monospace;
            color: #475569;
            display: flex;
            align-items: center;
            gap: 8px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .btn-live-preview {
            font-size: 11px;
            font-weight: 700;
            color: var(--primary);
            background: var(--primary-light);
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.2s;
        }
        .btn-live-preview:hover {
            background: var(--primary);
            color: #FFFFFF;
        }
        .screenshot-canvas {
            background: #0d1626;
            text-align: center;
            padding: 0;
            line-height: 0;
        }
        .img-screenshot {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .screenshot-caption {
            padding: 10px 18px;
            background: #F8FAFC;
            border-top: 1px solid var(--border-color);
            font-size: 12px;
            color: var(--text-muted);
        }

        .action-table-container {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 22px 28px;
            margin-bottom: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }
        .action-table-heading {
            font-size: 15px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .action-table-heading svg {
            color: var(--primary);
        }
        .action-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
        }
        .action-table th {
            background: #F8FAFC;
            text-align: left;
            padding: 10px 14px;
            border-bottom: 2px solid var(--border-color);
            color: var(--text-dark);
            font-weight: 700;
            font-size: 12.5px;
        }
        .action-table td {
            padding: 12px 14px;
            border-bottom: 1px solid var(--border-color);
            vertical-align: top;
            color: #334155;
            line-height: 1.5;
        }
        .action-key-col {
            text-align: center;
        }
        .badge-key {
            display: inline-block;
            width: 26px;
            height: 26px;
            line-height: 26px;
            border-radius: 50%;
            background: var(--primary-light);
            color: var(--primary-hover);
            font-weight: 800;
            font-size: 13px;
        }

        .notes-container {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 22px 28px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }
        .notes-heading {
            font-size: 15px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .note-box {
            display: flex;
            gap: 12px;
            padding: 12px 16px;
            background: #F0FDF4;
            border-left: 4px solid var(--primary);
            border-radius: 6px;
            margin-bottom: 10px;
            font-size: 13.5px;
            color: #166534;
        }
        .note-icon {
            font-size: 16px;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <aside id="sidebar">
        <div class="sidebar-brand">
            <span class="brand-badge">HƯƠNG SƠN TỪ 2008</span>
            <div class="brand-title">CẨM NANG QUẢN TRỊ</div>
            <div class="brand-sub">Hệ thống quản lý huongsonco.com.vn</div>
        </div>
        <div class="sidebar-search-box">
            <input type="text" id="search-input" class="search-input" placeholder="🔍 Tìm kiếm chức năng, module...">
        </div>
        <div class="sidebar-content">
            __NAV__
        </div>
        <div class="sidebar-footer">
            <a href="/docs/Huong_Dan_Su_Dung_Admin_Huong_Son.pdf" target="_blank" class="btn-action btn-pdf">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                Tải File PDF Bàn Giao
            </a>
            <button onclick="window.open('/docs/user-manual-print.html', '_blank')" class="btn-action btn-print">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                Chế Độ Xem In A4
            </button>
        </div>
    </aside>

    <main id="main-content">
        __SECTIONS__
    </main>

    <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.manual-section');
        const searchInput = document.getElementById('search-input');

        function switchSection(targetId) {
            sections.forEach(function(s) { s.classList.remove('active'); });
            navLinks.forEach(function(l) { l.classList.remove('active'); });

            const targetSection = document.getElementById(targetId);
            const targetLink = document.querySelector('.nav-link[data-target="' + targetId + '"]');

            if (targetSection) {
                targetSection.classList.add('active');
                document.getElementById('main-content').scrollTop = 0;
            }
            if (targetLink) {
                targetLink.classList.add('active');
                targetLink.scrollIntoView({ block: 'nearest', behavior: 'smooth' });
            }
            history.replaceState(null, null, '#' + targetId);
        }

        navLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('data-target');
                switchSection(targetId);
            });
        });

        window.addEventListener('DOMContentLoaded', function() {
            const hash = window.location.hash.substring(1);
            if (hash && document.getElementById(hash)) {
                switchSection(hash);
            } else {
                switchSection('__FIRST_ID__');
            }
        });

        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            const navItems = document.querySelectorAll('.nav-item');
            const catGroups = document.querySelectorAll('.category-group');

            navItems.forEach(function(item) {
                const text = item.textContent.toLowerCase();
                if (text.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            catGroups.forEach(function(group) {
                const visibleItems = group.querySelectorAll('.nav-item:not([style*="display: none"])');
                if (visibleItems.length > 0) {
                    group.style.display = 'block';
                } else {
                    group.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>"""

spa_final = spa_template.replace('__NAV__', nav_str).replace('__SECTIONS__', sec_str).replace('__FIRST_ID__', CHAPTERS[0]['id'])
spa_path = os.path.join(DOCS_DIR, 'user-manual.html')
with open(spa_path, 'w', encoding='utf-8') as f:
    f.write(spa_final)
print("✔ Đã tạo SPA HTML:", spa_path)

# 3. PRINT HTML
print_chapters_html = []
for ch in CHAPTERS:
    steps_li = "\n".join([f"<li>{s}</li>" for s in ch['steps']])
    actions_tr = []
    for act in ch['actions']:
        actions_tr.append(f"""
        <tr>
            <td style="text-align: center; font-weight: bold; width: 40px;"><span class="print-key">{act[0]}</span></td>
            <td style="font-weight: bold; width: 200px;">{act[1]}</td>
            <td>{act[2]}</td>
        </tr>
        """)
    actions_rows = "\n".join(actions_tr)
    notes_p = "\n".join([f"<p class='print-note'>💡 <strong>Lưu ý:</strong> {n}</p>" for n in ch['notes']])

    print_chapters_html.append(f"""
    <div class="print-chapter page-break">
        <div class="print-ch-header">
            <span class="print-ch-badge">CHƯƠNG {ch['num']}</span>
            <h2 class="print-ch-title">{ch['title']}</h2>
            <div class="print-ch-sub">Phân loại: <strong>{ch['category']}</strong> | Nhãn: <code>{ch['code']}</code></div>
        </div>
        <p class="print-desc">{ch['desc']}</p>

        <h3 class="print-h3">1. Quy Trình Thao Tác Chuẩn Từng Bước</h3>
        <ol class="print-steps">
            {steps_li}
        </ol>

        <h3 class="print-h3">2. Giao Diện Thực Tế Module</h3>
        <div class="print-screenshot-box no-break">
            <div class="print-url">URL: {ch['route']}</div>
            <img src="assets/screenshots/{os.path.basename(ch['image'])}" alt="{ch['title']}" class="print-img">
            <div class="print-caption">Hình {ch['num']}: Giao diện thực tế module {ch['title']}</div>
        </div>

        <h3 class="print-h3">3. Bảng Tra Cứu Hành Động</h3>
        <table class="print-table no-break">
            <thead>
                <tr>
                    <th>Ký hiệu</th>
                    <th>Khu vực / Tên trường</th>
                    <th>Hướng dẫn thao tác & Lưu ý nghiệp vụ</th>
                </tr>
            </thead>
            <tbody>
                {actions_rows}
            </tbody>
        </table>

        <h3 class="print-h3">4. Lưu Ý Nghiệp Vụ</h3>
        <div class="no-break">
            {notes_p}
        </div>
    </div>
    """)

toc_li = "".join([f'<li class="toc-item"><span class="toc-ch">Chương {c["num"]}: {c["title"]}</span> <span class="toc-cat">{c["category"]}</span></li>' for c in CHAPTERS])
print_ch_str = "".join(print_chapters_html)

print_template = """<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cẩm Nang Quản Trị Hệ Thống - Công Ty TNHH TM&DV Hương Sơn</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
    <style>
        @page {
            size: A4 portrait;
            margin: 15mm 15mm 18mm 15mm;
            @bottom-right {
                content: counter(page);
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-size: 9pt;
                color: #64748B;
            }
            @bottom-left {
                content: "Hương Sơn - Cẩm Nang Vận Hành Hệ Thống Quản Trị";
                font-family: 'Plus Jakarta Sans', sans-serif;
                font-size: 8.5pt;
                color: #94A3B8;
            }
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 9.5pt;
            line-height: 1.5;
            color: #0F172A;
            background: #FFFFFF;
        }
        .page-break {
            page-break-before: always;
            break-before: page;
        }
        .no-break {
            page-break-inside: avoid;
            break-inside: avoid;
        }

        .cover-page {
            height: 255mm;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 25mm 10mm 15mm 10mm;
            text-align: center;
        }
        .cover-logo-box {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #0d1626 0%, #1A9900 100%);
            border-radius: 18px;
            color: #FFFFFF;
            font-size: 40px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px auto;
            box-shadow: 0 8px 20px rgba(26, 153, 0, 0.25);
        }
        .cover-badge {
            display: inline-block;
            background: #eaf6ea;
            color: #1A9900;
            font-size: 11pt;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .cover-title {
            font-size: 26pt;
            font-weight: 800;
            color: #0d1626;
            line-height: 1.25;
            margin-bottom: 12px;
        }
        .cover-sub {
            font-size: 13pt;
            color: #475569;
            max-width: 550px;
            margin: 0 auto;
            line-height: 1.5;
        }
        .cover-meta-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            max-width: 550px;
            margin: 30px auto;
            text-align: left;
            background: #F8FAFC;
            padding: 18px 24px;
            border-radius: 10px;
            border: 1px solid #E2E8F0;
            font-size: 9pt;
        }
        .cover-meta-item strong {
            display: block;
            color: #64748B;
            font-size: 8pt;
            text-transform: uppercase;
            margin-bottom: 2px;
        }
        .cover-footer {
            border-top: 1px solid #E2E8F0;
            padding-top: 15px;
            font-size: 9pt;
            color: #64748B;
        }

        .toc-page {
            padding-top: 10mm;
        }
        .toc-title {
            font-size: 18pt;
            font-weight: 800;
            color: #1A9900;
            margin-bottom: 15px;
            border-bottom: 2px solid #1A9900;
            padding-bottom: 8px;
        }
        .toc-list {
            list-style: none;
        }
        .toc-item {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            border-bottom: 1px dotted #CBD5E1;
            font-size: 9.5pt;
        }
        .toc-ch { font-weight: 700; color: #0d1626; }
        .toc-cat { color: #64748B; font-size: 8.5pt; }

        .print-chapter {
            padding-top: 5mm;
        }
        .print-ch-header {
            margin-bottom: 12px;
            border-bottom: 1.5px solid #E2E8F0;
            padding-bottom: 8px;
        }
        .print-ch-badge {
            display: inline-block;
            background: #eaf6ea;
            color: #1A9900;
            font-weight: 800;
            font-size: 8.5pt;
            padding: 2px 8px;
            border-radius: 4px;
            margin-bottom: 4px;
        }
        .print-ch-title {
            font-size: 15pt;
            font-weight: 800;
            color: #0d1626;
            margin-bottom: 4px;
        }
        .print-ch-sub {
            font-size: 8.5pt;
            color: #64748B;
        }
        .print-desc {
            font-size: 9.5pt;
            color: #334155;
            margin-bottom: 12px;
            line-height: 1.5;
        }
        .print-h3 {
            font-size: 11pt;
            font-weight: 700;
            color: #1A9900;
            margin: 12px 0 6px 0;
        }
        .print-steps {
            padding-left: 18px;
            margin-bottom: 12px;
        }
        .print-steps li {
            margin-bottom: 5px;
            font-size: 9pt;
            color: #1E293B;
        }
        .print-steps code {
            font-family: 'JetBrains Mono', monospace;
            background: #F1F5F9;
            padding: 1px 4px;
            border-radius: 3px;
            font-size: 8.5pt;
        }
        .print-screenshot-box {
            border: 1px solid #CBD5E1;
            border-radius: 6px;
            overflow: hidden;
            margin: 10px 0 14px 0;
            background: #F8FAFC;
        }
        .print-url {
            background: #E2E8F0;
            padding: 4px 10px;
            font-size: 8pt;
            font-family: 'JetBrains Mono', monospace;
            color: #475569;
        }
        .print-img {
            width: 100%;
            height: auto;
            display: block;
        }
        .print-caption {
            padding: 4px 10px;
            font-size: 8pt;
            color: #64748B;
            font-style: italic;
            text-align: center;
        }
        .print-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
            font-size: 8.5pt;
        }
        .print-table th {
            background: #F1F5F9;
            border: 1px solid #CBD5E1;
            padding: 6px 8px;
            text-align: left;
            font-weight: 700;
        }
        .print-table td {
            border: 1px solid #CBD5E1;
            padding: 6px 8px;
            vertical-align: top;
        }
        .print-key {
            display: inline-block;
            background: #eaf6ea;
            color: #1A9900;
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            border-radius: 50%;
            font-weight: 800;
            font-size: 9pt;
        }
        .print-note {
            background: #F0FDF4;
            border-left: 3px solid #1A9900;
            padding: 6px 10px;
            font-size: 8.5pt;
            color: #166534;
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <div class="cover-page">
        <div class="cover-top">
            <div class="cover-logo-box">HS</div>
            <span class="cover-badge">TÀI LIỆU BÀN GIAO QUẢN TRỊ WEBSITE</span>
            <h1 class="cover-title">CẨM NANG VẬN HÀNH HỆ THỐNG</h1>
            <p class="cover-sub">Hướng dẫn chi tiết quản trị website thương mại điện tử, danh mục máy photocopy Toshiba, máy in nhân bản Duplo và dịch vụ cho thuê thiết bị văn phòng.</p>
        </div>

        <div class="cover-meta-grid">
            <div class="cover-meta-item">
                <strong>Đơn vị sở hữu</strong>
                Công ty TNHH TM&DV Hương Sơn
            </div>
            <div class="cover-meta-item">
                <strong>Năm thành lập</strong>
                01/06/2008 (MST: 0102759269)
            </div>
            <div class="cover-meta-item">
                <strong>Hệ thống website</strong>
                https://huongsonco.com.vn
            </div>
            <div class="cover-meta-item">
                <strong>Phiên bản tài liệu</strong>
                Release v1.0.0 (Năm 2026)
            </div>
        </div>

        <div class="cover-footer">
            Hotline: 091.113.8583 (Công ty) · 0912.304.058 (Kỹ thuật) · 024 3972 9484 (Văn phòng) | Email: info@huongsonco.com.vn (Cc: thuannc72@gmail.com)<br>
            Trụ sở & Văn phòng: Số 27, ngõ 523 phố Minh Khai, phường Vĩnh Tuy, quận Hai Bà Trưng, TP. Hà Nội
        </div>
    </div>

    <div class="toc-page page-break">
        <h2 class="toc-title">MỤC LỤC TÀI LIỆU BÀN GIAO</h2>
        <ul class="toc-list">
            __TOC__
        </ul>
    </div>

    __PRINT_CHAPTERS__
</body>
</html>"""

print_final = print_template.replace('__TOC__', toc_li).replace('__PRINT_CHAPTERS__', print_ch_str)
print_path = os.path.join(DOCS_DIR, 'user-manual-print.html')
with open(print_path, 'w', encoding='utf-8') as f:
    f.write(print_final)
print("✔ Đã tạo Print HTML:", print_path)

# 4. EXPORT PDF
pdf_path = os.path.join(DOCS_DIR, 'Huong_Dan_Su_Dung_Admin_Huong_Son.pdf')
try:
    cmd = [
        'google-chrome',
        '--headless=new',
        '--disable-gpu',
        '--no-sandbox',
        '--run-all-compositor-stages-before-draw',
        f'--print-to-pdf={pdf_path}',
        f'file://{print_path}'
    ]
    res = subprocess.run(cmd, capture_output=True, text=True, timeout=60)
    if os.path.exists(pdf_path):
        size_mb = os.path.getsize(pdf_path) / (1024 * 1024)
        print(f"✔ Đã tạo thành công PDF: {pdf_path} ({size_mb:.2f} MB)")
except Exception as e:
    print(f"Lỗi PDF: {e}")

# 5. SYNC TO PUBLIC/DOCS/
for fname in ['user-manual.html', 'user-manual-print.html', 'HUONG_DAN_SU_DUNG_ADMIN_HUONG_SON.md']:
    src = os.path.join(DOCS_DIR, fname)
    dst = os.path.join(PUBLIC_DOCS_DIR, fname)
    if os.path.exists(src):
        shutil.copy2(src, dst)
        print(f"  + Đã chép {fname} sang public/docs/")

if os.path.exists(pdf_path):
    dst_pdf = os.path.join(PUBLIC_DOCS_DIR, 'Huong_Dan_Su_Dung_Admin_Huong_Son.pdf')
    shutil.copy2(pdf_path, dst_pdf)
    print("  + Đã chép Huong_Dan_Su_Dung_Admin_Huong_Son.pdf sang public/docs/")

# Copy screenshots
docs_img_dir = os.path.join(DOCS_DIR, 'assets', 'screenshots')
pub_img_dir = os.path.join(PUBLIC_DOCS_DIR, 'assets', 'screenshots')
os.makedirs(pub_img_dir, exist_ok=True)
for img in os.listdir(docs_img_dir):
    src = os.path.join(docs_img_dir, img)
    dst = os.path.join(pub_img_dir, img)
    if os.path.isfile(src):
        shutil.copy2(src, dst)

print("🎉 ĐÃ HOÀN TẤT BIÊN SOẠN BỘ TÀI LIỆU CẨM NANG QUẢN TRỊ HƯƠNG SƠN!")
