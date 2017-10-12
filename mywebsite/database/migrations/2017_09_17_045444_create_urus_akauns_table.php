<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrusAkaunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urus_akauns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_kwsp');
            $table->string('no_perkeso');
            $table->string('no_akaun_muamalat');
            $table->string('no_cukai');
            $table->string('no_lesen');
            $table->string('kelas_memandu');
            $table->string('tarikh_mula_kerja');
            $table->string('jawatan_permulaan');
            $table->string('jawatan_sekarang');
            $table->string('tarikh_lantikan_baru');
            $table->string('rekod_jenayah');
            $table->string('nyata_jenayah');
            $table->string('rekod_penyakit');
            $table->string('nyata_penyakit');
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
        Schema::dropIfExists('urus_akauns');
    }
}
