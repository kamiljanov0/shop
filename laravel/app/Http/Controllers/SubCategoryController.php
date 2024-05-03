<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public  function  index()
    {
        $categories = SubCategory::all();
        return view('subCategory.index')->with(['sub_categories'=>$categories]);

    }
    public function create()
    {
        $categories = Category::all();
        return view('subCategory.create')->with(['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $subCategory =  SubCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id'=>$request->category_id,

        ]);

        return redirect()->route('subCategory.index');
    }

    public function edit(SubCategory $subCategory)
    {
        $category = Category::all();
        return view('subCategory.edit')->with(['subCategory'=>$subCategory,'categories'=>$category]);
    }


    public function update(Request $request, SubCategory $subCategory)
    {
        $subCategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('subCategory.index');
    }

    public function delete(SubCategory $subCategory)
    {

        $subCategory->delete();

        return redirect()->route('subCategory.index');
    }
}
