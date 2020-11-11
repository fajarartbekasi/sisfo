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
            $table->string('no_pendftaran')->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('jumlah_sodara');
            $table->string('alamat');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_orangtua');
            $table->string('email')->unique();
            $table->string('files');
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
