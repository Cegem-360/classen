<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('collections.index');
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
    public function show($category)
    {
        $category = Category::whereName($category)->first();
        $doors = collect($category->doors()->get());
        $catalogs = $category->attributes()->get();
        $tags = $doors->mapToGroups(
            function ($item, $key) {
                return [$item['tag'] => ['tag_img_url' => $item['tag_img_url'], 'tag_category' => $item['tag_category']]];
            }
        )->all();
        $doors = $doors->groupBy('tag');
        $doors = $doors->all();
        /*$doors_tmp =  $doors->mapToGroups(
            function ($item, $key) {
                return [$item['tag'] => [$item['name'] => $item['img_url']]];
            }
        )->all();*/

        $tags_tmp = collect($tags)->all();
        $tags = [];
        foreach ($tags_tmp as $collection => $tag) {
            $tags[$collection] = $tag->first();
        }
        //$colorVariants = Door::whereName($door->name)->whereCategoryId($door->category_id)->get()->groupBy('tag')->all();
        //dd($tags);

        return view('collections.show', compact('category', 'doors', 'catalogs', 'tags'));
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
