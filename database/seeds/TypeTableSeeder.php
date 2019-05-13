<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
        	['type' => 'B'],
        	['type' => 'c'],
        	['type' => 'd']

        ];


        foreach ($types as $key) {
        	DB::table('types')->insert([
        		'type' =>$key['type']
        	]);
        }
    }
}
