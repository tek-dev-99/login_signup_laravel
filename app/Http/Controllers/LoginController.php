<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function login(request $request)
    {
        $user= $request->validate([
            'email'=>'required|email|',
            'password'=>'required|min:8',
        ]);

       if(Auth::attempt($user)){
       $request->session()->regenerate();
       return redirect()->intended('dashboard');
       }
       else{
        return redirect()->back();
       }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
