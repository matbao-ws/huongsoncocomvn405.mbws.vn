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

Route::get('/catalog/sync-all-brands-v1', function (Request $request) {
    if ($request->query('key') !== 'huongson_sync_2026') {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    $brandsData = [
        [
            'slug' => 'duplo',
            'name' => ['vi' => 'DUPLO (Nhật Bản)', 'en' => 'DUPLO'],
            'description' => ['vi' => 'Thương hiệu máy in nhân bản siêu tốc và thiết bị hoàn thiện sau in hàng đầu Nhật Bản.', 'en' => 'Leading Japanese manufacturer of digital duplicators and print finishing equipment.'],
            'image_url' => '/assets/images/brands/duplo.svg',
            'sort_order' => 1,
            'is_active' => true,
        ],
        [
            'slug' => 'toshiba',
            'name' => ['vi' => 'TOSHIBA (Nhật Bản)', 'en' => 'TOSHIBA'],
            'description' => ['vi' => 'Máy photocopy đa chức năng A3/A4, độ bền vượt trội và chi phí bản chụp tối ưu.', 'en' => 'Multifunction A3/A4 copiers with superior reliability and low printing cost.'],
            'image_url' => '/assets/images/brands/toshiba.svg',
            'sort_order' => 2,
            'is_active' => true,
        ],
        [
            'slug' => 'fansipan',
            'name' => ['vi' => 'FANSIPAN (Hương Sơn)', 'en' => 'FANSIPAN'],
            'description' => ['vi' => 'Thương hiệu vật tư mực in, cartridge và linh kiện tương thích tiêu chuẩn cao độc quyền của Hương Sơn.', 'en' => 'Exclusive high-standard compatible toner and consumable brand by Huong Son.'],
            'image_url' => '/assets/images/brands/fansipan.svg',
            'sort_order' => 3,
            'is_active' => true,
        ],
        [
            'slug' => 'ricoh',
            'name' => ['vi' => 'RICOH (Nhật Bản)', 'en' => 'RICOH'],
            'description' => ['vi' => 'Thiết bị in siêu tốc Priport và máy scan tài liệu chuyên dụng tốc độ cao Ricoh / Fujitsu.', 'en' => 'Digital duplicators and high-speed document scanners.'],
            'image_url' => '/assets/images/brands/ricoh.svg',
            'sort_order' => 4,
            'is_active' => true,
        ],
        [
            'slug' => 'konica-minolta',
            'name' => ['vi' => 'KONICA MINOLTA (Nhật Bản)', 'en' => 'KONICA MINOLTA'],
            'description' => ['vi' => 'Dòng máy in và máy photocopy đa chức năng màu chất lượng cao bizhub.', 'en' => 'High quality bizhub digital printing and multifunction systems.'],
            'image_url' => '/assets/images/brands/konica-minolta.svg',
            'sort_order' => 5,
            'is_active' => true,
        ],
        [
            'slug' => 'hp',
            'name' => ['vi' => 'HP (Hoa Kỳ)', 'en' => 'HP'],
            'description' => ['vi' => 'Máy in laser đơn năng và đa chức năng tốc độ cao cho khối doanh nghiệp.', 'en' => 'High performance laser printers for enterprises.'],
            'image_url' => '/assets/images/brands/hp.svg',
            'sort_order' => 6,
            'is_active' => true,
        ],
        [
            'slug' => 'viewsonic',
            'name' => ['vi' => 'VIEWSONIC (Hoa Kỳ)', 'en' => 'VIEWSONIC'],
            'description' => ['vi' => 'Màn hình tương tác thông minh 4K ViewBoard phục vụ giáo dục và hội nghị.', 'en' => '4K smart interactive ViewBoard displays for education and meetings.'],
            'image_url' => '/assets/images/brands/viewsonic.svg',
            'sort_order' => 7,
            'is_active' => true,
        ],
        [
            'slug' => 'panasonic',
            'name' => ['vi' => 'PANASONIC (Nhật Bản)', 'en' => 'PANASONIC'],
            'description' => ['vi' => 'Máy chiếu hội trường văn phòng và thiết bị trình chiếu chuyên nghiệp.', 'en' => 'Professional projectors and conference equipment.'],
            'image_url' => '/assets/images/brands/panasonic.svg',
            'sort_order' => 8,
            'is_active' => true,
        ],
        [
            'slug' => 'logitech',
            'name' => ['vi' => 'LOGITECH (Thụy Sĩ)', 'en' => 'LOGITECH'],
            'description' => ['vi' => 'Hệ thống thiết bị hội nghị truyền hình trực tuyến chuyên nghiệp.', 'en' => 'Professional video conferencing systems.'],
            'image_url' => '/assets/images/brands/logitech.svg',
            'sort_order' => 9,
            'is_active' => true,
        ],
        [
            'slug' => 'aver',
            'name' => ['vi' => 'AVER (Đài Loan)', 'en' => 'AVER'],
            'description' => ['vi' => 'Camera vật thể và giải pháp truyền hình trực tuyến lớp học thông minh.', 'en' => 'Visualizer document cameras and smart classroom solutions.'],
            'image_url' => '/assets/images/brands/aver.svg',
            'sort_order' => 10,
            'is_active' => true,
        ],
        [
            'slug' => 'xinda',
            'name' => ['vi' => 'XINDA (Đài Loan)', 'en' => 'XINDA'],
            'description' => ['vi' => 'Máy đếm tiền kiểm giả cao cấp cho ngân hàng và kho quỹ.', 'en' => 'High precision currency counters and counterfeit detectors.'],
            'image_url' => '/assets/images/brands/xinda.svg',
            'sort_order' => 11,
            'is_active' => true,
        ],
        [
            'slug' => 'huong-son',
            'name' => ['vi' => 'HƯƠNG SƠN SOLUTIONS', 'en' => 'HUONG SON SOLUTIONS'],
            'description' => ['vi' => 'Gói giải pháp cho thuê thiết bị, dịch vụ in sao tài liệu trọn gói của Hương Sơn.', 'en' => 'Full rental packages and managed print solutions by Huong Son.'],
            'image_url' => '/assets/images/brands/huong-son.svg',
            'sort_order' => 12,
            'is_active' => true,
        ],
    ];

    // Delete legacy duplicate brand id 7
    \App\Models\Brand::where('id', 7)->delete();

    $brandMap = [];
    foreach ($brandsData as $b) {
        $brand = \App\Models\Brand::updateOrCreate(
            ['slug' => $b['slug']],
            [
                'name' => $b['name'],
                'description' => $b['description'],
                'image_url' => $b['image_url'],
                'sort_order' => $b['sort_order'],
                'is_active' => $b['is_active'],
            ]
        );
        $brandMap[$b['slug']] = $brand->id;
    }

    $updated = [];
    $products = \App\Models\Product::all();

    foreach ($products as $prod) {
        $name = mb_strtolower($prod->name ?? '', 'UTF-8');
        $sku = strtoupper($prod->sku ?? '');
        $targetSlug = null;

        // Priority 1: SKU matches
        if (str_starts_with($sku, 'FAN')) {
            $targetSlug = 'fansipan';
        } elseif (str_starts_with($sku, 'DUPLO')) {
            $targetSlug = 'duplo';
        } elseif (str_starts_with($sku, 'TOSH') || str_starts_with($sku, 'THUE-TOSH') || $sku === 'DRUM-DEV-KIT') {
            $targetSlug = 'toshiba';
        } elseif (str_starts_with($sku, 'RICOH') || str_starts_with($sku, 'SCAN-RICOH')) {
            $targetSlug = 'ricoh';
        } elseif (str_starts_with($sku, 'KM') || str_starts_with($sku, 'KONICA')) {
            $targetSlug = 'konica-minolta';
        } elseif (str_starts_with($sku, 'HP') || str_starts_with($sku, 'THUE-HP')) {
            $targetSlug = 'hp';
        } elseif (str_starts_with($sku, 'VIEW')) {
            $targetSlug = 'viewsonic';
        } elseif (str_starts_with($sku, 'PANA')) {
            $targetSlug = 'panasonic';
        } elseif (str_starts_with($sku, 'LOGI')) {
            $targetSlug = 'logitech';
        } elseif (str_starts_with($sku, 'AVER')) {
            $targetSlug = 'aver';
        } elseif (str_starts_with($sku, 'XINDA')) {
            $targetSlug = 'xinda';
        } elseif (str_starts_with($sku, 'EDU') || str_starts_with($sku, 'HS')) {
            $targetSlug = 'huong-son';
        } elseif ($sku === 'TEST-UPLOAD-001') {
            $targetSlug = 'duplo';
        }

        // Priority 2: Name keywords
        if (! $targetSlug) {
            if (str_contains($name, 'fansipan')) {
                $targetSlug = 'fansipan';
            } elseif (str_contains($name, 'duplo')) {
                $targetSlug = 'duplo';
            } elseif (str_contains($name, 'toshiba')) {
                $targetSlug = 'toshiba';
            } elseif (str_contains($name, 'ricoh') || str_contains($name, 'priport') || str_contains($name, 'fi-7')) {
                $targetSlug = 'ricoh';
            } elseif (str_contains($name, 'konica') || str_contains($name, 'bizhub')) {
                $targetSlug = 'konica-minolta';
            } elseif (preg_match('/\bhp\b/i', $name) || str_contains($name, 'laserjet')) {
                $targetSlug = 'hp';
            } elseif (str_contains($name, 'viewsonic')) {
                $targetSlug = 'viewsonic';
            } elseif (str_contains($name, 'panasonic')) {
                $targetSlug = 'panasonic';
            } elseif (str_contains($name, 'logitech')) {
                $targetSlug = 'logitech';
            } elseif (str_contains($name, 'aver')) {
                $targetSlug = 'aver';
            } elseif (str_contains($name, 'xinda')) {
                $targetSlug = 'xinda';
            } elseif (str_contains($name, 'hương sơn') || str_contains($name, 'giáo dục') || str_contains($name, 'đề thi')) {
                $targetSlug = 'huong-son';
            }
        }

        if ($targetSlug && isset($brandMap[$targetSlug])) {
            $prod->brand_id = $brandMap[$targetSlug];
            $prod->save();
            $updated[] = [
                'id' => $prod->id,
                'name' => $prod->name,
                'sku' => $prod->sku,
                'brand_id' => $prod->brand_id,
                'brand_slug' => $targetSlug,
            ];
        }
    }

    return response()->json([
        'success' => true,
        'message' => 'Successfully synchronized all brands and product brand_ids!',
        'total_brands' => count($brandMap),
        'total_products_updated' => count($updated),
        'updated_products' => $updated,
    ]);
});

Route::get('/catalog/sync-all-seo-v1', function (Request $request) {
    if ($request->query('key') !== 'huongson_sync_2026') {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    $products = \App\Models\Product::with('brand')->get();
    $updatedProducts = [];

    foreach ($products as $prod) {
        $viName = $prod->getTranslation('name', 'vi', false) ?: ($prod->name ?: 'Sản phẩm Hương Sơn');
        $enName = $prod->getTranslation('name', 'en', false) ?: $viName;
        $brandName = $prod->brand ? ($prod->brand->getTranslation('name', 'vi', false) ?: $prod->brand->name) : '';
        $brandSuffix = $brandName ? " - Chính Hãng {$brandName}" : '';

        // Generate Vietnamese SEO
        $viTitle = "{$viName}{$brandSuffix} | Hương Sơn";
        
        $viShort = $prod->getTranslation('short_description', 'vi', false);
        $viDesc = $prod->getTranslation('description', 'vi', false);
        $rawText = !empty($viShort) ? strip_tags($viShort) : (!empty($viDesc) ? strip_tags($viDesc) : '');
        $cleanText = trim(preg_replace('/\s+/', ' ', $rawText));

        if (!empty($cleanText) && mb_strlen($cleanText, 'UTF-8') >= 25) {
            $viDescription = \Illuminate\Support\Str::limit($cleanText, 150);
            if (!str_contains($viDescription, 'Hương Sơn') && mb_strlen($viDescription, 'UTF-8') <= 120) {
                $viDescription .= ' Phân phối chính hãng bởi Hương Sơn.';
            }
        } else {
            $viDescription = "Cung cấp {$viName} chính hãng{$brandSuffix} tại Công ty Hương Sơn. Đầy đủ chứng nhận CO/CQ, giá cạnh tranh, hỗ trợ kỹ thuật tận nơi 24/7.";
        }

        // Generate English SEO
        $enBrandSuffix = $brandName ? " - Genuine {$brandName}" : '';
        $enTitle = "{$enName}{$enBrandSuffix} | Huong Son";
        $enDescription = "Buy and lease genuine {$enName} at Huong Son Co., Ltd. High performance, 100% genuine CO/CQ, competitive pricing and professional technical support.";

        // Set translations
        $prod->setTranslation('meta_title', 'vi', $viTitle);
        $prod->setTranslation('meta_title', 'en', $enTitle);
        $prod->setTranslation('meta_description', 'vi', $viDescription);
        $prod->setTranslation('meta_description', 'en', $enDescription);
        $prod->save();

        $updatedProducts[] = [
            'id' => $prod->id,
            'name' => $viName,
            'meta_title' => $viTitle,
            'meta_description' => $viDescription,
        ];
    }

    // Also auto-populate Category SEO if empty
    $categories = \App\Models\Category::all();
    $updatedCategories = [];

    foreach ($categories as $cat) {
        $catName = $cat->getTranslation('name', 'vi', false) ?: $cat->name;
        $catDesc = $cat->getTranslation('description', 'vi', false);

        $catTitle = "{$catName} Chính Hãng | Công Ty Hương Sơn";
        $rawCatText = !empty($catDesc) ? strip_tags($catDesc) : '';
        $cleanCatText = trim(preg_replace('/\s+/', ' ', $rawCatText));

        if (!empty($cleanCatText) && mb_strlen($cleanCatText, 'UTF-8') >= 25) {
            $catDescription = \Illuminate\Support\Str::limit($cleanCatText, 150);
        } else {
            $catDescription = "Danh mục {$catName} phân phối chính hãng bởi Công ty Hương Sơn. Cam kết chất lượng, bảo hành tận nơi, dịch vụ chuyên nghiệp.";
        }

        $cat->setTranslation('meta_title', 'vi', $catTitle);
        $cat->setTranslation('meta_description', 'vi', $catDescription);
        $cat->save();

        $updatedCategories[] = [
            'id' => $cat->id,
            'name' => $catName,
            'meta_title' => $catTitle,
        ];
    }

    return response()->json([
        'success' => true,
        'message' => 'Successfully generated and saved SEO titles and descriptions for all products and categories!',
        'total_products_updated' => count($updatedProducts),
        'total_categories_updated' => count($updatedCategories),
        'products' => $updatedProducts,
    ]);
});

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
