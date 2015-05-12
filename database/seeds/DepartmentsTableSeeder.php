<?php

use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('departments')->delete();

		$departments = array(
			['id' => 1, 'title' => 'Department 1'],
			['id' => 2, 'title' => 'Department 2'],
			['id' => 3, 'title' => 'Department 3'],
		);

		DB::table('departments')->insert($departments);
	}

}