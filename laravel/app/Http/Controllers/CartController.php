<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Product;
use http\Env\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
            $userID = auth()->id();
            $address = Adress::where('user_id', $userID)->first();
        } else {
            $address = false;
        }

        return view('cart.index')->with(['address'=>$address]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart',[]);


        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'product_name'=> $product->name,
                'photo_one' => $product->photo_one,
                'price' => $product->price,
                'discount' =>$product->discount,
                'quantity' => 1,
            ];
        }

        session()->put('cart',$cart);
        return redirect()->back()->with('success', 'Mahsulot savatchaga qo\'shildi');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */

        public function removeProduct($id)
    {
        $carts = session()->get('cart',);
        foreach ($carts as $key => $cart)
        {
            if ($id == $cart['id'])
        {
            unset($carts[$key]);
        }
    }
        session(['cart' => $carts]);

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
