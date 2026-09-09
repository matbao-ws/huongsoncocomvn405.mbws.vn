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

        // Dynamic category lookup from DB
        $cat = Category::where('slug', $slug)
            ->orWhere('slug->vi', $slug)
            ->orWhere('slug->en', $slug)
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

        if ($slug === 'may-phoi-trang-hoan-thien-sau-in') {
            return redirect()->route('products.category', 'may-in-nhan-ban-toc-do-cao');
        }

        abort(404);
    }

    public function show(Request $request, string $category, string $slug): View
    {
        $category = trim($category, '/');
        $slug = trim($slug, '/');

        // Dynamic product lookup from DB
        $product = Product::with(['category', 'brand'])
            ->where(function ($q) use ($slug) {
                $q->where('slug', $slug)
                  ->orWhere('slug->vi', $slug)
                  ->orWhere('slug->en', $slug)
                  ->orWhereHas('localizedSlugs', function ($lq) use ($slug) {
                      $lq->where('slug', $slug);
                  });
            })
            ->first();

        if ($product) {
            if (! $product->is_active) {
                abort(404);
            }

            $relatedProducts = Product::with('brand')
                ->where('category_id', $product->category_id)
                ->where('id', '!=', $product->id)
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->limit(3)
                ->get();

            return view('client.pages.products.dynamic-show', compact('product', 'relatedProducts'));
        }

        // Fallback for static view if not found in DB
        $viewName = 'client.pages.products.' . $category . '.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }

        abort(404);
    }
}

