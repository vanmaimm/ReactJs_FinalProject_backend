<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use App\User;

class ProfileController extends Controller
{
    function getProfile(){
        $token= request()->header("Authorization");
        $key="minionroo";
        $data = JWT::decode($token, $key, array('HS256'));
        $user=User::find($data->user_id);
        $user->userInfor;
        $responData=array("user"=>$user);
        return response()->json($responData,200);
    }
}
