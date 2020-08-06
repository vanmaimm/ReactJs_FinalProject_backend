<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'username'=>"user",
            'password'=>bcrypt('user'),
            'role'=>"user"
        ]);
        DB::table("users")->insert([
            'username'=>"admin",
            'password'=>bcrypt("admin"),
            'role'=>'admin'
        ]);
    }
}
