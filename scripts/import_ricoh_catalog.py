# -*- coding: utf-8 -*-
"""
Script import và chuẩn hóa toàn bộ 31 model máy quét Ricoh và linh kiện từ docs Excel:
`assets/docs/RICOH SCANNER for DEALER 01.2026 - HS - Trên www.xlsx`
vào:
  1. Thư mục ảnh `public/assets/images/products/` và `assets/images/products/`
  2. File dữ liệu `build/data/products.json`
"""

import zipfile
import xml.etree.ElementTree as ET
import json
import os
import shutil
import re

EXCEL_PATH = 'assets/docs/RICOH SCANNER for DEALER 01.2026 - HS - Trên www.xlsx'
IMG_DEST_DIRS = [
    'public/assets/images/products',
    'assets/images/products'
]
PRODUCTS_JSON = 'build/data/products.json'

for d in IMG_DEST_DIRS:
    os.makedirs(d, exist_ok=True)

z = zipfile.ZipFile(EXCEL_PATH)

# Read shared strings
shared_strings = []
if 'xl/sharedStrings.xml' in z.namelist():
    ss_tree = ET.fromstring(z.read('xl/sharedStrings.xml'))
    for si in ss_tree.findall('{http://schemas.openxmlformats.org/spreadsheetml/2006/main}si'):
        t = ''.join([elem.text for elem in si.iter() if elem.text])
        shared_strings.append(t)

# 1. Parse Drawing 1 relationships
rels_map1 = {}
if 'xl/drawings/_rels/drawing1.xml.rels' in z.namelist():
    tree = ET.fromstring(z.read('xl/drawings/_rels/drawing1.xml.rels'))
    for rel in tree.findall('{http://schemas.openxmlformats.org/package/2006/relationships}Relationship'):
        rels_map1[rel.attrib['Id']] = rel.attrib['Target'].replace('../', 'xl/')

# 2. Parse Drawing 2 relationships
rels_map2 = {}
if 'xl/drawings/_rels/drawing2.xml.rels' in z.namelist():
    tree = ET.fromstring(z.read('xl/drawings/_rels/drawing2.xml.rels'))
    for rel in tree.findall('{http://schemas.openxmlformats.org/package/2006/relationships}Relationship'):
        rels_map2[rel.attrib['Id']] = rel.attrib['Target'].replace('../', 'xl/')

# Read Sheet 1 rows
tree1 = ET.fromstring(z.read('xl/worksheets/sheet1.xml'))
sheet1_rows = []
for row in tree1.findall('{http://schemas.openxmlformats.org/spreadsheetml/2006/main}sheetData/{http://schemas.openxmlformats.org/spreadsheetml/2006/main}row'):
    r_num = int(row.attrib.get('r'))
    if r_num >= 7:
        cols = {}
        for c in row.findall('{http://schemas.openxmlformats.org/spreadsheetml/2006/main}c'):
            r_coord = c.attrib.get('r')
            col_letter = ''.join([ch for ch in r_coord if ch.isalpha()])
            t = c.attrib.get('t')
            v_elem = c.find('{http://schemas.openxmlformats.org/spreadsheetml/2006/main}v')
            val = ''
            if v_elem is not None and v_elem.text:
                if t == 's':
                    idx = int(v_elem.text)
                    val = shared_strings[idx] if idx < len(shared_strings) else ''
                else:
                    val = v_elem.text
            cols[col_letter] = val
        pn = cols.get('A', '').strip()
        model_name = cols.get('B', '').strip()
        if pn or model_name:
            sheet1_rows.append((r_num, cols))

# Read Sheet 2 rows (Parts)
tree2 = ET.fromstring(z.read('xl/worksheets/sheet2.xml'))
sheet2_rows = []
for row in tree2.findall('{http://schemas.openxmlformats.org/spreadsheetml/2006/main}sheetData/{http://schemas.openxmlformats.org/spreadsheetml/2006/main}row'):
    r_num = int(row.attrib.get('r'))
    if r_num >= 5:
        cols = {}
        for c in row.findall('{http://schemas.openxmlformats.org/spreadsheetml/2006/main}c'):
            r_coord = c.attrib.get('r')
            col_letter = ''.join([ch for ch in r_coord if ch.isalpha()])
            t = c.attrib.get('t')
            v_elem = c.find('{http://schemas.openxmlformats.org/spreadsheetml/2006/main}v')
            val = ''
            if v_elem is not None and v_elem.text:
                if t == 's':
                    idx = int(v_elem.text)
                    val = shared_strings[idx] if idx < len(shared_strings) else ''
                else:
                    val = v_elem.text
            cols[col_letter] = val
        pn = cols.get('A', '').strip()
        name = cols.get('B', '').strip()
        if pn and name:
            sheet2_rows.append((r_num, cols))

# Define row -> image mapping for Scanner models
row_image_map = {
    7: ('xl/media/image24.png', 'ricoh-ix100.png'),
    8: ('xl/media/image9.jpeg', 'ricoh-sp-1120n.jpg'),
    9: ('xl/media/image10.jpeg', 'ricoh-sp-1125n.jpg'),
    10: ('xl/media/image20.jpeg', 'ricoh-sp-1425.jpg'),
    11: ('xl/media/image11.jpeg', 'ricoh-sp-1130n.jpg'),
    12: ('xl/media/image25.png', 'ricoh-ix1300.png'),
    13: ('xl/media/image13.png', 'ricoh-ix1400.png'),
    14: ('xl/media/image12.png', 'ricoh-ix1600.png'),
    15: ('xl/media/image23.jpeg', 'ricoh-ix2400.jpg'),
    16: ('xl/media/image22.png', 'ricoh-ix2500.png'),
    17: ('xl/media/image2.jpeg', 'ricoh-sv600.jpg'),
    18: ('xl/media/image14.jpeg', 'ricoh-fi-800r.jpg'),
    19: ('xl/media/image15.png', 'ricoh-fi-8150u.png'),
    20: ('xl/media/image15.png', 'ricoh-fi-8150.png'),
    21: ('xl/media/image16.png', 'ricoh-fi-8170.png'),
    22: ('xl/media/image16.png', 'ricoh-fi-8190.png'),
    23: ('xl/media/image17.png', 'ricoh-fi-8250u.png'),
    24: ('xl/media/image18.png', 'ricoh-fi-8250.png'),
    25: ('xl/media/image19.png', 'ricoh-fi-8270.png'),
    26: ('xl/media/image19.png', 'ricoh-fi-8290.png'),
    27: ('xl/media/image21.jfif', 'ricoh-fi-8040.jpg'),
    28: ('xl/media/image3.png', 'ricoh-fi-7460.png'),
    29: ('xl/media/image3.png', 'ricoh-fi-7480.png'),
    30: ('xl/media/image4.jpeg', 'ricoh-fi-7600.jpg'),
    31: ('xl/media/image5.jpeg', 'ricoh-fi-7700.jpg'),
    32: ('xl/media/image8.jpeg', 'ricoh-fi-7700s.jpg'),
    33: ('xl/media/image7.jpeg', 'ricoh-fi-7800.jpg'),
    34: ('xl/media/image6.jpg', 'ricoh-fi-7900.jpg'),
    35: ('xl/media/image1.png', 'ricoh-fi-8820.png'),
    36: ('xl/media/image1.png', 'ricoh-fi-8930.png'),
    37: ('xl/media/image1.png', 'ricoh-fi-8950.png'),
}

# Parts image mapping
parts_image_map = {
    'xl/media/image26.jpeg': 'ricoh-exit-roller-fi-7460.jpg',
    'xl/media/image27.jpeg': 'ricoh-feed-roller-fi-7460.jpg',
    'xl/media/image28.jpeg': 'ricoh-roller-set-sp1120.jpg',
    'xl/media/image29.jpeg': 'ricoh-brake-roller-fi-8170.jpg',
    'xl/media/image30.jpeg': 'ricoh-pick-roller-fi-8170.jpg',
    'xl/media/image31.jpeg': 'ricoh-feed-roller-fi-7160.jpg',
    'xl/media/image32.jpeg': 'ricoh-exit-roller-fi-7160.jpg',
}

# Extract and save images
print("Extracting images from Excel...")
for r_num, (src_zip, out_name) in row_image_map.items():
    if src_zip in z.namelist():
        data = z.read(src_zip)
        for d in IMG_DEST_DIRS:
            dest_file = os.path.join(d, out_name)
            with open(dest_file, 'wb') as f:
                f.write(data)
        print(f"  Extracted {out_name} for row {r_num}")

for src_zip, out_name in parts_image_map.items():
    if src_zip in z.namelist():
        data = z.read(src_zip)
        for d in IMG_DEST_DIRS:
            dest_file = os.path.join(d, out_name)
            with open(dest_file, 'wb') as f:
                f.write(data)
        print(f"  Extracted part image {out_name}")

# Also ensure existing fi-7160 and fi-7480 keep valid images
shutil.copyfile('public/assets/images/products/ricoh-fi-8170.png', 'public/assets/images/products/ricoh-fujitsu-fi-7160.jpg')
shutil.copyfile('public/assets/images/products/ricoh-fi-8170.png', 'assets/images/products/ricoh-fujitsu-fi-7160.jpg')
shutil.copyfile('public/assets/images/products/ricoh-fi-7480.png', 'public/assets/images/products/ricoh-fujitsu-fi-7480.jpg')
shutil.copyfile('public/assets/images/products/ricoh-fi-7480.png', 'assets/images/products/ricoh-fujitsu-fi-7480.jpg')

# Helper: parse specifications from description
def parse_specs(desc, detail_desc, made_in, warranty):
    full_text = (desc + "\n" + detail_desc).strip()
    specs = {}
    
    # Tốc độ
    speed_match = re.search(r'Tốc độ\s*(?:quét|Scan)?[:\s]*([^\n\r]+)', full_text, re.IGNORECASE)
    if speed_match:
        specs["Tốc độ quét"] = speed_match.group(1).strip().strip('-• ').replace('  ', ' ')
    elif "Tốc độ" in full_text:
        for line in full_text.splitlines():
            if "tốc độ" in line.lower() and ("ppm" in line.lower() or "giây" in line.lower()):
                specs["Tốc độ quét"] = line.strip().strip('-• ')
                break

    # Khay nạp
    tray_match = re.search(r'Khay\s*giấy(?:\s*ADF)?\s*([0-9]+\s*tờ)', full_text, re.IGNORECASE)
    if tray_match:
        specs["Khay nạp tự động (ADF)"] = tray_match.group(1).strip()

    # Công suất
    duty_match = re.search(r'Công suất\s*([0-9\.,]+\s*tờ/ngày)', full_text, re.IGNORECASE)
    if duty_match:
        specs["Công suất ngày"] = duty_match.group(1).strip()

    # Cổng kết nối
    conn_match = re.search(r'Kết nối[:\s]*([^\n\r]+)', full_text, re.IGNORECASE)
    if conn_match:
        specs["Kết nối"] = conn_match.group(1).strip().strip('-• ')

    # Kích thước & Trọng lượng
    dim_match = re.search(r'Kích thước[^:\n\r]*[:\s]*([^\n\r]+)', full_text, re.IGNORECASE)
    if dim_match:
        specs["Kích thước & Trọng lượng"] = dim_match.group(1).strip().strip('-• ')

    # OCR / Phần mềm
    if "ABBYY" in full_text or "OCR" in full_text:
        specs["Nhận dạng ký tự (OCR)"] = "Tích hợp sẵn ABBYY FineReader tiếng Việt (xuất file Word, Excel, searchable PDF)"
    if "PaperStream" in full_text:
        specs["Trình điều khiển & Xử lý ảnh"] = "PaperStream IP (TWAIN / ISIS) tự động cân chỉnh góc xoay, xóa nền, loại bỏ vết bẩn"

    if made_in:
        specs["Xuất xứ"] = made_in
    if warranty:
        specs["Bảo hành"] = warranty

    return specs

def clean_model_name(raw_name):
    # E.g. "Máy quét Ricoh fi-7800\n(THAY DÒNG FI 6400)" -> ("Máy quét Ricoh fi-7800", "fi-7800", "Thay thế dòng fi-6400")
    raw = raw_name.replace('\r', '').strip()
    sub_note = ""
    if '(' in raw:
        parts = raw.split('(')
        main_name = parts[0].strip()
        sub_note = parts[1].replace(')', '').strip()
    else:
        main_name = raw

    # Model code
    model_code = main_name.replace('Máy quét Ricoh', '').replace('Máy quét', '').strip()
    return main_name, model_code, sub_note

def get_category_label(name, detail):
    lower = (name + " " + detail).lower()
    if "a3" in lower or "7460" in lower or "7480" in lower or "7600" in lower or "7700" in lower or "7800" in lower or "7900" in lower or "8820" in lower or "8930" in lower or "8950" in lower:
        return "Máy scan khổ A3 số hóa"
    if "scansnap" in lower or "ix100" in lower or "ix1300" in lower or "ix1400" in lower or "ix1600" in lower or "ix2400" in lower or "ix2500" in lower or "sv600" in lower:
        return "Máy scan tài liệu cá nhân & văn phòng"
    return "Máy scan số hóa tài liệu"

def get_use_cases(name, label):
    if "A3" in label:
        return [
            "Số hóa bản vẽ kỹ thuật, hồ sơ đất đai, tài liệu lưu trữ khổ lớn A3/A4",
            "Xử lý khối lượng tài liệu công nghiệp từ 50.000 đến trên 100.000 trang/ngày",
            "Tích hợp hệ thống lưu trữ số hóa cho Sở Tài nguyên, Trung tâm Lưu trữ Quốc gia, Thư viện"
        ]
    if "cá nhân" in label or "ScanSnap" in name or "iX" in name:
        return [
            "Quét nhanh hợp đồng, biên lai, danh thiếp và chứng từ cá nhân không dây qua Wifi",
            "Chuyển đổi trực tiếp tài liệu giấy sang Word, Excel và PDF có thể tìm kiếm bằng 1 chạm",
            "Linh hoạt di động cho lãnh đạo, chuyên gia tư vấn hoặc văn phòng nhỏ gọn"
        ]
    return [
        "Số hóa hồ sơ học bạ, văn bằng chứng chỉ cho trường học và cơ sở giáo dục theo Đề án 06",
        "Quét chứng từ kế toán, hồ sơ bệnh án bệnh viện, hồ sơ cán bộ công chức",
        "Tự động nhận dạng tiếng Việt OCR xuất ra tệp PDF phục vụ tra cứu số"
    ]

# Build 31 models list
new_scanner_models = []
all_scanner_slugs = []

for r_num, cols in sheet1_rows:
    pn = cols.get('A', '').strip()
    raw_name = cols.get('B', '').strip()
    desc = cols.get('D', '').strip()
    detail_desc = cols.get('E', '').strip()
    price_str = cols.get('F', '').strip()
    made_in = cols.get('G', '').strip()
    warranty = cols.get('H', '').strip()
    note = cols.get('I', '').strip()

    name, model_code, name_sub_note = clean_model_name(raw_name)
    slug = "ricoh-" + re.sub(r'[^a-z0-9]+', '-', model_code.lower()).strip('-')

    # Specific slug adjustments
    if slug == "ricoh-fi-7480":
        # we also maintain compatibility with ricoh-fujitsu-fi-7480
        pass

    cat_label = get_category_label(name, detail_desc)
    specs = parse_specs(desc, detail_desc, made_in, warranty)
    use_cases = get_use_cases(name, cat_label)

    price_val = 0
    if price_str:
        clean_p = price_str.replace(',', '').replace('.', '').replace(' ', '')
        if clean_p.isdigit():
            price_val = float(clean_p)

    # Compatible models and notes
    compat = []
    if "thay thế" in note.lower() or "thay dòng" in name_sub_note.lower():
        replaced_m = note or name_sub_note
        compat.append(replaced_m)

    image_filename = row_image_map.get(r_num, ('', 'ricoh-fi-8170.png'))[1]
    image_url = f"/assets/images/products/{image_filename}"

    # Rich summary
    summary = desc.replace('\n', ' ')
    if not summary:
        summary = f"{name} chính hãng Ricoh ({made_in}), bảo hành {warranty}."
    if note:
        summary += f" ({note})"

    # Clean full description
    clean_detail = detail_desc if detail_desc else desc
    detail_html = "<div class='product-description-content'>"
    detail_html += f"<p><strong>{name}</strong> là dòng máy quét chuyên dụng chính hãng Ricoh với độ bền bỉ cao, xử lý tài liệu êm ái và chất lượng hình ảnh sắc nét.</p>"
    if desc:
        detail_html += f"<p>{desc.replace(chr(10), '<br/>')}</p>"
    if detail_desc and detail_desc != desc:
        detail_html += "<h4>Tính năng và thông số chi tiết:</h4>"
        detail_html += "<ul>"
        for line in detail_desc.splitlines():
            line_str = line.strip().strip('-• ')
            if line_str:
                detail_html += f"<li>{line_str}</li>"
        detail_html += "</ul>"
    detail_html += "</div>"

    m_obj = {
        "slug": slug,
        "category": "may-scan-so-hoa",
        "url": f"/san-pham/may-scan-so-hoa/{slug}/",
        "name": name,
        "model": model_code,
        "manufacturer": f"Ricoh ({made_in})" if made_in else "Ricoh (Nhật Bản)",
        "sku": pn if pn else f"RICOH-{model_code.upper()}",
        "price": price_val,
        "category_label": cat_label,
        "image": image_url,
        "compatible_model": compat if compat else [f"Ricoh {model_code}"],
        "use_case": use_cases,
        "specifications": specs,
        "summary": summary[:220].strip() + ("..." if len(summary) > 220 else ""),
        "description": detail_html,
        "industry": ["Sở GD&ĐT", "Trường học", "Ngân hàng", "Bệnh viện", "Cơ quan hành chính", "Doanh nghiệp"],
        "source": f"Chính hãng Ricoh. Xuất xứ: {made_in}. Bảo hành: {warranty}.",
        "warranty": warranty if warranty else "12 Tháng",
        "note": note,
    }
    new_scanner_models.append(m_obj)
    all_scanner_slugs.append(slug)

print(f"Generated {len(new_scanner_models)} scanner model objects.")

# Also generate 1 comprehensive Ricoh Scanner Parts item
parts_specs = {}
for r_num, cols in sheet2_rows:
    pn = cols.get('A', '').strip()
    name = cols.get('B', '').strip()
    status = cols.get('D', '').strip()
    used_for = cols.get('E', '').strip()
    price = cols.get('F', '').strip()
    price_val = f"{float(price):,.0f} đ" if price and price.replace('.', '').replace(',', '').isdigit() else "Liên hệ"
    parts_specs[f"{name} ({pn})"] = f"Dùng cho: {used_for} | Tình trạng: {status} | Đơn giá: {price_val}"

parts_model = {
    "slug": "bang-tra-ma-linh-kien-vat-tu-may-scan-ricoh",
    "category": "vat-tu-linh-kien-tieu-hao",
    "url": "/san-pham/vat-tu-linh-kien-tieu-hao/bang-tra-ma-linh-kien-vat-tu-may-scan-ricoh/",
    "name": "Bảng Tra Mã Linh Kiện & Vật Tư Tiêu Hao Máy Scan Ricoh Chính Hãng",
    "model": "RICOH-SCANNER-PARTS-2026",
    "manufacturer": "Ricoh (Nhật Bản)",
    "sku": "RICOH-SCANNER-PARTS",
    "price": 0,
    "category_label": "Vật tư & Linh kiện tiêu hao",
    "image": "/assets/images/products/ricoh-brake-roller-fi-8170.jpg",
    "compatible_model": [
        "fi-7160", "fi-7260", "fi-7460", "fi-7480", "fi-7600", "fi-7700",
        "fi-8150", "fi-8170", "fi-8190", "fi-8250", "fi-8270", "fi-8290",
        "SP-1120N", "SP-1125N", "SP-1130N", "iX1300", "iX1500", "iX1600"
    ],
    "use_case": [
        "Thay thế định kỳ lô kéo giấy (Pick Roller) và lô hãm tách giấy (Brake Roller) sau 200.000 - 300.000 bản quét",
        "Khắc phục triệt để hiện tượng kẹt giấy, quét kéo đúp 2 tờ cùng lúc hoặc không nạp được giấy",
        "Bảo dưỡng định kỳ kéo dài tuổi thọ cụm quang học và trục lăn máy quét Ricoh"
    ],
    "specifications": parts_specs,
    "summary": "Bảng tra cứu mã vật tư tiêu hao chính hãng cho máy quét Ricoh: Lô cuộn kéo giấy, lô hãm, đệm tách giấy, mặt kính và bộ nguồn Adapter cho các dòng fi-series và SP-series.",
    "description": "<p>Hương Sơn phân phối 100% linh kiện và vật tư tiêu hao máy scan Ricoh (Fujitsu) chính hãng: Brake roller, Pick roller, Feed roller, Mặt kính, Nguồn Adapter bảo hành tiêu chuẩn.</p>",
    "industry": ["Trung tâm số hóa", "Cơ quan lưu trữ", "Ngân hàng", "Trường học", "Văn phòng"],
    "source": "Chính hãng Ricoh Nhật Bản.",
    "warranty": "Theo tiêu chuẩn phụ kiện Ricoh",
    "note": "Báo giá cập nhật 2025/2026"
}

# Update products.json
with open(PRODUCTS_JSON, 'r', encoding='utf-8') as f:
    data = json.load(f)

# Retain existing models from other categories
other_models = [m for m in data['models'] if m.get('category') != 'may-scan-so-hoa' and m.get('slug') != parts_model['slug']]

# For may-scan-so-hoa, keep ricoh-fujitsu-fi-7160 as legacy model with note, plus all 31 new models
legacy_fi7160 = next((m for m in data['models'] if m.get('slug') == 'ricoh-fujitsu-fi-7160'), None)
if legacy_fi7160:
    legacy_fi7160['note'] = "Model tiền nhiệm đã nâng cấp lên dòng thế hệ mới Ricoh fi-8170."
    legacy_fi7160['compatible_model'] = ["fi-8170", "fi-7260"]
    final_scanner_models = [legacy_fi7160] + new_scanner_models
else:
    final_scanner_models = new_scanner_models

# Add parts model to vat-tu-linh-kien-tieu-hao
final_models = other_models + final_scanner_models + [parts_model]
data['models'] = final_models

# Update categories list in data
for cat in data['categories']:
    if cat['slug'] == 'may-scan-so-hoa':
        cat['models'] = [m['slug'] for m in final_scanner_models]
    elif cat['slug'] == 'vat-tu-linh-kien-tieu-hao':
        if parts_model['slug'] not in cat['models']:
            cat['models'].append(parts_model['slug'])

with open(PRODUCTS_JSON, 'w', encoding='utf-8') as f:
    json.dump(data, f, ensure_ascii=False, indent=2)

print(f"Successfully updated {PRODUCTS_JSON} with {len(final_models)} total products!")
print(f"may-scan-so-hoa now has {len(final_scanner_models)} models.")
