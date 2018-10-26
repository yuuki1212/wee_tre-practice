<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('ユーザーID');
            $table->string('password')->comment('パスワード');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->string('last_name')->comment('姓');
            $table->string('first_name')->comment('名');
            $table->string('birthday')->comment('生年月日');
            $table->string('phone')->comment('電話番号');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
