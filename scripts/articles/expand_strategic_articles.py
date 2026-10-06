# -*- coding: utf-8 -*-
"""Mở rộng và hoàn thiện 5 bài viết chiến lược với đầy đủ chiều sâu (2,000 - 3,000+ từ/bài),
bổ sung hình ảnh thực tế, bảng so sánh TCO, checklist PDI, quy định Bộ GD&ĐT / Bộ Nội Vụ,
hộp AEO Answer, khối FAQ Accordion kèm Schema FAQPage JSON-LD, và E-E-A-T Author Card.
"""
import os
import json
import re

HERE = os.path.dirname(os.path.abspath(__file__))
DATA_FILE = os.path.join(HERE, 'data_strategic_posts.py')

with open(DATA_FILE, 'r', encoding='utf-8') as f:
    code = f.read()

print("Original code length:", len(code))
