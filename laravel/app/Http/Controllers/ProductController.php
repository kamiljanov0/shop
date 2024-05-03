<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product_user;
use App\Models\ProductItem;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $products = Product::latest()->paginate();
        $favorite = Product_user::all();
        return view('products.index')->with(['products'=>$products])->with('favorites',$favorite);
    }
    public function discount()
    {

        $products = Product::whereNotNull('discount')->paginate(6);
        $favorite = Product_user::all();
        return view('products.discount')->with(['products'=>$products])->with('favorites',$favorite);
    }
    public function sortDiscount(Request $request)
    {
        $favorite = Product_user::all();
        $sortType = $request->input('sort');
        $products = [];

        if ($sortType == 'latest') {
            $products = Product::whereNotNull('discount')->latest()->paginate(6);
        } elseif ($sortType == 'cheapest') {
            $products = Product::whereNotNull('discount')->orderBy('price', 'asc')->paginate(6);
        } elseif ($sortType == 'expensive') {
            $products = Product::whereNotNull('discount')->orderBy('price', 'desc')->paginate(6);
        } else {
            $products = Product::whereNotNull('discount')->paginate(6);
        }

        // Bu yerda sorting logikangizni qo'shib yozishingiz mumkin

        return view('products.discount', compact('products'))->with('favorites', $favorite);
    }
    public function sortProduct(Request $request)
    {
        $favorite = Product_user::all();
        $sortType = $request->input('sort');
        $products = [];

        if ($sortType == 'latest') {
            $products = Product::where('sub_category_id',$request->id)->latest()->paginate(6);
        } elseif ($sortType == 'cheapest') {
            $products = Product::where('sub_category_id',$request->id)->orderBy('price', 'asc')->paginate(6);
        } elseif ($sortType == 'expensive') {
            $products = Product::where('sub_category_id',$request->id)->orderBy('price', 'desc')->paginate(6);
        } else {
            $products = Product::where('sub_category_id',$request->id)->paginate(6);
        }

        // Bu yerda sorting logikangizni qo'shib yozishingiz mumkin

        return view('products.productfilter', compact('products'))->with('favorites', $favorite);
    }


    public function productfilter($id)
    {
        $products = Product::where('sub_category_id',$id)->latest()->paginate(6);
        $favorite = Product_user::all();
        return view('products.productfilter')->with(['products'=>$products,'id'=>$id,'favorites'=>$favorite]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->middleware('isAdmin');
        return view('products.create')->with([
            'subCategories' => SubCategory::all(),

        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $path1 = null;
        $path2 = null;
        $path3 = null;
        $path4 = null;

        if ($request->hasFile('photoOne')) {
            $path1 = $request->file('photoOne')->store('product-photos');
        }
        if ($request->hasFile('photoTwo')) {
            $path2 = $request->file('photoTwo')->store('product-photos');
        }
        if ($request->hasFile('photoThree')) {
            $path3 = $request->file('photoThree')->store('product-photos');
        }
        if ($request->hasFile('photoFour')) {
            $path4 = $request->file('photoFour')->store('product-photos');
        }

        $products =  Product::create([
            'photo_one'=> $path1,
            'photo_two'=> $path2,
            'photo_three'=> $path3,
            'photo_four'=> $path4,
            'name' => $request->name,
            'description' => $request->description,
            'sub_category_id'=> $request->category_id,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'discount' => $request->discount ?? null,
        ]);

    /* if (isset($request->tags)){
         foreach ($request->tags as $tag)
         {
             $post->tags()->attach($tag);

         }
     }*/
       // PostCreated::dispatch($post); //Hodisalarni Listenerlarga tarqatish

      //  ChangePost::dispatch($post);
      //  Mail::to($request->user())->queue((new \App\Mail\PostCreated($post))->onQueue('sending-mails'));

       // auth()->user()->notify(new \App\Notifications\PostCreated($post));

        return redirect()->route('admin.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $category = Category::all();
        $recent_products = Product::latest()->get()->except($product->id)->take(3);
        $product_items = ProductItem::where('product_id',$product->id)->get();


        return view('products.show')->with([
            'product' => $product,
            'categories' => $category,
            'recent_products' => $recent_products,
            'product_items' => $product_items,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $this->middleware('isAdmin');
        $subCategories = SubCategory::all();
        return view('products.edit')->with(['product' => $product, 'subCategories' => $subCategories]);
    }


    public function update(StoreProductRequest $request, product $product)
    {
        $this->middleware('isAdmin');
        if ($request->hasFile('photo_one')) {
            $path = $request->file('photo_one')->store('product-photos');
            if(isset($product->photo_one)){
                Storage::delete($product->photo_one);
            }
        }
        $product->update([
            'photo_one'=> $path ?? $product->photo_one,
            'name'=> $request->name,
            'description' => $request->description,
            'sub_category_id' =>$request->sub_category_id ,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
        ]);
        return redirect()->route('admin.list');
    }

    public function delete(Product $product)
    {
        $this->authorize('delete', Product::class);
        if (isset($product->photo_one)) {
            Storage::delete($product->photo_one);
        }

        $product->delete();

        return redirect()->route('admin.list');
    }
    public function searchProduct(Request $request)
    {
        $favorite = Product_user::all();
        $query = $request->input('query');
        $products = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->get();

        return view('products.search', ['products' => $products,'favorites'=>$favorite]);
    }
    public  function forYou()
    {

        $products = Product::inRandomOrder()->limit(12)->get();
        $favorite = Product_user::all();
        return view('products.forYou')->with(['products'=>$products])->with('favorites',$favorite);
    }


    /*
    public  function  photo_delete($id)
    {
        $product = Product::find($id);

        if(isset($product->photo))
        {
            Storage::delete($product->photo);

        }
        return redirect()->route('product.show',['products' => $product]);

    } */

}
