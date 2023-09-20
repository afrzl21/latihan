<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class authcontroller extends Controller
{
    public function login(){
        return view('login');
    }

    public function authent(Request $request){
        $credential = $request -> validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credential)){
            $request -> session() -> regenerate();
            return redirect() -> intended('index');
        }

        Session::flash('status','failed');
        Session::flash('message','Username atau password salah');

        return redirect('/login'); 
    }

    public function logout(Request $request){
        Auth::logout();
        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();
        return redirect('login');
    }

    public function signup(){
        return view('signup');
    }
    
    //tambah
    public function tambah()
    {
        return view('signup');
    }
    
    public function simpan(Request $request)
    {
        $signup = new User;
        $signup -> username = $request -> username;
        $signup -> user_id = $request -> user_id;
        $signup -> email = $request -> email;
        $signup -> password = $request -> password;
        $signup -> save();
        return redirect ('/index');
    }
}
