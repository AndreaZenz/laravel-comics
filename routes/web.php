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

Route::get('/', function(){
    $comics = config("comics");

    return view("landings.welcome", ["comics" => $comics]);
})->name("pagina-comics");

Route::get("/comics_info", function(){
    return view("landings.comics");
})->name("comics-info");