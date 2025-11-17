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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_rm');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->bigInteger('no_ktp');
            $table->bigInteger('no_bpjs');
            $table->string('dokter');
            $table->longText('keluhan');
            $table->string('diagnosa');
            $table->string('obat');
            $table->date('tanggal');
            $table->enum('poli', ['Umum', 'Gigi', 'KIA']);
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
        Schema::dropIfExists('rekam_medis');
    }
};