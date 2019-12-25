<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        $vehicle = new \App\Vehicle([

        	'listcategory_id' => '1',
            'brand' => 'Adria',
        	'model' => 'Matrix 670 Plus'

        ]);
        $vehicle->save();
        
       	$vehicle = new \App\Vehicle([

        	'listcategory_id' => '1',
            'brand' => 'Bavaria',
        	'model' => 'A71'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

        	'listcategory_id' => '1',
            'brand' => 'Benimar',
        	'model' => 'Benivan'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

        	'listcategory_id' => '1',
            'brand' => 'Bravia',
        	'model' => '599'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '1',
            'brand' => 'Euramobil',
            'model' => 'Eura'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '1',
            'brand' => 'Fiat',
            'model' => 'Ducato'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '1',
            'brand' => 'Ford',
            'model' => 'Bürstner'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '1',
            'brand' => 'Hobby',
            'model' => 'Optima'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '1',
            'brand' => 'Hymer',
            'model' => 'Hymercar'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '2',
            'brand' => 'Mercedes',
            'model' => 'Marco Polo'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '1',
            'brand' => 'Roadcar',
            'model' => 'Roadcar'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'listcategory_id' => '1',
            'brand' => 'Peugeout',
            'model' => 'Boxer'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

        	'listcategory_id' => '2',
            'brand' => 'VW',
        	'model' => 'California'

        ]);
        $vehicle->save();
    }
}
