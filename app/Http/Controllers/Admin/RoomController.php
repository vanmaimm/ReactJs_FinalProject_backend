<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\Typeroom;

class RoomController extends Controller
{
    function room(Request $request){

        $page = $request->page;
        $rooms = Room::all()->skip($page * 5)->take(5);
        if($rooms->isEmpty()){
            $rooms = Room::all()->take(5);
            return redirect('admin/room/?page=0');
        }else if($page<0){
            $totalPage = round(count(Room::all())/5)-1;
            return redirect('admin/room/?page='.$totalPage);
        }

      // echo "<pre>" . json_encode($products, JSON_PRETTY_PRINT). "</pre>";
      return view('room.index', ["rooms" => $rooms, "page" => $page]);

    }
    function edit($id){
        $typerooms=Typeroom::all();
        $room=Room::find($id);
        // echo "<pre>" . json_encode($room, JSON_PRETTY_PRINT). $room."</pre>";
       return view("room.edit", ["typerooms"=>$typerooms, "room"=>$room]);
    }

    function update($id, Request $request){
        $room_number=$request->input("room_number");
        $img = $request->file("img")->store("public");
        $typeroom= $request->input("typeroom");
        $price = $request->input("price");
        $description = $request->description;
        $quantity = $request->person;
        $area = $request->area;
        $room = Room::find($id);
        $room->room_number=$room_number;
        $room->image=$img;
        $room->typeroom=$typeroom;
        $room->area=$area;
        $room->price_per_day=$price;
        $room->description=$description;
        $room->max_person=$quantity;
        $room->save();
        return redirect("/admin/room");

    }
    function destroy($id){
        Room::find($id)->delete();
        return redirect("/admin/room");
    }
    function create(){
        $typerooms=Typeroom::all();
        return view("room.insert ",["typerooms"=>$typerooms]);
    }
    function store(Request $request){
        $room_number=$request->input("room_number");
        $img = $request->file("img")->store("public");
        $typeroom= $request->input("typeroom");
        $price = $request->input("price");
        $description = $request->description;
        $quantity = $request->person;
        $area= $request->area;
        $room= new Room();
        $room->room_number=$room_number;
        $room->image=$img;
        $room->typeroom=$typeroom;
        $room->area=$area;
        $room->price_per_day=$price;
        $room->description=$description;
        $room->max_person=$quantity;
        $room->save();
        redirect("/admin/room");
    }
}
