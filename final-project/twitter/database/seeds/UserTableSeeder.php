<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

  protected $table = 'users';

	public function run()
	{
    $faker = Faker\Factory::create();
    $uploadDir = public_path('uploads');

    DB::table($this->table)->truncate();

    if ( ! file_exists($uploadDir))
    {
      mkdir($uploadDir, 0755);
    }

		User::create([
			'name' => 'Javier Hidalgo',
			'email' => 'jh@mambo.pe',
			'password' => bcrypt('prueba'),
      'image' => basename($faker->image($uploadDir, 200, 200, 'cats'))
		]);

    // Fake data
    for ($i=0; $i < 10; $i++)
    {
      User::create([
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('prueba'),
        'image' => basename($faker->image($uploadDir, 200, 200, 'cats'))
      ]);
    }
	}

}
