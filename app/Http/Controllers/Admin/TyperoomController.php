<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Typeroom;

class TyperoomController extends Controller
{
    function index(){
        $typerooms=Typeroom::all();
        return view("typeroom.index",["typerooms"=>$typerooms]);
    }
    function store(Request $request){
        $name = $request->typeroom;
        $typeroom = new Typeroom();
        $typeroom->name=$name;
        $typeroom->save();
       return redirect("/admin/typeroom");
    }
    function destroy($id){
        Typeroom::find($id)->delete();
        return redirect("/admin/typeroom");
    }
}
