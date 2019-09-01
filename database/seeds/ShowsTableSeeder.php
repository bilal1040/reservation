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
        	'description'=>'"Un homme est bloqué à l’aéroport. Questionné par les douaniers, il doit alors justif ier son identité, et surtout prouver qu’il est haïtien – qu’est-ce qu’être haïtien ? Commence alors une leçon d’histoire singulière." ',
        	'location_id'=>'2',
        	'bookable'=>'1',
        	'price'=>9.50,
            'categorie_id'=>1,
       ],

        	[
        	'slug'=>'cible-mouvante',
        	'title'=>'Cible-mouvante',
        	'description'=>'"C’est un nouveau petit bijou que nous propose Marius von Mayenburg. Une sorte de théâtre d’anticipation sociale où de tout jeunes enfants sont suspectés d’être des poseurs de bombes." ',
        	'location_id'=>'3',
        	'bookable'=>'1',
        	'price'=>8,00,
            'categorie_id'=>2
        ],

        	[
        	'slug'=>'ceci-n-est-pas-chanteur-belge',
        	'title'=>'Ceci n\'est pas un chanteur belge',
        	'description'=>'"Entre Magritte (pour le surréalisme comique) et Maigret (pour le réalisme mélancolique), ce dixième opus semalien propose quatorze nouvelles chansons mêlées à de petits textes humoristiques." ',
        	'location_id'=>'1',
        	'bookable'=>'0',
        	'price'=>7,50,
            'categorie_id'=>2
        ],
        ];

        foreach ($shows as $a) {
        	DB::table('shows')->insert([
        		'slug'=>$a['slug'],
        		'title'=>$a['title'],
        		'description'=>$a['description'],
        		'location_id'=>$a['location_id'],
        		'bookable'=>$a['bookable'],
        		'price'=>$a['price'],
                'categorie_id'=>$a['categorie_id']

        	]);
        }
    }
}
