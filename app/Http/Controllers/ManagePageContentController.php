<?php

namespace App\Http\Controllers;

use Cookie;
use App\Models\Door;
use GuzzleHttp\Client;
use App\Models\Category;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        return view('favorites.index', compact('products'));
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
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contactEmail' => 'required|email',
            'emailMessage' => 'required',
        ]);

        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $contactEmail = $request->contactEmail;
        $phone = $request->phone;
        $emailMessage = $request->emailMessage;

        // Send email
        Mail::to(config('mail.from.address', 'web-ertesito@arcadia98.hu'))->send(new ContactForm(
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

    //ne nyulj hozzá
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

    //ne nyulj hozzá
    public function xmlFile()
    {
        $filePath = storage_path('app/axelpro_exp_items_.xml');

        return response()->file($filePath);
    }
}
