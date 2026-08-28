<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, ...$params): View
    {
        return view('client.pages.products.index');
    }

    public function category(Request $request, ...$params): View
    {
        $slug = end($params);
        $viewName = 'client.pages.products.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        if ($slug === 'may-phoi-trang-hoan-thien-sau-in') {
            return view('client.pages.products.may-in-nhan-ban-toc-do-cao.index');
        }
        abort(404);
    }

    public function show(Request $request, ...$params): View
    {
        $slug = array_pop($params);
        $category = array_pop($params);
        $viewName = 'client.pages.products.' . $category . '.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        if ($category === 'may-phoi-trang-hoan-thien-sau-in' && view()->exists('client.pages.products.may-in-nhan-ban-toc-do-cao.' . $slug . '.index')) {
            return view('client.pages.products.may-in-nhan-ban-toc-do-cao.' . $slug . '.index');
        }
        abort(404);
    }
}
