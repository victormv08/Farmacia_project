<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('precio_venta');
            $table->unsignedInteger('id_usuario');
            $table->unsignedInteger('cod_producto');
            $table->foreign('cod_producto')->references('id')->on('productos');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
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
