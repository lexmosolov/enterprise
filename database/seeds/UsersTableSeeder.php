<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();

		$users = array(
			['id' => 1, 'name' => 'Lex', 'email' => 'lex.mosolov@gmail.com', 'password' => '$2y$10$KDbN1J3ThQi/dUf.cKg.Fe/IHCCt/glL5vQ/sEiUw/TjFZUXZQxmy', 'remember_token' => '4XP0yApiqOu3CRpONOsGWKTv0eewU8USAtfAF6vDetA7M7gviUysHfkcaUAY', 'department_id' => 1, 'role_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Flex', 'email' => 'flex.mosolov@gmail.com', 'password' => '$2y$10$KDbN1J3ThQi/dUf.cKg.Fe/IHCCt/glL5vQ/sEiUw/TjFZUXZQxmy', 'remember_token' => '4XP0yApiqOu3CRpONOsGWKTv0eewU8USAtfAF6vDetA7M7gviUysHfkcaUAY', 'department_id' => 2, 'role_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Alex', 'email' => 'alex.mosolov@gmail.com', 'password' => '$2y$10$KDbN1J3ThQi/dUf.cKg.Fe/IHCCt/glL5vQ/sEiUw/TjFZUXZQxmy', 'remember_token' => '4XP0yApiqOu3CRpONOsGWKTv0eewU8USAtfAF6vDetA7M7gviUysHfkcaUAY', 'department_id' => 3, 'role_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('users')->insert($users);
	}
}