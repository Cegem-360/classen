<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Blog;

final class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'blogs' => Blog::latest()->get(),
        ]);
    }

    public function show($slug)
    {
        dump($slug);
        $blog = Blog::whereSlug($slug)->first();
        dump($blog);
        if (! $blog) {
            abort(404);
        }

        return view('blog.show')->with('blog', $blog);
    }
}
