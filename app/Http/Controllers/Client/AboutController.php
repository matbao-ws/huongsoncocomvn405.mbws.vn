<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request): View
    {
        return view('client.pages.about.index');
    }

    public function subpage(Request $request, ?string $slug = null): View
    {
        $slug = $slug ?: $request->route('slug');
        $slug = trim((string) $slug, '/');

        $viewName = 'client.pages.about.' . $slug . '.index';
        if (view()->exists($viewName)) {
            if ($slug === 'tin-tuc') {
                $posts = Post::where('is_active', true)
                    ->orderByDesc('published_at')
                    ->orderByDesc('id')
                    ->get();
                return view($viewName, compact('posts'));
            }
            return view($viewName);
        }
        abort(404);
    }

    public function postDetail(Request $request, string $postSlug): View
    {
        $postSlug = trim($postSlug, '/');

        $post = Post::where('is_active', true)
            ->where(function ($q) use ($postSlug) {
                $q->where('slug', $postSlug)
                  ->orWhere('slug->vi', $postSlug)
                  ->orWhere('slug->en', $postSlug);
            })
            ->first();

        if (! $post) {
            abort(404);
        }

        $relatedPosts = Post::where('is_active', true)
            ->where('id', '!=', $post->id)
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('client.pages.about.tin-tuc.show', compact('post', 'relatedPosts'));
    }
}
