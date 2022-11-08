<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\TestFormation;
use App\Http\Controllers\TestController;



Route::get('/', function () {
<<<<<<< Updated upstream
    return 'hello';
=======
    return 'welcome';
>>>>>>> Stashed changes
});



Route::get('/contact',function(){
    return view('form');
});


Route::get('/index/{stor?}/{item?}',function($stor = NULL , $itme = null){
    return $stor.' '. $itme;
});




Route::resource('test', TestController::class);

