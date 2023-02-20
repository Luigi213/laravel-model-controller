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
    $comics = config('db');

    return view('home', compact('comics'));
});

Route::get('/detail/{id}', function($id){
    $comics = config('db');

    foreach($comics as $key => $comic){

        if($key == $id){
            $single = $comic;
        }
    }
    
    return view('detail_comic', compact('single'));
})->name('detail-comic');
