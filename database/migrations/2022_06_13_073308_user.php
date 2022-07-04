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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('nama', 200);
            $table->string('username', 50);
            $table->text('password');
            $table->text('photo');
            $table->string('email', 100)->unique();
            $table->text('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->boolean('jenis_kelamin')->nullable();
            $table->integer('class')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
