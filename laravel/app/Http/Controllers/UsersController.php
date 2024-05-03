<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public  function  index()
    {
        return view('user.index');
    }
    public  function orders()
    {
        return view('user.orders');
    }
    public  function addresses()
    {
        $userID = User::find(Auth::id())->id;
        $address = Adress::where('user_id', $userID)->first();
        return view('user.addresses')->with(['address'=>$address]);
    }

}
