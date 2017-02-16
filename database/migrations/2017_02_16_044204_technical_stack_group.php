<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Technicalstackgroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_stack_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name", 25);
            $table->smallInteger("order", false, false);
        });
        Schema::table('technical_stacks', function (Blueprint $table) {
            $table->integer("group_id", false, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technical_stack_group');
        Schema::table('technical_stacks', function (Blueprint $table) {
            $table->dropColumn(['group_id']);
        });

    }
}
