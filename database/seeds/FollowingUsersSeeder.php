<?php

use App\User;
use Illuminate\Database\Seeder;

class FollowingUsersSeeder extends Seeder {

	public function run()
	{
		$faker = Faker\Factory::create();

		$users = User::all()->lists('id');
		foreach(range(1,100) as $index)
		{
			User::find($faker->randomElement($users))
				->follows()
				->save(User::findOrFail($faker->randomElement($users)));
		}
	}
}
