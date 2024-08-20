<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Princesas extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Idade', 'elemento_id', 'reino_id', 'tipo_id'];
    public function elementos(){
        return $this->belongsTo('App\Models\Elementos');
    }
    public function reinos(){
        return $this->belongsTo('App\Models\Reino');
    }
    public function tipos(){
        return $this->belongsTo('App\Models\Tipos');
    }
}
