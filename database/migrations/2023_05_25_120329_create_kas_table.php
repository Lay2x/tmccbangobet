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
        Schema::create('kas', function (Blueprint $table) {
            $table->increments('id_kas');
            $table->integer('id_kredit');
            $table->integer('id_debit');
            $table->string('nominal_debit');
            $table->string('nominal_kredit');
            $table->string('total_kas');
            $table->date('tanggal_kas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kas');
    }
};
