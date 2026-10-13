# HƯỚNG DẪN NẠP TƯ LIỆU ẢNH VÀ VIDEO THỰC TẾ HƯƠNG SƠN

Thư mục này được thiết kế chuẩn chỉnh để lưu trữ toàn bộ tư liệu hình ảnh và video thực tế do Ban Giám đốc và Quản trị viên Công ty Hương Sơn cung cấp.

---

## 1. Cấu Trúc Phân Loại Thư Mục

| Thư mục con | Mục đích lưu trữ | Ví dụ loại ảnh / video |
|---|---|---|
| `kho-may/` | Hình ảnh kho hàng, thiết bị sẵn có | Ảnh dàn máy photocopy Toshiba, Duplo, kho vật tư FANSIPAN, toàn cảnh showroom |
| `ky-thuat-pdi/` | Quy trình kỹ thuật & Đội ngũ | Ảnh kỹ sư kiểm tra 24 bước PDI, đo điện áp, cân chỉnh thước quang, nạp mực |
| `ban-giao/` | Hoạt động giao hàng & Hiện trường | Xe tải giao hàng, lễ bàn giao, lắp đặt máy tại trường học, ngân hàng, sở GD&ĐT |
| `videos/` | Video clip thực tế & Thumbnail | Video máy in Duplo siêu tốc 130 bản/phút, video test máy photocopy, video số hóa |

---

## 2. Quy Chuẩn Đặt Tên File & Kích Thước Khuyến Nghị

- **Định dạng file ảnh:** `.jpg`, `.jpeg`, `.png`, `.webp` (Dung lượng lý tưởng 200KB – 1MB/ảnh).
- **Tỷ lệ ảnh chuẩn:** `16:10` (ví dụ: `1200x750px` hoặc `1920x1200px`) hoặc `16:9` (`1920x1080px`).
- **Quy tắc đặt tên file:** Tiếng Việt không dấu, nối bằng dấu gạch ngang `-`, rõ ngữ cảnh.
  - Ví dụ kho hàng: `kho-may-toshiba-so-27-minh-khai-01.jpg`, `kho-duplo-sieu-toc-02.jpg`
  - Ví dụ kỹ thuật: `ky-su-kiem-tra-pdi-toshiba-6528a.jpg`, `can-chinh-thuoc-quang-duplo.jpg`
  - Ví dụ bàn giao: `ban-giao-truong-thpt-chu-van-an.jpg`, `xe-giao-hang-huong-son.jpg`
  - Ví dụ video: `video-in-de-thi-duplo-130-ban-phut.mp4` (kèm ảnh đại diện `.jpg` cùng tên)

---

## 3. Thao Tác Khi Nhận Ảnh Khách Gửi Vào Ngày Mai

1. Tải ảnh từ khách gửi về máy.
2. Sao chép các tệp ảnh vào thư mục con tương ứng (`kho-may/`, `ky-thuat-pdi/`, `ban-giao/`, `videos/`).
3. Đồng bộ vào cả hai thư mục:
   - `assets/images/tu-lieu-thuc-te/`
   - `public/assets/images/tu-lieu-thuc-te/`
4. Khai báo thêm mục tương ứng trong danh sách `GALLERY_ITEMS` tại `build/pages_about.py` (hoặc đăng bài viết trong Admin Dashboard chuyên mục `tu-lieu-thuc-te`).
5. Chạy `python3 build/build.py && python3 scripts/deploy_to_hosting.py`. Trang web sẽ tự động hiển thị mượt mà 100%!
