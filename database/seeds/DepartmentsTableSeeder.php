<?php

use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('departments')->delete();

		$departments = [
			['id' => 1, 'organization_id' => 1, 'parent_id' => null, 'title' => 'Cool Department'],
			['id' => 2, 'organization_id' => 1, 'parent_id' => 1, 'title' => 'Good Department'],
			['id' => 3, 'organization_id' => 1, 'parent_id' => 2, 'title' => 'Bad Department'],
		];

		DB::table('departments')->insert($departments);
	}

}