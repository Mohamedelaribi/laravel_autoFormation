<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\TestFormation;
use App\Http\Controllers\TestController;


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
    return 'hello word';
});



Route::get('/contact',function(){
    return view('form');
});



Route::redirect('/home', '/contact',);


Route::get('/index/{stor?}/{item?}',function($stor = NULL , $itme = null){
    return $stor.' '. $itme;
});





