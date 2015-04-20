<?php

use App\Micropost;
use App\User;
use Illuminate\Database\Seeder;

class MicropostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker\Factory::create();

		$users = User::all()->lists('id');
		foreach(range(1,100) as $index)
		{
			Micropost::create([
				'content' 		=> $faker->text($maxNbChars = 140),
				'user_id'		=> $faker->randomElement($users)
			]);
		}
	}
}

