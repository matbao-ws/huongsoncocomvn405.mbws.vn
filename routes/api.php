<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PublicAuthController;
use App\Http\Controllers\Api\PublicController;
use App\Http\Controllers\Api\UserAddressController;
use App\Http\Controllers\Api\WebhookController;
use App\Mail\ContactInquiryMail;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

$leadHandler = function (Request $request) {
    $phone = $request->input('dien_thoai') ?? $request->input('phone');
    if (blank($phone)) {
        return response()->json([
            'success' => false,
            'message' => 'Vui lòng cung cấp số điện thoại liên hệ.',
        ], 422);
    }

    $name = $request->input('ho_ten') ?? $request->input('name') ?? 'Khách hàng liên hệ';
    $email = $request->input('email');
    $message = $request->input('noi_dung') 
        ?? $request->input('message') 
        ?? ('Yêu cầu: ' . ($request->input('nhu_cau') ?? $request->input('page_type') ?? 'Tư vấn từ website'));

    $meta = $request->except(['_token', '_hp', 'ho_ten', 'name', 'dien_thoai', 'phone', 'email', 'noi_dung', 'message']);

    ContactSubmission::query()->create([
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'message' => $message,
        'meta' => $meta !== [] ? $meta : null,
        'is_read' => false,
    ]);

    try {
        if (config('mail.seller')) {
            Mail::to(config('mail.seller'))->send(new ContactInquiryMail([
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'message' => $message,
            ]));
        }
    } catch (\Throwable $e) {
        Log::warning('Contact form email notification failed: ' . $e->getMessage());
    }

    return response()->json([
        'success' => true,
        'message' => 'Hương Sơn đã nhận được thông tin! Chuyên viên sẽ liên hệ Quý khách trong thời gian sớm nhất.',
    ]);
};

Route::post('/lead', $leadHandler);
Route::post('/contact', $leadHandler);

Route::prefix('public')->middleware('apiLocale')->group(function () use ($leadHandler) {
    Route::get('/health', [PublicController::class, 'health']);
    Route::get('/settings', [PublicController::class, 'settings']);
    Route::get('/languages', [PublicController::class, 'languages']);
    Route::post('/contact', $leadHandler)->middleware('throttle:public-contact');
    Route::post('/lead', $leadHandler)->middleware('throttle:public-contact');
    Route::get('/search', [PublicController::class, 'search']);
    Route::get('/catalog/categories', [PublicController::class, 'categories']);
    Route::get('/catalog/categories/{slug}', [PublicController::class, 'categoryDetail']);
    Route::get('/catalog/products', [PublicController::class, 'products']);
    Route::get('/catalog/products/{slug}', [PublicController::class, 'productDetail']);
    Route::get('/catalog/brands', [PublicController::class, 'brands']);
    Route::get('/catalog/brands/{slug}', [PublicController::class, 'brandDetail']);
    Route::get('/banners', [PublicController::class, 'banners']);
    Route::get('/pages/{slug}', [PublicController::class, 'pageDetail']);
    Route::get('/posts', [PublicController::class, 'posts']);
    Route::get('/posts/{slug}', [PublicController::class, 'postDetail']);
    Route::get('/post-categories', [PublicController::class, 'postCategories']);
    Route::get('/post-categories/{slug}', [PublicController::class, 'postCategoryDetail']);
});

Route::post('/auth/login', [AuthController::class, 'login'])->middleware('throttle:login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/auth/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::prefix('customer')->group(function () {
    Route::post('/register', [PublicAuthController::class, 'register'])->middleware('throttle:public-auth');
    Route::post('/login', [PublicAuthController::class, 'login'])->middleware('throttle:public-auth');
    Route::post('/forgot-password', [PublicAuthController::class, 'forgotPassword'])->middleware('throttle:public-auth');

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/me', [PublicAuthController::class, 'me']);
        Route::put('/profile', [PublicAuthController::class, 'updateProfile']);
        Route::put('/password', [PublicAuthController::class, 'updatePassword']);
        Route::post('/logout', [PublicAuthController::class, 'logout']);

        Route::get('/addresses', [UserAddressController::class, 'index']);
        Route::post('/addresses', [UserAddressController::class, 'store']);
        Route::get('/addresses/{id}', [UserAddressController::class, 'show']);
        Route::put('/addresses/{id}', [UserAddressController::class, 'update']);
        Route::delete('/addresses/{id}', [UserAddressController::class, 'destroy']);
        Route::post('/addresses/{id}/default', [UserAddressController::class, 'setDefault']);
    });
});
