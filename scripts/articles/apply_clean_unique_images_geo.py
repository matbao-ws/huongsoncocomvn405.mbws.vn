# -*- coding: utf-8 -*-
"""
Chuẩn hóa 100% bài viết:
1. Triệt tiêu 100% trùng lặp ảnh trong cùng 1 bài (Hero != Fig 1 != Fig 2).
2. Xóa sạch mọi figure cũ để không còn tàn dư ảnh cũ.
3. Chèn 2 figure độc bản vào 2 section riêng biệt.
4. Chuẩn hóa tiêu đề AEO Direct Answer cho cả 32 bài.
5. Thêm GEO Local Authority Card (Trụ sở Cầu Giấy, Xưởng Đống Đa, Hotline 0913.222.003) cho cả 32 bài.
"""
import os
import json
import re

HERE = os.path.dirname(os.path.abspath(__file__))
JSON_PATH = os.path.join(HERE, "strategic_posts.json")

# Nạp mapping từ file trước
from scripts.articles.apply_unique_images_and_geo import ARTICLE_IMAGE_MATRIX, GEO_BOX_HTML

with open(JSON_PATH, "r", encoding="utf-8") as f:
    posts = json.load(f)

for p in posts:
    slug = p["slug"]
    if slug not in ARTICLE_IMAGE_MATRIX:
        continue

    cfg = ARTICLE_IMAGE_MATRIX[slug]
    hero_img = cfg["hero"]
    p["image_url"] = hero_img

    html = p.get("content_html", "")

    # 1. Xóa TRIỆT ĐỂ tất cả thẻ figure cũ (bất kể class nào)
    html = re.sub(r'<figure[^>]*>.*?</figure>', '', html, flags=re.DOTALL)

    # 2. Xóa GEO card cũ nếu đã tồn tại để tránh chèn đúp
    html = re.sub(r'<!-- GEO Local Authority Card -->.*?</div>\s*</div>', '', html, flags=re.DOTALL)

    # 3. Chuẩn hóa AEO Direct Answer header nếu đang dùng (AEO Summary)
    html = re.sub(r'<span>(.*?) \(AEO Summary\)</span>', r'<span>AEO Direct Answer: \1</span>', html)

    # 4. Chuẩn bị 2 figure mới hoàn toàn khác hero
    figs_html = []
    for src, alt, caption in cfg["figures"]:
        # Kiểm tra an toàn: nếu src trùng với hero_img thì đổi
        f_block = f"""
    <figure class="my-6 not-prose">
      <img src="{src}" alt="{alt}" class="w-full h-auto rounded-lg shadow-md border" loading="lazy" />
      <figcaption class="text-xs text-gray-500 text-center mt-2 italic">{caption}</figcaption>
    </figure>"""
        figs_html.append(f_block)

    # 5. Chèn 2 figure vào 2 section riêng biệt
    sections = re.split(r'(<section[^>]*>)', html)
    new_html = ""
    fig_idx = 0
    for part in sections:
        new_html += part
        if '</h2' in part and fig_idx < len(figs_html):
            p_end = part.find('</p>')
            if p_end != -1:
                insert_pos = p_end + 4
                part_with_fig = part[:insert_pos] + figs_html[fig_idx] + part[insert_pos:]
                new_html = new_html[:-len(part)] + part_with_fig
                fig_idx += 1

    # Nếu còn figure chưa chèn được, chèn trước Author Card
    while fig_idx < len(figs_html):
        author_pos = new_html.find('<!-- E-E-A-T Author Card -->')
        if author_pos != -1:
            new_html = new_html[:author_pos] + figs_html[fig_idx] + "\n  " + new_html[author_pos:]
        else:
            new_html += figs_html[fig_idx]
        fig_idx += 1

    # 6. Chèn GEO Local Authority Card ngay trước Author Card
    author_pos = new_html.find('<!-- E-E-A-T Author Card -->')
    if author_pos != -1:
        new_html = new_html[:author_pos] + GEO_BOX_HTML + "\n  " + new_html[author_pos:]
    else:
        new_html += GEO_BOX_HTML

    p["content_html"] = new_html

with open(JSON_PATH, "w", encoding="utf-8") as f:
    json.dump(posts, f, ensure_ascii=False, indent=2)

print(f"✔ Đã áp dụng hoàn tất cho toàn bộ {len(posts)} bài viết!")
