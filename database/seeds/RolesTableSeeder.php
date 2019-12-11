<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Role([

        	'id' => '1',
        	'name' => 'privat',
        	'display_name' => 'privat bruger',
        	'created_at' => '2019-11-14 14:07:55',
        	'updated_at' => '2019-11-14 14:08:16'

        ]);

        $role = new \App\Role([

        	'id' => '1',
        	'name' => 'forhandler',
        	'display_name' => 'forhandler bruger',
        	'created_at' => '2019-11-14 14:07:55',
        	'updated_at' => '2019-11-14 14:08:16'

        ]);
    }
}
