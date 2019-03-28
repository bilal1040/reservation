<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $types =[

       	['type'=> 'auteur'],
       	['type'=> 'scénographe'],

       ];

       foreach ($types as $a ) {
       	DB::table('types')->insert([
       		'type'=>$a['type'],
       	]);
       }
    }
}
