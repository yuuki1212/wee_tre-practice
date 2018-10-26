<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorite_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('ユーザーID');
            $table->integer('spot_id')->comment('スポットID');
            $table->integer('event_id')->comment('イベントID');
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
        Schema::dropIfExists('favorite_lists');
    }
}
