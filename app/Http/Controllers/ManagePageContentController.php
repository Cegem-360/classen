<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Blog;
use App\Models\Door;
use GuzzleHttp\Client;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class ManagePageContentController extends Controller
{
    public Client $client;

    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View
    {
        $latestBlogs = Blog::latest()->take(3)->get();

        return view('fooldal-modositas-2025-09', ['latestBlogs' => $latestBlogs]);
    }

    public function favorites(Request $request): Factory|View
    {
        /** @var array<int, int|string>|null $rawFavoriteIds */
        $rawFavoriteIds = json_decode($request->cookie('favorites', '[]'), true);

        $favoriteProductIds = collect(is_array($rawFavoriteIds) ? $rawFavoriteIds : [])
            ->filter(fn (mixed $id): bool => is_int($id) || (is_string($id) && ctype_digit($id)))
            ->map(fn (mixed $id): int => (int) $id)
            ->unique()
            ->values()
            ->all();

        $products = empty($favoriteProductIds)
            ? collect()
            : Door::query()
                ->whereIn('id', $favoriteProductIds)
                ->get();

        return view('favorites.index', ['products' => $products]);
    }

    public function sendContact(Request $request): RedirectResponse
    {

        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'contactEmail' => ['required', 'email'],
            'emailMessage' => ['required'],
        ]);

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $contactEmail = $request->contactEmail;
        $phone = $request->phone;
        $emailMessage = $request->emailMessage;

        // Send email
        Mail::to('info@arcadia98.hu')->send(new ContactForm(
            $first_name,
            $last_name,
            $contactEmail,
            $phone,
            $emailMessage
        ));

        return to_route('kapcsolat')->success(__('Message sent successfully!'));
    }

    // ne nyulj hozzá
    public function xmlExport(Request $request): ResponseFactory|Response
    {
        $xmlData = $request->input('AXELPRO_EXP_ITEMS'); // Assuming AXELPRO_EXP_ITEMS is the key in your POST request

        // Generate a unique filename or use your desired naming convention
        $filename = 'axelpro_exp_items_.xml';

        // Save the XML data to storage
        Storage::put($filename, $xmlData);

        // Optionally, return the filename or any other response if needed
        return response('XML file has been saved successfully', 200);
    }

    // ne nyulj hozzá
    public function xmlFile(): BinaryFileResponse
    {
        $filePath = storage_path('app/axelpro_exp_items_.xml');

        return response()->file($filePath);
    }
}
