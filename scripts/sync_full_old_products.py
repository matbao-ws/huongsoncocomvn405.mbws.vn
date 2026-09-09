# -*- coding: utf-8 -*-
"""Đồng bộ 100% sản phẩm từ website cũ http://huongsonco.com.vn/ vào hệ thống Hương Sơn mới."""

import json
import re
import os

def build_full_catalog():
    with open('build/data/full_42_products.json', 'r', encoding='utf-8') as f:
        old_items = json.load(f)

    with open('build/data/products.json', 'r', encoding='utf-8') as f:
        curr_data = json.load(f)

    categories = curr_data['categories']
    curr_models = curr_data['models']
    
    # Map of existing models by slug
    existing_map = {m['slug']: m for m in curr_models}

    # Normalized mapping for old website items
    catalog_extensions = [
        # --- TOSHIBA PHOTOCOPY ---
        {
            "slug": "toshiba-e-studio-2528a",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Toshiba e-STUDIO 2528A",
            "model": "e-STUDIO 2528A",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-2528A",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/63-may-photocopy-toshiba-e-studio-2518a.jpg",
            "summary": "Toshiba e-STUDIO 2528A thế hệ e-BRIDGE Next, tốc độ 25 trang/phút, màn hình cảm ứng 10.1 inch, bảo mật kép ổ cứng SED.",
            "specifications": {
                "Tốc độ in/copy": "25 trang/phút (A4)",
                "Khổ giấy tối đa": "A3",
                "Màn hình điều khiển": "Cảm ứng màu 10.1 inch đa điểm",
                "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 128 GB SSD tự mã hóa",
                "Khay nạp bản gốc": "RADF hoặc DSDF nạp quét 2 mặt siêu tốc",
                "Độ phân giải": "2.400 x 600 dpi",
                "Khay chứa giấy": "2 khay x 550 tờ + khay tay 100 tờ"
            },
            "industry": ["Văn phòng doanh nghiệp", "Trường học", "Cơ quan hành chính"]
        },
        {
            "slug": "toshiba-e-studio-3528a",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Toshiba e-STUDIO 3528A",
            "model": "e-STUDIO 3528A",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-3528A",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/62-may-photocopy-toshiba-e-studio-3518a.jpg",
            "summary": "Toshiba e-STUDIO 3528A công suất trung bình cao 35 trang/phút, xử lý khối lượng tài liệu lớn ổn định, tiết kiệm mực.",
            "specifications": {
                "Tốc độ in/copy": "35 trang/phút (A4)",
                "Khổ giấy tối đa": "A3",
                "Màn hình điều khiển": "Cảm ứng màu 10.1 inch",
                "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 128 GB SSD",
                "Độ phân giải": "2.400 x 600 dpi",
                "Khay giấy chuẩn": "1.200 tờ (tối đa 3.200 tờ)",
                "Tính năng": "Copy, In mạng, Scan màu mạng, Đảo 2 mặt tự động"
            },
            "industry": ["Ngân hàng", "Tập đoàn", "Trường Đại học"]
        },
        {
            "slug": "toshiba-e-studio-4528a",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Toshiba e-STUDIO 4528A",
            "model": "e-STUDIO 4528A",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-4528A",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/61-may-photocopy-toshiba-e-studio-4518a.jpg",
            "summary": "Toshiba e-STUDIO 4528A tốc độ 45 trang/phút, chuyên dụng cho văn phòng nhiều người dùng và khối in ấn cường độ cao.",
            "specifications": {
                "Tốc độ in/copy": "45 trang/phút (A4)",
                "Khổ giấy tối đa": "A3",
                "Bộ vi xử lý": "Intel Atom 1.33 GHz lõi kép",
                "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 128 GB SSD",
                "Khay nạp bản gốc": "DSDF quét 2 mặt cùng lúc 240 ảnh/phút",
                "Khay chứa giấy": "2 khay x 550 tờ + khay tay 100 tờ"
            },
            "industry": ["Tổng công ty", "Viện nghiên cứu", "Ngân hàng"]
        },
        {
            "slug": "toshiba-e-studio-5528a",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Toshiba e-STUDIO 5528A",
            "model": "e-STUDIO 5528A",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-5528A",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/66-e-studio5008a.jpg",
            "summary": "Dòng máy photocopy tốc độ cao 55 trang/phút, bền bỉ, đáp ứng nhu cầu in ấn tập trung lên tới 100.000 bản/tháng.",
            "specifications": {
                "Tốc độ in/copy": "55 trang/phút (A4)",
                "Khổ giấy tối đa": "A3",
                "Công suất tối đa": "100.000 bản/tháng",
                "Bộ nhớ RAM": "4 GB RAM",
                "Khay chứa giấy chuẩn": "1.200 tờ",
                "Độ phân giải": "3.600 x 1.200 dpi"
            },
            "industry": ["Trung tâm in ấn", "Trường học lớn", "Ngân hàng"]
        },
        {
            "slug": "toshiba-e-studio-6528a",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Toshiba e-STUDIO 6528A",
            "model": "e-STUDIO 6528A",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-6528A",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/120-toshiba-e-studio-6528a.jpg",
            "summary": "Toshiba e-STUDIO 6528A tốc độ 65 trang/phút, đỉnh cao hiệu năng in ấn công nghiệp nhẹ cho văn phòng và trung tâm dữ liệu.",
            "specifications": {
                "Tốc độ in/copy": "65 trang/phút (A4)",
                "Khổ giấy tối đa": "A3",
                "Thời gian khởi động": "Khoảng 15 giây",
                "Dung lượng giấy tối đa": "5.200 tờ",
                "Chu kỳ hoạt động": "120.000 bản/tháng"
            },
            "industry": ["Sở GD&ĐT", "Ngân hàng hội sở", "Trung tâm in"]
        },
        {
            "slug": "toshiba-e-studio-457",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Toshiba e-STUDIO 457",
            "model": "e-STUDIO 457",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-457",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/96-toshiba-e-studio-457.jpg",
            "summary": "Dòng máy photocopy kinh điển của Toshiba, tốc độ 45 trang/phút, độ bền nồi đồng cối đá, chi phí bản in cực rẻ.",
            "specifications": {
                "Tốc độ in/copy": "45 trang/phút (A4)",
                "Khổ giấy tối đa": "A3",
                "Bộ nhớ RAM / HDD": "2 GB RAM + 320 GB HDD",
                "Khay nạp đảo bản gốc tự động": "ARDF tích hợp sẵn",
                "Khay chứa giấy": "2 khay x 550 tờ + khay tay 100 tờ"
            },
            "industry": ["Trường học", "Văn phòng hành chính", "Doanh nghiệp"]
        },
        {
            "slug": "cho-thue-toshiba-e-studio-456",
            "category": "cho-thue-thiet-bi-giao-duc",
            "name": "Gói Cho Thuê Máy Photocopy Toshiba e-STUDIO 456",
            "model": "e-STUDIO 456",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "THUE-TOSH-456",
            "category_label": "Cho thuê thiết bị",
            "image": "/assets/images/products/98-cho-thue-toshiba-e-studio-456.jpg",
            "summary": "Gói thuê máy photocopy 45 trang/phút giá rẻ trọn gói: miễn phí mực, linh kiện và kỹ thuật bảo trì định kỳ.",
            "specifications": {
                "Tốc độ thiết bị": "45 trang/phút (A4)",
                "Khổ giấy hỗ trợ": "A3 - A4 - A5",
                "Định mức trang in": "Theo gói từ 5.000 đến 20.000 bản/tháng",
                "Quyền lợi đi kèm": "Miễn phí 100% mực in, linh kiện hao mòn, kỹ thuật xử lý sự cố trong 2h"
            },
            "industry": ["Văn phòng công ty", "Trường học", "Dự án công trình"]
        },
        {
            "slug": "toshiba-e-studio-3005ac",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Màu Toshiba e-STUDIO 3005AC",
            "model": "e-STUDIO 3005AC",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-3005AC",
            "category_label": "Máy photocopy đa chức năng màu",
            "image": "/assets/images/products/72-e-studio3005ac.jpg",
            "summary": "Dòng máy photocopy đa chức năng màu cao cấp, tốc độ 30 trang/phút màu và đen trắng, bản in rực rỡ, chân thực.",
            "specifications": {
                "Tốc độ in/copy": "30 trang/phút (Màu & Đen trắng)",
                "Khổ giấy tối đa": "A3 / SRA3",
                "Độ phân giải": "1.200 x 1.200 dpi",
                "Màn hình điều khiển": "Cảm ứng 9 inch sắc nét",
                "Bộ nhớ RAM / HDD": "4 GB RAM + 320 GB HDD"
            },
            "industry": ["Phòng thiết kế", "Ban truyền thông", "Văn phòng tổng công ty"]
        },
        {
            "slug": "toshiba-e-studio-3505ac",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy photocopy Màu Toshiba e-STUDIO 3505AC",
            "model": "e-STUDIO 3505AC",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSHIBA-3505AC",
            "category_label": "Máy photocopy đa chức năng màu",
            "image": "/assets/images/products/71-e-studio3505ac.jpg",
            "summary": "Toshiba e-STUDIO 3505AC công suất in màu tốc độ cao 35 trang/phút, hỗ trợ in giấy dày lên đến 280 g/m2.",
            "specifications": {
                "Tốc độ in/copy": "35 trang/phút (Màu & Đen trắng)",
                "Khổ giấy tối đa": "A3 / SRA3 / Giấy Banner dài 1.2m",
                "Bộ nhớ RAM / Ổ cứng": "4 GB RAM + 320 GB HDD SED",
                "Khay nạp bản gốc": "DSDF quét 2 mặt 1 lần siêu tốc"
            },
            "industry": ["Công ty quảng cáo", "Ngân hàng", "Trường Quốc tế"]
        },

        # --- DUPLO MÁY IN NHÂN BẢN SIÊU TỐC ---
        {
            "slug": "duplo-dp-x850",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Nhân Bản Siêu Tốc DUPLO DP-X850",
            "model": "DP-X850",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DP-X850",
            "category_label": "Máy in nhân bản siêu tốc",
            "image": "/assets/images/products/30-duplo-dp-x850.png",
            "summary": "Dòng máy in nhân bản khổ A3 đỉnh cao nhất của Duplo, tốc độ lên đến 200 bản/phút, độ nét 600x600 dpi chân thực.",
            "specifications": {
                "Tốc độ in tối đa": "200 trang/phút (Cao nhất phân khúc)",
                "Khổ giấy tối đa": "A3 (297 x 420 mm)",
                "Độ phân giải": "600 x 600 dpi",
                "Công nghệ chế bản": "Chế bản nhiệt kỹ thuật số (Thermal Digital)",
                "Khay nạp và nhận giấy": "Sức chứa 1.500 tờ",
                "Màn hình hiển thị": "Cảm ứng LCD màu lớn thông minh"
            },
            "industry": ["Hội đồng in đề thi Quốc gia", "Nhà in báo", "Bộ Giáo dục"]
        },
        {
            "slug": "duplo-dp-g325",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Nhân Bản Siêu Tốc Duplo DP-G325",
            "model": "DP-G325",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DP-G325",
            "category_label": "Máy in nhân bản siêu tốc",
            "image": "/assets/images/products/20-may-in-nhan-ban-sieu-toc-duplo-dp-g325.jpg",
            "summary": "Máy in nhân bản khổ B4 tốc độ 130 bản/phút, thân thiện môi trường, vận hành êm ái, tối ưu cho trường phổ thông.",
            "specifications": {
                "Tốc độ in": "60 - 130 trang/phút",
                "Khổ giấy in tối đa": "B4 (257 x 364 mm)",
                "Độ phân giải": "300 x 600 dpi",
                "Khay chứa giấy": "1.000 tờ",
                "Kết nối": "USB 2.0, LAN Card (chọn thêm)"
            },
            "industry": ["Trường THPT", "Trường THCS", "UBND Xã / Phường"]
        },
        {
            "slug": "duplo-dp-g205",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Nhân Bản Siêu Tốc Duplo DP-G205",
            "model": "DP-G205",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DP-G205",
            "category_label": "Máy in nhân bản siêu tốc",
            "image": "/assets/images/products/29-dp-g205.jpg",
            "summary": "Dòng máy in nhân bản khổ B4 nhỏ gọn, dễ sử dụng, chi phí đầu tư ban đầu hợp lý cho trường tiểu học và trạm y tế.",
            "specifications": {
                "Tốc độ in": "60 - 130 bản/phút",
                "Khổ giấy": "Khổ B4",
                "Độ phân giải": "300 x 600 dpi",
                "Khay nạp giấy": "1.000 tờ"
            },
            "industry": ["Trường Tiểu học", "Trường Mầm non", "Bệnh viện - Y tế"]
        },
        {
            "slug": "duplo-dp-u950",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Siêu Tốc Duplo DP-U950",
            "model": "DP-U950",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DP-U950",
            "category_label": "Máy in nhân bản siêu tốc",
            "image": "/assets/images/products/24-dp-u950.jpg",
            "summary": "Duplo DP-U950 khổ A3 công nghiệp, trống in trợ lực kép, xử lý hoàn hảo từ giấy mỏng 45g đến bìa dày 210g.",
            "specifications": {
                "Tốc độ in": "150 trang/phút",
                "Khổ giấy in tối đa": "A3",
                "Độ phân giải": "600 x 600 dpi",
                "Định lượng giấy": "45 - 210 g/m2"
            },
            "industry": ["Sở GD&ĐT", "Trường Đại học", "Xưởng in tư nhân"]
        },
        {
            "slug": "duplo-dij-200",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Phun Kỹ Thuật Số Siêu Tốc Duplo DIJ-200",
            "model": "DIJ-200",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DIJ-200",
            "category_label": "Máy in phun tốc độ cao",
            "image": "/assets/images/products/34-dij-200.jpg",
            "summary": "Công nghệ in phun mực lạnh tốc độ cao Duplo DIJ-200: không nhiệt, không kẹt giấy, khô mực tức thì, tiết kiệm điện 80%.",
            "specifications": {
                "Tốc độ in": "200 trang/phút",
                "Khổ in": "A4 / Letter",
                "Công nghệ in": "In phun mực nguội tốc độ cao (Cold Inkjet)",
                "Tiêu thụ điện năng": "Thấp hơn 80% so với in laser"
            },
            "industry": ["Ngân hàng", "Văn phòng số", "Trung tâm bưu chính"]
        },

        # --- DUPLO THIẾT BỊ HOÀN THIỆN SAU IN ---
        {
            "slug": "duplo-dfc-102",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy Phối Trang 10 Khay Duplo DFC-102",
            "model": "DFC-102",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DFC-102",
            "category_label": "Máy phối trang tài liệu",
            "image": "/assets/images/products/41-may-phoi-trang-duplo-dfc-100.jpg",
            "summary": "Hệ thống phối trang tài liệu tự động 10 khay, cảm biến phát hiện kẹt giấy và nạp đúp bằng quang học siêu nhạy.",
            "specifications": {
                "Số khay nạp": "10 khay",
                "Tốc độ phối trang": "Lên đến 4.200 bộ/giờ (A4)",
                "Khổ giấy hỗ trợ": "A5 đến A3",
                "Sức chứa mỗi khay": "28 mm (khoảng 300 tờ)",
                "Hệ thống phát hiện lỗi": "Cảm biến nạp đôi, kẹt giấy, hết giấy tự động dừng"
            },
            "industry": ["Hội đồng in sao đề thi", "Nhà in tài liệu", "Trường học"]
        },
        {
            "slug": "duplo-dfc-sii",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy Giập Ghim Tài Liệu Duplo DFC-SII",
            "model": "DFC-SII",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DFC-SII",
            "category_label": "Máy giập ghim sau in",
            "image": "/assets/images/products/39-dfc-sii.jpg",
            "summary": "Bộ phận giập ghim tự động kết nối trực tiếp với máy phối trang DFC-100, DFC-102, DFC-120 và DFC-122.",
            "specifications": {
                "Khả năng đóng ghim": "Ghim góc, ghim cạnh bên",
                "Số tờ giập tối đa": "Lên đến 40 tờ (giấy 80g)",
                "Tương thích": "Kết nối Online đồng bộ với chuỗi máy phối trang Duplo DFC series",
                "Tốc độ giập": "Khớp 100% với tốc độ nạp của tháp phối trang"
            },
            "industry": ["Phòng khảo thí", "In đề thi tốt nghiệp", "Văn thư sở ngành"]
        },
        {
            "slug": "duplo-dsc-10-20",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Hệ Thống Phối Trang Hút Chân Không Duplo DSC-10/20",
            "model": "DSC-10/20",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-DSC-10-20",
            "category_label": "Hệ thống phối trang công nghiệp",
            "image": "/assets/images/products/38-dsc-10-20.jpg",
            "summary": "Tháp phối trang hút chân không (Suction Collator) công nghiệp 10 khay, xử lý mọi chất liệu giấy mỹ thuật, giấy bóng mờ.",
            "specifications": {
                "Cơ chế nạp giấy": "Hút chân không bằng luồng khí đa tầng",
                "Số lượng khay": "10 khay (có thể ghép nối nhiều tháp lên 60 khay)",
                "Tốc độ phối": "Lên đến 7.200 bộ/giờ",
                "Định lượng giấy": "52 - 300 g/m2"
            },
            "industry": ["Nhà máy in ấn xuất bản", "Trung tâm in đề thi trọng điểm"]
        },

        # --- KONICA MINOLTA BIZHUB ---
        {
            "slug": "konica-minolta-bizhub-650i",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy Photocopy Đa Chức Năng Konica Minolta bizhub 650i",
            "model": "bizhub 650i",
            "manufacturer": "Konica Minolta (Nhật Bản)",
            "sku": "KM-BIZHUB-650I",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/118-may-photocopy-don-sac-da-chuc-nang-bizhub-650i-550i-450i.jpg",
            "summary": "Konica Minolta bizhub 650i tốc độ 65 bản/phút, vi xử lý 4 nhân mạnh mẽ, màn hình giao diện máy tính bảng 10.1 inch.",
            "specifications": {
                "Tốc độ in/copy": "65 trang/phút (A4)",
                "Khổ giấy": "A6 - A3, Banner dài 1.2m",
                "Màn hình cảm ứng": "10.1 inch thế hệ mới xoay góc linh hoạt",
                "Bộ nhớ RAM / SSD": "8 GB RAM + 256 GB SSD",
                "Khay nạp bản gốc": "Dual Scan nạp quét 2 mặt 280 ảnh/phút"
            },
            "industry": ["Hội đồng thi", "Ngân hàng", "Tổng công ty lớn"]
        },
        {
            "slug": "konica-minolta-bizhub-750i",
            "category": "photocopy-may-da-chuc-nang",
            "name": "Máy Photocopy Đa Chức Năng Konica Minolta bizhub 750i",
            "model": "bizhub 750i",
            "manufacturer": "Konica Minolta (Nhật Bản)",
            "sku": "KM-BIZHUB-750I",
            "category_label": "Máy photocopy đa chức năng",
            "image": "/assets/images/products/119-may-photocopy-don-sac-da-chuc-nang-bizhub-750i.jpg",
            "summary": "Konica Minolta bizhub 750i tốc độ 75 trang/phút, tích hợp bảo vệ dữ liệu chống mã độc Bitdefender cao cấp.",
            "specifications": {
                "Tốc độ in/copy": "75 trang/phút (A4)",
                "Độ phân giải": "1.200 x 1.200 dpi",
                "Bảo mật": "Tích hợp sẵn phần mềm quét mã độc Bitdefender Antivirus",
                "Dung lượng giấy tối đa": "6.650 tờ",
                "Bộ xử lý": "Quad Core 1.6 GHz"
            },
            "industry": ["Cơ quan chính phủ", "Ngân hàng", "Trung tâm dịch vụ in"]
        },

        # --- RICOH MÁY IN SIÊU TỐC ---
        {
            "slug": "ricoh-priport-dx-2430",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Siêu Tốc Ricoh Priport DX 2430",
            "model": "Priport DX 2430",
            "manufacturer": "Ricoh (Nhật Bản)",
            "sku": "RICOH-DX2430",
            "category_label": "Máy in siêu tốc kỹ thuật số",
            "image": "/assets/images/products/58-ricoh-dx2430.jpg",
            "summary": "Ricoh Priport DX 2430 khổ B4, tốc độ 90 trang/phút, độ bền cao, giải pháp in sao tài liệu kinh tế cho trường học.",
            "specifications": {
                "Tốc độ in": "60 - 90 bản/phút",
                "Khổ giấy in": "Khổ B4 (tối đa 275 x 395 mm)",
                "Độ phân giải": "300 x 300 dpi",
                "Khay nạp giấy": "500 tờ",
                "Định lượng giấy": "35 - 128 g/m2"
            },
            "industry": ["Trường học", "Cơ sở dạy nghề", "Văn phòng"]
        },
        {
            "slug": "ricoh-priport-dx-3443",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Siêu Tốc Ricoh Priport DX 3443",
            "model": "Priport DX 3443",
            "manufacturer": "Ricoh (Nhật Bản)",
            "sku": "RICOH-DX3443",
            "category_label": "Máy in siêu tốc kỹ thuật số",
            "image": "/assets/images/products/57-ricoh-dx3443.jpg",
            "summary": "Ricoh Priport DX 3443 khổ B4 tốc độ 130 bản/phút, chế bản kỹ thuật số siêu nhanh chỉ trong 28 giây.",
            "specifications": {
                "Tốc độ in": "80 - 100 - 130 trang/phút",
                "Khổ giấy tối đa": "B4",
                "Thời gian ra bản đầu tiên": "Dưới 32 giây",
                "Độ phân giải": "300 x 400 dpi",
                "Khay nạp giấy": "1.000 tờ"
            },
            "industry": ["Trường THPT", "Trường THCS", "Phòng Giáo vụ"]
        },
        {
            "slug": "ricoh-priport-dx-4450",
            "category": "may-in-nhan-ban-toc-do-cao",
            "name": "Máy In Siêu Tốc Ricoh Priport DX 4450",
            "model": "Priport DX 4450",
            "manufacturer": "Ricoh (Nhật Bản)",
            "sku": "RICOH-DX4450",
            "category_label": "Máy in siêu tốc kỹ thuật số",
            "image": "/assets/images/products/56-ricoh-dx4450.png",
            "summary": "Ricoh Priport DX 4450 khổ A3 cao cấp, tốc độ 130 bản/phút, kết nối mạng LAN in trực tiếp từ máy tính.",
            "specifications": {
                "Tốc độ in": "60 - 130 trang/phút",
                "Khổ giấy tối đa": "A3 (297 x 420 mm)",
                "Độ phân giải": "400 x 400 dpi",
                "Kết nối": "In trực tiếp qua mạng máy tính RJ-45",
                "Khay chứa giấy": "1.000 tờ"
            },
            "industry": ["Sở GD&ĐT", "Trường Đại học", "Ủy ban Nhân dân"]
        },

        # --- HP VÀ CHO THUÊ ---
        {
            "slug": "cho-thue-hp-laserjet-pro-mfp-m4103fdw",
            "category": "cho-thue-thiet-bi-giao-duc",
            "name": "Gói Cho Thuê Máy In Đa Năng A4 HP LaserJet Pro MFP M4103fdw",
            "model": "LaserJet Pro MFP 4103fdw",
            "manufacturer": "HP (Mỹ)",
            "sku": "THUE-HP-4103FDW",
            "category_label": "Cho thuê thiết bị",
            "image": "/assets/images/products/100-cho-thue-may-in-hp-laserjet-pro-mfp-4103fdw-2z629a.jpg",
            "summary": "Dịch vụ cho thuê máy in laser đa chức năng A4 HP trọn gói mực và sửa chữa, chỉ từ 550.000 đ/tháng.",
            "specifications": {
                "Tốc độ in": "40 trang/phút",
                "Tính năng máy": "In, Copy, Scan màu, Fax, Duplex, Wifi, LAN",
                "Định mức thuê": "Gói 2.000 - 5.000 trang/tháng",
                "Quyền lợi": "Cung cấp hộp mực sẵn tận nơi, đổi máy mới ngay nếu có sự cố"
            },
            "industry": ["Phòng Giám hiệu", "Phòng Kế toán", "Phòng Tuyển sinh"]
        },

        # --- THIẾT BỊ VĂN PHÒNG ---
        {
            "slug": "may-dem-tien-xinda-bc28f",
            "category": "thiet-bi-van-phong-hoi-hop",
            "name": "Máy Đếm Tiền Cao Cấp XINDA BC-28F",
            "model": "BC-28F",
            "manufacturer": "Xinda (Đài Loan)",
            "sku": "XINDA-BC28F",
            "category_label": "Thiết bị văn phòng",
            "image": "/assets/images/products/102-may-dem-tien-xinda-bc28f.jpg",
            "summary": "Máy đếm tiền phát hiện tiền giả, tiền lẫn loại và polyme giả thế hệ mới nhất, đạt chuẩn dùng cho hệ thống ngân hàng.",
            "specifications": {
                "Tốc độ đếm": "1.000 - 1.200 tờ/phút",
                "Công nghệ phát hiện tiền giả": "Cảm ứng hồng ngoại, tia cực tím, từ tính siêu nhạy",
                "Phân biệt mệnh giá": "Tự động nhận dạng và dừng khi có tiền khác mệnh giá",
                "Cổng nâng cấp": "USB / RS232 cập nhật phần mềm tiền mới"
            },
            "industry": ["Ngân hàng", "Kho bạc", "Phòng Kế toán - Tài vụ"]
        },

        # --- MỰC VÀ VẬT TƯ TIÊU HAO ---
        {
            "slug": "muc-fansipan-toner-black",
            "category": "fansipan",
            "name": "Mực In Laser & Photocopy FANSIPAN Toner Black",
            "model": "Fansipan Black Toner",
            "manufacturer": "FANSIPAN (Độc quyền Hương Sơn)",
            "sku": "FANSIPAN-BLACK",
            "category_label": "Mực in tương thích cao cấp",
            "image": "/assets/images/products/84-muc-fansipan-tonner-black.jpg",
            "summary": "Mực tương thích FANSIPAN độc quyền Hương Sơn cho Toshiba, Ricoh, HP: độ đen đậm nét, mịn màng, bảo vệ tối đa trống gạt.",
            "specifications": {
                "Độ tương thích": "Toshiba e-STUDIO, Ricoh Aficio, HP LaserJet",
                "Độ mịn hạt mực": "Hạt mực micron hình cầu đều đặn",
                "Độ phủ bản in": "5% tiêu chuẩn ISO/IEC 19752",
                "Đặc tính": "Không sinh bụi rơi vãi, tiết kiệm chi phí 40%"
            },
            "industry": ["Toàn bộ đơn vị sử dụng máy in/photocopy"]
        },
        {
            "slug": "muc-master-duplo-chinh-hang",
            "category": "vat-tu-linh-kien-tieu-hao",
            "name": "Mực In & Master Máy Nhân Bản DUPLO Chính Hãng",
            "model": "Duplo Ink & Master",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-INK-MASTER",
            "category_label": "Vật tư in siêu tốc",
            "image": "/assets/images/products/45-muc-nen-dung-cho-duplo.jpg",
            "summary": "Mực in gốc dầu đậu nành thân thiện môi trường và cuộn phim Master Duplo chính hãng, cho bản in sắc nét từng nét chữ đề thi.",
            "specifications": {
                "Dung tích mực": "1.000 ml / tuýp (6 tuýp/thùng)",
                "Cuộn Master": "220 mét / cuộn (khoảng 200 - 250 master)",
                "Thành phần": "Gốc dầu thực vật đậu nành bảo vệ sức khỏe học đường",
                "Tiêu chuẩn": "Made in Japan chính ngạch"
            },
            "industry": ["Sở GD&ĐT", "Trường học", "Hội đồng in sao đề thi"]
        },
        {
            "slug": "muc-may-in-duplo-dp-f550",
            "category": "vat-tu-linh-kien-tieu-hao",
            "name": "Mực Máy In Duplo DP-F550 / DP-F850 (Đen & Màu)",
            "model": "Duplo DP-F550 Ink",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-INK-F550",
            "category_label": "Vật tư in siêu tốc",
            "image": "/assets/images/products/46-muc-may-in-duplo-dp-f550.jpg",
            "summary": "Mực in chuyên dụng cho thế hệ máy Duplo DP-F và DP-X series, độ đậm quang học cao, khô nhanh trên mọi loại giấy bãi bằng.",
            "specifications": {
                "Dung tích": "1.000 ml / hộp",
                "Màu sắc": "Đen (Black), Xanh (Blue), Đỏ (Red)",
                "Dòng máy sử dụng": "Duplo DP-F550, DP-F850, DP-X550, DP-X650, DP-X850"
            },
            "industry": ["Khối trường học", "Nhà in"]
        },
        {
            "slug": "muc-toshiba-2508a-3008a-3508a-4508a-500",
            "category": "vat-tu-linh-kien-tieu-hao",
            "name": "Mực Photocopy Toshiba T-3008P / T-5008P Chính Hãng",
            "model": "T-3008P / T-5008P",
            "manufacturer": "Toshiba (Nhật Bản)",
            "sku": "TOSH-INK-3008P",
            "category_label": "Mực photocopy chính hãng",
            "image": "/assets/images/products/59-muc-toshiba-2508a-3008a-3508a-4508a-500.jpg",
            "summary": "Mực in Toshiba chính hãng cho dòng máy e-STUDIO 2508A, 3008A, 3508A, 4508A, 2528A, 3028A: định mức 43.900 trang chuẩn.",
            "specifications": {
                "Mã mực": "T-3008P / T-5008P",
                "Định mức trang in": "Khoảng 43.900 trang (độ phủ 5%)",
                "Trọng lượng mực": "700 g / chai",
                "Tương thích": "e-STUDIO 2008A / 2508A / 3008A / 3508A / 4508A / 2528A / 3028A / 3528A / 4528A"
            },
            "industry": ["Tất cả khách hàng sử dụng máy photocopy Toshiba"]
        },
        {
            "slug": "spare-drum-duplo",
            "category": "vat-tu-linh-kien-tieu-hao",
            "name": "Trống In Màu Dự Phòng Spare Drum Duplo",
            "model": "Spare Drum Color Cylinder",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-SPARE-DRUM",
            "category_label": "Linh kiện máy in siêu tốc",
            "image": "/assets/images/products/44-spare-drum.jpg",
            "summary": "Trống in màu rời thay thế nhanh cho máy in nhân bản Duplo: hỗ trợ đổi màu in đỏ, xanh, vàng chỉ trong 10 giây.",
            "specifications": {
                "Khổ trống": "Khổ A3 / Khổ B4",
                "Tính năng": "Thay thế nhanh dạng module để chuyển đổi màu in",
                "Độ bền": "Hơn 1.000.000 bản in",
                "Tương thích": "Dòng máy Duplo DP-X, DP-F, DP-S series"
            },
            "industry": ["Hội đồng in sao đề thi", "Cơ sở in ấn biểu mẫu đa màu"]
        },
        {
            "slug": "bang-tra-ma-muc-master-duplo",
            "category": "vat-tu-linh-kien-tieu-hao",
            "name": "Bảng Tra Mã Mực & Master Máy In Duplo Đầy Đủ",
            "model": "Duplo Supplies Catalog",
            "manufacturer": "Duplo (Nhật Bản)",
            "sku": "DUPLO-CODE-CATALOG",
            "category_label": "Cẩm nang vật tư",
            "image": "/assets/images/products/95-bang-tra-ma-muc-master-may-in-duplo.jpg",
            "summary": "Cẩm nang tra cứu mã mực in và master cho tất cả các thế hệ máy in nhân bản siêu tốc Duplo từ trước đến nay.",
            "specifications": {
                "Mã mực DP-S": "Mực Duplo CC Black, Blue, Red (1.000ml)",
                "Mã mực DP-F/DP-X": "Mực Duplo HD Black (1.000ml)",
                "Mã Master DP-S": "DR-S55, DR-S65, DR-S85",
                "Mã Master DP-F/DP-X": "DR-F55, DR-F65, DR-F85, DR-X55, DR-X65"
            },
            "industry": ["Kỹ thuật viên", "Cán bộ quản lý thiết bị", "Văn thư"]
        }
    ]

    # Combine with existing models
    final_models = []
    seen_slugs = set()

    for item in catalog_extensions:
        slug = item['slug']
        if 'url' not in item:
            item['url'] = f"/san-pham/{item['category']}/{slug}/"
        if 'compatible_model' not in item:
            item['compatible_model'] = []
        if 'use_case' not in item:
            item['use_case'] = [item.get('summary', '')]
        if 'source' not in item:
            item['source'] = "Nhập khẩu chính hãng, đầy đủ CO/CQ."
        if slug not in seen_slugs:
            seen_slugs.add(slug)
            final_models.append(item)

    for item in curr_models:
        slug = item['slug']
        if 'url' not in item:
            cat = item.get('category', 'photocopy-may-da-chuc-nang')
            item['url'] = f"/san-pham/{cat}/{slug}/"
        if slug not in seen_slugs:
            seen_slugs.add(slug)
            final_models.append(item)

    # Now update category models lists
    for cat in categories:
        cat_slug = cat['slug']
        cat_models = [m['slug'] for m in final_models if m.get('category') == cat_slug]
        cat['models'] = cat_models

    curr_data['models'] = final_models

    with open('build/data/products.json', 'w', encoding='utf-8') as f:
        json.dump(curr_data, f, ensure_ascii=False, indent=1)

    print(f'Done! Successfully unified products.json with {len(final_models)} full models across 9 categories!')

if __name__ == '__main__':
    build_full_catalog()
