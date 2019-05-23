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
        	'users_id'=>'2',
        	'representation_id'=>'1',
        ],

        	['places'=>'70',
<<<<<<< HEAD
        	'users_id'=>'1',
        	'representation_id'=>'4',
    	],	

    		['places'=>'20',
    		'users_id'=>'1',
    		'representation_id'=>'2',
=======
        	'users_id'=>'2',
        	'representation_id'=>'2',
    	],	

    		['places'=>'20',
    		'users_id'=>'2',
    		'representation_id'=>'3',
>>>>>>> 1b535af660a40e8953ef42fdec51bf637445d56f

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
