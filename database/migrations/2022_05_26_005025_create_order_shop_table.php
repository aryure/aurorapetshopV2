<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderShopTable extends Migration
{
    public function up()
    {
        Schema::create('order_shop', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi');
    
            $table->string('kode_resi')->unique();

            // Ambil dari Tabel User
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_kontak');
            $table->string('alamat');
            $table->string('no_tlpn');
            
            // Ambil dari Tabel Bank
            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');

            // Ambil dari Tabel PayStat = Payment Status
            $table->unsignedBigInteger('paystat_id');
            $table->foreign('paystat_id')->references('id')->on('paystats');
            
            $table->string('total_barang');
            $table->string('total_bayar');

            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('order_shop');
    }
}
