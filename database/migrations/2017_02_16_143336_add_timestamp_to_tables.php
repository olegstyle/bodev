<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("project_group", function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table("technical_stack_group", function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("project_group", function (Blueprint $table) {
            $table->dropTimestamps();
        });
        Schema::table("technical_stack_group", function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
