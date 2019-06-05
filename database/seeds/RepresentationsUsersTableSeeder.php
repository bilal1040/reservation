<?php

use Illuminate\Database\Seeder;

class RepresentationsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $representationsusers = [


        	['places'=>'70',
        	'users_id'=>'1',
        	'representation_id'=>'2',
    	],	

    		['places'=>'20',
    		'users_id'=>'1',
    		'representation_id'=>'6',

    	],

      [
        'places' =>'50',
         'users_id'=>'2',
         'representation_id'=>'1',
      ],
            
      [
        'places'=>'70',
        'users_id'=>'1',
        'representation_id'=>'4',
      ],	
      [
        'places'=>'20',
        'users_id'=>'1',
        'representation_id'=>'2',
      ],

     ];

     foreach ($representationsusers as $a) {
     	DB::table('representations_user')->insert([
     		'places'=>$a['places'],
     		'users_id'=>$a['users_id'],
     		'representation_id'=>$a['representation_id'],

     	]);
     }
    }
}
