<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('DepartmentsTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('TasksTableSeeder');
		$this->call('EntriesTableSeeder');
	}

}
