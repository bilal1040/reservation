<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
        	['role'=>'admin'],
        	['role'=>'membre'],


        ];

        foreach ($roles as $a) {
        	DB::table('roles')->insert([
        		'role'=>$a['role'],
        	]);
        }
    }
}
