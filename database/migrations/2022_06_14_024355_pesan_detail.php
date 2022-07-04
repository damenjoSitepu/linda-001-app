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
        Schema::create('pesan_detail', function (Blueprint $table) {
            $table->bigInteger('pesan_id')->unsigned();
            $table->foreign('pesan_id')->references('pesan_id')->on('pesan');
            $table->bigInteger('produk_id')->unsigned();
            $table->foreign('produk_id')->references('produk_id')->on('produk');
            $table->double('qty');
            $table->double('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan_detail');
    }
};
