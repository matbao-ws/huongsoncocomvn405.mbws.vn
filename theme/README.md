# Website Hương Sơn – huongsonco.com.vn

Giải pháp thiết bị, in ấn và số hóa cho Cơ quan Nhà nước – Giáo dục – Ngân hàng – Doanh nghiệp.
Xây dựng trên giao diện mẫu 8324 (đã được khách duyệt) — **HTML5, TailwindCSS, JavaScript thuần** —
với toàn bộ 55 trang được **sinh tự động** từ dữ liệu qua một generator Python.

Kế hoạch đầy đủ: [KE-HOACH-WEBSITE-HUONG-SON.md](KE-HOACH-WEBSITE-HUONG-SON.md).

---

## ⚠️ Quy tắc bắt buộc: không sửa HTML ở root bằng tay

Mọi trang `*/index.html` ở thư mục gốc (`giai-phap/`, `san-pham/`, `dich-vu/`, `du-an/`,
`ve-huong-son/`, `nhan-tu-van/`, `cong-cu/`, `index.html`, `404.html`) đều do
`build/build.py` **sinh ra**. Sửa trực tiếp các file này sẽ bị ghi đè ở lần build sau.

Muốn thay đổi nội dung hoặc cấu trúc → sửa trong `build/data/*.json` hoặc
`build/pages_*.py`, rồi chạy lại:

```bash
python3 build/build.py
```

Xem trước:

```bash
python3 -m http.server 8080
# mở http://localhost:8080/
```

---

## 📁 Cấu trúc

```
huongsoncocomvn405.mbws.vn/
├── build/                       # Generator — SOURCE OF TRUTH
│   ├── build.py                 # Entry point, sinh toàn bộ HTML + sitemap/robots/llms.txt
│   ├── render.py                # Chrome dùng chung: head, topbar, header, footer, drawer
│   ├── components.py            # Khối tái sử dụng: hero, FAQ, bảng, card, CTA...
│   ├── forms.py                 # Form lead — tên trường khớp CRM 3 Cửa
│   ├── schema.py                # Sinh JSON-LD (Organization, Product, Service, FAQPage, HowTo...)
│   ├── pages_home.py            # Trang chủ
│   ├── pages_solutions.py       # /giai-phap/ — 12 trang, đúng 6 khối Problem→ROI
│   ├── pages_products.py        # /san-pham/ — 8 danh mục + trang model (12 trường AI-ready)
│   ├── pages_services.py        # /dich-vu/ — 4 trang
│   ├── pages_projects.py        # /du-an/ — case study
│   ├── pages_about.py           # /ve-huong-son/ — giới thiệu, năng lực, thương hiệu, tài nguyên...
│   ├── pages_lead.py            # /nhan-tu-van/ + /cong-cu/ — 6 CTA + 2 công cụ tính
│   └── data/
│       ├── site.json            # Thông tin doanh nghiệp — sửa 1 chỗ, đổi toàn site
│       ├── nav.json             # Menu 6 cấp 1 (đúng sitemap.jpeg khách duyệt)
│       ├── solutions.json        products.json        services.json
│       └── projects.json
├── giai-phap/  san-pham/  dich-vu/  du-an/  ve-huong-son/  nhan-tu-van/  cong-cu/
│                                 # HTML đã sinh — KHÔNG sửa tay
├── index.html  404.html  sitemap.xml  robots.txt  llms.txt   # đã sinh
├── assets/
│   ├── css/custom.css
│   ├── js/main.js                # + lead engine: validate, honeypot, UTM, GA4 events
│   ├── images/brand/              # logo thật (lấy từ huongsonco.com.vn)
│   ├── images/products/           # ảnh sản phẩm thật (Duplo, Toshiba, HP, Vietcombank)
│   └── docs/                      # tài liệu chiến lược khách cung cấp (không public)
└── KE-HOACH-WEBSITE-HUONG-SON.md
```

---

## Nguồn dữ liệu

- **Chiến lược & cấu trúc**: 5 tài liệu khách cung cấp trong `assets/docs/` + `sitemap.jpeg`.
- **Thông tin thật** (logo, địa chỉ, hotline, model, thông số, case study): lấy trực tiếp từ
  website cũ `huongsonco.com.vn` — không bịa số liệu hay thông số kỹ thuật.
- Những chỗ chưa có dữ liệu xác nhận (ví dụ: model Scan, thiết bị phòng học) được đánh dấu
  rõ trong `build/data/*.json` bằng khóa `_note` hoặc hiển thị "đang hoàn thiện" trên trang —
  không tự suy diễn thông số.

## Đặc điểm kỹ thuật

1. **Giữ nguyên bố cục/tương tác của mẫu 8324, đổi màu chủ đạo theo đúng logo**: xanh lá `#1f7c45`
   (trước đây là cam `#f17c34` của template gốc, không liên quan thương hiệu Hương Sơn) + đen than
   `#181924`, Plus Jakarta Sans,
   phong cách vuông vức/flat, toàn bộ module JS gốc (sticky header, mobile drawer, counters,
   marquee, floating buttons).
2. **AI-ready**: mỗi trang có khối "answer-first" 3 câu đầu, `<h1>` duy nhất, bảng ngữ nghĩa
   (`<table><caption><th scope>`), JSON-LD đầy đủ (Organization/Product/Service/FAQPage/HowTo/
   BreadcrumbList/ItemList), `llms.txt` ở root.
3. **Lead → CRM**: form dùng chung field name khớp mô hình CRM 3 Cửa (`cua`, `nhu_cau`,
   `loai_don_vi`...), tự động ghi UTM/gclid/referrer, honeypot chống spam, event GA4
   `generate_lead`.
4. **12 trường sản phẩm** (tên chuẩn, model, manufacturer, compatible model, use case,
   specifications, FAQ, comparison, document, source, application, industry) và
   **6 khối giải pháp** (Problem → Solution → Equipment → Implementation → Service → ROI)
   theo đúng yêu cầu "WWW phải được thiết kế cho AI".

## Nợ kỹ thuật còn treo (ghi rõ để không tính nhầm là đã xong)

- **Tailwind CDN**: máy build hiện không có Node/npm nên chưa chạy được Tailwind CLI để purge
  CSS. Khi deploy có Node, build 1 file CSS tĩnh thay `<script src="cdn.tailwindcss.com">`.
- **Endpoint nhận lead**: `assets/js/main.js` gửi `fetch(form.action, ...)` tới `/api/lead` —
  cần trỏ sang email/CRM webhook thật trước khi go-live.
- **Logo vector**: đang dùng file JPEG nền trắng lấy từ website cũ, bọc khối nền trắng để
  đọc được trên header tối — nên xin bản vector nền trong suốt từ khách.

---

© 2026 Công ty TNHH Thương mại và Dịch vụ Hương Sơn. Thiết kế bởi Mắt Bão WS.
