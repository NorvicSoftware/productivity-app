<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id(); // ID de la nota (clave primaria)
            $table->unsignedBigInteger('user_id'); // ID del usuario (clave foránea)
            $table->string('title'); // Título de la nota
            $table->text('content'); // Contenido de la nota
            // $table->timestamp('created_at')->useCurrent(); // Fecha de creación

            // Definir la relación con la tabla de usuarios
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
