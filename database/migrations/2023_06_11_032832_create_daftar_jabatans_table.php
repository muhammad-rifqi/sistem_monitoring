<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_jabatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('posisi');
            $table->string('no_kontak');
            $table->string('keterangan');
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
        Schema::dropIfExists('daftar_jabatans');
    }
}
