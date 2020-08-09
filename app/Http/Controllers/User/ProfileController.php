<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class ProfileController extends Controller
{
    function getProfile()
    {
        $token = request()->header("Authorization");
        $key = "minionroo";
        $data = JWT::decode($token, $key, array('HS256'));
        $user = User::find($data->user_id);
        $user->userInfor;
        $responData = array("user" => $user);
        return response()->json($responData, 200);
    }
    function checkPassword(Request $request)
    {
        $id_user = $request->id;
        $oldPass = $request->oldPass;
        $newPass = $request->newPass;
        $hasPass = Hash::make($newPass);
        $key = "minionroo";
        $data = JWT::decode($id_user, $key, array('HS256'));
        $user = User::where('id', $data->user_id)->first();

        $check = array(
            "username"=>$user->username,
            "password"=>$oldPass
        );
        if (Auth::attempt($check)) {

          $user->password=$hasPass;
          $user->save();
        return 200;
        } else {
            return 400;
        }

    }
}
