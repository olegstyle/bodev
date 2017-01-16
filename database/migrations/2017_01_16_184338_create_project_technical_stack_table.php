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
            $table->integer("project_id", false, true);
            $table->integer("tech_id", false, true);
            $table->timestamps();

            $table->unique(['project_id', 'tech_id']);
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
