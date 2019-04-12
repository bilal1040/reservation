<?php

use Illuminate\Database\Seeder;

class UserssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userss=[
        	['login'=>'bilal1083',
        	'password'=>'bilal1040',
        	'firstname'=>'Bilal',
        	'lastname'=>'RIMO',
        	'email'=>'bil@hotmail.com',
        	'langue'=>'FR',
        	'roles_id'=>'1'],

        	['login'=>'berna11',
        	'password'=>'youfr',
        	'firstname'=>'Bernadette',
        	'lastname'=>'DUCHAMPS',
        	'email'=>'bd@outlook.fr',
        	'langue'=>'NL',
        	'roles_id'=>'2'],

        	];

        	foreach ($userss as $a) {
        		DB::table('userss')->insert([
        			'login'=>$a['login'],
        			'password'=>$a['password'],
        			'firstname'=>$a['firstname'],
        			'lastname'=>$a['lastname'],
        			'email'=>$a['email'],
        			'langue'=>$a['langue'],
        			'roles_id'=>$a['roles_id'],

        		]);
        	}
    }
}
