<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tasks')->insert([
        	'user_id' => 1,
        	'title' => 'Dev authentification',
            'description' =>'develop working login and signup interfaces with permissions',
            'deadline'=>'2022-06-15',
            'status'=>'doing',
            'project_id'=> 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('tasks')->insert([
        	'user_id' => 1,
        	'title' => 'Dev CRUDs',
            'description' =>'develop all the CRUDs for the different entities',
            'deadline'=>'2022-06-10',
            'status'=>'done',
            'project_id'=>1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('tasks')->insert([
        	'user_id' => 2,
        	'title' => 'Design front',
            'description' =>'Design the different pages of the webapp',
            'deadline'=>'2022-06-12',
            'status'=>'done',
            'project_id'=> 2,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    	\DB::table('tasks')->insert([
        	'user_id' => 2,
        	'title' => 'Help peers',
            'description' =>'welcome new interns and help them in their work',
            'deadline'=>'2022-07-20',
            'status'=>'doing',
            'project_id'=> 1,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
        \DB::table('tasks')->insert([
        	'user_id' => 3,
        	'title' =>'Fix routing issues',
            'description' =>'fix routing issues on the webapp',
            'deadline'=>'2022-06-16',
            'status'=>'todo',
            'project_id'=> 2,
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
