<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrancesproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrancesproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_entrance')->unsigned();
            $table->foreign('id_entrance')->references('id')->on('entrances')->
            onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('entrancesproducts');
    }
}
