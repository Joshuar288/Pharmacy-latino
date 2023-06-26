<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrancesdiscardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrancesdiscards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_entrance')->unsigned();
            $table->foreign('id_entrance')->references('id')->on('entrances')->
            onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_discard')->unsigned();
            $table->foreign('id_discard')->references('id')->on('discards')->
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
        Schema::dropIfExists('entrancesdiscards');
    }
}
