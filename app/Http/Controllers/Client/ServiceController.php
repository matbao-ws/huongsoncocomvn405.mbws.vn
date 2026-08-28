<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request , ?string  = null): View
    {
        return view('client.pages.services.index');
    }

    public function show(Request , ?string  = null, ?string  = null): View
    {
         = 'client.pages.services.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }
}
