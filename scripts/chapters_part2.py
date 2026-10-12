# -*- coding: utf-8 -*-
CHAPTERS_10_18 = [
    {
        "id": "chuong-10-reviews",
        "num": 10,
        "title": "Kiểm Duyệt Đánh Giá Khách Hàng (Customer Reviews Moderation)",
        "code": "REVIEWS",
        "category": "NỘI DUNG & TRUYỀN THÔNG",
        "tag": "FEEDBACK",
        "desc": "Kiểm duyệt ý kiến phản hồi, đánh giá số sao (1-5 sao) và nhận xét của khách hàng doanh nghiệp, trường học về chất lượng máy in và dịch vụ kỹ thuật Hương Sơn trước khi hiển thị công khai trên website.",
        "steps": [
            "Truy cập menu 'Đánh giá' (<code>/vi/admin/reviews</code>).",
            "Xem danh sách phản hồi mới: Tên khách hàng, Đơn vị/Cơ quan, Sản phẩm/Dịch vụ được đánh giá, Số sao, Nội dung nhận xét, Ngày gửi.",
            "Kiểm tra tính xác thực: Đảm bảo nội dung đánh giá văn minh, mang tính đóng góp xây dựng.",
            "Duyệt hiển thị: Bật công tắc 'Hiển thị' để review xuất hiện trên trang chi tiết sản phẩm và trang chủ.",
            "Trường hợp phản ánh sự cố kỹ thuật: Chuyển thông tin ngay cho phòng kỹ thuật bảo trì liên hệ khắc phục, sau đó phản hồi lại khách hàng."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/reviews",
        "image": "assets/screenshots/10_reviews_annotated.png",
        "actions": [
            ("①", "Bảng kiểm duyệt phản hồi", "Phân loại đánh giá theo số sao (1-5 sao) và trạng thái hiển thị."),
            ("②", "Công tắc phê duyệt (Visibility)", "Chỉ những đánh giá được quản trị viên duyệt mới xuất hiện trên website storefront."),
            ("③", "Chỉnh sửa phản hồi", "Hỗ trợ chỉnh sửa lỗi chính tả trước khi đăng tải mà không làm thay đổi ý nghĩa của khách."),
            ("④", "Xóa phản hồi spam", "Loại bỏ các bình luận quảng cáo rác hoặc nội dung vi phạm tiêu chuẩn cộng đồng.")
        ],
        "notes": [
            "Các đánh giá tích cực từ các khách hàng lớn (như các trường THPT, ngân hàng chi nhánh) là bằng chứng xã hội uy tín nhất giúp tăng tỷ lệ chốt hợp đồng thuê máy.",
            "Nên duy trì điểm đánh giá trung bình từ 4.8 - 5.0 sao trên toàn bộ website."
        ]
    },
    {
        "id": "chuong-11-banners",
        "num": 11,
        "title": "Quản Lý Banner & Chiến Dịch Trưng Bày (Banners & Hero Sliders)",
        "code": "BANNERS",
        "category": "GIAO DIỆN & TRẢI NGHIỆM",
        "tag": "MEDIA",
        "desc": "Quản lý hệ thống banner slider trang chủ, banner giới thiệu chương trình 'Thuê máy Photocopy chỉ từ 800.000đ/tháng', banner độc quyền máy in nhân bản Duplo Nhật Bản và các đợt khuyến mãi mực in.",
        "steps": [
            "Truy cập menu 'Banner' (<code>/vi/admin/banners</code>).",
            "Bấm 'Thêm banner': Đặt Tiêu đề banner (VD: <code>Chiến Dịch Cho Thuê Máy Photocopy Toshiba Hà Nội 2026</code>).",
            "Tải lên ảnh banner phiên bản Desktop (kích thước tối ưu 1920x650px) và phiên bản Mobile (kích thước tối ưu 800x600px).",
            "Điền liên kết điều hướng khi khách bấm vào banner (VD: <code>/thue-may-photocopy-ha-noi</code> hoặc <code>/nhan-tu-van</code>).",
            "Nhập thứ tự sắp xếp hiển thị (Số nhỏ hiển thị trước) và tích chọn vị trí hiển thị (Slider trang chủ, Banner sidebar hoặc Banner chân trang).",
            "Bật trạng thái 'Hoạt động' và nhấn 'Lưu banner'."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/banners",
        "image": "assets/screenshots/11_banners_annotated.png",
        "actions": [
            ("①", "Bảng danh sách banner chiến dịch", "Xem trước ảnh thumbnail banner, vị trí hiển thị, số lượt click và trạng thái."),
            ("②", "Kéo thả sắp xếp thứ tự", "Dễ dàng thay đổi thứ tự trượt của slider trang chủ mà không cần nhập số thủ công."),
            ("③", "Cấu hình ảnh kép Desktop / Mobile", "Đảm bảo hình ảnh banner luôn hiển thị sắc nét, không bị vỡ hoặc che khuất chữ trên điện thoại."),
            ("④", "Cài đặt thời gian tự động bật/tắt", "Thiết lập ngày bắt đầu và kết thúc chiến dịch quảng cáo theo từng quý.")
        ],
        "notes": [
            "Dung lượng file ảnh banner nên nén dưới 250KB (định dạng WebP hoặc JPG chất lượng 85%) để đảm bảo tốc độ tải trang chủ dưới 1.5 giây.",
            "Chữ trên banner nên ngắn gọn, tập trung vào ưu thế: Máy chính hãng, Lắp đặt trong 2h, Đổi máy mới nếu phát sinh lỗi."
        ]
    },
    {
        "id": "chuong-12-menus",
        "num": 12,
        "title": "Quản Lý Menu Điều Hướng Website (Navigation Menus)",
        "code": "MENUS",
        "category": "GIAO DIỆN & TRẢI NGHIỆM",
        "tag": "NAV",
        "desc": "Cấu trúc hệ thống menu chính (Header Navigation Mega Menu), menu chân trang (Footer Menu) và menu liên kết nhanh dịch vụ cho thuê máy của Hương Sơn.",
        "steps": [
            "Truy cập menu 'Menu' (<code>/vi/admin/menus</code>).",
            "Chọn menu cần cấu hình: Bấm 'Quản lý mục' (Items) của 'Menu chính' (Primary Menu) hoặc 'Menu chân trang' (Footer Menu).",
            "Thêm mục menu mới: Nhấn 'Thêm mục menu', nhập Tên hiển thị (Tiếng Việt & Tiếng Anh), chọn Loại liên kết (Trang sản phẩm, Danh mục, Bài viết cẩm nang hoặc Đường dẫn tùy chỉnh).",
            "Tạo menu đa cấp (Sub-menu): Kéo thả mục con sang phải để tạo cấp lùi vào (VD: Mục 'Máy Photocopy' chứa các mục con 'Photocopy Toshiba', 'Photocopy Konica Minolta', 'Photocopy Ricoh').",
            "Bấm 'Lưu sắp xếp' để cập nhật menu hiển thị ra ngoài website."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/menus",
        "image": "assets/screenshots/12_menus_annotated.png",
        "actions": [
            ("①", "Danh sách cây phân cấp menu", "Cấu trúc dạng cây trực quan, hiển thị rõ quan hệ menu cha - menu con."),
            ("②", "Kéo thả sắp xếp (Drag & Drop)", "Thao tác sắp xếp thứ tự và cấp độ lồng nhau cực kỳ mượt mà."),
            ("③", "Hỗ trợ đa ngôn ngữ nhãn menu", "Điền song ngữ Việt - Anh cho từng mục điều hướng."),
            ("④", "Tùy chọn mở tab mới (target=_blank)", "Dành cho các liên kết ra tài liệu ngoài hoặc trang web đối tác.")
        ],
        "notes": [
            "Menu chính của Hương Sơn được thiết kế theo cấu trúc chuẩn SEO: Về Hương Sơn -> Sản Phẩm -> Dịch Vụ Cho Thuê -> Giải Pháp In Đề Thi -> Công Cụ -> Cẩm Nang -> Liên Hệ.",
            "Không nên tạo quá 3 cấp menu con để tránh gây khó khăn cho người dùng thao tác trên màn hình cảm ứng di động."
        ]
    },
    {
        "id": "chuong-13-media",
        "num": 13,
        "title": "Thư Viện File, Driver & Tài Liệu PDF (Media Library)",
        "code": "MEDIA",
        "category": "NỘI DUNG & TRUYỀN THÔNG",
        "tag": "FILES",
        "desc": "Quản lý tập trung toàn bộ kho hình ảnh máy photocopy, ảnh chụp thực tế tại kho, logo đối tác, file tài liệu hướng dẫn sử dụng (User Manual) và file cài đặt Driver máy in cung cấp cho khách hàng.",
        "steps": [
            "Truy cập menu 'Thư viện Media' (<code>/vi/admin/media</code>).",
            "Tải file lên: Nhấn 'Tải lên' hoặc kéo thả trực tiếp hình ảnh/file PDF từ máy tính vào cửa sổ thư viện.",
            "Tìm kiếm & lọc: Tìm kiếm theo tên file, lọc theo định dạng (Hình ảnh, Tài liệu PDF, Video).",
            "Lấy đường dẫn URL: Bấm vào file bất kỳ, nhấn 'Sao chép liên kết' để dán vào bài viết hoặc trang mô tả sản phẩm.",
            "Xóa file thừa: Chọn các file không còn sử dụng và bấm 'Xóa' để giải phóng dung lượng hosting."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/media",
        "image": "assets/screenshots/13_media_annotated.png",
        "actions": [
            ("①", "Lưới hiển thị Media trực quan", "Xem trước hình ảnh dạng lưới thumbnail hoặc danh sách chi tiết kèm dung lượng file."),
            ("②", "Khu vực kéo thả Upload thông minh", "Hỗ trợ tải lên nhiều file cùng lúc, tự động tối ưu hóa và sinh thumbnail."),
            ("③", "Bộ chọn Media tích hợp (Media Picker)", "Gọi trực tiếp thư viện media từ màn hình soạn bài viết hoặc chỉnh sửa sản phẩm."),
            ("④", "Thông tin chi tiết file", "Xem kích thước pixel, dung lượng KB, định dạng MIME và đường dẫn URL tuyệt đối.")
        ],
        "notes": [
            "Nên đặt tên file ảnh không dấu, cách nhau bằng dấu gạch ngang (VD: <code>may-photocopy-toshiba-3528a.jpg</code>) để tối ưu Google Image SEO.",
            "Thư viện đã được cấu hình CDN và bộ nhớ đệm trình duyệt giúp tải ảnh siêu tốc.",
            "QUY CHUẨN MEDIA CHÍNH HÃNG: Thư viện chỉ lưu trữ hình ảnh sản phẩm chính hãng (Toshiba e-STUDIO, Duplo Nhật Bản, Ricoh Fujitsu, Fansipan) và ảnh chụp thực tế tại kho hoặc các dự án bàn giao (Vietcombank, Sở GD&ĐT Quảng Trị, Vĩnh Phúc...). TUYỆT ĐỐI KHÔNG lưu trữ hoặc sử dụng các hình ảnh xe cộ, ô tô, phong cảnh hoặc ảnh máy sai thương hiệu."
        ]
    },
    {
        "id": "chuong-14-pages-blocks",
        "num": 14,
        "title": "Quản Trị Khối Tĩnh & Trang Nội Dung (Site Blocks & CMS Pages)",
        "code": "SITE BLOCKS",
        "category": "GIAO DIỆN & TRẢI NGHIỆM",
        "tag": "PAGES",
        "desc": "Chỉnh sửa trực tiếp nội dung các khối thông tin cố định trên trang chủ và các trang giới thiệu: Gần 20 năm phát triển thành lập từ 01/06/2008 (MST: 0102759269), 6 cam kết dịch vụ vàng của Hương Sơn, quy trình thuê máy 4 bước, chính sách bảo hành.",
        "steps": [
            "Truy cập menu 'Trang CMS' > 'Khối nội dung' (<code>/vi/admin/pages</code>).",
            "Chọn trang cần chỉnh sửa (VD: Trang chủ, Trang Về Hương Sơn, Trang Dịch vụ cho thuê máy).",
            "Chỉnh sửa các khối text tĩnh: Thay đổi số liệu thống kê (Gần 20 năm uy tín từ 2008, 5.000+ máy đang vận hành, 1.200+ trường học & cơ quan tin dùng).",
            "Cập nhật nội dung các thẻ 'Cam kết dịch vụ': Cam kết đổi máy trong 24h nếu sự cố không thể khắc phục, Cam kết 100% mực in và linh kiện chính hãng.",
            "Bấm 'Lưu thay đổi' và kiểm tra hiển thị ngay trên website mà không cần can thiệp code."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/pages",
        "image": "assets/screenshots/14_pages_annotated.png",
        "actions": [
            ("①", "Danh sách các trang tĩnh hệ thống", "Quản lý nội dung trang Giới thiệu, Chính sách bảo mật, Điều khoản dịch vụ, Bảng giá."),
            ("②", "Khối nội dung lặp lại (Site Lists)", "Thêm/sửa/xóa các mục danh sách cam kết, ưu đãi hoặc bước quy trình."),
            ("③", "Chỉnh sửa trực tiếp (Inline Editing)", "Giao diện trực quan cho phép chỉnh sửa từng đoạn text mà không sợ vỡ bố cục."),
            ("④", "Lịch sử phiên bản (Revisions)", "Hỗ trợ khôi phục lại nội dung phiên bản cũ nếu nhân viên lỡ chỉnh sửa sai.")
        ],
        "notes": [
            "Các số liệu uy tín (năm thành lập 01/06/2008 - MST: 0102759269, số lượng khách hàng thân thiết) là điểm then chốt tạo niềm tin cho các đơn vị hành chính sự nghiệp khi đấu thầu.",
            "Giữ nguyên các thẻ định dạng in đậm/nghiêng để bảo toàn tính thẩm mỹ của thiết kế giao diện.",
            "TƯ DUY 5 CỬA VÀO BÀI TOÁN KHÁCH HÀNG: Giữ vững cấu trúc 5 cửa vào chuyên biệt trên trang chủ (1. Thuê máy; 2. In đề thi; 3. Số hóa tài liệu; 4. Thiết bị trường học/ngân hàng; 5. Bảo trì vận hành SLA ≤ 2h) và 6 landing page SEO cho thuê thiết bị (Hà Nội, máy in, trường học, sở GD, in đề thi, ngân hàng) để tối ưu hóa SEO/GEO/AEO."
        ]
    },
    {
        "id": "chuong-15-settings-shipping",
        "num": 15,
        "title": "Cài Đặt Hệ Thống, Cổng Thanh Toán & Vận Chuyển (System Settings)",
        "code": "SETTINGS",
        "category": "CẤU HÌNH & HỆ THỐNG",
        "tag": "SYSTEM",
        "desc": "Cấu hình thông tin pháp nhân Công ty TNHH TM&DV Hương Sơn, địa chỉ trụ sở & showroom, hotline hỗ trợ kỹ thuật, cấu hình Zalo OA nhận thông báo lead, thiết lập đối tác vận chuyển và tài khoản thanh toán.",
        "steps": [
            "Truy cập menu 'Cài đặt' > 'Cài đặt chung' (<code>/vi/admin/settings</code>): Cập nhật Tên doanh nghiệp (Công ty TNHH TM&DV Hương Sơn), Mã số thuế (0102759269), Trụ sở (Số 27 ngõ 523 phố Minh Khai, P. Vĩnh Tuy, TP. Hà Nội), Hotline công ty (091.113.8583), Kỹ thuật (0912.304.058), Email chính (<code>info@huongsonco.com.vn</code>) và CC (<code>thuannc72@gmail.com</code>).",
            "Cài đặt Thông báo (<code>/vi/admin/notification-settings</code>): Cấu hình Zalo Chat ID để hệ thống tự động bắn tin nhắn về điện thoại của quản lý khi có đơn hàng hoặc yêu cầu thuê máy mới.",
            "Đối tác vận chuyển (<code>/vi/admin/shipping-partners</code>): Bật/tắt các hình thức vận chuyển: Viettel Post, GHTK và Tự giao hàng bởi đội xe Hương Sơn.",
            "Phương thức thanh toán (<code>/vi/admin/payment-methods</code>): Cấu hình thanh toán khi nhận hàng (COD), Chuyển khoản ngân hàng Vietcombank (quét mã QR VietQR tự động điền nội dung) hoặc thanh toán online.",
            "Nhấn 'Lưu cấu hình' để áp dụng toàn hệ thống."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/settings",
        "image": "assets/screenshots/15_settings_annotated.png",
        "actions": [
            ("①", "Cấu hình thông tin doanh nghiệp", "Thông tin hiển thị tại chân trang website và trên các hóa đơn/biên bản bàn giao thiết bị."),
            ("②", "Tích hợp Zalo OA Webhook", "Cảnh báo đơn hàng & yêu cầu báo giá khẩn cấp tới nhóm kinh doanh theo thời gian thực."),
            ("③", "Quản lý đối tác vận chuyển", "Cài đặt phí vận chuyển theo khu vực nội thành Hà Nội hoặc gửi xe khách/bưu cục các tỉnh."),
            ("④", "Cấu hình tài khoản Vietcombank", "Tự động sinh mã VietQR chuẩn NAPAS giúp khách hàng thanh toán chính xác 100%.")
        ],
        "notes": [
            "Hotline (091.113.8583) và địa chỉ văn phòng phải luôn được cập nhật chính xác để khách hàng có thể liên hệ hỗ trợ kỹ thuật 24/7.",
            "Mọi email thông báo lead phải đảm bảo tới được cả info@huongsonco.com.vn và thuannc72@gmail.com.",
            "Tuyệt đối bảo mật các khóa API tích hợp Zalo và cổng thanh toán."
        ]
    },
    {
        "id": "chuong-16-languages",
        "num": 16,
        "title": "Quản Lý Đa Ngôn Ngữ Song Ngữ (Localization & Languages)",
        "code": "LANGUAGES",
        "category": "CẤU HÌNH & HỆ THỐNG",
        "tag": "I18N",
        "desc": "Quản lý cơ chế song ngữ Tiếng Việt (`vi`) và Tiếng Anh (`en`) phục vụ các doanh nghiệp có vốn đầu tư nước ngoài (FDI), các văn phòng đại diện quốc tế có nhu cầu thuê máy photocopy tại Việt Nam.",
        "steps": [
            "Truy cập menu 'Ngôn ngữ' (<code>/vi/admin/languages</code>).",
            "Xem danh sách ngôn ngữ đang kích hoạt: Tiếng Việt (mặc định) và Tiếng Anh.",
            "Bật/tắt ngôn ngữ: Khi chưa hoàn thiện bản dịch tiếng Anh cho sản phẩm mới, có thể tạm ẩn ngôn ngữ đó.",
            "Dịch giao diện & sản phẩm: Trong từng màn hình quản lý sản phẩm hoặc bài viết, hệ thống cung cấp các tab nhập liệu riêng biệt cho bản tiếng Việt và tiếng Anh.",
            "Kiểm tra chuyển đổi ngôn ngữ trên Header storefront qua công tắc cờ ngôn ngữ."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/languages",
        "image": "assets/screenshots/16_languages_annotated.png",
        "actions": [
            ("①", "Bảng quản lý ngôn ngữ", "Hiển thị mã ngôn ngữ (vi/en), cờ quốc gia, trạng thái hoạt động và cờ mặc định."),
            ("②", "Công tắc chuyển đổi Locale", "Cho phép chuyển đổi giao diện quản trị viên sang tiếng Anh nếu có nhân sự nước ngoài."),
            ("③", "Bản dịch giao diện động", "Hỗ trợ dịch nhanh các nhãn nút bấm, thông báo hệ thống và placeholder biểu mẫu."),
            ("④", "Fallback ngôn ngữ thông minh", "Tự động hiển thị nội dung tiếng Việt nếu bản dịch tiếng Anh của sản phẩm chưa có.")
        ],
        "notes": [
            "Nhiều khách hàng khu công nghiệp (KCN Thăng Long, KCN Quang Minh...) là các công ty Nhật Bản, Hàn Quốc, việc hoàn thiện giao diện tiếng Anh giúp gia tăng cơ hội ký hợp đồng thuê máy dài hạn.",
            "Đảm bảo URL chuẩn SEO: <code>/vi/...</code> cho tiếng Việt và <code>/en/...</code> cho tiếng Anh."
        ]
    },
    {
        "id": "chuong-17-activity-logs",
        "num": 17,
        "title": "Nhật Ký Kiểm Toán & Truy Vết Bảo Mật (Activity Audit Logs)",
        "code": "AUDIT LOGS",
        "category": "CẤU HÌNH & HỆ THỐNG",
        "tag": "AUDIT",
        "desc": "Ghi nhận chi tiết mọi hành vi thao tác của các thành viên trong ban quản trị: Ai đã cập nhật giá thuê máy, ai đã duyệt đơn hàng, ai đã xóa dữ liệu, kèm địa chỉ IP và dấu vết thời gian chính xác.",
        "steps": [
            "Truy cập menu 'Nhật ký hoạt động' (<code>/vi/admin/activity-logs</code>).",
            "Bảng hiển thị các cột thông tin: Thời gian thực hiện, Tài khoản nhân viên, Hành động (Tạo mới, Cập nhật, Xóa, Đăng nhập), Tên module bị tác động (Sản phẩm, Đơn hàng, Vai trò), Địa chỉ IP mạng.",
            "Bấm vào biểu tượng 'Xem chi tiết' để xem dữ liệu trước và sau khi thay đổi (Dữ liệu cũ vs Dữ liệu mới).",
            "Sử dụng bộ lọc tìm kiếm theo nhân sự hoặc theo khoảng thời gian để phục vụ công tác thanh tra nội bộ khi có sự cố dữ liệu."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/activity-logs",
        "image": "assets/screenshots/17_activity_logs_annotated.png",
        "actions": [
            ("①", "Bảng nhật ký kiểm toán bất biến", "Dữ liệu nhật ký được bảo vệ chỉ đọc (Read-only), không ai kể cả admin có thể sửa đổi hay xóa."),
            ("②", "So sánh chênh lệch dữ liệu (Diff Viewer)", "Hiển thị trực quan trường dữ liệu nào bị thay đổi giá trị và giá trị cũ là gì."),
            ("③", "Ghi nhận thông tin bảo mật IP & User Agent", "Hỗ trợ phát hiện truy cập bất thường từ các dải IP lạ."),
            ("④", "Xuất file báo cáo kiểm toán", "Hỗ trợ xuất nhật ký ra Excel phục vụ báo cáo định kỳ cho Ban Giám Đốc.")
        ],
        "notes": [
            "Nhật ký hoạt động là công cụ đắc lực giúp giải quyết các hiểu lầm giữa bộ phận kinh doanh và kho khi xảy ra sai lệch thông tin đơn hàng.",
            "Hệ thống tự động lưu trữ nhật ký tối thiểu 180 ngày phục vụ công tác an ninh mạng."
        ]
    },
    {
        "id": "chuong-18-rental-calculator",
        "num": 18,
        "title": "Công Cụ Ước Tính Chi Phí Thuê Máy Photocopy & TCO (Storefront Tools)",
        "code": "CALCULATOR & TCO",
        "category": "CÔNG CỤ TÍNH TOÁN ĐẶC THÙ",
        "tag": "CALCULATOR",
        "desc": "Cẩm nang hướng dẫn sử dụng và kiểm tra công cụ tính toán chi phí thuê máy photocopy trực tuyến và công cụ so sánh tổng chi phí sở hữu TCO (Total Cost of Ownership) độc quyền của Hương Sơn trên website storefront.",
        "steps": [
            "Truy cập công cụ trên website storefront tại đường dẫn: <code>https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may</code> (hoặc <code>https://huongsonco.com.vn/cong-cu/tinh-tco</code>).",
            "Bước 1: Chọn Khổ giấy in chủ yếu (Khổ A4 tiêu chuẩn hoặc Khổ A3 / A4 hỗn hợp).",
            "Bước 2: Chọn Loại bản in: Chỉ in đen trắng (Monochrome) hoặc Có in màu (Color).",
            "Bước 3: Kéo thanh trượt hoặc nhập Sản lượng in dự kiến mỗi tháng (VD: 3.000 bản, 5.000 bản hoặc 15.000 bản/tháng).",
            "Bước 4: Chọn Thời hạn dự kiến thuê máy (6 tháng, 12 tháng, 24 tháng hoặc 36 tháng).",
            "Quan sát kết quả tức thời: Hệ thống tính toán chính xác Giá thuê trọn gói hàng tháng (đã bao gồm định mức bản in miễn phí), Chi phí phụ trội trên mỗi bản in vượt mức, và Đề xuất dòng máy photocopy Toshiba/Konica tối ưu nhất.",
            "Khách hàng bấm 'Đăng ký thuê gói này ngay' để gửi thẳng dữ liệu cấu hình về hệ thống quản trị Hương Sơn."
        ],
        "route": "https://huongsonco.com.vn/cong-cu/tinh-chi-phi-thue-may",
        "image": "assets/screenshots/18_rental_calculator_annotated.png",
        "actions": [
            ("①", "Bộ chọn cấu hình in ấn", "Giao diện trực quan gồm các icon khổ giấy A4/A3 và tùy chọn in đen trắng/màu sinh động."),
            ("②", "Thanh trượt sản lượng bản in thông minh", "Người dùng dễ dàng kéo thả để điều chỉnh số lượng bản in từ 1.000 đến 30.000 bản/tháng."),
            ("③", "Thẻ kết quả báo giá dự toán", "Tính toán chi phí thuê tháng, chi phí bản chụp phụ trội và số tiền tiết kiệm được so với mua máy mới."),
            ("④", "Gợi ý model máy phù hợp", "Tự động hiển thị model máy tối ưu kèm hình ảnh và thông số kỹ thuật (VD: Toshiba 3028A cho văn phòng 5.000 bản/tháng).")
        ],
        "notes": [
            "Công cụ ước tính chi phí thuê máy là 'vũ khí' chốt sale tự động mạnh mẽ nhất trên website Hương Sơn, giúp khách hàng tự tin đưa ra quyết định mà không cần chờ báo giá thủ công.",
            "Tất cả các thông số định mức (giá gói gốc, định mức bản miễn phí, giá bản phụ trội 100đ - 150đ) được đồng bộ trực tiếp từ bảng giá dịch vụ cho thuê của công ty."
        ]
    }
]
