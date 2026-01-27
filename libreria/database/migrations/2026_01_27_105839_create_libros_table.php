<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->engine('InnoDB');
            $table->id();
            $table->bigInteger('categoriaId')->unsigned();
            $table->string('titulo');
            $table->timestamps();
            $table->foreign('categoriaID')->references('id')->on('categorias')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
