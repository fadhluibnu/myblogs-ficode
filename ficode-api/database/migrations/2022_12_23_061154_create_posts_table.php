<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author');
            $table->string('title');
            $table->string('meta_desc');
            $table->string('slug')->unique();
            $table->string('tag');
            $table->foreignId('id_playlist')->nullable();
            $table->foreignId('id_category')->nullable();
            $table->string('image_cover');
            $table->text('body');
            $table->integer('views');
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
        Schema::dropIfExists('posts');
    }
};
