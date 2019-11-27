<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name', 150);
          $table->text('description');
          $table->decimal('price', 8, 2);
          $table->string('featuredimg', 300);
          $table->bigInteger('category_id')->unsigned(); //FK Categoria
          $table->integer('stock')->unsigned();
          $table->bigInteger('user_id')->unsigned(); //FK Usuarios para carrito
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
        Schema::dropIfExists('products');
    }
}
