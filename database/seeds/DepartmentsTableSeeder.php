<?php

use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('departments')->delete();

		$departments = array(
			['id' => 1, 'parent_id' => null, 'title' => 'Department 1'],
			['id' => 2, 'parent_id' => 1, 'title' => 'Department 2'],
			['id' => 3, 'parent_id' => 2, 'title' => 'Department 3'],
		);

		DB::table('departments')->insert($departments);
	}

}