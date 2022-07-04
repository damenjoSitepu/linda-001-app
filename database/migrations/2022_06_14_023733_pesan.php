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
        Schema::create('pesan', function (Blueprint $table) {
            $table->id('pesan_id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('pengguna');
            $table->string('email', 200)->nullable();
            $table->string('no_telepon', 50)->nullable();
            $table->date('dibuat')->nullable();
            $table->date('dikonfirmasi')->nullable();
            $table->date('dibayar')->nullable();
            $table->date('diverifikasi')->nullable();
            $table->string('status', 5);
            $table->text('photo')->default('document.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesan');
    }
};
