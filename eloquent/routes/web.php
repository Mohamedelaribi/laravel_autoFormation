<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionBrief;


Route::get('/', function () {
    return view('welcome');
});




Route::get('/brief', [GestionBrief::class, 'show']);