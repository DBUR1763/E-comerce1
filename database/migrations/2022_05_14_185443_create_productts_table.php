<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducttsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Productts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->double('price',82)->nullable();
            $table->integer('quantity')->nullable();
            $table->unsignedBigInteger('Catagory_id');
            $table->foreign('Catagory_id')
              ->reference('id')
              ->on('Catagory')
              ->onDelete('cascade');
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productts');
    }
}