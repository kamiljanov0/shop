<?php

namespace App\Http\Controllers;

use App\Models\Product_user;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public  function  __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function index()
    {
        $favorite = auth()->user()->favorites()->paginate(12);

        return view('favorites.index')->with(['favorites'=>$favorite]);
    }

    public function store(Request $request)
    {
        $favorites = Product_user::all();
        $exists = false;

        foreach($favorites as $favorite) {
            if ($request->product_id == $favorite->product_id) {
                $exists = true;
                break;
            }
        }

        if (!$exists) {
            auth()->user()->favorites()->attach($request->product_id);
            session()->flash('success', 'Amal muvaffaqiyatli bajarildi');
        } else {
            session()->flash('error', 'Ushbu mahsulot allaqachon tanlangan');
        }

        return redirect()->back();
    }

    public function  destroy($favorite)
    {

        if (auth()->user()->favorites()->where('products.id', $favorite)->count() > 0) {
            auth()->user()->favorites()->detach($favorite);
        }
    return redirect()->back();
    }

}
