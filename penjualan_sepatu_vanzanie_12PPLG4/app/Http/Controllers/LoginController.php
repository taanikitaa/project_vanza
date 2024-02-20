<?php

namespace App\Http\Controllers;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }else{
            return redirect('/login')->with('error','Maaf Username dan Password yang Anda Masukkan Salah !');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        $user = Auth::User()->token();
        $user->revoke();
        return view('login');
    }

}