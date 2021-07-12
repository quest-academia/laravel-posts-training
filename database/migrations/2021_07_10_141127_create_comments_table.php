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
            // 主キー、各コメントの連番
            $table->increments('id');
            
            // コメント投稿者のID unsigned:マイナスの値を保存できない index:検索速度を早める
            $table->integer('user_id')->unsigned()->index();
            
            // コメント内容 文字数40文字で制限
            $table->string('message',40);
            
             // コメント送信日時
            $table->timestamps();
            
            // 2021/07/12 postの投稿者idはpostsテーブルから取得するため不要
            // コメント投稿元の投稿者ID
            // $table->integer('post_user_id')->unsigned()->index();
            
            // 2021/07/12 投稿元の「posts」テーブルのidなので「post_comment_id」→「posts_id」に変更
            // コメント投稿元の投稿ID
            $table->integer('post_id')->unsigned()->index();
            
            // 2021/07/12 投稿元の「posts」テーブルのidなので「post_comment_id」→「posts_id」に変更
            // postsテーブルの投稿内容が削除されたら、commentテーブルのコメント内容を削除する
            // $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            
            // usersテーブルの投稿内容が削除されたら、commentテーブルのユーザー情報を削除する
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
