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
            $table->string('spot_name')->comment('スポット名');
            $table->string('spot_title')->comment('タイトル');
            $table->text('spot_detail')->comment('詳細');
            $table->string('address')->comment('住所');
            $table->string('event_id')->comment('イベントID');
            $table->string('site_url')->comment('サイトURL');
            $table->string('category')->comment('カテゴリID');
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
