<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('numero');
            $table->string('nombre');
            $table->integer('horas_asignadas');
            $table->integer('dia_econom_c');

            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_puesto');
            $table->unsignedBigInteger('id_division');

            $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
