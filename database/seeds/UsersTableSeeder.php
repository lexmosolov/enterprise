<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();

		$users = [
			['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin'), 'role_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Ivan', 'email' => 'head@head.com', 'password' => Hash::make('head'), 'role_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Garry', 'email' => 'manager@manager.com', 'password' => Hash::make('manager'), 'role_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 4, 'name' => 'Serge', 'email' => 'worker@worker.com', 'password' => Hash::make('worker'), 'role_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		];

		DB::table('users')->insert($users);

		DB::table('department_user')->delete();

		$department_user = [
			['department_id' => 1, 'user_id' => 2],
			['department_id' => 3, 'user_id' => 2],
			['department_id' => 3, 'user_id' => 3],
			['department_id' => 3, 'user_id' => 4],
		];

		DB::table('department_user')->insert($department_user);
	}
}