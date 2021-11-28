<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_pickup');
            $table->string('kode_transaksi');
            $table->double('jarak');
            $table->double('berat');
            $table->integer('total');
            $table->integer('uang_dp');
            $table->dateTime('tgl_msk');
            $table->dateTime('tgl_klr');
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
        Schema::dropIfExists('transaksis');
    }
}
