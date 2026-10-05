<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LegacyRedirectController extends Controller
{
    /**
     * Bảng ánh xạ chính xác 1-1 cho các URL cũ đã được index trên Google Search
     */
    protected array $exactMap = [
        // Bài viết tra cứu mã mực (Reviewer nêu đích danh)
        'bang-tra-ma-muc-master-may-in-duplo-cid195.html' => '/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/',

        // Máy photocopy Toshiba đa chức năng
        'may-photocopy-toshiba-e-studio-2329a-cid1112.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2329a/',
        'may-photocopy-toshiba-e-studio-2829a-cid1113.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2829a/',
        'toshiba-e-studio-2528a-cid163.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2528a/',
        'toshiba-e-studio-3028a-cid193.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-3028a/',
        'toshiba-e-studio-3528a-cid162.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-3528a/',
        'toshiba-e-studio-4528a-cid161.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-4528a/',
        'toshiba-e-studio-5528a-cid166.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-5528a/',
        'toshiba-e-studio-6528a-cid1120.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-6528a/',
        'toshiba-e-studio-457-cid196.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-457/',
        'cho-thue-toshiba-e-studio-456-cid198.html' => '/san-pham/cho-thue-thiet-bi-giao-duc/cho-thue-toshiba-e-studio-456/',
        'e-studio2500ac-cid173.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2500ac/',
        'e-studio3005ac-cid172.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-3005ac/',
        'e-studio3505ac-cid171.html' => '/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-3505ac/',

        // Máy in nhân bản siêu tốc Duplo
        'may-nhan-ban-sieu-toc-duplo-dp-x550-cid1107.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x550/',
        'duplo-dp-x650-cid1108.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x650/',
        'may-nhan-ban-sieu-toc-duplo-dp-x850-cid130.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x850/',
        'may-in-nhan-ban-sieu-toc-duplo-dp-g325-cid120.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-g325/',
        'may-in-nhan-ban-sieu-toc-duplo-dp-g205-duplo-dp-g325-cid121.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-g205/',
        'dp-g205-cid129.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-g205/',
        'dp-u950-cid124.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-u950/',
        'dij-200-cid134.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dij-200/',
        'dpx550.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x550/',
        'dpx850.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x850/',

        // Thiết bị gia công tài liệu Duplo
        'may-phoi-trang-sap-xep-tai-lieu-duplo-dfc-122-cid140.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-122/',
        'may-phoi-trang-sap-xep-tai-lieu-duplo-dfc-102-cid141.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-102/',
        'may-giap-ghim-duplo-dfc-sii-ket-noi-voi-dfc-100-101-120-cid136.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-sii/',
        'dfc-sii-cid139.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-sii/',
        'dsc-10-20-cid138.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dsc-10-20/',

        // Konica Minolta
        'may-photocopy-don-sac-da-chuc-nang-bizhub-360i-300i-cid1117.html' => '/san-pham/photocopy-may-da-chuc-nang/konica-minolta-bizhub-360i/',
        'may-photocopy-don-sac-da-chuc-nang-bizhub-650i-550i-450i-cid1118.html' => '/san-pham/photocopy-may-da-chuc-nang/konica-minolta-bizhub-650i/',
        'may-photocopy-don-sac-da-chuc-nang-bizhub-750i-cid1119.html' => '/san-pham/photocopy-may-da-chuc-nang/konica-minolta-bizhub-750i/',

        // Ricoh
        'ricoh-dx2430-cid158.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/ricoh-priport-dx-2430/',
        'ricoh-dx3443-cid157.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/ricoh-priport-dx-3443/',
        'ricoh-dx4450-cid156.html' => '/san-pham/may-in-nhan-ban-toc-do-cao/ricoh-priport-dx-4450/',

        // HP Laser & Cho thuê A4
        'may-in-laser-den-trang-hp-laserjet-pro-mfp-4103fdw-2z629a-cid155.html' => '/san-pham/may-in-laser/hp-laserjet-pro-mfp-m4103fdw/',
        'cho-thue-may-in-da-nang-a4-hp-laserjet-pro-mfp-4103fdw-2z629a-cid1100.html' => '/san-pham/cho-thue-thiet-bi-giao-duc/cho-thue-hp-laserjet-pro-mfp-m4103fdw/',

        // Thiết bị văn phòng
        'may-dem-tien-xinda-bc28f-cid1102.html' => '/san-pham/thiet-bi-van-phong-hoi-hop/may-dem-tien-xinda-bc28f/',
        'van-phong-pham-huong-son-cid1101.html' => '/san-pham/vat-tu-linh-kien-tieu-hao/',

        // Mực & Linh kiện
        'muc-fansipan-tonner-black-cid184.html' => '/san-pham/fansipan/muc-fansipan-toner-black/',
        'muc-master-dung-cho-may-nhan-ban-duplo-cid145.html' => '/san-pham/vat-tu-linh-kien-tieu-hao/muc-master-duplo-chinh-hang/',
        'muc-may-in-duplo-dp-f550-cid146.html' => '/san-pham/vat-tu-linh-kien-tieu-hao/muc-may-in-duplo-dp-f550/',
        'muc-toshiba-2508a-3008a-3508a-4508a-500-cid159.html' => '/san-pham/vat-tu-linh-kien-tieu-hao/muc-toshiba-2508a-3008a-3508a-4508a-500/',
        'spare-drum-cid144.html' => '/san-pham/vat-tu-linh-kien-tieu-hao/spare-drum-duplo/',
    ];

    /**
     * Tiếp nhận và xử lý chuyển hướng 301 cho các URL cũ
     */
    public function handle(Request $request, string $legacyUrl): RedirectResponse
    {
        $cleanPath = trim(strtolower($legacyUrl), '/');

        // Bỏ qua file xác minh Google Search Console
        if (str_starts_with($cleanPath, 'google')) {
            abort(404);
        }

        // 1. Kiểm tra trong bảng ánh xạ chính xác
        if (isset($this->exactMap[$cleanPath])) {
            return redirect($this->exactMap[$cleanPath], 301);
        }

        $basename = basename($cleanPath);
        if (isset($this->exactMap[$basename])) {
            return redirect($this->exactMap[$basename], 301);
        }

        // 2. Chuyển hướng thông minh dựa trên từ khóa trong slug cũ
        $slug = preg_replace('/(\-c?id\d+)?\.html$/i', '', $basename);
        $slug = preg_replace('/\.html$/i', '', $slug);

        // Khớp model cụ thể
        if (str_contains($slug, '2329')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2329a/', 301);
        if (str_contains($slug, '2829')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2829a/', 301);
        if (str_contains($slug, '2528')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-2528a/', 301);
        if (str_contains($slug, '3028')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-3028a/', 301);
        if (str_contains($slug, '3528')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-3528a/', 301);
        if (str_contains($slug, '4528')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-4528a/', 301);
        if (str_contains($slug, '5528')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-5528a/', 301);
        if (str_contains($slug, '6528')) return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-6528a/', 301);
        if (str_contains($slug, '457'))  return redirect('/san-pham/photocopy-may-da-chuc-nang/toshiba-e-studio-457/', 301);
        if (str_contains($slug, '456'))  return redirect('/san-pham/cho-thue-thiet-bi-giao-duc/cho-thue-toshiba-e-studio-456/', 301);

        if (str_contains($slug, 'x550')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x550/', 301);
        if (str_contains($slug, 'x650')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x650/', 301);
        if (str_contains($slug, 'x850')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-x850/', 301);
        if (str_contains($slug, 'g325')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-g325/', 301);
        if (str_contains($slug, 'g205')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-g205/', 301);
        if (str_contains($slug, 'u950')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dp-u950/', 301);
        if (str_contains($slug, '200'))  return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dij-200/', 301);

        if (str_contains($slug, 'dfc-122')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-122/', 301);
        if (str_contains($slug, 'dfc-102')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-102/', 301);
        if (str_contains($slug, 'dfc-sii')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dfc-sii/', 301);
        if (str_contains($slug, 'dsc-10'))  return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/duplo-dsc-10-20/', 301);

        if (str_contains($slug, '360i') || str_contains($slug, '300i')) return redirect('/san-pham/photocopy-may-da-chuc-nang/konica-minolta-bizhub-360i/', 301);
        if (str_contains($slug, '650i') || str_contains($slug, '550i')) return redirect('/san-pham/photocopy-may-da-chuc-nang/konica-minolta-bizhub-650i/', 301);
        if (str_contains($slug, '750i')) return redirect('/san-pham/photocopy-may-da-chuc-nang/konica-minolta-bizhub-750i/', 301);

        if (str_contains($slug, 'dx2430') || str_contains($slug, 'dx-2430')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/ricoh-priport-dx-2430/', 301);
        if (str_contains($slug, 'dx3443') || str_contains($slug, 'dx-3443')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/ricoh-priport-dx-3443/', 301);
        if (str_contains($slug, 'dx4450') || str_contains($slug, 'dx-4450')) return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/ricoh-priport-dx-4450/', 301);

        if (str_contains($slug, '4103') || str_contains($slug, 'hp-laserjet')) return redirect('/san-pham/may-in-laser/hp-laserjet-pro-mfp-m4103fdw/', 301);
        if (str_contains($slug, 'xinda') || str_contains($slug, 'dem-tien')) return redirect('/san-pham/thiet-bi-van-phong-hoi-hop/may-dem-tien-xinda-bc28f/', 301);

        // Khớp nhóm ngành / giải pháp
        if (str_contains($slug, 'bang-tra-ma-muc') || str_contains($slug, 'ma-muc')) {
            return redirect('/ve-huong-son/kien-thuc/bang-tra-ma-muc-master-may-in-duplo-toan-tap/', 301);
        }
        if (str_contains($slug, 'cho-thue') || str_contains($slug, 'thue-may')) {
            return redirect('/giai-phap/cho-thue-thiet-bi/', 301);
        }
        if (str_contains($slug, 'de-thi') || str_contains($slug, 'nhan-ban') || str_contains($slug, 'in-sao')) {
            return redirect('/giai-phap/giao-duc/in-de-thi/', 301);
        }
        if (str_contains($slug, 'scan') || str_contains($slug, 'so-hoa')) {
            return redirect('/giai-phap/scan-so-hoa/', 301);
        }
        if (str_contains($slug, 'muc') || str_contains($slug, 'master') || str_contains($slug, 'drum') || str_contains($slug, 'fansipan') || str_contains($slug, 'vat-tu')) {
            return redirect('/san-pham/vat-tu-linh-kien-tieu-hao/', 301);
        }
        if (str_contains($slug, 'toshiba')) {
            return redirect('/san-pham/photocopy-may-da-chuc-nang/', 301);
        }
        if (str_contains($slug, 'duplo')) {
            return redirect('/san-pham/may-in-nhan-ban-toc-do-cao/', 301);
        }
        if (str_contains($slug, 'ricoh')) {
            return redirect('/san-pham/', 301);
        }
        if (str_contains($slug, 'konica')) {
            return redirect('/san-pham/photocopy-may-da-chuc-nang/', 301);
        }
        if (str_contains($slug, 'tin-tuc') || str_contains($slug, 'kien-thuc')) {
            return redirect('/ve-huong-son/kien-thuc/', 301);
        }
        if (str_contains($slug, 'du-an')) {
            return redirect('/du-an/', 301);
        }

        // Mặc định chuyển hướng 301 về trang danh mục sản phẩm
        return redirect('/san-pham/', 301);
    }
}
