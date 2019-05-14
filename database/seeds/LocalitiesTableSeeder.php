<?php

use Illuminate\Database\Seeder;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localite = [
        	['postal_code'=>'1000','localities'=>'bruxelles'],['postal_code'=>'36000','localities'=>'tanger'],
        	['postal_code'=>'93','localities'=>'paris'],

        ];

        foreach ($localite as $key) {
         DB::table('localities')->insert([
         	'postal_code'=>$key['postal_code'],
         	'localities'=>$key['localities']

         ]);
        }
    }
}
