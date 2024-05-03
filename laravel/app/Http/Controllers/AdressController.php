<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Category;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdressController extends Controller
{
    public  function  __construct()
    {
        // $this->middleware('auth')->except(['index','store']);
         // $this->authorizeResource(AdressController::class, 'addresses'); //Umumiy CRUD uchun authorize bo'ladi.
    }

    public function create()
    {
        $userID = User::find(Auth::id())->id;
        $address = Adress::where('user_id', $userID)->first();
        return view('addresses.create')->with(['addresses'=>$address]);
    }

    public function store(Request $request)
    {

        $userID = User::find(Auth::id())->id;
        $address = Adress::create([
            'user_id' => $userID,
            'number' => $request->number,
            'city' => $request->city,
            'district' => $request->district,
            'street' => $request->street,
            'postal_code' => $request->postal,
        ]);

        if ($address) {
            // Adres başarılı bir şekilde oluşturulduğunda yapılacak işlemler
            return redirect()->route('cart.index')->with('success', 'Ma\'lumotlaringiz muvafaqqiyatli kiritildi');
        } else {
            // Adres oluşturulurken bir hata oluştuysa
            return redirect()->route('addresses.create')->with('error', 'Ma\'lumotlaringizni kiritishda xatolik yuz berdi');
        }
    }
}
