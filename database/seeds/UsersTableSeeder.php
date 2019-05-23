<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   		$users = [
   			[
   				'id'=>1,
   				'login'=>'xero',
   				'password'=>Hash::make('xeromusz12'),
   				'firstname'=>'hajjaj',
   				'lastname'=>'abdel',
   				'email'=>'zeronada@hotmail.fr',
   				'langue'=>'fr',
   				'roles_id'=>1,
   			],
   			[
   				'id'=>2,
   				'login'=>'syrie',
   				'password'=>Hash::make('root123'),
   				'firstname'=>'Rimo',
   				'lastname'=>'bilal',
   				'email'=>'syrie1080@hotmail.fr',
   				'langue'=>'fr',
   				'roles_id'=>1,
   			],
   			[
   				'id'=>3,
   				'login'=>'aliD',
   				'password'=>Hash::make('root123'),
   				'firstname'=>'Dindar',
   				'lastname'=>'Ali',
   				'email'=>'DindarAli@hotmail.fr',
   				'langue'=>'fr',
   				'roles_id'=>1,
   			],
   			[
   				'id'=>4,
   				'login'=>'Ouss',
   				'password'=>Hash::make('root123'),
   				'firstname'=>'Oussama',
   				'lastname'=>'blueSky',
   				'email'=>'BlueSky@hotmail.fr',
   				'langue'=>'fr',
   				'roles_id'=>1,
   			]

   		];

   		 foreach ($users as $a ) {
       	DB::table('users')->insert([
       		'id'=>$a['id'],
       		'login'=>$a['login'],
       		'password'=>$a['password'],
       		'firstname'=>$a['firstname'],
       		'lastname'=>$a['lastname'],
       		'email'=>$a['email'],
       		'langue'=>$a['langue'],
       		'roles_id'=>$a['roles_id']
       	]);
       }

    
        	
    }
}
