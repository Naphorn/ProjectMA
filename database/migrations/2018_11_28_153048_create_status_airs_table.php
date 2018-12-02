<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusAirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_airs', function (Blueprint $table) {
            // ลำดับของตาราง
            $table->increments('id');
            // หมายเลขชั้น
            $table->integer('level_id');
            // ชื่อห้อง
            $table->string('room_no');
            // อุณหภูมิคอยล์เย็น
            $table->float('cool_temp');
            // ความชื้น
            $table->float('humidity');
            // อุณหภูมิห้อง
            $table->float('room_temp');
            // แรงดันคอยล์เย็น
            $table->float('volt_cool');
            // กระแสคอยล์เย็น
            $table->float('current_cool');
            // กระแสคอยล์ร้อน
            $table->float('current_hot');
            // ความเร็วลม
            $table->float('wind_speed');
            // ค่าประสิทธิภาพ
            $table->float('performance');
            // สถานะของเครื่องปรับอากาศ
            $table->char('power_status');
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
        Schema::dropIfExists('status_airs');
    }
}
