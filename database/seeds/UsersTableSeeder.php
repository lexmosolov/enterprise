<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();

		$users = array(
			['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin'), 'department_id' => 3, 'role_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Head', 'email' => 'head@head.com', 'password' => Hash::make('head'), 'department_id' => 3, 'role_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Manager', 'email' => 'manager@manager.com', 'password' => Hash::make('manager'), 'department_id' => 3, 'role_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 4, 'name' => 'Worker', 'email' => 'worker@worker.com', 'password' => Hash::make('worker'), 'department_id' => 3, 'role_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('users')->insert($users);
	}
}