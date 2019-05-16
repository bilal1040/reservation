<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation=[
        	['quantite'=>2,
            'users_id'=>1,
            'shows_id'=>2],

        ];

        foreach ($reservation as $a) {
        	DB::table('reservation')->insert([
        		'quantite'=>$a['quantite'],
                'users_id'=>$a['users_id'],

                'shows_id'=>$a['shows_id'],

        	]);
    }
}
}