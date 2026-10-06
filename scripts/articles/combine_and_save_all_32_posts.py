# -*- coding: utf-8 -*-
"""Hợp nhất 15 bài hiện tại và 17 bài mới thành 32 bài viết chiến lược đỉnh cao."""
import os
import json
from scripts.articles.make_posts_batch4 import BATCH_4_POSTS
from scripts.articles.make_posts_batch5 import BATCH_5_POSTS
from scripts.articles.make_posts_batch6 import BATCH_6_POSTS

HERE = os.path.dirname(os.path.abspath(__file__))
JSON_PATH = os.path.join(HERE, "strategic_posts.json")

with open(JSON_PATH, "r", encoding="utf-8") as f:
    existing_15 = json.load(f)

new_17 = BATCH_4_POSTS + BATCH_5_POSTS + BATCH_6_POSTS

all_32 = existing_15 + new_17

cat_id_map = {
    "Giáo Dục & In Đề Thi": 1,
    "Ngân Hàng & Bảo Mật": 2,
    "Chiến Lược & Dịch Vụ": 3,
    "Số Hóa & OCR": 4,
    "Hoàn Thiện Sau In": 5,
}

for idx, p in enumerate(all_32):
    p["id"] = idx + 1
    p["category_id"] = cat_id_map.get(p["tag"], 1)
    p["category_name"] = p["tag"]

with open(JSON_PATH, "w", encoding="utf-8") as f:
    json.dump(all_32, f, ensure_ascii=False, indent=2)

print(f"✔ Đã lưu thành công {len(all_32)} bài viết chiến lược vào {JSON_PATH}!")
from collections import Counter
counts = Counter([p["tag"] for p in all_32])
for cat, c in counts.items():
    print(f"  * {cat}: {c} bài")
