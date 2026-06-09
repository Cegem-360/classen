<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class BlogController extends Controller
{
    public function index(): Factory|View
    {
        return view('blog.index', [
            'blogs' => Blog::query()->latest()->get(),
        ]);
    }

    public function show(string $slug): Factory|View
    {
        /* dump($slug); */
        $blog = Blog::whereSlug($slug)->first();
        /* dump($blog); */
        if (! $blog) {
            abort(404);
        }

        return view('blog.show')->with('blog', $blog);
    }
}
