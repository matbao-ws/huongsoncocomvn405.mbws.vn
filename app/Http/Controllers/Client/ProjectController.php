<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request, ...$params): View
    {
        return view('client.pages.projects.index');
    }

    public function show(Request $request, ...$params): View
    {
        $slug = end($params);
        $viewName = 'client.pages.projects.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    }
}
