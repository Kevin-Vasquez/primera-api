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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            //definimos los campos de nuestras tablas
            $table->string('name');
            $table->string('descripcion');
            $table->double('price', 8,2);
            $table->integer('stock');
            $table->string('image')->nullable();
            //ad foreignkey
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marcas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
