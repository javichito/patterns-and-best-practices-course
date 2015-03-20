<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		App\User::create([
			'name' => 'Javier Hidalgo',
			'email' => 'jh@mambo.pe',
			'password' => bcrypt('prueba')
		]);

		// $this->call('UserTableSeeder');
	}

}
