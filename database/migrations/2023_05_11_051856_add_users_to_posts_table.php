<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table -> unsignedInteger('user_id') ; //新增欄位
            $table -> foreign('user_id') -> references('id') -> on('users') -> onDelete('cascade'); //設定關聯並且清除與使用者有關的所有資料
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table -> dropForeign(['user_id']); //移除關聯, 這裡的陣列內放的是欄位名稱
        });
    }
}
