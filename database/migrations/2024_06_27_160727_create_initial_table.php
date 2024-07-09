<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('userss', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('extract');
            $table->string('body');
            $table->string('status');

            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');

        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
        });
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('img_id');
            $table->string('img_type');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userss');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('images');
    }
};