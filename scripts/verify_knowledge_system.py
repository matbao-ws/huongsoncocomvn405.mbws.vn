import os
import json
import re

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
HTML_KNOWLEDGE_DIR = os.path.join(ROOT, "ve-huong-son", "kien-thuc")
BLADE_KNOWLEDGE_DIR = os.path.join(ROOT, "resources", "views", "client", "pages", "about", "kien-thuc")

ARTICLES = [
    "nen-thue-hay-mua-may-photocopy",
    "huong-dan-chon-may-scan-so-hoa-tai-lieu",
    "tieu-chuan-may-in-de-thi-thpt",
    "so-sanh-may-photocopy-toshiba-va-konica-minolta",
    "cach-chon-muc-in-linh-kien-may-photocopy-chinh-hang",
    "quy-trinh-so-hoa-tai-lieu-luu-tru",
    "dinh-muc-muc-in-cuon-master-duplo-in-de-thi",
    "so-sanh-duplo-dp-x550-va-dp-x850",
    "giai-phap-phoi-trang-gap-ghim-tu-dong-duplo",
    "giai-phap-cho-thue-may-photocopy-ngan-hang-bao-mat",
    "top-may-photocopy-van-phong-cho-thue-chay-nhat",
    "so-sanh-may-scan-ricoh-fi-8170-va-fi-8270",
    "so-hoa-hoc-ba-dien-tu-thpt-chuan-moet",
    "muc-in-fansipan-cong-nghe-nhat-ban-danh-gia",
    "khac-phuc-loi-may-photocopy-mua-nom-am",
    "bang-tra-ma-muc-master-may-in-duplo-toan-tap"
]

errors = []
warnings = []

print("=== BẮT ĐẦU KIỂM TRA TOÀN DIỆN 16 BÀI VIẾT TRỤ CỘT ===")

for slug in ARTICLES:
    html_path = os.path.join(HTML_KNOWLEDGE_DIR, slug, "index.html")
    blade_path = os.path.join(BLADE_KNOWLEDGE_DIR, slug, "index.blade.php")

    # 1. Kiểm tra tồn tại file
    if not os.path.isfile(html_path):
        errors.append(f"[{slug}] Thiếu file HTML: {html_path}")
        continue
    if not os.path.isfile(blade_path):
        errors.append(f"[{slug}] Thiếu file Blade: {blade_path}")
        continue

    # Đọc nội dung HTML
    with open(html_path, "r", encoding="utf-8") as f:
        html_content = f.read()

    # Đọc nội dung Blade
    with open(blade_path, "r", encoding="utf-8") as f:
        blade_content = f.read()

    # 2. Kiểm tra JSON-LD trong HTML
    jsonld_matches = re.findall(r'<script type="application/ld\+json">(.*?)</script>', html_content, re.DOTALL)
    if not jsonld_matches:
        errors.append(f"[{slug}] Không tìm thấy schema JSON-LD trong HTML")
    else:
        for idx, block in enumerate(jsonld_matches):
            try:
                parsed = json.loads(block.strip())
                # Kiểm tra Article và FAQPage
                types = []
                if isinstance(parsed, list):
                    for item in parsed:
                        t = item.get("@type")
                        if isinstance(t, list):
                            types.extend(t)
                        else:
                            types.append(t)
                elif isinstance(parsed, dict):
                    t = parsed.get("@type")
                    if isinstance(t, list):
                        types.extend(t)
                    else:
                        types.append(t)
                if "Article" not in types:
                    warnings.append(f"[{slug}] Schema block {idx} thiếu @type Article")
                if "FAQPage" not in types:
                    warnings.append(f"[{slug}] Schema block {idx} thiếu @type FAQPage")
            except Exception as e:
                errors.append(f"[{slug}] Lỗi cú pháp JSON-LD: {e}")

    # 3. Kiểm tra AEO Direct Answer Box
    if "Tóm tắt cốt lõi theo chuẩn AEO" not in html_content:
        errors.append(f"[{slug}] Thiếu khối AEO Direct Answer Box trong HTML")
    if "Tóm tắt cốt lõi theo chuẩn AEO" not in blade_content:
        errors.append(f"[{slug}] Thiếu khối AEO Direct Answer Box trong Blade")

    # 4. Kiểm tra Mục lục (TOC) và anchor links trong bài
    toc_links = re.findall(r'href="#([^"]+)"', html_content)
    for anchor in toc_links:
        if f'id="{anchor}"' not in html_content:
            errors.append(f"[{slug}] Anchor trong TOC #{anchor} không khớp ID nào trong bài viết")

    # 5. Kiểm tra các ảnh tham chiếu trong bài
    img_srcs = re.findall(r'<img[^>]+src="([^">]+)"', html_content)
    for src in img_srcs:
        if src.startswith("http"):
            continue
        # Xóa query string nếu có
        clean_src = src.split("?")[0].lstrip("/")
        local_img = os.path.join(ROOT, clean_src.replace("/", os.sep))
        if not os.path.isfile(local_img):
            errors.append(f"[{slug}] Ảnh không tồn tại trên đĩa: {src} -> {local_img}")

    # 6. Kiểm tra các liên kết nội bộ
    hrefs = re.findall(r'<a[^>]+href="([^">]+)"', html_content)
    for h in hrefs:
        if h.startswith("http") or h.startswith("tel:") or h.startswith("mailto:") or h.startswith("#"):
            continue
        # Bỏ query string và hash
        clean_h = h.split("?")[0].split("#")[0].strip()
        if not clean_h:
            continue
        # Kiểm tra xem đường dẫn có tồn tại trong HTML build không
        target_dir = os.path.join(ROOT, clean_h.strip("/").replace("/", os.sep))
        target_file = os.path.join(ROOT, clean_h.lstrip("/").replace("/", os.sep))
        target_index = os.path.join(target_dir, "index.html")
        if not (os.path.isfile(target_file) or os.path.isfile(target_index) or os.path.isdir(target_dir)):
            warnings.append(f"[{slug}] Link nội bộ có thể hỏng: {h}")

    # 7. Kiểm tra từ khóa nhạy cảm bị khách yêu cầu sửa "100% chính hãng CO/CQ"
    if "100% chính hãng CO/CQ" in html_content or "100% chính hãng CO/CQ" in blade_content:
        errors.append(f"[{slug}] Vẫn còn chuỗi '100% chính hãng CO/CQ' vi phạm yêu cầu của khách!")

print("\n=== KẾT QUẢ KIỂM TRA ===")
if errors:
    print(f"❌ PHÁT HIỆN {len(errors)} LỖI:")
    for err in errors:
        print(f"  - {err}")
else:
    print("✔ KHÔNG CÓ LỖI NÀO (0 errors)!")

if warnings:
    print(f"\n⚠️ CẢNH BÁO ({len(warnings)} cảnh báo):")
    for w in warnings:
        print(f"  - {w}")
else:
    print("✔ KHÔNG CÓ CẢNH BÁO NÀO (0 warnings)!")
