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
            $table->id();
            $table->unsignedBigInteger('author');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->longtext('content');
            
        
            $table->unsignedBigInteger('category');
            
            $table->boolean('published');
            
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

            $table->foreign('author')->references('id')->on('users');

            $table->foreign('category')->references('id')->on('categories');
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
