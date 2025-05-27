<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListKoperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_koperasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_rel');
            $table->string('nama');
            $table->string('no_kontak');
            $table->string('pesawat');
            $table->string('br_hari');
            $table->string('br_waktu');
            $table->string('dt_hari');
            $table->string('dt_waktu');
            $table->string('hotel');
            $table->string('no_kamar');
            $table->string('no_bis');
            $table->string('slug');
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
        Schema::dropIfExists('list_koperasi');
    }
}
