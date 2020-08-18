<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Typeroom;

class TyperoomController extends Controller
{
   function display(){
       $typerooms=Typeroom::all();
       return response()->json($typerooms);
   }
   function detail($id){
       $typeroom= Typeroom::find($id);
       return response()->json($typeroom);

   }
}
