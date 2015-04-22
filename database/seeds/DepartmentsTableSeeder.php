<?php

use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('departments')->delete();

		$departments = array(
			['id' => 1, 'head_id' => 1, 'name' => 'Department 1', 'slug' => 'department-1'],
			['id' => 2, 'head_id' => 2, 'name' => 'Department 2', 'slug' => 'department-2'],
			['id' => 3, 'head_id' => 3, 'name' => 'Department 3', 'slug' => 'department-3'],
		);

		DB::table('departments')->insert($departments);
	}

}