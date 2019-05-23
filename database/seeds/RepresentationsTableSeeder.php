<?php

use Illuminate\Database\Seeder;

class RepresentationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $representations =[
        	['when'=>'2018-04-29 20:30:00',
        	'location_id'=>'2',
        	'show_id'=>'1',
        ],

        	['when'=>'2018-05-15 20:30:00',
        	'location_id'=>'3',
        	'show_id'=>'2',
        ],
        	['when'=>'2018-05-25 20:30:00',
        	'location_id'=>'2',
        	'show_id'=>'3',
        ],
        	['when'=>'2018-05-30 20:30:00',
        	'location_id'=>'2',
        	'show_id'=>'1',
        ],
        		
      ];

      foreach ($representations as $a) {
      	DB::table('representations')->insert([
      		'when'=>$a['when'],
      		'location_id'=>$a['location_id'],
      		'show_id'=>$a['show_id'],

      	]);
      	
      }


        
    }
}
