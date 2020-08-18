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
            "email"=>"van.mai21@student.passerellesnumeriques.org",
            'password'=>bcrypt('user'),
            'role'=>"user"
        ]);
        DB::table("users")->insert([
            'username'=>"admin",
            "email"=>"123",
            'password'=>bcrypt("admin"),
            'role'=>'admin'
        ]);
    }
}
