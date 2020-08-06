<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   function index(){
       return view("login");
   }

   function login(Request $request){
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $user->userinformation;
        if($user->role=="admin"){
          return redirect()->route("dashboard");
        }
    else{
      return redirect()->route("login",["error"=>"Invalid username or password!"]);
    }
   }
}
    function logout(){
        Auth::logout();
      return redirect()->route("login");
    }
}
