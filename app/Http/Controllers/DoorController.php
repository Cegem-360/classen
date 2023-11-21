<?php

namespace App\Http\Controllers;

use App\Models\Door;
use App\Enums\UrlPath;
use GuzzleHttp\Client;
use App\Enums\EndPoint;
use App\Enums\PostPageIds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class DoorController extends Controller
{
    public Client $client;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$baseUrl = 'https://ketkorkft.hu//wp-json/wc/v3/';
        $endpoint = 'products'; // The WooCommerce API endpoint for products
        $apiKey = 'ck_dfd0baae141798f29f0931489ad1b2c2cb3407f3'; // Replace with your actual API key
        $apiSecret = 'cs_19ed8e0f1becfc8d9637a36b042db76be4a61695'; // Replace with your actual API secret

        $client = new Client([
            'base_uri' => $baseUrl,
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($apiKey . ':' . $apiSecret)
            ],
        ]);

        try {
            $allProducts = [];

            for ($i = 1; $i <= 5; $i++) {
                $response = $client->get("$endpoint?page=" . $i);
                $data = $response->getBody()->getContents();
                $products = json_decode($data, true);

                if (empty($products)) {
                    break; // No more products to fetch
                }

                $allProducts = array_merge($allProducts, $products);
            }
            $products = $allProducts;
            return view('doors.index', compact("products"));
        } catch (\Exception $e) {
            // Handle error
            return view('doors.index', ['products' => []]);
        }*/
        $products = Door::with('category')->get();
        return view('doors.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Door $door)
    {
        $category = $door->category()->first();
        $catalogs = $category->attributes()->get();
        $colorVariants = Door::whereName($door->name)->whereCategoryId($door->category_id)->get()->groupBy('tag')->all();
        $modelVariants = Door::whereTag($door->tag)->whereCategoryId($door->category_id)->get()->sortBy('name')->all();
        return view('doors.show', compact('door', 'category', 'catalogs', 'colorVariants', 'modelVariants'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Door $doors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Door $doors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Door $doors)
    {
        //
    }
}
