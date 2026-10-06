import os, json

HERE = os.path.dirname(os.path.abspath(__file__))
json_path = os.path.join(HERE, 'strategic_posts.json')
with open(json_path, 'r', encoding='utf-8') as f:
    posts = json.load(f)

py_content = f'''# -*- coding: utf-8 -*-
"""Dữ liệu 5 bài viết chuyên sâu dài kỳ chuẩn SEO - GEO - AEO cho Hương Sơn."""
import os
import json

HERE = os.path.dirname(os.path.abspath(__file__))
JSON_PATH = os.path.join(HERE, "strategic_posts.json")

with open(JSON_PATH, "r", encoding="utf-8") as f:
    STRATEGIC_POSTS = json.load(f)

if __name__ == "__main__":
    print(f"Loaded {{len(STRATEGIC_POSTS)}} strategic posts.")
'''

with open(os.path.join(HERE, 'data_strategic_posts.py'), 'w', encoding='utf-8') as f:
    f.write(py_content)

print("Updated data_strategic_posts.py to load from strategic_posts.json.")
