<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatakembaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakembali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sewa');
            $table->date('tanggal_kembali');
            $table->string('durasi_terlambat');
            $table->integer('denda');
            $table->integer('total_bayar');
            $table->string('status');
            $table->timestamps();
            $table->foreign('id_sewa')->references('id')->on('datasewa')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datakembali');
    }
}
