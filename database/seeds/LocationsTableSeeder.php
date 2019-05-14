<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations =[

	        ['slug'=>'belfius-art-collection', 
	        'designation'=>'Belfius Art Collection', 
	        'address'=>'50 rue de l\'Écuyer',
	        'locality_id'=> '1', 
	        'website'=>'', 
	        'phone'=>''],

	        ['slug' => 'la-samaritaine',
	        'designation'=>'La Samaritaine',
	        'address'=>'rue des quatres vents',
	        'locality_id'=> '2',
	        'website'=>'www.lasamaritaine.be',
	        'phone'=>'02/511.33.95'],

	        ['slug'=>'theatre-royal-parc',
	        'designation'=>'Théâtre Royal du Parc',
	        'address'=>'Rue Mercelis 35',
	        'locality_id'=>'3',
	        'website'=>'www.theatreduparc.be',
	        'phone'=>''],
        ];


        foreach ($locations as $a) {
        	DB::table('locations')->insert([
        		'slug'=>$a['slug'],
        		'designation'=>$a['designation'],
        		'address'=>$a['address'],
        		'locality_id'=>$a['locality_id'],
        		'website'=>$a['website'],
        		'phone'=>$a['phone'],


        	]);
        }
    }
}
