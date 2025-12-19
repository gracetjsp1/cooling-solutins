<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainProductsTable extends Migration
{
    public function up()
    {
        Schema::create('main_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon_image')->nullable();
            $table->string('icon_alt')->nullable();
            $table->string('main_image')->nullable();
            $table->string('main_alt')->nullable();
            $table->string('home_image')->nullable();
            $table->string('home_alt')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_alt')->nullable();
            $table->text('description')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('main_products');
    }
}