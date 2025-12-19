<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image_sub_sub_category')->nullable();
            $table->string('image_sub_sub_category_alt')->nullable();
            $table->string('image_detail')->nullable();
            $table->string('image_detail_alt')->nullable();
            $table->text('features')->nullable(); // store as JSON string or newline separated
            $table->string('description_heading')->nullable();
            $table->longText('description')->nullable();
            $table->string('technical_parameters_heading')->nullable();
            $table->json('technical_parameters')->nullable(); // JSON
            $table->string('detail_images_heading')->nullable();
            $table->json('detail_images')->nullable(); // array JSON of filenames/paths
            $table->string('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_sub_categories');
    }
}