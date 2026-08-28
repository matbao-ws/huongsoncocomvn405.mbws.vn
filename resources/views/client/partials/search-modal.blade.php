  <!-- SEARCH POPUP -->
  <div id="search-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4">
    <div class="bg-[#181924] border border-gray-800 w-full max-w-2xl p-6 sm:p-8 shadow-2xl relative">
      <button id="search-close" class="absolute top-4 right-4 text-gray-400 hover:text-white p-2" aria-label="Đóng">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
      <h3 class="text-lg font-bold text-white mb-4 uppercase">Tìm kiếm</h3>
      <form action="/ve-huong-son/kien-thuc/" method="get" class="relative">
        <input type="text" id="search-input" name="s" placeholder="VD: thuê máy in đề thi, máy scan tốc độ cao..." class="w-full bg-gray-900 border border-gray-700 text-white px-4 py-3 pr-12 text-sm focus:outline-none focus:border-[#1f7c45]" />
        <button type="submit" class="absolute right-4 top-1/2 -translate-y-1/2 text-[#1f7c45]" aria-label="Tìm">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
    </div>
  </div>