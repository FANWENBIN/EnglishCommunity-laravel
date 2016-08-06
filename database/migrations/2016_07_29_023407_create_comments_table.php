<?php

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
            $table->integer('user_id')->comment('用户id');
            $table->integer('video_info_id')->nullable()->comment('视频信息id');
            $table->integer('trends_id')->nullable()->comment('动弹id');
            $table->text('content')->comment('评论内容');
            $table->integer('pid')->default(0)->comment('回复的那条评论id 如果为0,则表示回复视频');
            $table->integer('favorite')->default(0)->comment('赞数量');
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
        Schema::drop('comments');
    }
}
