<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DocumentationController extends Controller
{
    /**
     * Hiển thị Cẩm nang Quản trị SPA 18 chương (Chỉ Admin đã đăng nhập mới được xem)
     */
    public function userManual(Request $request): BinaryFileResponse
    {
        $path = base_path('docs/user-manual.html');
        abort_unless(file_exists($path), 404, 'Tài liệu hướng dẫn quản trị chưa được khởi tạo.');

        return response()->file($path, [
            'Content-Type' => 'text/html; charset=UTF-8',
            'Cache-Control' => 'no-cache, private',
        ]);
    }

    /**
     * Hiển thị Chế độ In A4
     */
    public function printManual(Request $request): BinaryFileResponse
    {
        $path = base_path('docs/user-manual-print.html');
        abort_unless(file_exists($path), 404, 'Bản in tài liệu chưa được khởi tạo.');

        return response()->file($path, [
            'Content-Type' => 'text/html; charset=UTF-8',
            'Cache-Control' => 'no-cache, private',
        ]);
    }

    /**
     * Tải hoặc Xem file PDF Bàn giao Đóng gói 100 trang
     */
    public function pdf(Request $request): BinaryFileResponse
    {
        $path = base_path('docs/Huong_Dan_Su_Dung_Admin_Huong_Son.pdf');
        abort_unless(file_exists($path), 404, 'File PDF hướng dẫn chưa sẵn sàng.');

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="Huong_Dan_Su_Dung_Admin_Huong_Son.pdf"',
            'Cache-Control' => 'no-cache, private',
        ]);
    }

    /**
     * Hiển thị Biên bản Bàn giao & Nghiệm thu Hệ thống
     */
    public function handover(Request $request): BinaryFileResponse
    {
        $path = base_path('docs/BIEN_BAN_BAN_GIAO_VA_NGHIEM_THU_WEBSITE_HUONG_SON.md');
        abort_unless(file_exists($path), 404, 'Biên bản bàn giao chưa sẵn sàng.');

        return response()->file($path, [
            'Content-Type' => 'text/markdown; charset=UTF-8',
            'Cache-Control' => 'no-cache, private',
        ]);
    }

    /**
     * Hiển thị File Markdown Cẩm nang
     */
    public function markdown(Request $request): BinaryFileResponse
    {
        $path = base_path('docs/HUONG_DAN_SU_DUNG_ADMIN_HUONG_SON.md');
        abort_unless(file_exists($path), 404, 'Tệp Markdown hướng dẫn chưa sẵn sàng.');

        return response()->file($path, [
            'Content-Type' => 'text/markdown; charset=UTF-8',
            'Cache-Control' => 'no-cache, private',
        ]);
    }
}
