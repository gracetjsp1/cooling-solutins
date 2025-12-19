<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('sub_sub_categories', function (Blueprint $table) {
            $table->text('small_description')->nullable()->after('name');
        });
    }

    public function down()
    {
        Schema::table('sub_sub_categories', function (Blueprint $table) {
            $table->dropColumn('small_description');
        });
    }
};
