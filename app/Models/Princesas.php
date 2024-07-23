<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Princesas extends Model
{
    use HasFactory;
    protected $fillable = ['nome_princesa', 'idade'];
}
