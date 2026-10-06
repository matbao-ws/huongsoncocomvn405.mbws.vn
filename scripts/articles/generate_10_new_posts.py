# -*- coding: utf-8 -*-
"""
Tạo 10 bài viết chiến lược mới (bài 6 đến bài 15) và kết hợp với 5 bài viết hiện có.
Đảm bảo mỗi nhóm trong 5 danh mục chiến lược có đúng 3 bài viết chuyên sâu.
"""
import os
import json

HERE = os.path.dirname(os.path.abspath(__file__))
JSON_PATH = os.path.join(HERE, "strategic_posts.json")

with open(JSON_PATH, "r", encoding="utf-8") as f:
    existing_posts = json.load(f)

# Giữ lại 5 bài đầu tiên và chuẩn hóa tag
tag_mapping = {
    "giai-phap-may-in-sieu-toc-duplo-in-sao-de-thi-thpt-so-gddt": "Giáo Dục & In Đề Thi",
    "giai-phap-cho-thue-may-photocopy-bao-mat-ngan-hang-doanh-nghiep": "Ngân Hàng & Bảo Mật",
    "chuyen-dich-mo-hinh-tu-ban-may-sang-cho-thue-va-dich-vu-tron-goi": "Chiến Lược & Dịch Vụ",
    "quy-trinh-so-hoa-tai-lieu-thong-tu-02-va-hoc-ba-dien-tu-moet": "Số Hóa & OCR",
    "giai-phap-may-phoi-trang-gap-ghim-tu-dong-duplo-dfc-hoan-thien-sau-in": "Hoàn Thiện Sau In",
}

posts = existing_posts[:5]
for p in posts:
    s = p["slug"]
    if s in tag_mapping:
        p["tag"] = tag_mapping[s]
        p["category_name"] = tag_mapping[s]

print(f"5 bài đầu tiên đã được giữ và chuẩn hóa tag.")
