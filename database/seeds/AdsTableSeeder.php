<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad = new \App\Ad([

        	'user_id' => '1',
        	'vehicle_id' => '1',
        	'listcategory_id' => '1',
        	'title' => 'Nyere autocamper sælges',
        	'description' => 'Pæn og velholdt Adria Coral i udstyrsvarianten Axess, med en SLT indretning hvilket vil sige toilet+bad med separat brusebund på hele bagvæggen - dernæst kommer der langsgående enkeltsenge inden man træder ind i det store vinkelkøkken med 150L Køl+30L Frys, Stor håndvask og 3 Gasblus. Helt i front har vi den store siddegruppe inklusiv de drejbare førerstole, hvori der er mulighed for opredning til 2 personer. Usædvanligt lavt kilometertal, kun 11.500 km.

				Udstyr: Aircondition, Radio, Dobbelt airbag, 6 Gear, Servostyring, Fartpilot, El-ruder, El-sidespejle, Plisé i førerhus, Drejbare førerstole, 4 Selepladser, 4 Sovepladser, Kassettegardiner, Myggenetdør, Truma varme, TV, Vinkelkøkken, 3 Gasblus, Stor håndvask, 150L Køl+30L Frys, Toilet+bad med separat brusebund, Panoramatagluge i front.

					Med forbehold for skrive -og visningsfejl. Opstillingen er kun vejledende.',
			'year'=> '2017',
			'fueltype'=> 'diesel',
			'color'=> 'hvid',
			'price'=> '798000',
			'image'=> 'adria-new.jpeg',		

        ]);
        $ad->save();

        $ad = new \App\Ad([

        	'user_id' => '1',
        	'vehicle_id' => '1',
        	'listcategory_id' => '1',
        	'title' => 'Benimar Benivan',
        	'description' => 'Pæn og velholdt Benimar Benivan i udstyrsvarianten Axess, med en SLT indretning hvilket vil sige toilet+bad med separat brusebund på hele bagvæggen - dernæst kommer der langsgående enkeltsenge inden man træder ind i det store vinkelkøkken med 150L Køl+30L Frys, Stor håndvask og 3 Gasblus. Helt i front har vi den store siddegruppe inklusiv de drejbare førerstole, hvori der er mulighed for opredning til 2 personer. Usædvanligt lavt kilometertal, kun 11.500 km.

				Udstyr: Aircondition, Radio, Dobbelt airbag, 6 Gear, Servostyring, Fartpilot, El-ruder, El-sidespejle, Plisé i førerhus, Drejbare førerstole, 4 Selepladser, 4 Sovepladser, Kassettegardiner, Myggenetdør, Truma varme, TV, Vinkelkøkken, 3 Gasblus, Stor håndvask, 150L Køl+30L Frys, Toilet+bad med separat brusebund, Panoramatagluge i front.

					Med forbehold for skrive -og visningsfejl. Opstillingen er kun vejledende.',
			'year'=> '2017',
			'fueltype'=> 'diesel',
			'color'=> 'sort',
			'price'=> '619900',
			'image'=> 'Benimar_benivan_b165_9.jpg',		

        ]);
        $ad->save();

        $ad = new \App\Ad([

        	'user_id' => '1',
        	'vehicle_id' => '1',
        	'listcategory_id' => '1',
        	'title' => 'Bravia 599',
        	'description' => 'SPAR OVER 45.000 Nypris over 430.000,- Helt fejlfri Fritidsbil fra 8/4-2019, unde 6.0 meter, lav vægtafgift kun 3400,- pr halvår. Monteret med følgende udstyr Basis pakke, Chassis pakke , Fartpilot, A/C, radio, markise, cykelholder, Combi køleskab m/fryser, Bruser med varmt og kold vand, Truma gasvarme, plisse gardiner, og meget andet, Vi tager gerne din personbil eller autocamper i nytte',
			'year'=> '2016',
			'fueltype'=> 'diesel',
			'color'=> 'rød',
			'price'=> '489900',
			'image'=> 'bravia599.jpg',		

        ]);
        $ad->save();
    }
}
