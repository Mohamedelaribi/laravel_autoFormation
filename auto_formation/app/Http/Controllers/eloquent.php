<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eloquent extends Controller
{
    

    function hasOne(){
        $sale = Student::find(1)->sale;
        return $sale;
    }
}
