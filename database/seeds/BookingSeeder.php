<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("bookings")->insert([
            "user_id"=>1,
            "room_id"=>1,
            "arrival" =>"2020/07/24",
            "checkout"=>"2020/07/28",
         ]);
    }
}
