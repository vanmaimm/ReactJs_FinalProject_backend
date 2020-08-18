<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;

class RegisterController extends Controller
{

    function store(Request $request){

        $username = $request->username;
        $password = $request->password;
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $email = $request->email;

        $hashPassword=Hash::make($password);

        $user = new User();
        $user->username=$username;
        $user->password=$hashPassword;
        $user->email=$email;
        $user->save();

        $inforUser = new UserInformation();
        $inforUser->user_id=$user->id;
        $inforUser->name=$name;
        $inforUser->address=$address;
        $inforUser->phone_number=$phone;
        $inforUser->save();

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
