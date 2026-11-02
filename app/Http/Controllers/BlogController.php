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
        $blog = Blog::whereSlug($slug)->firstOrFail();

        return view('blog.show')->with('blog', $blog);
    }
}
