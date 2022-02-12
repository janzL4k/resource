<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('universitas');
            $table->string('prodi');
            $table->string('semester');
            $table->string('alamat');
            $table->date('tgl_lahir');
            $table->string('tmp_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('ayah');
            $table->string('pekerjaan_ayah');
            $table->string('ibu');
            $table->string('pekerjaan_ibu');
            $table->string('saudara');
            $table->string('foto');
            $table->string('ktp');
            $table->string('kk');
            $table->string('transkip');
            $table->string('khs');
            $table->string('suket_beasiswa');
            $table->string('sktm');
            $table->string('sertifikat');
            $table->string('motivation_later');
            $table->enum('status', ['Lolos', 'Tidak Lolos']);
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
        Schema::dropIfExists('mahasiswa');
    }
}
