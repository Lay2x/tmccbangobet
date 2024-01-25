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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->integer('id_kategori_kegiatan');
            $table->integer('id_sub_kategori_kegiatan');
            $table->string('nama_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->string('gambar_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->time('jam_kegiatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
