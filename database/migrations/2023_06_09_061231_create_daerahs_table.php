<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaerahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dekopinwil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no');
            $table->string('nama_dekopinwil');
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
        Schema::dropIfExists('daerahs');
    }
}
