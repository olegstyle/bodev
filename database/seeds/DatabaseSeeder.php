<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::unprepared(file_get_contents(__DIR__ . '/sql/technical_stack_groups.sql'));
        //DB::unprepared(file_get_contents(__DIR__ . '/sql/technical_stacks.sql'));
        //DB::unprepared(file_get_contents(__DIR__ . '/sql/projects.sql'));
        //DB::unprepared(file_get_contents(__DIR__ . '/sql/project_technical_stacks.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '/sql/settings.sql'));
    }
}
