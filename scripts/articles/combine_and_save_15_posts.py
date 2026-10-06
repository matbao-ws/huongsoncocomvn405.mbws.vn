# -*- coding: utf-8 -*-
"""Hợp nhất 5 bài cũ và 10 bài mới thành 15 bài viết chiến lược đỉnh cao."""
import os
import json
from scripts.articles.make_posts_batch1 import BATCH_1_POSTS
from scripts.articles.make_posts_batch2 import BATCH_2_POSTS
from scripts.articles.make_posts_batch3 import BATCH_3_POSTS

HERE = os.path.dirname(os.path.abspath(__file__))
JSON_PATH = os.path.join(HERE, "strategic_posts.json")

with open(JSON_PATH, "r", encoding="utf-8") as f:
    existing_posts = json.load(f)

# Chuẩn hóa 5 bài cũ
tag_mapping = {
    "giai-phap-may-in-sieu-toc-duplo-in-sao-de-thi-thpt-so-gddt": "Giáo Dục & In Đề Thi",
    "giai-phap-cho-thue-may-photocopy-bao-mat-ngan-hang-doanh-nghiep": "Ngân Hàng & Bảo Mật",
    "chuyen-dich-mo-hinh-tu-ban-may-sang-cho-thue-va-dich-vu-tron-goi": "Chiến Lược & Dịch Vụ",
    "quy-trinh-so-hoa-tai-lieu-thong-tu-02-va-hoc-ba-dien-tu-moet": "Số Hóa & OCR",
    "giai-phap-may-phoi-trang-gap-ghim-tu-dong-duplo-dfc-hoan-thien-sau-in": "Hoàn Thiện Sau In",
}

posts_5 = existing_posts[:5]
for p in posts_5:
    s = p["slug"]
    if s in tag_mapping:
        p["tag"] = tag_mapping[s]
        p["category_name"] = tag_mapping[s]

all_15 = posts_5 + BATCH_1_POSTS + BATCH_2_POSTS + BATCH_3_POSTS

# Gán ID rõ ràng
for idx, p in enumerate(all_15):
    p["id"] = idx + 1
    # Gán category_id tương ứng
    cat_id_map = {
        "Giáo Dục & In Đề Thi": 1,
        "Ngân Hàng & Bảo Mật": 2,
        "Chiến Lược & Dịch Vụ": 3,
        "Số Hóa & OCR": 4,
        "Hoàn Thiện Sau In": 5,
    }
    p["category_id"] = cat_id_map.get(p["tag"], 1)

with open(JSON_PATH, "w", encoding="utf-8") as f:
    json.dump(all_15, f, ensure_ascii=False, indent=2)

print(f"✔ Đã lưu thành công {len(all_15)} bài viết chiến lược vào {JSON_PATH}!")
for p in all_15:
    print(f"  [{p['id']}] [{p['tag']}] {p['slug']} ({len(p['content_html'])} chars)")
