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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get("/","StudentController@show1")->name("home");
Route::get("/home","StudentController@show");
Route::get("/add","StudentController@index")->name("get.add-student");
Route::post("/add-info","StudentController@add")->name("add-student");
