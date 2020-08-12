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
       $img = $request->file('img')->store("public");
        $price = $request->input("price");
        $description = $request->description;
        $quantity = $request->person;
        $area= $request->area;
        $typeroom= new Typeroom();
        $typeroom->name=$name;
        $typeroom->image=$img;
        $typeroom->typeroom=$typeroom;
        $typeroom->area=$area;
        $typeroom->price_per_day=$price;
        $typeroom->description=$description;
        $typeroom->max_person=$quantity;
        $typeroom->save();
       return redirect("/admin/typeroom");
    echo $img;
    }
    function edit($id){
        $typeroom=Typeroom::find($id);
       return view("typeroom.edit", ["typeroom"=>$typeroom]);
    }
    function update($id, Request $request){
        $name = $request->name;
        $img = $request->file('img')->store("public");
        $price = $request->input("price");
        $description = $request->description;
        $quantity = $request->person;
        $area= $request->area;
        $typeroom= Typeroom::find($id);
        $typeroom->name=$name;
        $typeroom->image=$img;
        $typeroom->area=$area;
        $typeroom->price_per_day=$price;
        $typeroom->description=$description;
        $typeroom->max_person=$quantity;
        $typeroom->save();
       return redirect("/admin/typeroom");
    }
    function destroy($id){
        Typeroom::find($id)->delete();
        return redirect("/admin/typeroom");
    }
}
