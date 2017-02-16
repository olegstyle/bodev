<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveGroupFromProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('project_groups');
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['group_id']);
        });
        Schema::dropIfExists('contents');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('project_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name", 25);
            $table->smallInteger("order", false, false);
            $table->timestamps();
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->integer('group_id', false, true);
        });
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title_ru", 50);
            $table->text("description_ru");
            $table->string("title_en", 50);
            $table->text("description_en");
            $table->timestamps();
        });
    }
}
