<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Shoe', function (Blueprint $table) { 
            $table->increments('id'); 
            $table->string('description');
            $table->string('image');
            $table->string('name'); 
            $table->decimal('price', 8, 2); 
            $table->integer('size')->unsigned(); 
            $table->integer('quantity')->unsigned(); 
            $table->string('category'); 
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
        Schema::dropIfExists('product');
    }
};
