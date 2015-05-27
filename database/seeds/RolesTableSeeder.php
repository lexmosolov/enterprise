<?php

use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('roles')->delete();

		$roles = array(
			['id' => 1, 'title' => 'admin'],
			['id' => 2, 'title' => 'head'],
			['id' => 3, 'title' => 'manager'],
			['id' => 4, 'title' => 'worker'],
		);

		DB::table('roles')->insert($roles);
	}
}