<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(Request $request, ...$params): View
    {
        return view('client.pages.tools.index');
    }

    public function subpage(Request $request, ...$params): View
    {
        $slug = end($params);
        $viewName = 'client.pages.tools.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    }
}
