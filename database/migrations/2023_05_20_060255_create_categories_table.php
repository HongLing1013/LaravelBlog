<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        /* 在posts表當中的user_id後面加上一個category_id的欄位 */
        Schema::table('posts' , function (Blueprint $table)
        {
            $table->unsignedInteger('category_id')->after('user_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null'); // onDelete('cascade') 當刪除category時，post的category_id會變成null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts' , function (Blueprint $table)
        {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });

        Schema::dropIfExists('categories');
    }
}
