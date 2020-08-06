<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;
class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user_id=$user->id;
            $key="minionroo";

            $data = array(
                "user_id"=>$user_id
            ) ;                 
            $token= JWT::encode($data, $key);
            $responData=array("user_id"=>$token);
            return response()->json($responData,200);
        }
        else{
         return 400;
      }  
    }
}
