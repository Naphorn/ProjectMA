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
            $table->increments('id');
            $table->string('RoomNo',100);
            $table->float('CoolTemp');
            $table->float('Humidity');
            $table->float('RoomTemp');
            $table->float('VoltCool');
            $table->float('CurrentCool');
            $table->float('CurrentHot');
            $table->float('WindSpeed');
            $table->float('Performance',50);
            $table->char('PowerStatus',50);
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
