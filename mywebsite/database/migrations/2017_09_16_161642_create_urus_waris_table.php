<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrusWarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urus_waris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('pekerjaan');
            $table->mediumtext('info_majikan');
            $table->string('notel_pej');
            $table->string('notel_bimbit');
            $table->string('no_ic');
            $table->date('tarikh_lahir');
            $table->string('jantina');
            $table->string('bangsa');
            $table->string('agama');
            $table->mediumtext('alamat_kediaman');
            $table->mediumtext('alamat_tetap');
            $table->string('notel_rumah');
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
        Schema::dropIfExists('urus_waris');
    }
}
