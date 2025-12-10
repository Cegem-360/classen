<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Blog;

final class ManagePageContentFooldalModositas202509Controller extends Controller
{
    public function index()
    {
        $latestBlogs = Blog::latest()->take(3)->get();

        return view('fooldal-modositas-2025-09', ['latestBlogs' => $latestBlogs]);
    }
}
