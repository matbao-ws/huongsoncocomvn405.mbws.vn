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
    public function index(Request , ?string  = null): View
    {
        return view('client.pages.lead.index');
    }

    public function subpage(Request , ?string  = null, ?string  = null): View
    {
         = 'client.pages.lead.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }

    public function submit(Request ): JsonResponse|RedirectResponse
    {
         = ->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'nullable|email|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

         = ->except(['_token', 'name', 'phone', 'email', 'message']);

        ContactSubmission::create([
            'name' => ['name'] ?? 'Khách hàng liên hệ',
            'phone' => ['phone'],
            'email' => ['email'] ?? null,
            'message' => ['message'] ?? (->input('form_type') ? 'Gửi yêu cầu: ' . ->input('form_type') : 'Liên hệ từ website'),
            'meta' => ,
            'is_read' => false,
        ]);

        if (->expectsJson() || ->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Gửi thông tin thành công! Chuyên viên Hương Sơn sẽ liên hệ Quý khách trong thời gian sớm nhất.',
            ]);
        }

        return back()->with('success', 'Gửi thông tin thành công! Chuyên viên Hương Sơn sẽ liên hệ Quý khách trong thời gian sớm nhất.');
    }
}
