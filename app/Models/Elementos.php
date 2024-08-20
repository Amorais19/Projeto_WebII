<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elementos extends Model
{
    use HasFactory;
    protected $fillable = ['Nome'];
    public function princesas (){
        return $$this->hasMany('App\Models\Princesas', 'elemento_id');
    }
}
