<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictionaryLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_like', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('f_app_name');
            $table->integer('e_dict');
            $table->integer('f_count')->nullable()->default(0);

            $table->unique(['f_app_name', 'e_dict']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_like');
    }
}
