<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('sub_sub_categories', function (Blueprint $table) {
            // drop JSON column
            $table->dropColumn('technical_parameters');
        });

        Schema::table('sub_sub_categories', function (Blueprint $table) {
            // add LONGTEXT column
            $table->longText('technical_parameters')->nullable()->after('technical_parameters_heading');
        });
    }

    public function down()
    {
        Schema::table('sub_sub_categories', function (Blueprint $table) {
            $table->dropColumn('technical_parameters');
        });

        Schema::table('sub_sub_categories', function (Blueprint $table) {
            $table->json('technical_parameters')->nullable()->after('technical_parameters_heading');
        });
    }
};
