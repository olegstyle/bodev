<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectLocalization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('name', 'name_ru');
            $table->renameColumn('gist', 'gist_ru');
            $table->renameColumn('description', 'description_ru');
            $table->string("name_en", 50);
            $table->string("gist_en", 100);
            $table->string("description_en", 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('name_ru', 'name');
            $table->renameColumn('gist_ru', 'gist');
            $table->renameColumn('description_ru', 'description');
            $table->dropColumn(['name_en', 'gist_en', 'description_en']);
        });
    }
}
