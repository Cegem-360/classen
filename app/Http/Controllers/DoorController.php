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
        $colorVariants = Door::whereName($door->name)->whereCategoryId($door->category_id)->get()->groupBy('tag_category')->all();
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
