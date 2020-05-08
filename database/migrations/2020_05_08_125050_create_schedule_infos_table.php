<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_infos', function (Blueprint $table) {
            $table->id('schedule_id');
            $table->string('schedule_title');
            $table->text('schedule_details')->nullable();
            $table->date('schedule_date');
            $table->tinyInteger('schedule_status')->default(config('app.active'));
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
        Schema::dropIfExists('schedule_infos');
    }
}
