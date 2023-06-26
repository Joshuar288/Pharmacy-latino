<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmasproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmasproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->date('datr_fabication');
            $table->date('date_due');
            $table->float('purchase_price');
            $table->float('sale_price');
            $table->string('doses');
            $table->integer('quantity');
            $table->integer('id_provider')->unsigned();
            $table->foreign('id_provider')->references('id')->on('provideres')->
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
        Schema::dropIfExists('pharmasproducts');
    }
}
