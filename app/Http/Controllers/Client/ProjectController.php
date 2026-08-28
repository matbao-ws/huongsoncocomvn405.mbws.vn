<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request , ?string  = null): View
    {
        return view('client.pages.projects.index');
    }

    public function show(Request , ?string  = null, ?string  = null): View
    {
         = 'client.pages.projects.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }
}
