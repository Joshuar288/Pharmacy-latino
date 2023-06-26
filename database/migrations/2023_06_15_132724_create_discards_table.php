<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason');
            $table->integer('quantity');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('pharmasproducts')->
            onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('discards');
    }
}
