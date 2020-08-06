<?php

use Illuminate\Database\Seeder;

class TyperoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typerooms")->insert([
            'name'=>"Phòng Standard"
        ]);
        DB::table("typerooms")->insert([
            'name'=>"Phòng superior"
        ]);
        DB::table("typerooms")->insert([
            'name'=>"Phòng deluxe"
        ]);
    }
}
