<?php

use Illuminate\Database\Seeder;


class TasksTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('tasks')->delete();

		$tasks = array(
			['id' => 1, 'parent_id' => null, 'name' => 'Task 1', 'completed' => 1, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'guarantor_id' => 1, 'performer_id' => 2, 'deadline' => new DateTime],
			['id' => 2, 'parent_id' => 1, 'name' => 'Task 1 2', 'completed' => 0, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'guarantor_id' => 1, 'performer_id' => 2, 'deadline' => new DateTime],
			['id' => 3, 'parent_id' => null, 'name' => 'Task 2', 'completed' => 0, 'description' => 'My first task', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'guarantor_id' => 1, 'performer_id' => 2, 'deadline' => new DateTime],
			['id' => 4, 'parent_id' => 3, 'name' => 'Task 2 1', 'completed' => 1, 'description' => 'My second task', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'guarantor_id' => 1, 'performer_id' => 2, 'deadline' => new DateTime],
			['id' => 5, 'parent_id' => 3, 'name' => 'Task 2 2', 'completed' => 1, 'description' => 'My third task', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'guarantor_id' => 1, 'performer_id' => 2, 'deadline' => new DateTime],
			['id' => 6, 'parent_id' => 5, 'name' => 'Task 2 2 1', 'completed' => 1, 'description' => 'My fourth task', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'guarantor_id' => 1, 'performer_id' => 2, 'deadline' => new DateTime],
			['id' => 7, 'parent_id' => null, 'name' => 'Task 3', 'completed' => 0, 'description' => 'My fifth task', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'guarantor_id' => 1, 'performer_id' => 2, 'deadline' => new DateTime],
		);

		DB::table('tasks')->insert($tasks);
	}

}