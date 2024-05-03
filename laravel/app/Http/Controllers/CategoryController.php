<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public  function  __construct()
    {
        $this->middleware('isAdmin');
        $this->authorizeResource(Category::class, 'category'); //Umumiy CRUD uchun authorize bo'ladi.
    }

    public  function  index()
    {
        $categories = Category::all();
        return view('category.index')->with(['categories'=>$categories]);

    }
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $categories =  Category::create([
            'name' => $request->name,

        ]);

        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {


        return view('category.edit')->with(['category'=>$category]);
    }


    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('category.index');
    }

    public function delete(Category $category)
    {

        $category->delete();

        return redirect()->route('category.index');
    }

}
