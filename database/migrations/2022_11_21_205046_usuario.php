<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario');
            $table->string('apellido_usuario');
            $table->string('direccion_usuario');
            $table->string('telefono_usuario');
            $table->string('correo_usuario');
            $table->string('contraseña_usuario');
            $table->integer('edad_usuario');
            $table->unsignedBigInteger('id_rol');
            $table->foreign("id_rol")
                ->references("id")
                ->on("roles")
                ->onDelete("cascade")
                ->onUpdate("cascade");
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
        //
    }
}
