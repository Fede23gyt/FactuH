<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cod_ori');
            $table->bigInteger('cod_prop');
            $table->string('descri_corta');
            $table->string('descri_larga');
            $table->decimal('precio_lista)');
            $table->decimal('precio_venta)');
            $table->integer('cantidad');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id','fk_categ1')->references('id')->on('categorias');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id','fk_marca')->references('id')->on('marcas');
            $table->unsignedBigInteger('proveedor_id');
            $table->foreign('proveedor_id','fk_prov1')->references('id')->on('proveedores');
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
        Schema::dropIfExists('articulos');
    }
}
