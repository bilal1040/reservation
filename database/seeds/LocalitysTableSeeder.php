<?php

use Illuminate\Database\Seeder;

class LocalitysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localitys=[
        	['postal_code'=> '1080', 'locality'=>'Molenbeek'],
        	['postal_code'=>'1040', 'locality'=>'Etterbeek'],
        	['postal_code'=>'1050', 'locality'=>'Ixelles'],
        ];

        foreach ($localitys as $a) {
        	DB::table('localitys')->insert([
        		'postal_code'=>$a['postal_code'],
        		'locality'=>$a['locality'],


        	]);
        }
    }
}
