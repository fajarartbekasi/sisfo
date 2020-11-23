<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran')->unique();
            $table->string('pilihan_masuk');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('kelas');
            $table->string('jumlah_sodara');
            $table->string('alamat');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_orangtua');
            $table->string('no_telp');
            $table->string('status');
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
        Schema::dropIfExists('pendaftarans');
    }
}
