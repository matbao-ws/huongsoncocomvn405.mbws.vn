<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request , ...): View
    {
        return view('client.pages.services.index');
    }

    public function show(Request , ...): View
    {
         = end();
         = 'client.pages.services.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }
}
