<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Door;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

final class DoorController extends Controller
{
    public Client $client;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('doors.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void
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

        return view('doors.show', ['door' => $door, 'category' => $category, 'catalogs' => $catalogs, 'colorVariants' => $colorVariants, 'modelVariants' => $modelVariants]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Door $doors): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Door $doors): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Door $doors): void
    {
        //
    }
}
