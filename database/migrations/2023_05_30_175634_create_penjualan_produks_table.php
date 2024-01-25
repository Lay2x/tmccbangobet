<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualan_produks', function (Blueprint $table) {
            $table->increments('id_penjualan_produk');
            $table->date('tanggal_penjualan_produk');
            $table->integer('id_user');
            $table->integer('id_produk');
            $table->integer('id_kategori_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan_produks');
    }
};
