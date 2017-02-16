<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SufixSToGroupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('project_group', 'project_groups');
        Schema::rename('technical_stack_group', 'technical_stack_groups');
        Schema::rename('content', 'contents');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('project_groups', 'project_group');
        Schema::rename('technical_stack_groups', 'technical_stack_group');
        Schema::rename('contents', 'content');
    }
}
