<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function list()
    {
        $products = Product::latest()->paginate();
        return view('admin.list')->with('products',$products );
    }

}
