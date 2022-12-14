<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayoube extends Model
{
    use HasFactory;

    public function omar(){
        return $this->hasOne(Omar::class);
    }

    public function omarMany(){
        return $this->hasMany(Omar::class);
    }
}
