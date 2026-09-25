import os
import glob

def run_cleanup():
    files_to_update = glob.glob('resources/views/client/pages/products/**/*.blade.php', recursive=True) + \
                      glob.glob('san-pham/**/*.html', recursive=True)

    modified_count = 0

    for fpath in files_to_update:
        normalized = fpath.replace('\\', '/').lower()
        is_fansipan = 'fansipan' in normalized
        is_rental = 'cho-thue' in normalized or 'goi-thue' in normalized
        is_guide = 'bang-tra-ma' in normalized
        is_drum = 'trong-drum' in normalized

        if not (is_fansipan or is_rental or is_guide or is_drum):
            continue

        with open(fpath, 'r', encoding='utf-8') as f:
            content = f.read()

        orig = content

        if is_rental:
            content = content.replace('Phân phối chính hãng bởi Hương Sơn, đầy đủ CO/CQ và bảo hành.',
                                      'Dịch vụ cho thuê thiết bị trọn gói bởi Hương Sơn, miễn phí 100% mực in, linh kiện và bảo trì tận nơi.')
            content = content.replace('<span>100% Thiết bị chính hãng CO/CQ</span>',
                                      '<span>Trọn gói mực & bảo trì tận nơi</span>')
            content = content.replace('<i class="fa-solid fa-shield-check text-[#5eb74c]"></i> <span>Trọn gói mực & bảo trì tận nơi</span>',
                                      '<i class="fa-solid fa-handshake text-[#5eb74c]"></i> <span>Trọn gói mực & bảo trì tận nơi</span>')
            content = content.replace('<span>100% Chính Hãng CO/CQ</span>',
                                      '<span>Trọn Gói Mực & Bảo Trì</span>')
            content = content.replace('"value": "Nhập khẩu chính hãng, đầy đủ CO/CQ."',
                                      '"value": "Máy tuyển chọn chất lượng cao 90–95%, trọn gói mực in & bảo trì tận nơi bởi Hương Sơn."')
            content = content.replace('<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Nhập khẩu chính hãng, đầy đủ CO/CQ.</td>',
                                      '<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Máy tuyển chọn chất lượng cao 90–95%, trọn gói mực in & bảo trì tận nơi bởi Hương Sơn.</td>')
            content = content.replace('Đầy đủ chứng nhận xuất xứ CO/CQ, bảo hành theo quy chuẩn nhà sản xuất.',
                                      'Máy tuyển chọn chất lượng cao 90–95%, miễn phí toàn bộ mực in và linh kiện hao mòn, đổi máy trong 24h khi gặp sự cố.')
            content = content.replace('Thiết bị chuẩn chính hãng', 'Thiết bị tuyển chọn chất lượng cao')

        elif is_fansipan:
            content = content.replace('Phân phối chính hãng bởi Hương Sơn, đầy đủ CO/CQ và bảo hành.',
                                      'Thương hiệu mực tương thích cao cấp FANSIPAN thuộc Hương Sơn, tiêu chuẩn hạt mực siêu mịn, tiết kiệm 50% chi phí.')
            content = content.replace('<span>100% Thiết bị chính hãng CO/CQ</span>',
                                      '<span>Thương hiệu FANSIPAN — Tiết kiệm 50%</span>')
            content = content.replace('<i class="fa-solid fa-shield-check text-[#5eb74c]"></i> <span>Thương hiệu FANSIPAN — Tiết kiệm 50%</span>',
                                      '<i class="fa-solid fa-award text-[#5eb74c]"></i> <span>Thương hiệu FANSIPAN — Tiết kiệm 50%</span>')
            content = content.replace('<span>100% Chính Hãng CO/CQ</span>',
                                      '<span>Thương Hiệu Độc Quyền FANSIPAN</span>')
            content = content.replace('"value": "Nhập khẩu chính hãng, đầy đủ CO/CQ."',
                                      '"value": "Thương hiệu độc quyền FANSIPAN – Hương Sơn nghiên cứu phát triển, hạt mực siêu mịn, tiết kiệm 50% chi phí."')
            content = content.replace('<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Nhập khẩu chính hãng, đầy đủ CO/CQ.</td>',
                                      '<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Thương hiệu độc quyền FANSIPAN – Hương Sơn nghiên cứu phát triển, hạt mực siêu mịn, tiết kiệm 50% chi phí.</td>')
            content = content.replace('Đầy đủ chứng nhận xuất xứ CO/CQ, bảo hành theo quy chuẩn nhà sản xuất.',
                                      'Mực in tương thích cao cấp, hạt mực siêu mịn, đậm nét, bảo vệ cụm sấy và trống gạt, bảo hành 1 đổi 1 đến giọt mực cuối cùng.')
            content = content.replace('Thiết bị chuẩn chính hãng', 'Tiêu chuẩn chất lượng FANSIPAN')

        elif is_guide:
            content = content.replace('Phân phối chính hãng bởi Hương Sơn, đầy đủ CO/CQ và bảo hành.',
                                      'Cẩm nang kỹ thuật tra cứu mã linh kiện chuẩn xác do đội ngũ kỹ sư Hương Sơn biên soạn.')
            content = content.replace('<span>100% Thiết bị chính hãng CO/CQ</span>',
                                      '<span>Cẩm nang kỹ thuật chuẩn xác</span>')
            content = content.replace('<i class="fa-solid fa-shield-check text-[#5eb74c]"></i> <span>Cẩm nang kỹ thuật chuẩn xác</span>',
                                      '<i class="fa-solid fa-book-open text-[#5eb74c]"></i> <span>Cẩm nang kỹ thuật chuẩn xác</span>')
            content = content.replace('<span>100% Chính Hãng CO/CQ</span>',
                                      '<span>Cẩm Nang Kỹ Thuật</span>')
            content = content.replace('"value": "Nhập khẩu chính hãng, đầy đủ CO/CQ."',
                                      '"value": "Cẩm nang tài liệu kỹ thuật và mã linh kiện chuẩn xác do đội ngũ kỹ sư Hương Sơn biên soạn."')
            content = content.replace('<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Nhập khẩu chính hãng, đầy đủ CO/CQ.</td>',
                                      '<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Cẩm nang tài liệu kỹ thuật và mã linh kiện chuẩn xác do đội ngũ kỹ sư Hương Sơn biên soạn.</td>')
            content = content.replace('Đầy đủ chứng nhận xuất xứ CO/CQ, bảo hành theo quy chuẩn nhà sản xuất.',
                                      'Tài liệu kỹ thuật được chuẩn hóa và kiểm tra thực tế trên từng model thiết bị bởi kỹ sư Hương Sơn.')
            content = content.replace('Thiết bị chuẩn chính hãng', 'Thông tin kỹ thuật chuẩn xác')

        elif is_drum:
            content = content.replace('Phân phối chính hãng bởi Hương Sơn, đầy đủ CO/CQ và bảo hành.',
                                      'Linh kiện thay thế tiêu chuẩn chất lượng cao, tương thích tối ưu, bảo hành 1 đổi 1 từ Hương Sơn.')
            content = content.replace('<span>100% Thiết bị chính hãng CO/CQ</span>',
                                      '<span>Linh kiện tiêu chuẩn cao — Bảo hành 1 đổi 1</span>')
            content = content.replace('<i class="fa-solid fa-shield-check text-[#5eb74c]"></i> <span>Linh kiện tiêu chuẩn cao — Bảo hành 1 đổi 1</span>',
                                      '<i class="fa-solid fa-gear text-[#5eb74c]"></i> <span>Linh kiện tiêu chuẩn cao — Bảo hành 1 đổi 1</span>')
            content = content.replace('<span>100% Chính Hãng CO/CQ</span>',
                                      '<span>Linh Kiện Tiêu Chuẩn Cao</span>')
            content = content.replace('"value": "Nhập khẩu chính hãng, đầy đủ CO/CQ."',
                                      '"value": "Linh kiện thay thế tiêu chuẩn cao, tương thích tối ưu các dòng máy photocopy Toshiba, Ricoh, Konica Minolta."')
            content = content.replace('<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Nhập khẩu chính hãng, đầy đủ CO/CQ.</td>',
                                      '<td class="px-5 py-3.5 text-[14.5px] text-gray-600 align-top">Linh kiện thay thế tiêu chuẩn cao, tương thích tối ưu các dòng máy photocopy Toshiba, Ricoh, Konica Minolta.</td>')
            content = content.replace('Đầy đủ chứng nhận xuất xứ CO/CQ, bảo hành theo quy chuẩn nhà sản xuất.',
                                      'Vật tư linh kiện tuyển chọn đạt tiêu chuẩn kỹ thuật cao, tương thích hoàn hảo, bảo hành đổi mới 1 đổi 1.')
            content = content.replace('Thiết bị chuẩn chính hãng', 'Linh kiện thay thế tiêu chuẩn')

        if content != orig:
            with open(fpath, 'w', encoding='utf-8') as f:
                f.write(content)
            modified_count += 1
            print(f'Updated: {fpath}')

    print(f'Successfully updated {modified_count} files.')

if __name__ == '__main__':
    run_cleanup()
