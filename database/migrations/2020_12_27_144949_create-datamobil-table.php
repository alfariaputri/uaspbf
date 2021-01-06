<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatamobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamobil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plat');
            $table->string('jenis');
            $table->string('merek');
            $table->string('warna');
            $table->year('tahun_keluaran');
            $table->integer('harga_sewa');
            $table->string('status');
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
        Schema::dropIfExists('datamobil');
    }
}
