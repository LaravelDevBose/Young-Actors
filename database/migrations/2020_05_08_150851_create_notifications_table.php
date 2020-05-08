<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('notify_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title')->nullable();
            $table->text('body_text')->nullable();
            $table->boolean('channel')->default(\App\Models\Notification::Channels['Email']);
            $table->string('send_address')->nullable();
            $table->boolean('status')->default(\App\Models\Notification::StatusList['Waiting']);
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
        Schema::dropIfExists('notifications');
    }
}
