<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScorelogsTabl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorelogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('points');
            $table->string('reason');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scorelogs', function($table) {
            $table->dropForeign('scorelogs_user_id_foreign');
        });

        Schema::dropIfExists('scorelogs');
    }
}
