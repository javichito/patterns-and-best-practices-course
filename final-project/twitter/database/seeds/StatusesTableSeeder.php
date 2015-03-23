<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder {

	public function run()
	{
		App\Status::create(['user_id' => 1, 'content' => 'Lo bueno del cine es que durante dos horas los problemas son de otros.']);
	}

}
