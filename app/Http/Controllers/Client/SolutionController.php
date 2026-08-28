<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index(Request , ?string  = null): View
    {
        return view('client.pages.solutions.index');
    }

    public function category(Request , ?string  = null, ?string  = null): View
    {
         = 'client.pages.solutions.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }

    public function show(Request , ?string  = null, ?string  = null, ?string  = null): View
    {
         = 'client.pages.solutions.' .  . '.' .  . '.index';
        if (view()->exists()) {
            return view();
        }
        abort(404);
    }
}
