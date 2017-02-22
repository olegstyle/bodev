<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixBd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_technical_stacks', function (Blueprint $table) {
            $table->increments('id');
        });
        DB::statement('ALTER TABLE projects MODIFY COLUMN description_ru TEXT');
        DB::statement('ALTER TABLE projects MODIFY COLUMN description_en TEXT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_technical_stacks', function (Blueprint $table) {
            $table->dropColumn(['id']);
        });
        DB::statement('ALTER TABLE projects MODIFY COLUMN description_ru VARCHAR(255)');
        DB::statement('ALTER TABLE projects MODIFY COLUMN description_en VARCHAR(255)');
    }
}
