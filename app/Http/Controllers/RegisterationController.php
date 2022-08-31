<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|Min:8',
             ]);
        $data['password']=Hash::make($request->password);

        if(User::create($data))
        {
            return  redirect()->back()->with('success','Registeration Successfully');
        }
        else{
            return redirect()->back()->with('Error', 'Something Went to Wrong');
        }

    }
}
