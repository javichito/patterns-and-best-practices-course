<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder {

  protected $table = 'statuses';

	public function run()
	{
    DB::table($this->table)->truncate();

    Status::create([
      'user_id' => 1,
      'content' => 'Lo bueno del cine es que durante dos horas los problemas son de otros.'
    ]);

    // Fake data
    $faker = Faker\Factory::create();

    for ($i=0; $i < 50; $i++)
    {
  		Status::create([
        'user_id' => (int) rand(1, 11),
        'content' => $faker->realText(Status::MAX_LENGTH)
      ]);
    }
	}

}
