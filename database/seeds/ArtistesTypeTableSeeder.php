<?php

use Illuminate\Database\Seeder;

class ArtistesTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artistestype= [
        	['artists_id'=>'1', 'types_id'=>'2'],
        	['artists_id'=>'3', 'types_id'=>'1'],
        	['artists_id'=>'2', 'types_id'=>'1'],
        ];

        foreach ($artistestype as $a) {
        	DB::table('artiste_type')->insert([
        		'artists_id'=>$a['artists_id'],
        		'types_id'=>$a['types_id'],


        	]);
        }
    }
}
