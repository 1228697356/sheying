<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zans', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->integer('user_id')->default(0)->comment('用户id');
            $table->integer('post_id')->default(0)->comment('帖子id');
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
        Schema::dropIfExists('zans');
    }
}
