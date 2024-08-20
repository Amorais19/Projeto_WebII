<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reino extends Model
{
    use HasFactory;
    protected $fillable = ['Nome'];
    public function princesas (){
        return $$this->hasMany('App\Models\Princesas', 'reino_id');
    }
}
