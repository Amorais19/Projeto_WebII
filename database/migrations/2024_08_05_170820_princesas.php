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
            $table->unsignedBigInteger('elemento_id');
            $table->foreign('elemento_id')->references('id')->on('elementos');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->unsignedBigInteger('reino_id');
            $table->foreign('reino_id')->references('id')->on('reinos');
            $table->string('Nome');
            $table->integer('Idade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('princesas');
    }
};
