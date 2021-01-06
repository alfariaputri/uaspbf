<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasewa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_mobil');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->integer('durasi');
            $table->string('jaminan');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('datauser')->onDelete('cascade');
            $table->foreign('id_mobil')->references('id')->on('datamobil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datasewa');
    }
}
