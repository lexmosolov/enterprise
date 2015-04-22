<?php

use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('departments')->delete();

		$departments = array(
			['id' => 1, 'head_id' => 1, 'name' => 'Department 1', 'slug' => 'department-1'],
			['id' => 2, 'head_id' => 2, 'name' => 'Department 2', 'slug' => 'department-2'],
			['id' => 3, 'head_id' => 3, 'name' => 'Department 3', 'slug' => 'department-3'],
		);

		// Uncomment the below to run the seeder
		DB::table('departments')->insert($departments);
	}

}