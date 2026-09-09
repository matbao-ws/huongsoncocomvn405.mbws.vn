<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        return view('client.pages.products.index');
    }

    public function category(Request $request, string $slug): View
    {
        $slug = trim($slug, '/');
        $viewName = 'client.pages.products.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        if ($slug === 'may-phoi-trang-hoan-thien-sau-in') {
            return view('client.pages.products.may-in-nhan-ban-toc-do-cao.index');
        }

        // Dynamic category lookup from DB
        $cat = Category::where('slug', $slug)
            ->orWhere('slug->vi', $slug)
            ->first();

        if ($cat) {
            $products = Product::with('brand')
                ->where('category_id', $cat->id)
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->orderByDesc('id')
                ->get();

            return view('client.pages.products.category', [
                'category' => $cat,
                'products' => $products,
            ]);
        }

        abort(404);
    }

    public function show(Request $request, string $category, string $slug): View
    {
        $category = trim($category, '/');
        $slug = trim($slug, '/');

        $viewName = 'client.pages.products.' . $category . '.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        if ($category === 'may-phoi-trang-hoan-thien-sau-in' && view()->exists('client.pages.products.may-in-nhan-ban-toc-do-cao.' . $slug . '.index')) {
            return view('client.pages.products.may-in-nhan-ban-toc-do-cao.' . $slug . '.index');
        }

        // Dynamic product lookup from DB
        $product = Product::with(['category', 'brand'])
            ->where('is_active', true)
            ->where(function ($q) use ($slug) {
                $q->where('slug', $slug)
                  ->orWhere('slug->vi', $slug)
                  ->orWhere('slug->en', $slug);
            })
            ->first();

        if ($product) {
            return view('client.pages.products.dynamic-show', compact('product'));
        }

        abort(404);
    }
}
