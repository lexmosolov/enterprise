<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->delete();
		$users = array(
			['id' => 1, 'name' => 'Lex', 'email' => 'lex.mosolov@gmail.com', 'password' => '$2y$10$KDbN1J3ThQi/dUf.cKg.Fe/IHCCt/glL5vQ/sEiUw/TjFZUXZQxmy', 'remember_token' => '4XP0yApiqOu3CRpONOsGWKTv0eewU8USAtfAF6vDetA7M7gviUysHfkcaUAY', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Flex', 'email' => 'flex.mosolov@gmail.com', 'password' => '$2y$10$KDbN1J3ThQi/dUf.cKg.Fe/IHCCt/glL5vQ/sEiUw/TjFZUXZQxmy', 'remember_token' => '4XP0yApiqOu3CRpONOsGWKTv0eewU8USAtfAF6vDetA7M7gviUysHfkcaUAY', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Alex', 'email' => 'alex.mosolov@gmail.com', 'password' => '$2y$10$KDbN1J3ThQi/dUf.cKg.Fe/IHCCt/glL5vQ/sEiUw/TjFZUXZQxmy', 'remember_token' => '4XP0yApiqOu3CRpONOsGWKTv0eewU8USAtfAF6vDetA7M7gviUysHfkcaUAY', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}
}