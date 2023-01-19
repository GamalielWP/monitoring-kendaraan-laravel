<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kendaraan')->unsigned();
            $table->foreign('id_kendaraan')->references('id')->on('kendaraans');
            $table->bigInteger('id_driver')->unsigned();
            $table->foreign('id_driver')->references('id')->on('drivers');
            $table->integer('lama_pemakaian');
            $table->integer('jumlah_bbm');
            $table->date('tgl_pakai');
            $table->date('tgl_selesai');
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
        Schema::dropIfExists('pesanans');
    }
}
