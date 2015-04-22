<?php

use Illuminate\Database\Seeder;


class DepartmentUserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('department_user')->delete();

		$department_user = array(
			['department_id' => 1, 'user_id' => 1],
			['department_id' => 2, 'user_id' => 2],
			['department_id' => 3, 'user_id' => 3],
		);

		DB::table('department_user')->insert($department_user);
	}

}