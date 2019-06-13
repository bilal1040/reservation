<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = 
        [
	        [
	        	'categorie'=>'romantique'

	        ],


	        [
	        	'categorie'=>'burlesque'
	        ],


	        [
	        	'categorie'=>'fantastique'
	        ]
    	];

        foreach ($category as $a) {     
            DB::table('category')->insert([
                'categorie' => $a['categorie'],
               
            ]);
        }
    }
}
