<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDekopindasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dekopindas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no');
            $table->integer('id_dekopinwil');
            $table->string('nama_dekopinda');
            $table->string('no_sk');
            $table->string('tgl_sk');
            $table->string('nama_ketua');
            $table->string('no_kontak');
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
        Schema::dropIfExists('dekopindas');
    }
}
