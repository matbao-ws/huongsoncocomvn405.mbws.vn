<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
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
        $slug = trim((string) $slug, '/');

        $viewName = 'client.pages.projects.' . $slug . '.index';
        if (view()->exists($viewName)) {
            return view($viewName);
        }

        // Dynamic project/post lookup from DB
        $post = Post::with('category')
            ->where('is_active', true)
            ->where(function ($q) use ($slug) {
                $q->where('slug', $slug)
                  ->orWhere('slug->vi', $slug)
                  ->orWhere('slug->en', $slug)
                  ->orWhereHas('localizedSlugs', function ($lq) use ($slug) {
                      $lq->where('slug', $slug);
                  });
            })
            ->first();

        if ($post) {
            $relatedPosts = Post::where('is_active', true)
                ->where('id', '!=', $post->id)
                ->orderByDesc('published_at')
                ->limit(3)
                ->get();

            return view('client.pages.about.tin-tuc.show', compact('post', 'relatedPosts'));
        }

        abort(404);
    }
}

