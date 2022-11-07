<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brief;
use App\Models\Task;
class GestionBrief extends Controller
{
    

    public function show(){
        $tasks = Brief::all();
        return view('welcome',compact('tasks'));
    }
}
