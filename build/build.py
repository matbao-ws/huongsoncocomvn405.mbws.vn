# -*- coding: utf-8 -*-
"""Entry point sinh toàn bộ website Hương Sơn.

Chạy:  python3 build/build.py
Không sửa HTML ở root bằng tay — mọi thay đổi đi qua build/.
"""
import os
import sys
import shutil

HERE = os.path.dirname(os.path.abspath(__file__))
ROOT = os.path.dirname(HERE)
sys.path.insert(0, HERE)

import render  # noqa: E402
import schema  # noqa: E402

WRITTEN = []


def write(url, html):
    """url dạng '/giai-phap/giao-duc/' -> ghi ra giai-phap/giao-duc/index.html"""
    rel = url.strip("/")
    path = os.path.join(ROOT, rel, "index.html") if rel else os.path.join(ROOT, "index.html")
    os.makedirs(os.path.dirname(path), exist_ok=True)
    with open(path, "w", encoding="utf-8") as f:
        f.write(html)
    WRITTEN.append(url)


def write_raw(name, text):
    with open(os.path.join(ROOT, name), "w", encoding="utf-8") as f:
        f.write(text)


# ------------------------------------------------------------------ hạ tầng SEO/AI
PRIORITY = {
    "/": "1.0",
    "/giai-phap/giao-duc/": "0.95",
    "/giai-phap/giao-duc/in-de-thi/": "0.95",
    "/nhan-tu-van/": "0.9",
}


def build_infra():
    base = render.SITE["website"].rstrip("/")

    urls = "".join(
        f"\n  <url>\n    <loc>{base}{u}</loc>"
        f"\n    <changefreq>{'weekly' if u in PRIORITY else 'monthly'}</changefreq>"
        f"\n    <priority>{PRIORITY.get(u, '0.7')}</priority>\n  </url>"
        for u in sorted(set(WRITTEN)))
    write_raw("sitemap.xml",
              '<?xml version="1.0" encoding="UTF-8"?>\n'
              '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'
              f"{urls}\n</urlset>\n")

    # KPI "AI visibility" (Chiến lược §XLI) -> mở cho crawler AI.
    # CẦN KHÁCH XÁC NHẬN: nếu không muốn AI crawl, đổi Allow thành Disallow.
    write_raw("robots.txt", f"""User-agent: *
Allow: /
Disallow: /assets/docs/

# Crawler AI — phục vụ KPI "AI visibility". Đổi thành Disallow nếu khách không đồng ý.
User-agent: GPTBot
Allow: /
User-agent: ClaudeBot
Allow: /
User-agent: PerplexityBot
Allow: /
User-agent: Google-Extended
Allow: /

Sitemap: {base}/sitemap.xml
""")

    s = render.SITE
    write_raw("llms.txt", f"""# {s['legal_name']}

> {s['positioning']}. Thành lập {s['founded']}, trụ sở tại {s['address']}.
> Mã số thuế {s['mst']}. Website: {base}/

## Hương Sơn làm gì

Hương Sơn cung cấp thiết bị, vật tư và giải pháp cho toàn bộ vòng đời tài liệu của
một tổ chức: PRINT → COPY → SCAN → DIGITAL → RENT → SERVICE.

Sáu nhóm năng lực:

1. Office Equipment — máy photocopy, máy in đa chức năng A3/A4, máy in laser, thiết bị văn phòng.
2. Production Print — máy in nhân bản siêu tốc (Duplo, Riso), máy phối trang và thiết bị hoàn thiện sau in.
3. Scan & Digital Document — máy scan tốc độ cao, OCR, chuẩn hóa dữ liệu, số hóa hồ sơ.
4. Managed Print & Rental — cho thuê thiết bị, quản lý fleet, vật tư, bảo trì, SLA, báo cáo sản lượng.
5. Consumables & FANSIPAN — mực, cụm mực, drum, linh kiện, vật tư tiêu hao (nhãn riêng FANSIPAN).
6. Digital Business — website, CRM và AI phục vụ tư vấn và chăm sóc khách hàng.

## Khách hàng phục vụ

Sở Giáo dục và Đào tạo, trường THPT/THCS, trường đại học – cao đẳng, cơ quan Nhà nước,
ngân hàng – tài chính, tập đoàn – tổng công ty và doanh nghiệp.

Chuyên môn sâu nhất: in sao đề thi và vận hành điểm in cho kỳ thi (thuê máy in nhân bản
siêu tốc, vật tư Master/mực, kỹ thuật trực và phương án máy dự phòng).

## Trang chính

- Sản phẩm: {base}/san-pham/
- Giải pháp: {base}/giai-phap/
- Giải pháp Giáo dục: {base}/giai-phap/giao-duc/
- Cho thuê máy in đề thi: {base}/giai-phap/giao-duc/in-de-thi/
- Scan – Số hóa tài liệu: {base}/giai-phap/scan-so-hoa/
- Cho thuê thiết bị: {base}/giai-phap/cho-thue-thiet-bi/
- Dịch vụ: {base}/dich-vu/
- Dự án – Case study: {base}/du-an/
- Về Hương Sơn: {base}/ve-huong-son/
- Nhận tư vấn: {base}/nhan-tu-van/

## Liên hệ

- Hotline: {' · '.join(h['label'] + ' (' + h['note'] + ')' for h in s['hotlines'])}
- Email: {s['email']}
- Giờ làm việc: {s['hours']}
""")

    write(("/404/"), render.page(
        title="Không tìm thấy trang | Hương Sơn",
        description="Trang không tồn tại. Xem sản phẩm, giải pháp và dịch vụ của Hương Sơn.",
        url="/404/", jsonld=[schema.organization()],
        body="""
  <section class="py-28 bg-white">
    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <p class="text-[#1A9900] font-bold text-xs uppercase tracking-[0.2em] mb-4">Lỗi 404</p>
      <h1 class="text-3xl sm:text-5xl font-bold text-[#181923] mb-5">Không tìm thấy trang</h1>
      <p class="text-[15.5px] text-gray-500 max-w-xl mx-auto mb-9 leading-relaxed">
        Đường dẫn không còn tồn tại hoặc đã được chuyển. Quý khách có thể bắt đầu lại từ trang chủ,
        hoặc xem trực tiếp danh mục sản phẩm và giải pháp.
      </p>
      <div class="flex flex-wrap items-center justify-center gap-4">
        <a href="/" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Về trang chủ</a>
        <a href="/san-pham/" class="border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem sản phẩm</a>
        <a href="/giai-phap/" class="border border-gray-300 hover:border-[#1A9900] hover:text-[#1A9900] text-[#181923] font-bold text-xs uppercase tracking-wider px-8 py-4 transition">Xem giải pháp</a>
      </div>
    </div>
  </section>
"""))
    # 404 cần nằm ở /404.html cho hosting tĩnh
    shutil.copyfile(os.path.join(ROOT, "404", "index.html"), os.path.join(ROOT, "404.html"))
    WRITTEN.remove("/404/")


MODULES = ["pages_solutions", "pages_products", "pages_services", "pages_projects",
           "pages_about", "pages_lead", "pages_home"]


def main():
    import importlib
    missing = []
    for name in MODULES:
        try:
            importlib.import_module(name).build(write)
        except ModuleNotFoundError:
            missing.append(name)
    if missing:
        print("  (chưa có module: " + ", ".join(missing) + ")")

    build_infra()
    print(f"\n✔ Đã sinh {len(WRITTEN)} trang + sitemap.xml + robots.txt + llms.txt + 404.html")
    for u in sorted(WRITTEN):
        print("  ", u)


if __name__ == "__main__":
    main()
