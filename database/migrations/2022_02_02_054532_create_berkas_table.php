<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->string('universitas');
            $table->string('prodi');
            $table->string('semester');
            $table->string('alamat');
            $table->date('tgl_lahir');
            $table->string('tmp_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('agama');
            $table->string('ayah');
            $table->string('pekerjaan_ayah');
            $table->string('ibu');
            $table->string('pekerjaan_ibu');
            $table->string('saudara');
            $table->string('foto')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('transkip')->nullable();
            $table->string('khs')->nullable();
            $table->string('form_a1')->nullable();
            $table->string('suket_beasiswa')->nullable();
            $table->string('sktm')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('motivation_later')->nullable();
            $table->enum('status', ['Lolos', 'Tidak Lolos', 'Di Review'])->nullable();
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
        Schema::dropIfExists('berkas');
    }
}
