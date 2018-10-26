<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spot_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('spot_id')->comment('スポットID');
            $table->string('address')->comment('住所');
            $table->string('access')->comment('アクセス');
            $table->string('business_time')->comment('営業時間');
            $table->string('regular_holiday')->comment('定休日');
            $table->string('price')->comment('料金');
            $table->string('phone')->comment('電話番号');
            $table->string('parking')->comment('駐車場');
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
        Schema::dropIfExists('spot_details');
    }
}
