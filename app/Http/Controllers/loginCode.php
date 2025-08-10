<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginCode extends Controller
{
    function login(Request $req){
        // dd($req->all());
        $validate=$req->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);
        $credentials=[
            'email' => $req->email,
            'password' => $req->password
        ];
        $credentials = $req->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }
        else{
            return redirect()->route('login')->with('error', "invalid login");
        }
    }
}
