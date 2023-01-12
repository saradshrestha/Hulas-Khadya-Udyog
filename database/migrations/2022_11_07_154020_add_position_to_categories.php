<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPositionToCategories extends Migration
{

    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_position')->default(1)->after('status');
        });
    }


    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('category_position');
        });
    }
}
