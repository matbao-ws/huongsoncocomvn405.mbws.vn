# -*- coding: utf-8 -*-
CHAPTERS_1_9 = [
    {
        "id": "chuong-1-intro",
        "num": 1,
        "title": "Giới Thiệu & Đăng Nhập Bảo Mật",
        "code": "LOGIN & AUTH",
        "category": "TỔNG QUAN HỆ THỐNG",
        "tag": "AUTH",
        "desc": "Hướng dẫn đăng nhập hệ thống quản trị Hương Sơn an toàn, cơ chế bảo vệ phiên làm việc chống tấn công dò quét mật khẩu (brute-force) và quy trình lấy lại mật khẩu qua email xác thực.",
        "steps": [
            "Mở trình duyệt web (Google Chrome, Microsoft Edge hoặc Safari) và truy cập đường dẫn quản trị: <code>https://huongsonco.com.vn/vi/admin/login</code> (hoặc <code>https://huongsonco.com.vn/admin</code>).",
            "Nhập chính xác Email quản trị viên được cấp (VD: <code>admin@huongsonco.com.vn</code>) và Mật khẩu bảo mật.",
            "Tích chọn 'Ghi nhớ đăng nhập' nếu sử dụng máy tính cá nhân trong văn phòng làm việc để duy trì phiên làm việc trong 30 ngày.",
            "Nhấn nút 'Đăng nhập' màu xanh lá để truy cập vào Bảng điều khiển quản trị Hương Sơn.",
            "Trường hợp quên mật khẩu: Bấm liên kết 'Quên mật khẩu?', điền email quản trị và kiểm tra hòm thư để nhận liên kết đặt lại mật khẩu an toàn."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/login",
        "image": "/docs/assets/screenshots/01_login_annotated.png",
        "actions": [
            ("①", "Ô nhập Email quản trị", "Nhập email tài khoản quản trị viên do công ty cấp. Tài khoản phải ở trạng thái hoạt động (is_active = 1)."),
            ("②", "Ô nhập Mật khẩu", "Mật khẩu quản trị được mã hóa chuẩn Bcrypt. Hỗ trợ nút con mắt để kiểm tra ký tự trước khi xác nhận."),
            ("③", "Ghi nhớ phiên đăng nhập", "Lưu token đăng nhập vào cookie bảo mật (HttpOnly, Secure, SameSite=Lax) trong vòng 30 ngày."),
            ("④", "Cơ chế Rate Limiting", "Hệ thống bảo vệ chống brute-force tự động khóa IP 60 giây nếu nhập sai thông tin liên tiếp 5 lần.")
        ],
        "notes": [
            "Mật khẩu quản trị viên bắt buộc tối thiểu 8 ký tự, khuyến nghị có chữ hoa, chữ thường, số và ký tự đặc biệt.",
            "Tuyệt đối không sử dụng chung tài khoản giữa bộ phận kỹ thuật bảo trì và kế toán để đảm bảo tính minh bạch kiểm toán."
        ]
    },
    {
        "id": "chuong-2-dashboard",
        "num": 2,
        "title": "Bảng Điều Khiển & Thống Kê Kinh Doanh (Dashboard)",
        "code": "DASHBOARD",
        "category": "TỔNG QUAN HỆ THỐNG",
        "tag": "KPI",
        "desc": "Trung tâm chỉ huy trực quan hóa toàn bộ hoạt động kinh doanh của Hương Sơn: Doanh thu thiết bị & vật tư, số lượng đơn hàng mới, danh sách yêu cầu thuê máy/báo giá cần phản hồi tức thời.",
        "steps": [
            "Sau khi đăng nhập thành công, hệ thống tự động điều hướng về màn hình Dashboard tại <code>https://huongsonco.com.vn/vi/admin</code>.",
            "Quan sát nhanh 4 thẻ thống kê (KPI Cards) phía trên: Doanh thu tổng hợp, Đơn hàng mới phát sinh, Số lượng máy & vật tư đang kinh doanh, Tổng số khách hàng/doanh nghiệp đã lưu.",
            "Kiểm tra biểu đồ biến động doanh thu theo tuần/tháng để nắm bắt xu hướng đặt hàng thiết bị và vật tư tiêu hao.",
            "Theo dõi danh sách 'Đơn hàng gần đây' và 'Yêu cầu tư vấn/Báo giá mới' nằm ở nửa dưới màn hình để xử lý ngay trong ngày."
        ],
        "route": "https://huongsonco.com.vn/vi/admin",
        "image": "/docs/assets/screenshots/02_dashboard_annotated.png",
        "actions": [
            ("①", "Thanh Menu dọc (Sidebar)", "Điều hướng nhanh đến 15+ module nghiệp vụ: Máy photocopy, Máy in Duplo, Đơn hàng, RFQ, Vouchers, Cài đặt..."),
            ("②", "Thanh công cụ đỉnh (Header)", "Tìm kiếm nhanh toàn hệ thống, chuyển đổi giao diện Tiếng Việt/English, chuông thông báo đơn hàng/lead mới phát sinh."),
            ("③", "Thẻ chỉ số tổng quan (KPI)", "Hiển thị doanh thu, đơn hàng, danh mục sản phẩm, khách hàng được tổng hợp thời gian thực từ cơ sở dữ liệu."),
            ("④", "Bảng dữ liệu xử lý khẩn", "Danh sách 10 đơn hàng và liên hệ mới nhất cần xác nhận, kèm nút xem chi tiết nhanh.")
        ],
        "notes": [
            "Khi có khách gửi yêu cầu thuê máy hoặc đặt mua mực in Fansipan trên storefront, chuông thông báo trên Header sẽ hiển thị chấm đỏ kèm số lượng thông báo mới.",
            "Dữ liệu doanh thu chỉ tính các đơn hàng ở trạng thái 'Đã thanh toán' hoặc 'Hoàn tất giao hàng'."
        ]
    },
    {
        "id": "chuong-3-users-roles",
        "num": 3,
        "title": "Phân Quyền & Quản Lý Thành Viên (Users & Roles)",
        "code": "USERS & ROLES",
        "category": "TÀI KHOẢN & PHÂN QUYỀN",
        "tag": "SECURITY",
        "desc": "Phân chia quyền hạn chặt chẽ theo chức năng phòng ban tại Hương Sơn (Ban Giám Đốc, Kế toán, Kỹ thuật viên bảo trì máy photo, Nhân viên kinh doanh, Biên tập viên nội dung) và cơ chế Đăng nhập phân thân (Impersonate).",
        "steps": [
            "Truy cập menu 'Quản trị viên' > 'Người dùng' (<code>/vi/admin/users</code>) để xem danh sách nhân sự vận hành.",
            "Thêm người dùng mới: Nhấn nút 'Thêm người dùng', điền Họ tên, Email, Mật khẩu khởi tạo và chọn Vai trò phù hợp.",
            "Quản lý vai trò & quyền hạn: Truy cập menu 'Vai trò' (<code>/vi/admin/roles</code>). Có thể tạo vai trò mới hoặc chỉnh sửa danh sách quyền hạn hạt nhân (như chỉ được duyệt đơn hàng, hoặc chỉ được viết bài kỹ thuật).",
            "Đăng nhập phân thân (Superadmin): Nhấn nút 'Đăng nhập với tư cách...' bên cạnh tài khoản nhân viên để kiểm tra góc nhìn giao diện của nhân sự đó, nhấn 'Rời phân thân' ở góc trên để quay lại tài khoản chính."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/users",
        "image": "/docs/assets/screenshots/03_users_list_annotated.png",
        "actions": [
            ("①", "Bảng danh sách thành viên", "Hiển thị tên nhân sự, email, vai trò hiện tại, trạng thái hoạt động và ngày tham gia."),
            ("②", "Nút bật/tắt trạng thái", "Khóa nhanh tài khoản nhân sự nghỉ việc chỉ với 1 click mà không cần xóa dữ liệu lịch sử."),
            ("③", "Nút Phân thân (Impersonate)", "Chức năng độc quyền của Superadmin giúp hỗ trợ nhân viên từ xa mà không cần hỏi mật khẩu."),
            ("④", "Ma trận quyền hạn (Roles)", "Cấu hình chi tiết các quyền: xem, tạo, sửa, xóa, xuất excel, duyệt giá thiết bị.")
        ],
        "notes": [
            "Không bao giờ cấp vai trò 'Superadmin' cho nhân viên thời vụ hoặc cộng tác viên viết bài SEO.",
            "Mọi thao tác chỉnh sửa vai trò hay đăng nhập phân thân đều được ghi nhận vào Nhật ký kiểm toán (Activity Logs)."
        ]
    },
    {
        "id": "chuong-4-products-catalog",
        "num": 4,
        "title": "Quản Lý Thiết Bị Photocopy, Máy In & Vật Tư (Catalog Products)",
        "code": "CATALOG",
        "category": "THIẾT BỊ & VẬT TƯ HƯƠNG SƠN",
        "tag": "PRODUCTS",
        "desc": "Quản lý toàn bộ danh mục sản phẩm cốt lõi của Hương Sơn: Máy photocopy Toshiba, Konica Minolta; Máy in nhân bản Duplo Nhật Bản; Máy scan Ricoh; Mực in & Phụ tùng chính hãng Fansipan.",
        "steps": [
            "Truy cập menu 'Sản phẩm' > 'Tất cả sản phẩm' (<code>/vi/admin/products</code>) để quản lý kho thiết bị.",
            "Tạo sản phẩm mới: Nhấn nút 'Thêm sản phẩm', nhập Tên máy (VD: <code>Máy Photocopy Toshiba e-STUDIO 3528A</code> hoặc <code>Máy In Nhân Bản Duplo DP-F550</code>).",
            "Chọn Danh mục (Máy Photocopy / Máy In Siêu Tốc / Mực In & Vật Tư) và Thương hiệu (Toshiba / Duplo / Konica / Fansipan).",
            "Thiết lập Giá bán niêm yết, Giá khuyến mãi và Giá thuê tham khảo (đối với dòng máy cho thuê).",
            "Nhập Thông số kỹ thuật chi tiết: Tốc độ in (ppm), Độ phân giải (dpi), Khổ giấy tối đa (A3/A4), Dung lượng khay nạp, Chu kỳ công suất hàng tháng.",
            "Tải lên Ảnh đại diện, Bộ ảnh thư viện thực tế (Gallery) và File tài liệu Brochure/Catalogue PDF đính kèm.",
            "Lưu và kiểm tra hiển thị trên website storefront."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/products",
        "image": "/docs/assets/screenshots/04_products_list_annotated.png",
        "actions": [
            ("①", "Bộ lọc danh mục & thương hiệu", "Lọc nhanh theo dòng máy Toshiba, Duplo, Konica hoặc vật tư Fansipan, lọc theo trạng thái còn hàng/hết hàng."),
            ("②", "Nhập / Xuất dữ liệu Excel", "Hỗ trợ xuất báo cáo bảng giá toàn bộ máy và nhập sản phẩm hàng loạt qua file mẫu Excel."),
            ("③", "Chỉnh sửa nhanh thông số & giá", "Cập nhật nhanh giá bán, giá thuê và số lượng tồn kho trực tiếp trên bảng danh sách."),
            ("④", "Quản lý Danh mục & Thương hiệu", "Menu con cho phép sắp xếp thứ tự ưu tiên hiển thị các dòng máy chủ lực lên trang chủ.")
        ],
        "notes": [
            "Hình ảnh máy chụp thực tế tại kho Hương Sơn cần có độ phân giải tối thiểu 800x800px, phông nền sáng rõ ràng để khách hàng tin tưởng.",
            "Tên sản phẩm nên chứa model chính xác (VD: Duplo DP-F850, Toshiba 4528A) để tối ưu tìm kiếm Google (SEO).",
            "QUY CHUẨN HÌNH ẢNH CHUẨN HÃNG (LƯU Ý NGHIÊM NGẶT THEO PHẢN ÁNH CỦA KHÁCH): Máy photocopy bắt buộc dùng đúng ảnh Toshiba e-STUDIO hoặc Konica Minolta; Máy in nhân bản siêu tốc bắt buộc dùng đúng ảnh Duplo Nhật Bản (DP-X550, DP-X850, DP-F550...); Máy scan dùng ảnh Ricoh Fujitsu; Mực in dùng ảnh Fansipan. TUYỆT ĐỐI KHÔNG dùng ảnh máy photocopy văn phòng để minh họa cho máy Duplo, và TUYỆT ĐỐI KHÔNG tải ảnh xe cộ, ô tô hoặc ảnh mạng không rõ nguồn gốc."
        ]
    },
    {
        "id": "chuong-5-product-options",
        "num": 5,
        "title": "Cấu Hình Tùy Chọn & Biến Thể Thiết Bị (Options & Variants)",
        "code": "VARIANTS",
        "category": "THIẾT BỊ & VẬT TƯ HƯƠNG SƠN",
        "tag": "CONFIG",
        "desc": "Cấu hình các gói phụ kiện mở rộng cho máy photocopy và máy in siêu tốc: Bộ nạp đảo bản gốc RADF/DSDF, Khay nạp giấy mở rộng (Large Capacity Feeder), Bộ dập ghim hoàn thiện (Finisher), Card Wifi...",
        "steps": [
            "Tại danh sách sản phẩm, bấm vào nút 'Tùy chọn' (Options) của một dòng máy photocopy (VD: Toshiba e-STUDIO 2528A).",
            "Thêm nhóm tùy chọn: Nhấn 'Thêm tùy chọn', đặt tên (VD: 'Cấu hình khay nạp', 'Bộ nạp bản gốc', 'Thời hạn bảo hành').",
            "Thêm các giá trị lựa chọn: VD 'Khay tiêu chuẩn 2 ngăn 550 tờ', 'Khay mở rộng 4 ngăn 2.000 tờ (+5.000.000đ)'.",
            "Sinh biến thể tự động: Bấm 'Tạo ma trận biến thể' để hệ thống tự động kết hợp các tùy chọn thành các SKU riêng biệt.",
            "Thiết lập giá chênh lệch và mã tồn kho cho từng cấu hình máy."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/products/1/options",
        "image": "/docs/assets/screenshots/05_product_options_annotated.png",
        "actions": [
            ("①", "Bảng nhóm tùy chọn thiết bị", "Quản lý các option phần cứng mở rộng của máy photocopy và máy in nhân bản."),
            ("②", "Giá trị tùy chọn (Option Values)", "Các lựa chọn phần cứng cụ thể kèm mức giá cộng thêm tương ứng."),
            ("③", "Ma trận biến thể (Variants Table)", "Bảng quản lý từng SKU kết hợp, cho phép bật/tắt kinh doanh từng cấu hình cụ thể."),
            ("④", "Cập nhật tồn kho theo biến thể", "Quản lý chính xác số lượng từng phiên bản máy sẵn có tại kho Hoàng Quốc Việt.")
        ],
        "notes": [
            "Các dòng máy photocopy cho thuê thường có 2 cấu hình phổ biến: Cấu hình tiêu chuẩn (in/copy/scan mạng) và Cấu hình cao cấp (kèm khay dung lượng lớn cho trường học/ngân hàng).",
            "Việc định nghĩa tùy chọn rõ ràng giúp khách hàng tự cấu hình báo giá trực tiếp trên website mà không cần gọi hỏi nhiều lần."
        ]
    },
    {
        "id": "chuong-6-orders-shipping",
        "num": 6,
        "title": "Quản Lý & Xử Lý Đơn Hàng (Orders Processing & Shipping)",
        "code": "ORDERS",
        "category": "BÁN HÀNG & THƯƠNG MẠI",
        "tag": "SALES",
        "desc": "Quy trình xử lý đơn đặt mua thiết bị, mực in, linh kiện vật tư từ website: Tiếp nhận đơn, xác nhận kỹ thuật, đẩy vận đơn đối tác (Viettel Post, GHTK, Tự giao bằng xe kỹ thuật Hương Sơn), in biên bản bàn giao.",
        "steps": [
            "Truy cập menu 'Đơn hàng' (<code>/vi/admin/orders</code>) để xem danh sách toàn bộ đơn đặt hàng.",
            "Bấm 'Xem' để mở chi tiết đơn hàng: Kiểm tra thông tin công ty/người mua, địa chỉ giao máy, danh sách thiết bị/vật tư, ghi chú xuất hóa đơn VAT.",
            "Cập nhật trạng thái đơn hàng: Từ 'Chờ xử lý' -> 'Đã xác nhận' (khi kỹ thuật viên đã liên hệ chốt lịch giao máy).",
            "Đẩy vận đơn giao hàng: Với đơn linh kiện/mực gửi tỉnh, chọn đối tác vận chuyển tích hợp và bấm 'Đẩy vận đơn'. Với máy photocopy giao tại Hà Nội, chọn hình thức 'Đội kỹ thuật Hương Sơn tự giao & lắp đặt tận nơi'.",
            "In phiếu giao hàng kiêm Biên bản bàn giao thiết bị & nghiệm thu kỹ thuật bàn giao cho khách hàng ký nhận.",
            "Chuyển trạng thái sang 'Hoàn tất' sau khi khách hàng đã nghiệm thu và thanh toán."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/orders",
        "image": "/docs/assets/screenshots/06_orders_list_annotated.png",
        "actions": [
            ("①", "Bộ lọc trạng thái đơn", "Lọc nhanh: Chờ xử lý, Đã xác nhận, Đang vận chuyển, Đã giao thành công, Đã hủy."),
            ("②", "Thông tin khách hàng & VAT", "Hiển thị đầy đủ Tên đơn vị, Mã số thuế, Địa chỉ giao hàng và Số điện thoại người nhận máy."),
            ("③", "Nút đẩy vận đơn tích hợp", "Tự động kết nối API lấy mã vận đơn và in tem nhãn giao nhận tiêu chuẩn."),
            ("④", "In phiếu bàn giao & Hóa đơn", "Xuất file in chuẩn A4 kèm đầy đủ điều khoản bảo hành thiết bị của Hương Sơn.")
        ],
        "notes": [
            "Với các đơn hàng giá trị cao (máy photocopy trên 30 triệu hoặc máy in Duplo), bắt buộc nhân viên kinh doanh phải gọi điện xác nhận đặt cọc trước khi xuất kho.",
            "Mọi đơn hàng đều lưu lại vết thời gian thay đổi trạng thái và tên nhân sự xử lý để phục vụ đối soát."
        ]
    },
    {
        "id": "chuong-7-rfq-leads",
        "num": 7,
        "title": "Tiếp Nhận & Xử Lý Yêu Cầu Báo Giá / Thuê Máy (RFQ & Leads)",
        "code": "LEADS & RFQ",
        "category": "BÁN HÀNG & THƯƠNG MẠI",
        "tag": "LEADS",
        "desc": "Quản lý các biểu mẫu yêu cầu tư vấn, yêu cầu báo giá dự án thầu, đăng ký thuê máy photocopy và yêu cầu chạy thử máy in siêu tốc Duplo từ các trường học, ngân hàng, sở ban ngành.",
        "steps": [
            "Truy cập menu 'Yêu cầu tư vấn' (<code>/vi/admin/contact-submissions</code>).",
            "Hệ thống hiển thị bảng danh sách các lead mới nhất: Họ tên người liên hệ, Đơn vị/Trường học, Số điện thoại, Email, Dịch vụ quan tâm (Thuê máy photo / Mua máy Duplo / Sửa chữa bảo trì), Nội dung ghi chú.",
            "Bấm vào dòng yêu cầu để xem chi tiết đầy đủ nội dung khách hàng gửi từ website.",
            "Sau khi chuyên viên kinh doanh/kỹ thuật đã gọi điện tư vấn và gửi file báo giá qua Zalo/Email, bấm công tắc 'Đã xử lý' để đánh dấu hoàn tất.",
            "Có thể phân loại lead vào nhóm khách hàng tiềm năng hoặc xuất danh sách ra file Excel phục vụ chăm sóc định kỳ."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/contact-submissions",
        "image": "/docs/assets/screenshots/07_rfq_contacts_annotated.png",
        "actions": [
            ("①", "Bảng danh sách Lead liên hệ", "Sắp xếp theo thứ tự mới nhất, hiển thị nhãn dịch vụ khách quan tâm."),
            ("②", "Nút đánh dấu Đã liên hệ / Chưa liên hệ", "Chuyển trạng thái trực quan để tránh trùng lặp giữa các nhân viên sale."),
            ("③", "Bộ lọc theo loại dịch vụ", "Lọc riêng: Yêu cầu thuê máy, Yêu cầu báo giá thiết bị mới, Yêu cầu sửa chữa dịch vụ."),
            ("④", "Hộp thoại ghi chú tư vấn", "Ghi lại tóm tắt nhu cầu khách hàng (số lượng bản in/tháng, ngân sách dự kiến, thời gian cần máy).")
        ],
        "notes": [
            "Cam kết dịch vụ của Hương Sơn: Khách hàng gửi yêu cầu tư vấn trên website phải được chuyên viên liên hệ lại trong vòng 15 - 30 phút trong giờ hành chính.",
            "Tích hợp thông báo tức thời qua Zalo OA quản trị giúp không bao giờ bị bỏ sót khách hàng tiềm năng.",
            "Cơ chế gửi Email thông báo tự động (Tuân thủ chỉ đạo của ban lãnh đạo): Mọi yêu cầu báo giá/thuê máy mới từ khách hàng đều được gửi trực tiếp về email chính `info@huongsonco.com.vn` và đồng thời CC cho `thuannc72@gmail.com` để giám sát tiến độ xử lý."
        ]
    },
    {
        "id": "chuong-8-posts-seo",
        "num": 8,
        "title": "Cẩm Nang Kỹ Thuật, Hướng Dẫn Sửa Lỗi & Chuẩn SEO (Posts & SEO)",
        "code": "POSTS & SEO",
        "category": "NỘI DUNG & TRUYỀN THÔNG",
        "tag": "CMS",
        "desc": "Hệ thống quản lý bài viết Cẩm nang kỹ thuật máy văn phòng, hướng dẫn xử lý mã lỗi máy photocopy Toshiba/Konica, kỹ thuật in đề thi bằng máy Duplo, tối ưu hóa công cụ tìm kiếm chuẩn Google & AI Engine (AEO).",
        "steps": [
            "Truy cập menu 'Bài viết' > 'Tất cả bài viết' (<code>/vi/admin/posts</code>) hoặc 'Chuyên mục bài viết' (<code>/vi/admin/post-categories</code>).",
            "Bấm 'Thêm bài viết mới': Nhập Tiêu đề bài viết chuẩn SEO (VD: <code>Cách Khắc Phục Lỗi Kẹt Giấy Máy Photocopy Toshiba e-STUDIO Chi Tiết Từ A-Z</code>).",
            "Chọn Chuyên mục: 'Cẩm Nang Kỹ Thuật', 'Kinh Nghiệm Thuê Máy', 'Tin Tức Hoạt Động', hoặc 'Giải Pháp In Đề Thi Trường Học'.",
            "Soạn thảo nội dung: Sử dụng trình soạn thảo trực quan, chèn hình ảnh minh họa thực tế, bảng biểu thông số, video clip hướng dẫn thao tác thay mực/thay giấy.",
            "Thiết lập khối Meta SEO: Nhập Meta Title (tối ưu 55-60 ký tự), Meta Description (150-160 ký tự), Đường dẫn tĩnh (Slug chuẩn không dấu), Ảnh đại diện chia sẻ mạng xã hội (OG Image).",
            "Tích chọn 'Xuất bản' và bấm 'Lưu bài viết'."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/posts",
        "image": "/docs/assets/screenshots/08_posts_list_annotated.png",
        "actions": [
            ("①", "Bảng quản lý bài viết", "Hiển thị tiêu đề, chuyên mục, tác giả, lượt xem, trạng thái xuất bản và ngày đăng bài."),
            ("②", "Trình soạn thảo trực quan Rich Text", "Hỗ trợ định dạng văn bản chuyên nghiệp, chèn bảng mã lỗi kỹ thuật, nhúng video YouTube."),
            ("③", "Bộ công cụ xem trước Google Search Snippet", "Mô phỏng chính xác giao diện hiển thị bài viết trên kết quả tìm kiếm Google di động & máy tính."),
            ("④", "Cấu hình Schema.org tự động", "Hệ thống tự động sinh cấu trúc dữ liệu NewsArticle / TechArticle / Breadcrumbs hỗ trợ Google Index nhanh.")
        ],
        "notes": [
            "Các bài viết kỹ thuật thực tế (như bảng tra cứu mã lỗi SC của máy photocopy) mang lại lượng truy cập tự nhiên cực lớn từ các trường học và văn phòng doanh nghiệp.",
            "Tuyệt đối không sao chép nội dung nguyên văn từ website khác để bảo vệ điểm uy tín SEO của domain huongsonco.com.vn.",
            "QUY ĐỊNH HÌNH ẢNH MINH HỌA TRONG BÀI VIẾT: Mỗi bài viết chuyên sâu cần có từ 3-4 hình ảnh thực tế (kho thiết bị, kỹ thuật viên thực hiện quy trình PDI kiểm định máy, ảnh bàn giao máy thực tế tại khách hàng như Vietcombank, Sở GD&ĐT Vĩnh Phúc, Quảng Trị...). TUYỆT ĐỐI KHÔNG chèn hình ảnh xe cộ, ô tô tải, phong cảnh tuyết rơi hay ảnh không liên quan đến ngành thiết bị văn phòng (đã từng bị khách hàng phản ánh gắt gao)."
        ]
    },
    {
        "id": "chuong-9-vouchers-promotions",
        "num": 9,
        "title": "Mã Giảm Giá & Chương Trình Khuyến Mãi (Vouchers & Promotions)",
        "code": "PROMOTIONS",
        "category": "BÁN HÀNG & THƯƠNG MẠI",
        "tag": "DISCOUNT",
        "desc": "Thiết lập các mã voucher chiết khấu khi mua mực in theo thùng, chương trình tặng kèm phụ kiện/miễn phí tháng đầu khi ký hợp đồng thuê máy photocopy dài hạn từ 12 tháng.",
        "steps": [
            "Truy cập menu 'Khuyến mãi' > 'Mã giảm giá' (<code>/vi/admin/vouchers</code>) hoặc 'Chương trình khuyến mãi' (<code>/vi/admin/promotions</code>).",
            "Tạo voucher mới: Nhập Mã code (VD: <code>THUEMAY2026</code>, <code>FANSIPAN10</code>).",
            "Chọn loại giảm giá: Giảm theo % giá trị đơn hàng hoặc Giảm một số tiền cố định (VD: Giảm 500.000đ cho đơn hàng thuê máy).",
            "Thiết lập điều kiện áp dụng: Giá trị đơn hàng tối thiểu, Số lượt sử dụng tối đa của mã, Số lượt sử dụng tối đa trên mỗi khách hàng.",
            "Chọn Thời gian hiệu lực: Từ ngày bắt đầu đến ngày kết thúc chiến dịch.",
            "Kích hoạt trạng thái 'Hoạt động' và lưu cấu hình."
        ],
        "route": "https://huongsonco.com.vn/vi/admin/vouchers",
        "image": "/docs/assets/screenshots/09_vouchers_annotated.png",
        "actions": [
            ("①", "Bảng danh sách Voucher", "Theo dõi mã code, mức giảm, số lượt đã sử dụng / tổng số lượt phát hành, thời hạn."),
            ("②", "Công tắc bật/tắt tức thời", "Tạm dừng chương trình khuyến mãi bất kỳ lúc nào khi hết ngân sách dự kiến."),
            ("③", "Giới hạn danh mục áp dụng", "Áp dụng voucher riêng cho danh mục 'Mực in Fansipan' hoặc dòng máy cụ thể."),
            ("④", "Thống kê hiệu quả chiến dịch", "Xem tổng số đơn hàng đã áp dụng voucher và tổng số tiền đã chiết khấu cho khách hàng.")
        ],
        "notes": [
            "Nên đặt mã voucher dễ nhớ, ngắn gọn (VD: HUONGSON2026, DUPLO500) khi in trên tờ rơi hoặc gửi qua email marketing.",
            "Hệ thống tự động kiểm tra tính hợp lệ của voucher tại bước thanh toán để ngăn chặn gian lận dùng nhiều lần."
        ]
    }
]
