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
        Schema::create('data_permohonan', function (Blueprint $table) {
            $table->integer('nip')->primary();
            $table->char('nama_instansi',100);
            $table->date('tanggal_pengajuan', 20);
            $table->integer('jumlah_kantong');
            $table->string('dokumen', 20);
            $table->char('status', 100);
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
        Schema::dropIfExists('data_permohonan');
    }
};
