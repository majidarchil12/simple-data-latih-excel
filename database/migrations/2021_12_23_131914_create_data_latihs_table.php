<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataLatihsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_latihs', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('tanggal');
            $table->string('suhu_udara');
            $table->string('curah_hujan');
            $table->string('dc');
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
        Schema::dropIfExists('data_latihs');
    }
}
