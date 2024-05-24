<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksiPerikananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_perikanan', function (Blueprint $table) {
            $table->id('ID_Produksi');
            $table->unsignedBigInteger('ID_Ikan');
            $table->integer('Jumlah_Produksi');
            $table->date('Tanggal_Produksi');
            $table->string('Lokasi_Produksi', 50);
            $table->decimal('Harga_Ikan', 10, 2);
            $table->unsignedBigInteger('Pengola_Produksi');
            $table->string('Status_Produksi', 20);
            $table->foreign('ID_Ikan')->references('ID_Ikan')->on('ikan');
            $table->foreign('Pengola_Produksi')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produksi_perikanan');
    }
}
