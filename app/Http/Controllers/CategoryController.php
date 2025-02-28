<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Imports\CategoryPriceImport;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

final class CategoryController extends Controller
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
                return [$item['tag'] => ['tag_img_url' => $item['tag_img_url'], 'tag_category' => $item['tag_category'], 'tag' => $item['tag']]];
            }
        )->all();
        $doors = $doors->groupBy('tag');
        $doors = $doors->all();
        $tags_tmp = collect($tags)->all();
        $tags = [];
        foreach ($tags_tmp as $collection => $tag) {
            $tags[$collection] = $tag->first();
        }
        // $colorVariants = Door::whereName($door->name)->whereCategoryId($door->category_id)->get()->groupBy('tag')->all();
        // dd($tags);

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

    public function upload()
    {
        return view('collections.upload');
    }

    public function import(Request $request): RedirectResponse
    {
        $validator = Validator::make(
            $request->all(),
            [
                'file' => 'required|mimes:xlsx,xls',
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()
                ->error('Import sikertelen!');
        }
        // Get the uploaded file
        $file = $request->file('file');

        // process the file
        Excel::import(new CategoryPriceImport, $file);

        return Redirect::route('index')
            ->info('Import sikeres!');
    }
}
