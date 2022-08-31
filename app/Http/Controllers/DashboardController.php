<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = session()->all();
        $id = $data['login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'];
        $users = User::find($id);
        return view('dashboard')->with(compact('users'));
    }
}
