<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalStacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_stacks', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name", 50);
            $table->string("image_url", 255);
            $table->smallInteger("level", false, true);
            $table->date("date_start");
            $table->unsignedInteger("group_id");
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
        Schema::dropIfExists('technical_stacks');
    }
}
