<?php

use Illuminate\Database\Seeder;

class ListcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listcategory = new \App\Listcategory([

        	'name' => 'Autocamper'

        ]);
        $listcategory->save();
        
        $listcategory = new \App\Listcategory([

        	'name' => 'Campervan'

        ]);
        $listcategory->save();
    }
}
