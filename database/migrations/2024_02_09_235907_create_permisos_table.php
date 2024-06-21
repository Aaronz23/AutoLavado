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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('fecha');
            $table->string('estado');
            $table->string('motivo');
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('id_profesore');

         //FORANEA
            $table->foreign('id_profesore')->references('id')->on('profesores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
