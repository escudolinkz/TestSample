<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrusStafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urus_stafs', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('gelaran');
        	$table->string('nama');
        	$table->string('no_staf');
        	$table->mediumtext('alamat_kediaman');
        	$table->mediumtext('alamat_tetap');
        	$table->string('notel_rumah');
        	$table->string('notel_bimbit');
        	/* $table->string('no_ic'); */
        	$table->string('tarikh_lahir');
        	$table->string('jantina');
        	$table->string('bangsa');
        	$table->string('agama');
        	$table->string('status');
        	$table->string('emel');
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
        Schema::dropIfExists('urus_stafs');
    }
}
