<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Laravel 的 Table 一定要有S ???
        // 新增一個'blogs'的資料表
        Schema::create('blogs', function (Blueprint $table) {
            // (預設)每筆資料的獨特編號
            $table->bigIncrements('id');
            // 標題: 文字少(string)
            $table->string('title');
            // 內文: 文字多(text)
            $table->text('content');
            // (預設)時間戳記-紀錄時間資料
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
        Schema::dropIfExists('blog');
    }
}
