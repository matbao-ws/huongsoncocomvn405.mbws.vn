# KẾ HOẠCH CHỈNH SỬA WEBSITE HUONGSONCO.COM.VN
**Chuyển từ template Logistics (mẫu 8324) → Digital Sales Engine của Hương Sơn**

Căn cứ: `assets/docs/` (5 tài liệu + `sitemap.jpeg`) và yêu cầu bổ sung của khách qua tin nhắn.
Ngày lập: 2026-08-24 · Trạng thái: chờ chốt 3 quyết định kiến trúc + 10 dữ liệu đầu vào.

---

## 0. HIỆN TRẠNG & KHOẢNG CÁCH

| Hạng mục | Hiện tại | Yêu cầu theo tài liệu | Khoảng cách |
|---|---|---|---|
| Nội dung | 100% vận tải/logistics (Mắt Bão WS) | Thiết bị – In ấn – Số hóa (Hương Sơn) | Viết lại toàn bộ |
| Số trang | 6 trang phẳng | ~55 trang theo sitemap khách duyệt | +49 trang |
| Kiến trúc | index / gioi-thieu / dich-vu / tin-tuc / tin-tuc-chi-tiet / lien-he | 6 menu chính + 19 menu con + trang chi tiết SP/giải pháp/dự án | Tổ chức lại IA |
| Sản phẩm | Không có | 12 trường bắt buộc/sản phẩm (AI-ready) | Xây template mới |
| Giải pháp | Không có | 6 khối: Problem→Solution→Equipment→Implementation→Service→ROI | Xây template mới |
| Lead engine | 1 form giả lập (AJAX fake trong `main.js`) | 6 CTA chuẩn + payload đúng trường CRM + GA4 | Xây mới |
| AI/SEO | Chỉ có title + description | JSON-LD Organization/Product/Service/FAQ/HowTo/Article + llms.txt + sitemap.xml | Xây mới |
| Kỹ thuật | Tailwind CDN, header/footer copy-paste 6 lần | 55 trang → không thể copy-paste | Cần build system |
| Ảnh | 57 ảnh stock logistics (xe tải, kho hàng) | Ảnh thật: kho, Toshiba, HP, Duplo, xe Hương Sơn | Thay toàn bộ |

**Điểm giữ lại:** toàn bộ ngôn ngữ thiết kế khách đã ưng — tông cam `#f17c34` + đen than `#181924`, phong cách vuông vức/flat, font Plus Jakarta Sans, và các module JS đã chạy tốt (sticky header, mobile drawer accordion, counters, testimonials slider, marquee, toast, floating buttons). Kế hoạch này **không đổi giao diện**, chỉ đổi thông tin kiến trúc + nội dung + tầng dữ liệu.

---

## 1. CHỐT KIẾN TRÚC MENU (giải quyết xung đột giữa 3 tài liệu)

Ba tài liệu đưa 3 phương án menu khác nhau:

- `sitemap.jpeg` → 6 menu chính (mới nhất, khách đã vẽ và duyệt)
- Bộ hồ sơ §8.1 → 9 menu (TRANG CHỦ / VỀ / GIẢI PHÁP / EDUCATION / THIẾT BỊ / DỊCH VỤ / DỰ ÁN / TÀI NGUYÊN / TIN TỨC / LIÊN HỆ)
- Chiến lược §XXXI → 7 khối (HOME / SOLUTIONS / PRODUCTS / SERVICES / FANSIPAN / PROJECTS / KNOWLEDGE)

**Quyết định: lấy `sitemap.jpeg` làm chuẩn menu cấp 1** (đây là bản khách chốt), rồi *gộp* toàn bộ nội dung 2 tài liệu kia vào cấp 2/cấp 3 — không mất hạng mục nào.

```
SẢN PHẨM
 ├─ Photocopy – Máy đa chức năng
 ├─ Máy in nhân bản tốc độ cao
 ├─ Máy Scan – Số hóa
 ├─ Máy phối trang – Hoàn thiện sau in
 ├─ Máy in Laser – Thiết bị in
 ├─ Thiết bị phòng học – Giáo dục
 ├─ Vật tư – Linh kiện – Tiêu hao
 └─ Thiết bị văn phòng – Hội họp
GIẢI PHÁP
 ├─ Giáo dục            (trang trụ cột — chứa 4 gói EXAM PRO / SCHOOL PRINT / SCHOOL PRO / DIGITAL DOCUMENT)
 ├─ Ngân hàng – Tài chính
 ├─ Tập đoàn – Tổng công ty
 ├─ In đề thi – Tài liệu
 ├─ Scan – Số hóa
 ├─ Cho thuê thiết bị
 └─ Quản lý – Vận hành   (MPS)
DỊCH VỤ
 ├─ Bảo trì – Sửa chữa
 ├─ Dịch vụ kỹ thuật
 ├─ Vận hành thiết bị
 └─ Thu mua máy cũ – Đổi máy mới
DỰ ÁN
VỀ HƯƠNG SƠN
NHẬN TƯ VẤN
```

### 3 hạng mục tài liệu yêu cầu nhưng `sitemap.jpeg` chưa có — đề xuất bổ sung

| Thiếu | Vì sao bắt buộc | Đề xuất |
|---|---|---|
| Vertical **Cơ quan Nhà nước** | Chiến lược §XVI coi Government là vertical 3; toàn bộ bộ SEO xoay quanh Sở GD&ĐT (B2G) | Thêm `GIẢI PHÁP → Cơ quan Nhà nước` (menu con thứ 8) |
| **Tin tức / Kiến thức** | Hồ sơ §8.5 buộc sản xuất 6–10 nội dung/tháng; Chiến lược §XXXIV buộc 10 loại content; đây là nguồn traffic organic duy nhất | Đưa vào dropdown `VỀ HƯƠNG SƠN → Tin tức` + `→ Kiến thức` (giữ nguyên 6 menu cấp 1 khách đã duyệt) |
| **Tài nguyên** (catalogue/datasheet/hồ sơ năng lực) | Hồ sơ §8.1 + CTA "Tải hồ sơ năng lực" | `VỀ HƯƠNG SƠN → Tài nguyên` |
| Thương hiệu **FANSIPAN** | Trụ cột 5/6 của chiến lược, là brand riêng | Trang `/thuong-hieu/fansipan/` + link từ `Vật tư – Linh kiện` |

---

## 2. SITEMAP URL ĐẦY ĐỦ (~55 trang)

Bám sát URL mà Bộ hồ sơ §8.8 đã cam kết cho SEO (`/giai-phap/giao-duc/`, `/dich-vu/`, `/du-an/…`), mở rộng thêm cho các nhóm còn lại.

```
/                                                     Trang chủ

VỀ HƯƠNG SƠN
/ve-huong-son/                                        Giới thiệu (dùng bài viết mới trong "Tổng hợp định hướng số hóa 2026")
/ve-huong-son/nang-luc/                               Hồ sơ năng lực: kho, kỹ thuật, logistics, cho thuê, in đề thi, số hóa
/ve-huong-son/doi-tac-thuong-hieu/                    Duplo, Toshiba, Ricoh, Konica Minolta, HP, Riso, Fansipan
/ve-huong-son/tai-nguyen/                             Catalogue, datasheet, hồ sơ năng lực PDF, mẫu hồ sơ
/ve-huong-son/tin-tuc/                     + /<slug>/
/ve-huong-son/kien-thuc/                   + /<slug>/ Buying guide, so sánh, hướng dẫn kỹ thuật, TCO

SẢN PHẨM (8 danh mục + trang chi tiết model)
/san-pham/
/san-pham/photocopy-may-da-chuc-nang/      + /<model>/
/san-pham/may-in-nhan-ban-toc-do-cao/      + /<model>/
/san-pham/may-scan-so-hoa/                 + /<model>/
/san-pham/may-phoi-trang-hoan-thien-sau-in/+ /<model>/
/san-pham/may-in-laser/                    + /<model>/
/san-pham/thiet-bi-phong-hoc-giao-duc/     + /<model>/
/san-pham/vat-tu-linh-kien-tieu-hao/       + /<sku>/
/san-pham/thiet-bi-van-phong-hoi-hop/      + /<model>/

THƯƠNG HIỆU (landing SEO theo hãng — Bộ hồ sơ §8.8 yêu cầu /thiet-bi/duplo/ …)
/thuong-hieu/duplo/  /toshiba/  /ricoh/  /konica-minolta/  /hp/  /riso/  /fansipan/

GIẢI PHÁP (mỗi trang theo 6 khối Problem→ROI)
/giai-phap/
/giai-phap/giao-duc/                                  Trang trụ cột B2G — hero theo Bộ hồ sơ §2.2
  /giai-phap/giao-duc/in-de-thi/                       EXAM PRO
  /giai-phap/giao-duc/cho-thue-may-truong-hoc/         SCHOOL PRINT
  /giai-phap/giao-duc/quan-ly-in-an-truong-hoc/        SCHOOL PRO (MPS)
  /giai-phap/giao-duc/so-hoa-ho-so-truong-hoc/         DIGITAL DOCUMENT
/giai-phap/co-quan-nha-nuoc/                          (đề xuất bổ sung)
/giai-phap/ngan-hang-tai-chinh/
/giai-phap/tap-doan-tong-cong-ty/
/giai-phap/in-de-thi-tai-lieu/
/giai-phap/scan-so-hoa/
/giai-phap/cho-thue-thiet-bi/
/giai-phap/quan-ly-van-hanh/

DỊCH VỤ
/dich-vu/
/dich-vu/bao-tri-sua-chua/
/dich-vu/dich-vu-ky-thuat/
/dich-vu/van-hanh-thiet-bi/
/dich-vu/thu-mua-may-cu-doi-may-moi/

DỰ ÁN
/du-an/
/du-an/so-gddt-vinh-phuc-thue-may-photocopy-sao-in-de-thi/     (Case Study 01)
/du-an/so-gddt-quang-tri-thue-may-in-nhan-ban-sieu-toc-2026/   (Case Study 02)
/du-an/vietcombank-cung-cap-may-photocopy/                     (CHỜ xác nhận quyền công bố)

NHẬN TƯ VẤN / CHUYỂN ĐỔI
/nhan-tu-van/                                         Hub 6 CTA
/nhan-tu-van/bao-gia/
/nhan-tu-van/phuong-an-in-de-thi/
/nhan-tu-van/tu-van-thue-may/
/nhan-tu-van/khao-sat-so-hoa/
/nhan-tu-van/yeu-cau-ky-thuat/
/cong-cu/tinh-chi-phi-thue-may/                       Rental Calculator
/cong-cu/tinh-tco/                                    TCO Calculator
/lien-he/

HẠ TẦNG
/robots.txt  /sitemap.xml  /llms.txt  /404.html
```

**Landing theo địa phương:** Bộ SEO §2 cho phép `cho-thue-may-in-de-thi-[tỉnh]` **nhưng cấm nhân bản trang rỗng**. → Chỉ tạo cho tỉnh Hương Sơn thực sự đã triển khai (Vĩnh Phúc, Quảng Trị, Phú Thọ, Lạng Sơn — cần khách xác nhận danh sách). Xếp vào Phase 3.

---

## 3. TEMPLATE NỘI DUNG BẮT BUỘC

### 3.1 Trang sản phẩm — 12 trường theo yêu cầu khách ("WWW phải được thiết kế cho AI")

| # | Trường | Thể hiện trên trang | Schema.org |
|---|---|---|---|
| 1 | Tên chuẩn | H1 duy nhất, dùng đúng 1 cách viết trên mọi trang | `Product.name` |
| 2 | Model | Badge dưới H1 + bảng thông số | `Product.model`, `sku` |
| 3 | Manufacturer | Logo hãng + link `/thuong-hieu/<hãng>/` | `Product.brand`, `manufacturer` |
| 4 | Compatible model | Bảng tương thích (bắt buộc với vật tư Fansipan) | `isRelatedTo` / `additionalProperty` |
| 5 | Use case | 3–5 tình huống dùng thực tế | `Product.description` |
| 6 | Specifications | Bảng `<table>` có `<caption>` + `<th scope>` | `additionalProperty[]` (PropertyValue) |
| 7 | FAQ | 5–8 câu hỏi thật (giá thuê, giao máy, dự phòng, vật tư, SLA, bảo mật, nghiệm thu, thanh toán) | `FAQPage` |
| 8 | Comparison | Bảng so sánh với 2 model cùng phân khúc | `ItemList` |
| 9 | Document | Datasheet/catalogue PDF tải được | `Product.subjectOf` |
| 10 | Source | Xuất xứ, nhà cung cấp, nguồn tham chiếu thông số | `additionalProperty` |
| 11 | Application | Nhóm công việc phù hợp (in đề thi, văn thư, phòng in…) | `Product.audience` |
| 12 | Industry | Ngành: Giáo dục / Ngân hàng / Cơ quan NN / Doanh nghiệp | link chéo `/giai-phap/…` |

Kèm: 2 CTA cố định (`Yêu cầu báo giá` / `Tư vấn thuê máy`), `BreadcrumbList`, khối "3 câu trả lời nhanh" đầu trang cho AI trích dẫn.

### 3.2 Trang giải pháp — 6 khối theo yêu cầu khách

| Khối | Nội dung | Nguồn tài liệu |
|---|---|---|
| **Problem** | Bài toán thật của đơn vị (VD: kỳ thi phụ thuộc 1 máy, không có dự phòng) | Bộ SEO §IV bộ câu hỏi khảo sát |
| **Solution** | Gói giải pháp + tên tiếng Việt có ý định tìm kiếm (không dùng tên gói tiếng Anh đứng một mình — Bộ SEO §8) | Bộ SEO §XVII |
| **Equipment** | Danh mục thiết bị, link sang trang sản phẩm | Chiến lược §XX |
| **Implementation** | Timeline T-60 → sau kỳ thi, checklist trước giao máy | Bộ SEO §VI, Hồ sơ §3.2 |
| **Service** | SLA P1/P2/P3, kênh tiếp nhận, máy dự phòng | Bộ SEO §VIII, Hồ sơ §6.2 |
| **ROI** | So sánh thuê vs mua, TCO, cơ chế nghiệm thu/thanh toán | Chiến lược §XXXV, Bộ SEO §V |

Kèm: FAQ, case study liên quan, CTA theo vertical, `Service` + `HowTo` + `FAQPage` schema, và **liên kết nội bộ chuỗi** `IN ĐỀ THI → CHO THUÊ TRƯỜNG HỌC → QUẢN LÝ IN ẤN → SỐ HÓA` (Bộ SEO §8 bắt buộc).

### 3.3 Trang dự án / case study
Khách hàng · Bài toán · Giải pháp · Thiết bị (model + số lượng) · Thời gian triển khai · Kết quả · Bằng chứng hồ sơ.
Tuân thủ Phụ lục C: **không** công bố nội dung đề thi, dữ liệu học sinh, thông tin vận hành nhạy cảm; chỉ dùng tên/logo khách khi có quyền.

### 3.4 Trang dịch vụ
Phạm vi · Quy trình · SLA · Cam kết · Nguyên tắc giá (3 mô hình A/B/C theo Bộ SEO §V) · FAQ.

---

## 4. TẦNG AI-READY (điểm khách nhấn mạnh nhất)

1. **JSON-LD trên mọi trang:** `Organization` + `LocalBusiness` (địa chỉ, MST, hotline, sameAs) · `WebSite` + `SearchAction` · `BreadcrumbList` · `Product` (trang model) · `Service`/`Offer` (giải pháp, gói thuê) · `FAQPage` · `HowTo` (quy trình triển khai) · `Article` (kiến thức/tin) · `ItemList` (trang danh mục).
2. **Khối "Answer-first"** 2–3 câu đầu mỗi trang: *trang này là gì – dành cho ai – giải quyết vấn đề gì*. Đây là đoạn AI trích dẫn.
3. **HTML ngữ nghĩa:** 1 `<h1>`/trang, heading không nhảy cấp, `<table>` có `caption`/`th scope`, `<dl>` cho thông số, FAQ để text trong DOM (không lazy-render).
4. **Nhất quán thực thể:** một model = một cách viết duy nhất trên toàn site (VD: `Toshiba e-STUDIO 7518A`, `HP LaserJet Pro MFP M4103fdw`, `Duplo DP-…`). Lập từ điển tên chuẩn trước khi viết nội dung.
5. **`llms.txt`** ở root: Hương Sơn là ai, 6 trụ cột, danh mục trang chính, thông tin liên hệ.
6. **`robots.txt` + `sitemap.xml`**: KPI "AI visibility" trong Chiến lược §XLI ⇒ mở cho GPTBot / ClaudeBot / PerplexityBot / Google-Extended (cần khách quyết đồng ý hay không).
7. **Ma trận liên kết nội bộ**: sản phẩm ↔ giải pháp ↔ ngành ↔ dự án ↔ kiến thức — mỗi trang tối thiểu 3 link ngữ cảnh.

---

## 5. LEAD → CRM (biến website thành cỗ máy doanh thu)

**6 CTA chuẩn xuyên suốt** (Hồ sơ §8.3): Yêu cầu báo giá · Tư vấn thuê máy · Phương án in đề thi · Khảo sát số hóa · Yêu cầu kỹ thuật · Tải hồ sơ năng lực.

**Trường form đặt tên khớp CRM ngay từ đầu** (Bộ SEO §XII + Chiến lược §XXXIII):
`ho_ten, don_vi, chuc_vu, loai_don_vi (Sở|Trường|Ngân hàng|Cơ quan NN|Doanh nghiệp), cua (1-Lãnh đạo|2-Khảo thí|3-KHTC), tinh_thanh, dien_thoai, email, nhu_cau (EXAM|PRINT|PRO|DIGITAL|VẬT TƯ|KỸ THUẬT), so_luong_thiet_bi, thoi_diem_can, ngan_sach, ghi_chu`
+ hidden: `source_url, page_type, product_model, solution_slug, utm_source/medium/campaign/term/content, gclid, referrer`.

**Cần có:** validate client-side, honeypot + rate-limit chống spam, trang cảm ơn riêng (để đo conversion), thông báo tức thì qua email + Zalo (KPI *Lead Response Time*), 2 công cụ tính (thuê máy & TCO) cũng ghi lead.

**GA4 events:** `generate_lead`, `view_item`, `download_datasheet`, `click_hotline`, `click_zalo`, `calculator_submit`, `view_case_study`.

---

## 6. XỬ LÝ NỢ KỸ THUẬT (bắt buộc trước khi lên 55 trang)

| Vấn đề | Rủi ro | Xử lý |
|---|---|---|
| Tailwind CDN | Chặn production, chậm, không purge | Build Tailwind CLI ra 1 file CSS đã purge |
| Header/footer/drawer copy-paste (đang 6 bản, sẽ thành 55 bản) | Sửa 1 link menu = sửa 55 file, chắc chắn lệch | Partial + script sinh trang (xem quyết định Q2) |
| 57 ảnh stock logistics | Sai thương hiệu hoàn toàn | Thay ảnh thật Hương Sơn, xuất WebP, có `width`/`height` + `loading="lazy"` |
| Thiếu `canonical`, `og:image` thật, `robots.txt`, `sitemap.xml` | Không index đúng | Bổ sung theo template |
| Form AJAX giả trong `main.js` | Lead rơi mất | Endpoint thật + lưu trữ + thông báo |
| Section "Team 8 thành viên", "Testimonials" | Không có dữ liệu thật; bịa là rủi ro với khách khó tính | Đổi mục đích: Team → "Năng lực triển khai" (kho/kỹ thuật/logistics); Testimonials → "Cam kết dịch vụ & SLA" hoặc trích dẫn thật từ biên bản nghiệm thu (nếu được phép) |
| Counters (số liệu đếm) | Đang là số bịa của template | Chỉ dùng số chứng minh được: từ 2008, 2 case Sở GD&ĐT, 127 máy Toshiba/Vietcombank 2024 (nếu được công bố) |

**Nguyên tắc nội dung (tài liệu nhấn mạnh 2 lần):** phần "năng lực hiện có" chỉ nói điều chứng minh được; phần 2027–2028 là **định hướng**, không viết như thành tích. Website phải tách rõ 2 phần này.

---

## 7. MAP MODULE GIAO DIỆN ĐANG CÓ → NỘI DUNG MỚI (trang chủ)

| Section hiện tại | Dùng lại thành |
|---|---|
| S1 Hero | `GIẢI PHÁP THIẾT BỊ, IN ẤN VÀ SỐ HÓA` — sub: *Photocopy • In nhanh • In đề thi • Scan/Số hóa • Thiết bị Giáo dục • Cho thuê • Dịch vụ kỹ thuật*; dòng dưới: *Đồng hành cùng Cơ quan Nhà nước – Sở GD&ĐT – Ngân hàng – Doanh nghiệp* (đúng câu khách yêu cầu đưa lên trang chủ) |
| S2 3 feature boxes | 3 CTA nóng: Thuê máy in đề thi · Thuê máy photocopy · Khảo sát số hóa |
| S3 Partner logos | Logo hãng: Duplo, Toshiba, Ricoh, Konica Minolta, HP, Riso, Fansipan |
| S4 Why choose us | 5 lợi thế cạnh tranh (Chiến lược §XXXVI): Multi-brand · Service · Rental/MPS · Chuyên sâu Giáo dục · Fansipan |
| S5 Counters | Số liệu chứng minh được (xem §6) |
| S6 3 overlay cards | 3 trụ: THIẾT BỊ · GIẢI PHÁP · DỊCH VỤ |
| S7 Specialized services | 8 nhóm sản phẩm theo sitemap |
| S8 Marquee | Chuỗi năng lực: PRINT → COPY → SCAN → DIGITAL → RENT → SERVICE |
| S9 Innovative company | Digital Sales Engine: Search → Website → Nội dung → Giải pháp → Lead → CRM → Sales → Hợp đồng → CSKH → Bán thêm (sơ đồ) |
| S10 Parallax banner | CTA "Tải hồ sơ năng lực Hương Sơn" |
| S11 Team | Năng lực triển khai: kho thiết bị · đội kỹ thuật · logistics · máy dự phòng |
| S12 Testimonials | Cam kết dịch vụ & SLA (P1/P2/P3) |
| S13 Latest news | Kiến thức & Case study |

---

## 8. LỘ TRÌNH THỰC THI

### Phase 0 — Nền tảng (không ra trang mới, nhưng quyết định mọi thứ sau)
Design token + logo/brand Hương Sơn · partial header/footer/drawer/CTA/form/schema · build Tailwind · từ điển tên model chuẩn · template Product (12 trường) + Solution (6 khối) + Case study + Service · `robots.txt` / `sitemap.xml` / `llms.txt` / `404`.

### Phase 1 — Lõi bán hàng (~26 trang, đủ để website hoạt động và tạo lead)
Trang chủ · Về Hương Sơn + Năng lực · 8 trang danh mục sản phẩm · 8 trang giải pháp (gồm Giáo dục là trụ cột) · 4 trang dịch vụ · Dự án (listing + 2 case study đã có hồ sơ) · Nhận tư vấn + Liên hệ.

### Phase 2 — Chiều sâu (~20 trang)
4 trang gói Giáo dục (EXAM PRO / SCHOOL PRINT / SCHOOL PRO / DIGITAL DOCUMENT) · 7 trang thương hiệu · 20–30 trang chi tiết model (sinh từ dữ liệu) · 2 công cụ tính (thuê máy, TCO) · Kiến thức + 6 bài đầu tiên · Tài nguyên · Tin tức.

### Phase 3 — Hoàn thiện Digital Sales Engine
Audit toàn bộ schema · FAQ đủ mọi trang · ma trận liên kết nội bộ · GA4 + Search Console + conversion · webhook CRM · tối ưu ảnh WebP/tốc độ · landing theo tỉnh (chỉ tỉnh có năng lực thật) · 12 cụm từ khóa của Hồ sơ §8.4 gắn đúng trang đích.

---

## 9. DỮ LIỆU CẦN KHÁCH CUNG CẤP / XÁC NHẬN

Tài liệu tự ghi "CẦN XÁC NHẬN" ở mục 1 — không chốt thì không thể xuất bản.

1. **Địa chỉ pháp lý chốt cuối** — hồ sơ cũ ghi Đức Giang, website ghi *27 ngõ 523 Minh Khai, P. Vĩnh Tuy, Hà Nội*. Phải thống nhất giữa website / báo giá / hợp đồng / hồ sơ năng lực.
2. **Hotline chính thức** (024 3972 9484 · 0913 237 302 · 091 113 8583 — dùng số nào làm chính?), email, Zalo OA, toạ độ Google Maps.
3. **Logo Hương Sơn + Fansipan** dạng vector, và bộ màu thương hiệu (giữ cam `#f17c34` của template hay theo màu Hương Sơn?).
4. **Ảnh thật** đã có theo Hồ sơ §7.4: kho Toshiba, kho HP MFP, máy Duplo, vật tư, xe vận chuyển, ảnh triển khai.
5. **Danh mục model thực tế** từng nhóm + thông số + datasheet PDF (không có thì trang sản phẩm không đủ 12 trường).
6. **Danh sách dự án được phép công bố** + quyền dùng tên/logo (Vietcombank, các Sở GD&ĐT) — Phụ lục C bắt buộc.
7. **Hồ sơ năng lực PDF** để đặt nút tải.
8. **Đích nhận lead**: email nào / CRM nào (có webhook hay chưa) / ai nhận thông báo.
9. **Thông tin pháp lý**: MST 0102759269, người đại diện Nguyễn Công Thuận – Giám đốc (xác nhận).
10. **Giấy ủy quyền/đại lý còn hiệu lực** của các hãng — quyết định được nói "đại lý" hay chỉ "cung cấp".
11. Có cho phép bot AI (GPTBot/ClaudeBot/PerplexityBot) crawl không.
12. Danh sách tỉnh/thành thực sự đủ năng lực triển khai (cho landing địa phương).

---

## 10. RỦI RO & CÁCH PHÒNG

| Rủi ro | Phòng ngừa |
|---|---|
| Viết định hướng 2027–2028 thành "thành tích đã đạt" | Tách khối "Năng lực hiện có" và "Định hướng phát triển" trên trang Về/Năng lực |
| Đăng thông tin nhạy cảm kỳ thi | Case study chỉ mô tả giải pháp & kết quả; duyệt nội dung theo Phụ lục C |
| Dùng logo khách chưa có quyền | Chỉ đăng sau khi khách xác nhận bằng văn bản; mặc định ẩn Vietcombank |
| Nhân bản trang tỉnh rỗng → Google đánh spam | Chỉ tạo trang tỉnh có nội dung và năng lực thật (Bộ SEO §8) |
| Tên gói tiếng Anh không ai tìm | Mỗi tên gói luôn kèm cụm tiếng Việt có ý định thuê/mua (Bộ SEO §8) |
| Số liệu bịa trong counters/testimonials | Chỉ dùng số chứng minh được, còn lại đổi sang module khác |

---

## 11. QUYẾT ĐỊNH ĐÃ CHỐT (2026-08-24)

| # | Quyết định | Chọn |
|---|---|---|
| Q1 | Cấu trúc URL | **Thư mục + `index.html`** → URL sạch, đúng cam kết SEO của Bộ hồ sơ §8.8 |
| Q2 | Cách sinh trang | **Generator script + partial + JSON** (single source of truth cho header/footer/menu/schema) |
| Q3 | Phạm vi | **Toàn bộ 4 phase** |

### Ràng buộc kỹ thuật phát hiện khi khảo sát môi trường
Máy hiện **không có Node/npm** (chỉ có Python 3.14). Hệ quả:

- Generator viết bằng **Python thuần (stdlib)** — không phụ thuộc npm, chạy được ở mọi môi trường.
- **Không build/purge được Tailwind CLI** ⇒ tạm giữ Tailwind CDN như template gốc. Đây là hạng mục treo của Phase 3: khi có Node trên máy deploy, chạy Tailwind CLI xuất 1 file CSS đã purge và thay thẻ `<script src="cdn.tailwindcss.com">`. Ghi nhận rõ để không tính là "đã xong".

### Cấu trúc dự án sau Phase 0
```
build/
  build.py          Entry — đọc data/, sinh toàn bộ HTML ra root
  render.py         Chrome dùng chung: head, topbar, header, footer, drawer, search, floating
  components.py     Khối tái sử dụng: breadcrumb, answer-first, CTA, bảng thông số, FAQ, so sánh, card
  schema.py         Sinh JSON-LD: Organization, Product, Service, FAQPage, HowTo, Breadcrumb, Article, ItemList
  data/
    site.json       Thông tin doanh nghiệp, hotline, địa chỉ, social  (nguồn duy nhất — sửa 1 chỗ, đổi 55 trang)
    nav.json        Menu 6 cấp 1 + cấp 2/3
    products.json   Danh mục + model, enforce đủ 12 trường
    solutions.json  Giải pháp, enforce đủ 6 khối Problem→ROI
    services.json / projects.json / brands.json / articles.json
```
Quy tắc: **không sửa HTML ở root bằng tay** — mọi thay đổi đi qua `build/`, rồi `python3 build/build.py`.
