<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Blog;
use App\Models\Door;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

final class ManagePageContentFooldalModositas202509Controller extends Controller
{
    public Client $client;

    /**
     * Ideiglenes főoldal új szakaszok kialakítására és jóváhagyásra.
     */
    public function index()
    {
        $latestBlogs = Blog::latest()->take(3)->get();

    return view('fooldal-modositas-2025-09', ['latestBlogs' => $latestBlogs]);
    }
}
