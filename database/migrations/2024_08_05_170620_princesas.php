<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('princesas',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('Nome');
            $table->number('Idade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('princesas');
    }
};
