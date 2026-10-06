<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a strategic rental landing page.
     * Maps to views at resources/views/client/pages/rental/{slug}.blade.php
     */
    public function show(Request $request, string $slug): View
    {
        $viewName = 'client.pages.rental.' . $slug;
        if (view()->exists($viewName)) {
            return view($viewName);
        }
        abort(404);
    }
}
