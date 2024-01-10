<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $collections = Category::all();
        return view('collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Category $category)
    {
        $doors = collect($category->doors()->get());
        $doors_tmp =  $doors->mapToGroups(
            function ($item, $key) {
                return [$item['tag'] => [$item['name'] => $item['img_url']]];
            }
        )->all();
        //dd($doors_tmp);
        $catalogs = $category->attributes()->get();
        $tags =  $doors->mapToGroups(
            function ($item, $key) {
                return [$item['tag'] => $item['tag_img_url']];
            }
        )->all();
        $doors = $doors_tmp;
        $tags_tmp = collect($tags)->all();
        $tags = [];
        foreach ($tags_tmp as $collection => $tag) {
            $tags[$collection] = $tag->first();
        }
        //dd($tags);
        return view('categories.show', compact('category', 'doors', 'catalogs', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
