<?php

use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('departments')->delete();

		$departments = [
			['id' => 1, 'organization_id' => 1, 'parent_id' => null, 'title' => 'Head Department'],
			['id' => 2, 'organization_id' => 1, 'parent_id' => 1, 'title' => 'Main Department'],
			['id' => 3, 'organization_id' => 1, 'parent_id' => 2, 'title' => 'Mini Department'],
		];

		DB::table('departments')->insert($departments);
	}

}