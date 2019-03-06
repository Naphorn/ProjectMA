<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            // ลำดับของตาราง
            $table->increments('id');
            // หมายเลขชั้น
            $table->integer('level_name');
            // หมายเลขของอาคาร
            $table->string('building_id');
            // ลิ้งค์ภาพ
            $table->string('imglink');
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
        Schema::dropIfExists('levels');
    }
}
