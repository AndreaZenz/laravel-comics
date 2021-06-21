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

Route::get("/comics-info/{id}", function($id){
    
    $comics = config("comics");

    if(!is_numeric($id) || $id < 0){
        abort(404, "inexisting product");
    }
    

    $prodotto = null;

    foreach ($comics as $prod){
        if($prod["id"] === intval($id)){
            $prodotto = $prod;
        }
    }

    if(is_null($prodotto)){
        abort(404, "prodotto non disponibile");
    }

    $comicChoice = $comics[intval($id)];

    return view("landings.comics", [
        "comic" => $comicChoice
    ]);
})->name("comics-info");