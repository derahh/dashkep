<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenTetapModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_tetap_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_dosen');
            $table->string('nidn');
            $table->string('pendidikan_pasca_sarjana');
            $table->string('bidang_keahlian');
            $table->string('kompetensi_inti_ps');
            $table->string('jabatan_akademik');
            $table->string('sertifikat_pendidikan_profesional');
            $table->string('sertifikat_kompetensi');
            $table->string('mata_kuliah');
            $table->string('bidang_keahlian_mata_kuliah');
            $table->string('mata_kuliah_ps_lain');
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
        Schema::dropIfExists('dosen_tetap_models');
    }
}
