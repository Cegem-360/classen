<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class ManagePageContentFooldalModositas202509Controller extends Controller
{
    public function index(): Factory|View
    {
        $latestBlogs = Blog::query()->latest()->take(3)->get();

        return view('fooldal-modositas-2025-09', ['latestBlogs' => $latestBlogs]);
    }
}
