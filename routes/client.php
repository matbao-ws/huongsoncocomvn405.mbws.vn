<?php

use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LeadController;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ProjectController;
use App\Http\Controllers\Client\ServiceController;
use App\Http\Controllers\Client\SolutionController;
use App\Http\Controllers\Client\ToolController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products
Route::get('san-pham', [ProductController::class, 'index'])->name('products.index');
Route::get('san-pham/{slug}', [ProductController::class, 'category'])->name('products.category');
Route::get('san-pham/{category}/{slug}', [ProductController::class, 'show'])->name('products.show');

// Solutions
Route::get('giai-phap', [SolutionController::class, 'index'])->name('solutions.index');
Route::get('giai-phap/{slug}', [SolutionController::class, 'category'])->name('solutions.category');
Route::get('giai-phap/{category}/{slug}', [SolutionController::class, 'show'])->name('solutions.show');

// Services
Route::get('dich-vu', [ServiceController::class, 'index'])->name('services.index');
Route::get('dich-vu/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Projects
Route::get('du-an', [ProjectController::class, 'index'])->name('projects.index');
Route::get('du-an/{slug}', [ProjectController::class, 'show'])->name('projects.show');

// About
Route::get('ve-huong-son', [AboutController::class, 'index'])->name('about.index');
Route::get('ve-huong-son/{slug}', [AboutController::class, 'subpage'])->name('about.subpage');

// Tools
Route::get('cong-cu', [ToolController::class, 'index'])->name('tools.index');
Route::get('cong-cu/{slug}', [ToolController::class, 'subpage'])->name('tools.subpage');

// Lead & Contact Forms
Route::get('nhan-tu-van', [LeadController::class, 'index'])->name('lead.index');
Route::get('nhan-tu-van/{slug}', [LeadController::class, 'subpage'])->name('lead.subpage');
Route::post('nhan-tu-van/submit', [LeadController::class, 'submit'])->name('lead.submit');

// CMS Pages with dynamic content & inline editing
Route::get('pages/{slug}', [PageController::class, 'show'])
    ->where('slug', '[A-Za-z0-9\-_]+')
    ->name('pages.show');

/*
 * Sandbox for the inline editing toolbar.
 */
if (app()->environment(['local', 'testing'])) {
    Route::view('sandbox/inline-editor', 'client.dev.toolbar-sandbox')
        ->name('dev.toolbar-sandbox');
    Route::view('sandbox/inline-editor-stress', 'client.dev.toolbar-stress')
        ->name('dev.toolbar-stress');
}
