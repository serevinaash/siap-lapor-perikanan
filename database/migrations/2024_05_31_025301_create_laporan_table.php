<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('ID_Laporan');
            $table->string('Judul_Laporan', 100);
            $table->date('Tanggal_Dibuat');
            $table->string('URL_Laporan', 255);
            $table->unsignedBigInteger('ID_Pengguna');
            $table->foreign('ID_Pengguna')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
