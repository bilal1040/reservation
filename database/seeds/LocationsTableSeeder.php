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
	        'localitys_id'=> '1', 
	        'website'=>'', 
	        'phone'=>''],

	        ['slug' => 'la-samaritaine',
	        'designation'=>'La Samaritaine',
	        'address'=>'rue des quatres vents',
	        'localitys_id'=> '2',
	        'website'=>'www.lasamaritaine.be',
	        'phone'=>'02/511.33.95'],

	        ['slug'=>'theatre-royal-parc',
	        'designation'=>'Théâtre Royal du Parc',
	        'address'=>'Rue Mercelis 35',
	        'localitys_id'=>'3',
	        'website'=>'www.theatreduparc.be',
	        'phone'=>''],
        ];


        foreach ($locations as $a) {
        	DB::table('locations')->insert([
        		'slug'=>$a['slug'],
        		'designation'=>$a['designation'],
        		'address'=>$a['address'],
        		'localitys_id'=>$a['localitys_id'],
        		'website'=>$a['website'],
        		'phone'=>$a['phone'],


        	]);
        }
    }
}
