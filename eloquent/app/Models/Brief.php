<?php

namespace App\Models;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;


    function task(){
        return $this->hasMany(Task::class);
    }
}
