<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker\Factory::create();

		foreach(range(1,20) as $index)
		{
			User::create([
				'name' 		=> $faker->name,
				'email'		=> $faker->email,
				'password' 	=> bcrypt($faker->word)
			]);
		}
	}
}

