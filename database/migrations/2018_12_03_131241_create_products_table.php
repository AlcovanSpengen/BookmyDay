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
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('ISBN');
            $table->string('image')->nullable();
            $table->text('abstract');
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->integer('publisher_id')->nullable()->unsigned();
            $table->integer('price')->unsigned();
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
