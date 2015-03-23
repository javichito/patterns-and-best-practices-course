<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		App\User::create([
			'name' => 'Javier Hidalgo',
			'email' => 'jh@mambo.pe',
			'password' => bcrypt('prueba')
		]);
	}

}
