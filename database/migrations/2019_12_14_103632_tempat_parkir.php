<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TempatParkir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_parkir', function (Blueprint $table) {
            $table->bigIncrements('id_tempatparkir');
            $table->datetime('waktu_masuk');
            $table->datetime('waktu_keluar');
            $table->datetime('lama_parkir');
            $table->string('total_tarif');
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
        Schema::dropIfExists('tempat_parkir');
    }
}
