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

        	'brand' => 'Adria',
        	'model' => 'Matrix 670 Plus'

        ]);
        $vehicle->save();
        
       	$vehicle = new \App\Vehicle([

        	'brand' => 'Bavaria',
        	'model' => 'A71'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

        	'brand' => 'Benimar',
        	'model' => 'Benivan'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

        	'brand' => 'Bravia',
        	'model' => '599'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Euramobil',
            'model' => 'Eura'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Fiat',
            'model' => 'Ducato'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Ford',
            'model' => 'Bürstner'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Hobby',
            'model' => 'Optima'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Hymer',
            'model' => 'Hymercar'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Mercedes',
            'model' => 'Marco Polo'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Roadcar',
            'model' => 'Roadcar'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

            'brand' => 'Peugeout',
            'model' => 'Boxer'

        ]);
        $vehicle->save();

        $vehicle = new \App\Vehicle([

        	'brand' => 'VW',
        	'model' => 'California'

        ]);
        $vehicle->save();
    }
}
