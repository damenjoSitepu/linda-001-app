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
        Schema::create('produk_details', function (Blueprint $table) {
            $table->id('produk_details_id');
            $table->bigInteger('produk_id')->unsigned();
            $table->foreign('produk_id')->references('produk_id')->on('produk');
            $table->text('kelebihan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_details');
    }
};
