<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use App\Models\Blog;
use App\Models\Door;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

final class ManagePageContentController extends Controller
{
    public Client $client;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $latestBlogs = Blog::latest()->take(3)->get();

        return view('index', ['latestBlogs' => $latestBlogs]);
    }

    public function favorites(Request $request)
    {
        $favoriteProductIds = json_decode(Cookie::get('favorites', '[]'), true);
        dump($favoriteProductIds);
        $products = [];
        if ($favoriteProductIds !== null) {
            $products = Door::whereIn('id', $favoriteProductIds)->get();
        }
        dump($products);

        return view('favorites.index', ['products' => $products]);
    }

    public function rolunk()
    {
        return view('rolunk/index');
    }

    public function kapcsolat()
    {
        return view('kapcsolat/index');
    }

    public function sendContact(Request $request)
    {

        /* if ($request->website !== '') {
            return redirect()->route('kapcsolat')->error(__('Bot detected!'));
        } */

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

        return redirect()->route('kapcsolat')->success(__('Message sent successfully!'));
    }

    public function szolgaltatasaink()
    {
        return view('szolgaltatasaink/index');
    }

    // ne nyulj hozzá
    public function xmlExport(Request $request)
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
    public function xmlFile()
    {
        $filePath = storage_path('app/axelpro_exp_items_.xml');

        return response()->file($filePath);
    }
}
