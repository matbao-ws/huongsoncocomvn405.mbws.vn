# -*- coding: utf-8 -*-
"""Đảm bảo khối E-E-A-T Author Card có mặt 100% trong toàn bộ 32 bài viết."""
import os
import json
import re

HERE = os.path.dirname(os.path.abspath(__file__))
JSON_PATH = os.path.join(HERE, "strategic_posts.json")

from scripts.articles.make_posts_batch4 import AUTHOR_BOX_HTML

with open(JSON_PATH, "r", encoding="utf-8") as f:
    posts = json.load(f)

fixed_count = 0
for p in posts:
    html = p.get("content_html", "")
    # Xóa khối Author Card cũ nếu có vết tích
    html = re.sub(r'<!-- E-E-A-T Author Card -->.*?Hotline: 0913\.222\.003.*?</div>\s*</div>\s*</div>', '', html, flags=re.DOTALL)
    html = re.sub(r'<!-- E-E-A-T Author Card -->.*', '', html, flags=re.DOTALL)
    
    # Đóng các thẻ section/div còn mở nếu có
    html = html.rstrip()
    if not html.endswith('</div>'):
        html += '\n' + AUTHOR_BOX_HTML + '\n</div>'
    else:
        # Chèn trước thẻ đóng </div> cuối cùng
        last_div = html.rfind('</div>')
        html = html[:last_div] + '\n' + AUTHOR_BOX_HTML + '\n</div>'

    p["content_html"] = html
    fixed_count += 1

with open(JSON_PATH, "w", encoding="utf-8") as f:
    json.dump(posts, f, ensure_ascii=False, indent=2)

print(f"✔ Đã khôi phục và chuẩn hóa E-E-A-T Author Card cho 100% {fixed_count}/32 bài viết!")
