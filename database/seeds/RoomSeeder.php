<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
            if($i<5){
                DB::table("rooms")->insert([
                       "room_number"=>"A10".$i,
                       "typeroom" =>1

                    ]);
            }else if($i<10){
                DB::table("rooms")->insert([
                    "room_number"=>"A20".$i,
                    "typeroom" =>2

                 ]);
            }else if($i<15){
                DB::table("rooms")->insert([
                    "room_number"=>"A30".$i,
                    "typeroom" =>3

                 ]);
                }
    }
    }
}
