<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('post_id')->unsigned();
            $table->text('comment');
            $table->timestamps();

            // usersテーブルに存在するidと一致
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // postテーブルにあるidと一致
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

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
