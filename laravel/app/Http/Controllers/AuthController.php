<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public  function  register()
    {
        return view('auth.register');

    }
    public  function  login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
           'email' =>['required', 'email'],
           'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return  back()->withErrors([
           'email' => "Bunday emailli user mavjud emas",
        ])->onlyInput('email');

    }
    public function register_store(StoreRegisterRequest $request)
    {

        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/')->with('success','Muvaffaqiyatli ro\'yxatdan o\'tdingiz' );

    }

    public  function  logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public  function  user(Request $request)
    {
        return $request->user();
    }
}
