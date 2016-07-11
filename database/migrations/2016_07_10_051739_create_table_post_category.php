<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostCategory extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
//        Schema::create('post_categoty', function (Blueprint $table) {
////            $table->increments('id');
////            $table->integer('post_id')->unsigned();
////            $table->foreign('post_id')->references('id')->on('posts');
////            $table->integer('category_id')->unsigned();
////            $table->foreign('category_id')->references('id')->on('category');
////            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
//        Schema::drop('post_categoty');
    }

}
