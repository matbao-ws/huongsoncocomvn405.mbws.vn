<!-- MOBILE DRAWER -->
  <div id="mobile-backdrop" class="fixed inset-0 bg-black/60 z-50 hidden opacity-0 transition-opacity duration-300"></div>
  <div id="mobile-drawer" class="fixed top-0 left-0 bottom-0 w-80 max-w-[85vw] bg-[#181924] z-50 shadow-2xl transform -translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-6 border-b border-gray-800 flex items-center justify-between">
      <a href="/"><img src="/assets/images/brand/HUONG_SON_logo.svg" alt="Hương Sơn" class="h-10 sm:h-12 w-auto object-contain" /></a>
      <button id="mobile-menu-close" class="text-gray-400 hover:text-white p-2" aria-label="Đóng menu">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>
    <div class="p-6 flex-1 overflow-y-auto space-y-3">
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>SẢN PHẨM</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/san-pham/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/san-pham/photocopy-may-da-chuc-nang/" class="block py-1 hover:text-white">Photocopy – Máy đa chức năng</a><a href="/san-pham/may-in-nhan-ban-toc-do-cao/" class="block py-1 hover:text-white">Máy in nhân bản tốc độ cao</a><a href="/san-pham/may-scan-so-hoa/" class="block py-1 hover:text-white">Máy Scan – Số hóa</a><a href="/san-pham/may-phoi-trang-hoan-thien-sau-in/" class="block py-1 hover:text-white">Máy phối trang – Hoàn thiện sau in</a><a href="/san-pham/may-in-laser/" class="block py-1 hover:text-white">Máy in Laser – Thiết bị in</a><a href="/san-pham/thiet-bi-phong-hoc-giao-duc/" class="block py-1 hover:text-white">Thiết bị phòng học – Giáo dục</a><a href="/san-pham/vat-tu-linh-kien-tieu-hao/" class="block py-1 hover:text-white">Vật tư – Linh kiện – Tiêu hao</a><a href="/san-pham/thiet-bi-van-phong-hoi-hop/" class="block py-1 hover:text-white">Thiết bị văn phòng – Hội họp</a><a href="/san-pham/fansipan/" class="block py-1 hover:text-white">FANSIPAN – Vật tư tương thích</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>GIẢI PHÁP</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/giai-phap/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/giai-phap/giao-duc/" class="block py-1 hover:text-white">Giáo dục</a><a href="/giai-phap/co-quan-nha-nuoc/" class="block py-1 hover:text-white">Cơ quan Nhà nước</a><a href="/giai-phap/ngan-hang-tai-chinh/" class="block py-1 hover:text-white">Ngân hàng – Tài chính</a><a href="/giai-phap/tap-doan-tong-cong-ty/" class="block py-1 hover:text-white">Tập đoàn – Tổng công ty</a><a href="/giai-phap/in-de-thi-tai-lieu/" class="block py-1 hover:text-white">In đề thi – Tài liệu</a><a href="/giai-phap/scan-so-hoa/" class="block py-1 hover:text-white">Scan – Số hóa</a><a href="/giai-phap/cho-thue-thiet-bi/" class="block py-1 hover:text-white">Cho thuê thiết bị</a><a href="/giai-phap/quan-ly-van-hanh/" class="block py-1 hover:text-white">Quản lý – Vận hành</a>
        </div>
      </div>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>DỊCH VỤ</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/dich-vu/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/dich-vu/bao-tri-sua-chua/" class="block py-1 hover:text-white">Bảo trì – Sửa chữa</a><a href="/dich-vu/dich-vu-ky-thuat/" class="block py-1 hover:text-white">Dịch vụ kỹ thuật</a><a href="/dich-vu/van-hanh-thiet-bi/" class="block py-1 hover:text-white">Vận hành thiết bị</a><a href="/dich-vu/thu-mua-may-cu-doi-may-moi/" class="block py-1 hover:text-white">Thu mua máy cũ – Đổi máy mới</a>
        </div>
      </div>
      <a href="/du-an/" class="block text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">DỰ ÁN</a>
      <div>
        <button class="mobile-dropdown-btn w-full flex items-center justify-between text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">
          <span>VỀ HƯƠNG SƠN</span>
          <i class="fa-solid fa-chevron-down text-xs"></i>
        </button>
        <div class="hidden pl-4 py-2 space-y-2 text-sm text-gray-400">
          <a href="/ve-huong-son/" class="block py-1 text-[#1A9900] font-medium">Tổng quan</a><a href="/ve-huong-son/" class="block py-1 hover:text-white">Giới thiệu Hương Sơn</a><a href="/ve-huong-son/nang-luc/" class="block py-1 hover:text-white">Hồ sơ năng lực</a><a href="/ve-huong-son/doi-tac-thuong-hieu/" class="block py-1 hover:text-white">Đối tác – Thương hiệu</a><a href="/ve-huong-son/tai-nguyen/" class="block py-1 hover:text-white">Tài nguyên – Catalogue</a><a href="/ve-huong-son/kien-thuc/" class="block py-1 hover:text-white">Kiến thức</a><a href="/ve-huong-son/tin-tuc/" class="block py-1 hover:text-white">Tin tức</a>
        </div>
      </div>
      <a href="/nhan-tu-van/" class="block text-white font-medium py-2 border-b border-gray-800/50 hover:text-[#1A9900]">NHẬN TƯ VẤN</a>
    </div>
    <div class="p-6 border-t border-gray-800 bg-[#12131c]">
      <a href="tel:02439729484" data-ga="click_hotline" class="bg-[#1A9900] hover:bg-[#147700] text-white font-bold text-xs uppercase tracking-wider py-3 w-full text-center block">
        <i class="fa-solid fa-phone mr-2"></i> 024 3972 9484
      </a>
    </div>
  </div>

  <!-- SEARCH POPUP -->
  <div id="search-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4">
    <div class="bg-[#181924] border border-gray-800 w-full max-w-2xl p-6 sm:p-8 shadow-2xl relative">
      <button id="search-close" class="absolute top-4 right-4 text-gray-400 hover:text-white p-2" aria-label="Đóng">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
      <h3 class="text-lg font-bold text-white mb-4 uppercase">Tìm kiếm</h3>
      <form action="/ve-huong-son/kien-thuc/" method="get" class="relative">
        <input type="text" id="search-input" name="s" placeholder="VD: thuê máy in đề thi, máy scan tốc độ cao..." class="w-full bg-gray-900 border border-gray-700 text-white px-4 py-3 pr-12 text-sm focus:outline-none focus:border-[#1A9900]" />
        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-[#1A9900]" aria-label="Tìm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>
  </div>

  <!-- FLOATING BUTTONS -->
  <a href="tel:02439729484" data-ga="click_hotline" class="fixed bottom-24 right-6 z-40 w-12 h-12 bg-[#1A9900] text-white flex items-center justify-center shadow-xl animate-pulse-phone" title="Gọi ngay">
    <i class="fa-solid fa-phone text-lg"></i>
  </a>
  <a href="https://zalo.me/0913237302" target="_blank" rel="noopener" data-ga="click_zalo" class="fixed right-6 z-40 w-12 h-12 bg-[#0068ff] text-white flex items-center justify-center shadow-xl animate-pulse-zalo" style="bottom: 96px;" title="Chat Zalo">
    <span class="font-bold text-xs">Zalo</span>
  </a>
  <button id="back-to-top" class="fixed bottom-8 right-6 z-40 w-10 h-10 bg-gray-900 text-white flex items-center justify-center shadow-xl hover:bg-[#1A9900] transition-all duration-300 opacity-0 invisible translate-y-4" aria-label="Lên đầu trang">
    <i class="fa-solid fa-arrow-up text-xs"></i>
  </button>

  <script src="/assets/js/main.js?v=2.0.1"></script>
</body>
</html>