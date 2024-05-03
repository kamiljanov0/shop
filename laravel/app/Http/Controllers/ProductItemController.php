<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductItem;
use App\Http\Requests\StoreProductItemRequest;
use App\Http\Requests\UpdateProductItemRequest;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductItemController extends Controller
{
    public  function  __construct()
    {
        $this->middleware('isAdmin');
        $this->authorizeResource(ProductItem::class, 'product'); //Umumiy CRUD uchun authorize bo'ladi.
    }

    public function index()
    {
        $items = ProductItem::all();
        return view('items.index')->with(['items' => $items]);
    }
    public function products($id)
    {
        // Retrieve products with the given sub_category_id
        $products = Product::where('sub_category_id', $id)->get();

        // Retrieve all product items
        $items = ProductItem::all();

        // Create an array to store the formatted product data
        $formattedProducts = [];

        // Iterate over each product
        foreach ($products as $product) {
            // Initialize an array for the product data
            $productData = [
                'id' => $product->id,
                'name' => $product->name,
                'sub_category_id' =>$product->sub_category_id ,
                'items' => [],
            ];

            // If items are not null, add the relevant items to the product data
            if (!is_null($items)) {
                foreach ($items as $item) {
                    if ($item->product_id === $product->id) {
                        $productData['items'][] = $item;
                    }
                }
            }

            // Add the product data to the formattedProducts array
            $formattedProducts[] = $productData;
        }

        // Return the view with the formatted product data
        return view('items.products')->with(['products' => $formattedProducts]);
    }
    public  function  category()
    {
        $category= SubCategory::all();
        return view('items.category')->with(['categories'=>$category]);
    }


    public function creating($id)
    {
        $product_item = Product::where('id',$id)->get();
        return view('items.create')->with(['product_item'=>$product_item]);
    }

    public function store(Request $request)
    {
        $product = Product::where('id',$request->id)->get();
        $validatedData = $request->validate([
            'id' => 'required|exists:products,id',
            'television' => 'nullable|array',
            'computer_items' => 'nullable|array',
            'notebook' => 'nullable|array',
            'smartphone' => 'nullable|array',
            'furniture' => 'nullable|array',
            'beauty' => 'nullable|array',
            'books' => 'nullable|array'
        ]);


        $product_item = ProductItem::create([
            'product_id' => $validatedData['id'],
            'television' => $validatedData['television'] ?? null,
            'computer_items' => $validatedData['computer_items'] ?? null,
            'notebook' => $validatedData['notebook'] ?? null,
            'smartphone' => $validatedData['smartphone'] ?? null,
            'furniture' => $validatedData['furniture'] ?? null,
            'beauty' => $validatedData['beauty'] ?? null,
            'books' => $validatedData['books'] ?? null
        ]);

        return redirect()->back()->with('success', 'Ma\'lumotlar muvaffaqiyatli saqlandi');
    }






    /**
     * Display the specified resource.
     */
    public function show(ProductItem $productItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductItem $productItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductItemRequest $request, ProductItem $productItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductItem $productItem)
    {
        //
    }
}
