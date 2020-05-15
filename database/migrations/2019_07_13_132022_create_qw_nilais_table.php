<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQwNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qw_nilais', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('id');
            $table->integer('id_siswa');
            $table->string('nama');
            $table->integer('mtk');
            $table->integer('bin');
            $table->integer('big');
            $table->integer('prod');
            $table->integer('jml');
            $table->string('pre');
            $table->string('ket');
            $table->integer('date');
            $table->integer('nop');
            $table->string('nama');
            $table->string('tl');
            $table->string('tgll');
            $table->string('keahlian');
            $table->string('program');
            $table->string('asal_sklh');
            $table->string('foto');
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
        Schema::dropIfExists('qw_nilais');
    }
}
