<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([

        	'role_id' => '1',
        	'name' => 'privatbruger',
        	'street' => 'Privatadresse 14',
        	'postalcode' => '6700',
			'city'=> 'Esbjerg',
			'email'=> 'privat@admin.com',
			'phone'=> '90909090',
			'password'=> '$2y$10$FxP9gEOG7y3VYpiYI/CCU.0K/Vhl3liEoG1GnVjJHlcjNZFu2QnGi',		

        ]);
        $user->save();

        $user = new \App\User([

        	'role_id' => '2',
        	'name' => 'forhandlerbruger',
        	'street' => 'Forhandleradresse 14',
        	'postalcode' => '6700',
			'city'=> 'Esbjerg',
			'email'=> 'forhandler@admin.com',
			'phone'=> '89898989',
			'password'=> '$2y$10$FxP9gEOG7y3VYpiYI/CCU.0K/Vhl3liEoG1GnVjJHlcjNZFu2QnGi',		

        ]);
        $user->save();
    }
}
