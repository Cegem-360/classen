<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Door;
use Cookie;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManagePageContentController extends Controller
{
    public Client $client;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::whereNot('name', 'Adjustable door frame')
            ->whereNot('name', 'Adjustable non-rebated door frame')
            ->whereNot('name', 'Standard 2-Pack door frame')->get();

        return view('index', compact('categories'));
    }

    public function favorites(Request $request)
    {
        $favoriteProductIds = json_decode(Cookie::get('favorites'));
        $products = Door::whereIn('id', $favoriteProductIds)->get();

        return view('favorites', compact('products'));
    }

    public function rolunk()
    {
        return view('rolunk/index');
    }

    public function kapcsolat()
    {
        return view('kapcsolat/index');
    }

    public function szolgaltatasaink()
    {
        return view('szolgaltatasaink/index');
    }

    //ne nyulj hozzá
    public function xmlExport(Request $request)
    {
        $xmlData = $request->input('AXELPRO_EXP_ITEMS'); // Assuming AXELPRO_EXP_ITEMS is the key in your POST request

        // Generate a unique filename or use your desired naming convention
        $filename = 'axelpro_exp_items_.xml';

        // Save the XML data to storage
        Storage::put($filename, $xmlData);

        // Optionally, return the filename or any other response if needed
        return response()->json(['success' => ''], 200);
    }

    //ne nyulj hozzá
    public function xmlFile()
    {
        $filePath = storage_path('app/axelpro_exp_items_.xml');

        return response()->file($filePath);
    }
}
