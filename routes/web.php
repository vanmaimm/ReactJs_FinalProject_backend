<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/admin/dashboard", "Admin\DashboardController@index")->name("dashboard");
Route::get("/login", "Admin\LoginController@index")->name("login");
Route::post("/login","Admin\LoginController@login");
Route::get("/admin/room","Admin\RoomController@room");
Route::get("/admin/room/insert", "Admin\RoomController@create")->name("admin.create");
Route::get("/admin/room/edit/{id}","Admin\RoomController@edit");
Route::patch("/admin/room/edit/{id}","Admin\RoomController@update");
Route::post("/admin/room", "Admin\RoomController@store");
Route::delete("/admin/room/delete/{id}", "Admin\RoomController@destroy");
Route::get("/auth/logout","Admin\LoginController@logout");
Route::get("/admin/typeroom","Admin\TyperoomController@index");
Route::get("/admin/typeroom/add","Admin\TyperoomController@create");
Route::post("/admin/typeroom","Admin\TyperoomController@store");
Route::get("/admin/typeroom/edit/{id}","Admin\TyperoomController@edit");
Route::patch("/admin/typeroom/edit/{id}","Admin\TyperoomController@update");
Route::delete("/admin/typeroom/delete/{id}","Admin\TyperoomController@destroy");

