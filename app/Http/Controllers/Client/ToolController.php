<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index(Request , ?string  = null): View
    {
        return view('client.pages.tools.index');
    }

    public function subpage(Request , ?string  = null, ?string  = null): View
    {
         = 'client.pages.tools.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }
}
