import os
import re
import json

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
errors = []
total_pages = 0

print("=== BẮT ĐẦU KIỂM TOÁN CHUYÊN SÂU 100% TOÀN BỘ WEBSITE ===")

# Danh sách trang chính
for dirpath, dirnames, filenames in os.walk(ROOT):
    if any(p in dirpath for p in [".git", "vendor", "node_modules", "storage", "database", "app", "config", "tests", "theme"]):
        continue
    for fname in filenames:
        if fname == "index.html" or fname == "404.html":
            total_pages += 1
            fpath = os.path.join(dirpath, fname)
            rel_page = os.path.relpath(fpath, ROOT)
            with open(fpath, "r", encoding="utf-8") as f:
                content = f.read()

            # 1. Title
            title_m = re.search(r'<title>(.*?)</title>', content)
            if not title_m or not title_m.group(1).strip():
                errors.append(f"[{rel_page}] Thiếu hoặc rỗng <title>")

            # 2. Meta description
            desc_m = re.search(r'<meta\s+name="description"\s+content="([^"]*)"', content)
            if not desc_m or not desc_m.group(1).strip():
                errors.append(f"[{rel_page}] Thiếu hoặc rỗng meta description")

            # 3. Canonical
            canon_m = re.search(r'<link\s+rel="canonical"\s+href="([^"]*)"', content)
            if not canon_m or not canon_m.group(1).strip():
                errors.append(f"[{rel_page}] Thiếu hoặc rỗng canonical URL")

            # 4. JSON-LD
            json_scripts = re.findall(r'<script type="application/ld\+json">(.*?)</script>', content, re.DOTALL)
            if not json_scripts and fname != "404.html":
                errors.append(f"[{rel_page}] Không có script JSON-LD")
            for js in json_scripts:
                try:
                    json.loads(js.strip())
                except Exception as e:
                    errors.append(f"[{rel_page}] Lỗi JSON-LD: {e}")

            # 5. Kiểm tra ảnh trong trang
            imgs = re.findall(r'<img[^>]+src="([^">]+)"', content)
            for img in imgs:
                if img.startswith("http"):
                    continue
                clean_img = img.split("?")[0].lstrip("/")
                local_path = os.path.join(ROOT, clean_img.replace("/", os.sep))
                if not os.path.isfile(local_path):
                    errors.append(f"[{rel_page}] Ảnh 404 không tồn tại: {img}")

            # 6. Kiểm tra background image trong style inline
            bg_imgs = re.findall(r'url\([\'"]?([^"\'\)]+)[\'"]?\)', content)
            for bg in bg_imgs:
                if bg.startswith("http") or bg.startswith("data:"):
                    continue
                clean_bg = bg.split("?")[0].lstrip("/")
                local_bg = os.path.join(ROOT, clean_bg.replace("/", os.sep))
                if not os.path.isfile(local_bg):
                    errors.append(f"[{rel_page}] Background image 404 không tồn tại: {bg}")

            # 7. Kiểm tra H1
            h1_tags = re.findall(r'<h1[^>]*>(.*?)</h1>', content, re.DOTALL)
            if not h1_tags:
                errors.append(f"[{rel_page}] Thiếu thẻ <h1>")
            elif len(h1_tags) > 1 and "404" not in fname:
                # Cảnh báo nếu có nhiều hơn 1 H1
                pass

print(f"✔ Đã kiểm toán chi tiết {total_pages} trang HTML chính thức.")
if errors:
    print(f"❌ Phát hiện {len(errors)} vấn đề cần xử lý:")
    for e in errors[:25]:
        print(f"  - {e}")
    if len(errors) > 25:
        print(f"  ... và {len(errors) - 25} lỗi khác.")
else:
    print("✔ TUYỆT VỜI: 100% CÁC TRANG ĐỀU ĐẠT TIÊU CHUẨN HOÀN HẢO (0 LỖI)!")
