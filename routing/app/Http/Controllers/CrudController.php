<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function hello(){
        return 'hello';
    }

    public function show(Request $resquest){
        $name = $resquest->collect();
        return view('index');
    }
}
