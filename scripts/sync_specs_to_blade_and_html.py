# -*- coding: utf-8 -*-
"""
Script an toàn để cập nhật Bảng Thông Số Kỹ Thuật (12-19 dòng) vào các trang Blade và HTML
mà TUYỆT ĐỐI KHÔNG làm ảnh hưởng đến Hero Banner, Breadcrumb, hay Showcase 2 cột.
"""

import json
import os
import re

DATA_PATH = 'build/data/products.json'

def build_spec_table(model_data):
    model_name = model_data.get('model') or model_data.get('name')
    caption = f"Thông số kỹ thuật — {model_name}"
    rows = []
    for k, v in model_data.get('specifications', {}).items():
        row = (
            '            <tr class="border-b border-gray-200 last:border-0 hover:bg-gray-50/80 transition">\n'
            f'              <th scope="row" class="text-left align-top py-3.5 pr-6 w-[42%] text-[14px] font-semibold text-[#181923] bg-[#fbf9f6]">{k}</th>\n'
            f'              <td class="py-3.5 text-[14.5px] text-gray-700 leading-relaxed">{v}</td>\n'
            '            </tr>'
        )
        rows.append(row)
    tbody = '\n'.join(rows)
    return (
        '  <section class="py-16 bg-[#f5f8fb] ">\n'
        '    <div class="max-w-[1370px] mx-auto px-4 sm:px-6 lg:px-8">\n'
        '      <div class="overflow-x-auto border border-gray-200">\n'
        '        <table class="w-full min-w-[520px] bg-white">\n'
        f'          <caption class="text-left px-5 py-4 bg-[#181924] text-white text-sm font-bold uppercase tracking-wider">{caption}</caption>\n'
        '          <tbody class="px-5">\n'
        f'{tbody}\n'
        '          </tbody>\n'
        '        </table>\n'
        '      </div>\n'
        '    </div>\n'
        '  </section>'
    )

def main():
    with open(DATA_PATH, 'r', encoding='utf-8') as f:
        data = json.load(f)

    # Regex chỉ match section specs: bắt đầu bằng class="py-16 bg-[#f5f8fb] " và chứa caption "Thông số kỹ thuật"
    spec_section_pattern = re.compile(
        r'<section\s+class="py-16\s+bg-\[#f5f8fb\]\s*">\s*<div[^>]*>\s*<div[^>]*>\s*<table[^>]*>\s*<caption[^>]*>Thông số kỹ thuật[\s\S]*?</caption>[\s\S]*?</table>\s*</div>\s*</div>\s*</section>',
        re.MULTILINE
    )

    target_cats = {'may-in-nhan-ban-toc-do-cao', 'photocopy-may-da-chuc-nang'}
    models = [m for m in data.get('models', []) if m.get('category') in target_cats]

    blade_updated = 0
    html_updated = 0

    for m in models:
        cat = m.get('category')
        slug = m.get('slug')
        specs = m.get('specifications', {})
        if not specs:
            continue

        new_section = build_spec_table(m)

        blade_file = f"resources/views/client/pages/products/{cat}/{slug}/index.blade.php"
        html_file = f"san-pham/{cat}/{slug}/index.html"

        if os.path.exists(blade_file):
            with open(blade_file, 'r', encoding='utf-8') as bf:
                b_content = bf.read()
            if spec_section_pattern.search(b_content):
                b_new = spec_section_pattern.sub(new_section, b_content, count=1)
                with open(blade_file, 'w', encoding='utf-8') as bf:
                    bf.write(b_new)
                blade_updated += 1
                print(f"[OK Blade] {slug}: {len(specs)} specs injected")
            else:
                print(f"[WARN Blade] Could not match spec section in {blade_file}")

        if os.path.exists(html_file):
            with open(html_file, 'r', encoding='utf-8') as hf:
                h_content = hf.read()
            if spec_section_pattern.search(h_content):
                h_new = spec_section_pattern.sub(new_section, h_content, count=1)
                with open(html_file, 'w', encoding='utf-8') as hf:
                    hf.write(h_new)
                html_updated += 1
                print(f"[OK HTML] {slug}: {len(specs)} specs injected")
            else:
                print(f"[WARN HTML] Could not match spec section in {html_file}")

    print(f"\nDone: {blade_updated} Blade files and {html_updated} HTML files updated safely.")

if __name__ == '__main__':
    main()
