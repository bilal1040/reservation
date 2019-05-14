<?php

use Illuminate\Database\Seeder;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shows=[
        	[
        	'slug'=>'ayiti',
        	'title'=>'Ayiti',
        	'poster_url'=>'/wrapped/imgs/ayiti.jpg',
        	'location_id'=>'2',
        	'bookable'=>'1',
        	'price'=>9,50,
       ],

        	[
        	'slug'=>'cible-mouvante',
        	'title'=>'Cible-mouvante',
        	'poster_url'=>'/wrapped/imgs/cible.jpg',
        	'location_id'=>'3',
        	'bookable'=>'1',
        	'price'=>8,00,
        ],

        	[
        	'slug'=>'ceci-n-est-pas-chanteur-belge',
        	'title'=>'Cece n\'est pas un chanteur belge',
        	'poster_url'=>'/images/claudebelgesaison220.jpg',
        	'location_id'=>'1',
        	'bookable'=>'0',
        	'price'=>7,50,
        ],
        ];

        foreach ($shows as $a) {
        	DB::table('shows')->insert([
        		'slug'=>$a['slug'],
        		'title'=>$a['title'],
        		'poster_url'=>$a['poster_url'],
        		'location_id'=>$a['location_id'],
        		'bookable'=>$a['bookable'],
        		'price'=>$a['price'],

        	]);
        }
    }
}
