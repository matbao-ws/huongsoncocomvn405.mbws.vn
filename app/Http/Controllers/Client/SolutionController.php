<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index(Request $request, ...$params): View
    {
        return view('client.pages.solutions.index');
    }

    public function category(Request $request, ...$params): View
    {
        $slug = end($params);
        $viewName = 'client.pages.solutions.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    }

    public function show(Request $request, ...$params): View
    {
        $slug = array_pop($params);
        $category = array_pop($params);
        $viewName = 'client.pages.solutions.' . $category . '.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    }
}
