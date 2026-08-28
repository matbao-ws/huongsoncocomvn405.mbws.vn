<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index(Request $request, ...$params): View
    {
        return view('client.pages.lead.index');
    }

    public function subpage(Request $request, ...$params): View
    {
        $slug = end($params);
        $viewName = 'client.pages.lead.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    }

    public function submit(Request $request): JsonResponse|RedirectResponse
    {
        $phone = $request->input('dien_thoai') ?? $request->input('phone');
        if (blank($phone)) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Vui lòng cung cấp số điện thoại liên hệ.',
                ], 422);
            }
            return back()->withErrors(['dien_thoai' => 'Vui lòng cung cấp số điện thoại liên hệ.']);
        }

        $name = $request->input('ho_ten') ?? $request->input('name') ?? 'Khách hàng liên hệ';
        $email = $request->input('email');
        $message = $request->input('noi_dung') 
            ?? $request->input('message') 
            ?? ('Yêu cầu: ' . ($request->input('nhu_cau') ?? $request->input('page_type') ?? 'Tư vấn từ website'));

        $meta = $request->except(['_token', '_hp', 'ho_ten', 'name', 'dien_thoai', 'phone', 'email', 'noi_dung', 'message']);

        ContactSubmission::create([
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'message' => $message,
            'meta' => $meta !== [] ? $meta : null,
            'is_read' => false,
        ]);

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Hương Sơn đã nhận được thông tin! Chuyên viên sẽ liên hệ Quý khách trong thời gian sớm nhất.',
            ]);
        }

        return back()->with('success', 'Hương Sơn đã nhận được thông tin! Chuyên viên sẽ liên hệ Quý khách trong thời gian sớm nhất.');
    }
}
