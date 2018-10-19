<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('spot_id', 50)->comment('スポットID※福岡Walker');
            $table->string('spot_name', 50)->comment('スポット名');
            $table->string('spot_title', 50)->comment('タイトル');
            $table->text('spot_detail')->comment('詳細');
            $table->string('address')->comment('住所');
            $table->string('access')->comment('アクセス');
            $table->string('business_time')->comment('営業時間');
            $table->string('regular_holiday')->comment('定休日');
            $table->string('parking')->comment('駐車場');
            $table->string('price')->comment('料金');
            $table->string('phone')->comment('電話番号');
            $table->string('event_id')->comment('イベントID');
            $table->string('site_url')->comment('サイトURL');
            $table->string('category')->comment('カテゴリ');
            $table->integer('preference_id')->comment('都道府県ID');
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
        Schema::dropIfExists('spots');
    }
}
