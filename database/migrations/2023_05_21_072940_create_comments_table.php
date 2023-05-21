<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('post_id'); //文章id
            $table->unsignedInteger('user_id')->nullable(); //使用者id
            $table->string('name'); //使用者名稱
            $table->text('comment'); //留言內容
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade'); //設定外來鍵
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //設定外來鍵
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments' , function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropForeign(['user_id']);
        });
        
        Schema::dropIfExists('comments');
    }
}
