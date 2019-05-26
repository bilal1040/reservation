<?php

use Illuminate\Database\Seeder;

class ArtistesTypeShowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artistestypeshow=[
        	['artiste_type_id'=> '1', 'shows_id'=>'1'],
        	['artiste_type_id'=> '2', 'shows_id'=>'2'],
        	['artiste_type_id'=> '3', 'shows_id'=>'3'],

        ];

        foreach ($artistestypeshow as $a){
        		DB::table('artistes_type_show')->insert([
        		'artiste_type_id'=>$a['artiste_type_id'],
        		'shows_id'=>$a['shows_id'],

        	]);
        }
    }
}
