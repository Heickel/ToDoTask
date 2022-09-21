<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('projects')->insert([
        	'title' => 'E-commerce platform',
        	'description' =>'Developping a full E-commerce platform for Grape.inc, a clothing company',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('projects')->insert([
        	'title' => 'Task Managing webapp',
        	'description' =>'Developping a Task managing web application to manage tasks with authentification services',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}

