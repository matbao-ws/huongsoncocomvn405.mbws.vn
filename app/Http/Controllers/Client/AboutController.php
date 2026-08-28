<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request , ...): View
    {
        return view('client.pages.about.index');
    }

    public function subpage(Request , ...): View
    {
         = end();
         = 'client.pages.about.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }
}
