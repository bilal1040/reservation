<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  {
        $artists = [
            ['firstname'=>'Bob','lastname'=>'Sull'],
            ['firstname'=>'Marc','lastname'=>'Flynn'],
            ['firstname'=>'Fred','lastname'=>'Durand'],
        ];
        
        foreach ($artists as $a) {     
            DB::table('artists')->insert([
                'firstname' => $a['firstname'],
                'lastname' => $a['lastname'],
            ]);
        }
    }
}

