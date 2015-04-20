<?php

use App\Micropost;
use Illuminate\Database\Seeder;

class MicropostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker\Factory::create();

		foreach(range(1,20) as $index)
		{
			Micropost::create([
				'content' 		=> $faker->text($maxNbChars = 200),
				'user_id'		=> '21'
			]);
		}
	}
}

