<?php

namespace App\Http\Controllers;

use App\Enums\EndPoint;
use App\Enums\PostPageIds;
use App\Enums\UrlPath;
use App\Models\Door;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;

class ManagePageContentController extends Controller
{
    public Client $client;
    /**
     * Display a listing of the resource.
     */
    public function test()
    {
        $this->client =
            new Client([
                'base_uri' => UrlPath::BASEURL,
            ]);
        $response =
            $this->client->get(EndPoint::DESIGFORMS);
        $designFormstmp = json_decode($response->getBody(), true);
        $designForms = collect($designFormstmp)->first();
        //dd($designFormstmp[0]['_links']['wp:attachment'][0]['href']);
        $imgUrl =
            $this->client->get($designFormstmp[0]['_links']['wp:attachment'][0]['href']);
        $imgUrl = json_decode($imgUrl->getBody());
        $imgUrl = collect($imgUrl)->first();
        dd($imgUrl);
        return view('test', compact('designForms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function blog()
    {
        $this->client =
            new Client([
                'base_uri' => UrlPath::BASEURL,
            ]);
        $category_name = 'Glass';
        $response = $this->client->get(EndPoint::CATEGORIES);
        $categories = json_decode($response->getBody());
        $category = collect($categories)->firstWhere('name', $category_name);
        $category_id = $category->id;

        $wpApiData = Cache::remember("wpApiData", now()->addDay(), function () {
            $response = $this->client->get(EndPoint::PAGES . PostPageIds::MAINPAGE);
            $data = $response->getBody()->getContents();
            $page = json_decode($data, true);
            return $page;
        });

        $assets = Cache::remember("assets", now()->addDay(), function () use ($category_id) {
            $response = $this->client->get(EndPoint::POSTS . "?categories=" . $category_id);
            $data = $response->getBody()->getContents();
            $assets = json_decode($data, true);
            return $assets;
        });
        return view('blog', compact('wpApiData', 'assets'));
    }


    public function favorites(Request $request)
    {
        $favoriteProductIds =  json_decode(Cookie::get('favorites'));
        $products = Door::whereIn('id', $favoriteProductIds)->get();
        return view('favorites', compact('products'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
