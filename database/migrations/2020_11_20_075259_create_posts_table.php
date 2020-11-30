<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->tinyInteger('area');
            $table->tinyInteger('lang');
            $table->longText('message');
            $table->timestamps();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['area', 'lang']);
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('area_id')->after('id');
            $table->unsignedBigInteger('lang_id')->after('id');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['area_id', 'lang_id']);
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('area')->after('id');
            $table->unsignedBigInteger('lang')->after('id');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn(['area', 'lang']);
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('area_id')->after('id');
            $table->unsignedBigInteger('lang_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');

    }
}
