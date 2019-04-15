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
        	['places' =>'50',
        	'userss_id'=>'1',
        	'representation_id'=>'2',
        ],

        	['places'=>'70',
        	'userss_id'=>'2',
        	'representation_id'=>'4',
    	],	

    		['places'=>'20',
    		'userss_id'=>'1',
    		'representation_id'=>'3',

    	],



     ];

     foreach ($representationsusers as $a) {
     	DB::table('representations_user')->insert([
     		'places'=>$a['places'],
     		'userss_id'=>$a['userss_id'],
     		'representation_id'=>$a['representation_id'],

     	]);
     }
    }
}
