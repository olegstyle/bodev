<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTechnicalStackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technical_stacks', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("project_id");
            $table->unsignedInteger("tech_id");
            $table->timestamps();

            $table->unique(['project_id', 'tech_id']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('tech_id')->references('id')->on('technical_stacks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technical_stacks');
    }
}
