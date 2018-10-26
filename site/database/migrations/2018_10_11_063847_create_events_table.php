<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_id')->comment('イベントID');
            $table->string('event_name')->comment('イベント名');
            $table->string('event_title')->comment('タイトル');
            $table->text('event_detail')->comment('詳細');
            $table->string('price')->comment('料金');
            $table->string('event_date')->comment('開催日');
            $table->string('event_time')->comment('開催日時');
            $table->string('event_category')->comment('カテゴリ');
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
        Schema::dropIfExists('events');
    }
}
