<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\TestFormation;


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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/contact',function(){
//     return view('form');
// });

// Route::get('/index',[CrudController::class,'hello']);

// use Illuminate\Http\Request;
// Route::any('/form', function(){

// });



// Route::get('/index/{stor?}/{item?}',function($stor = NULL , $itme = null){
//     return $stor.' '. $itme;
// });


// Route::get('/prodect/{category?}/{itme?}', function($category = null, $itme = null){
//     if(isset($category)){
//         if(isset($itme)){
//             return "<h1>{$itme}</h1>";
//         }return "<h1>{$category}</h1>";
//     }return "<h1>stor</h1>";
// })->where(['category'=>'[A-Za-z]+','itme'=>'[A-Za-z]+']);

// Route::get('/contact', TestFormation::class)->name('send');
// Route::get('/hello', TestFormation::class)->name('send');


Route::get('/index', TestFormation::class);

