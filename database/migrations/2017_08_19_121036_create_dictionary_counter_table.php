<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictionaryCounterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_counter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string('f_app_name', 64);
            $table->integer('e_dict');
            $table->string('f_type', 32);
            $table->integer('f_count')->nullable()->default(0);

            $table->unique(['f_app_name', 'e_dict', 'f_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_counter');
    }
}
