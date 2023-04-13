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
        Schema::create('formulirs', function (Blueprint $table) {
            $table->bigInteger('nik');
            $table->unique('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('tlp');
            $table->string('pekerjaan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->date('tgl_donor');
            $table->integer('kartu_donor');
            $table->string('jk');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('jenis_darah');
            $table->string('tipe_darah');
            $table->string('status_pernikahan'); 
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulirs');
    }
};
