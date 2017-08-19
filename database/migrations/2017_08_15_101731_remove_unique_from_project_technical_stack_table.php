<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUniqueFromProjectTechnicalStackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_technical_stacks', function (Blueprint $table) {
            try {
                $table->dropUnique(['project_id', 'tech_id']);
            } catch (Exception $ex) {}
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_technical_stacks', function (Blueprint $table) {
            try {
                $table->unique(['project_id', 'tech_id']);
            } catch (Exception $ex) {}
        });
    }
}
