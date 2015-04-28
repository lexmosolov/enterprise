<?php

use Illuminate\Database\Seeder;


class TasksTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('tasks')->delete();

		$tasks = array(
			['id' => 1, 'name' => 'Task 1', 'completed' => 1, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'name' => 'Task 2', 'completed' => 0, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'name' => 'Task 3', 'completed' => 0, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 4, 'name' => 'Task 4', 'completed' => 1, 'description' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 5, 'name' => 'Task 5', 'completed' => 1, 'description' => 'My third task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 6, 'name' => 'Task 6', 'completed' => 1, 'description' => 'My fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 7, 'name' => 'Task 7', 'completed' => 0, 'description' => 'My fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('tasks')->insert($tasks);
	}

}