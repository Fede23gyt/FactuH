<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\ForeignKeyDefinition;

class CreateUsuariosRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariosrol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id','fk_rol1')->references('id')->on('roles');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id','fk_usuario1')->references('id')->on('usuarios');
            $table->boolean('estado');
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
        Schema::dropIfExists('usuariosrol');
    }
}
