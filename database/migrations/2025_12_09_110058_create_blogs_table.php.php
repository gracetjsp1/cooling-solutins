<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->date('publishedDate')->nullable();
            $table->string('image_alt')->nullable();
            $table->text('open_graph')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}

