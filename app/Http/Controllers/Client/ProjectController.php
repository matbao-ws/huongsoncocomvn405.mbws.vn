<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request , ...): View
    {
        return view('client.pages.projects.index');
    }

    public function show(Request , ...): View
    {
         = end();
         = 'client.pages.projects.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }
}
