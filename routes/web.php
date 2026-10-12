<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', fn () => redirect('/'.app(\App\Services\LanguageRegistry::class)->defaultLocale().'/admin/login'))->name('login');
Route::get('/admin', fn () => redirect('/'.app(\App\Services\LanguageRegistry::class)->defaultLocale().'/admin'))->name('admin.redirect');
Route::get('/admin/{any}', fn ($any) => redirect('/'.app(\App\Services\LanguageRegistry::class)->defaultLocale().'/admin/'.$any))->where('any', '.*');

Route::get('/api/docs', [\App\Http\Controllers\Api\PublicController::class, 'docs'])->name('api.docs');

// Admin User Guide & Documentation Portal (CHỈ ADMIN ĐÃ ĐĂNG NHẬP MỚI ĐƯỢC XEM)
Route::middleware(['web', 'auth', 'admin'])->group(function() {
    Route::get('/huong-dan-su-dung', [\App\Http\Controllers\Admin\DocumentationController::class, 'userManual'])->name('user-manual.legacy');
    Route::get('/bien-ban-ban-giao', [\App\Http\Controllers\Admin\DocumentationController::class, 'handover'])->name('handover-doc.legacy');
    Route::get('/docs/user-manual.html', [\App\Http\Controllers\Admin\DocumentationController::class, 'userManual']);
    Route::get('/docs/user-manual-print.html', [\App\Http\Controllers\Admin\DocumentationController::class, 'printManual']);
    Route::get('/docs/Huong_Dan_Su_Dung_Admin_Huong_Son.pdf', [\App\Http\Controllers\Admin\DocumentationController::class, 'pdf']);
    Route::get('/docs/BIEN_BAN_BAN_GIAO_VA_NGHIEM_THU_WEBSITE_HUONG_SON.md', [\App\Http\Controllers\Admin\DocumentationController::class, 'handover']);
    Route::get('/docs/HUONG_DAN_SU_DUNG_ADMIN_HUONG_SON.md', [\App\Http\Controllers\Admin\DocumentationController::class, 'markdown']);
});
Route::get('/docs/assets/screenshots/{filename}', function($filename) {
    $path = base_path('public/docs/assets/screenshots/' . $filename);
    if (!file_exists($path)) {
        $path = base_path('docs/assets/screenshots/' . $filename);
    }
    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'image/png']);
    }
    abort(404);
});
Route::get('/assets/screenshots/{filename}', function($filename) {
    $path = base_path('public/assets/screenshots/' . $filename);
    if (!file_exists($path)) {
        $path = base_path('docs/assets/screenshots/' . $filename);
    }
    if (file_exists($path)) {
        return response()->file($path, ['Content-Type' => 'image/png']);
    }
    abort(404);
});

Route::get('/customer/reset-password/{token}', [\App\Http\Controllers\Auth\CustomerResetPasswordController::class, 'create'])->name('customer.password.reset');
Route::post('/customer/reset-password', [\App\Http\Controllers\Auth\CustomerResetPasswordController::class, 'store'])
    ->middleware('throttle:public-auth')
    ->name('customer.password.update');

if (config('app.payment_mock_enabled') && app()->environment(['local', 'testing'])) {
    Route::get('/payment/vnpay/mock', [\App\Http\Controllers\Api\PublicController::class, 'vnpayMockPayment'])->name('vnpay.mock');
    Route::post('/payment/vnpay/mock/submit', [\App\Http\Controllers\Api\PublicController::class, 'vnpayMockSubmit'])
        ->middleware('throttle:10,1')
        ->name('vnpay.mock.submit');
}

// Client Storefront direct routes
Route::middleware(['web', 'setLocale'])
    ->name('client.')
    ->group(base_path('routes/client.php'));
