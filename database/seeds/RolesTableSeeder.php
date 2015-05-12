<?php

use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('roles')->delete();

		$roles = array(
			['id' => 1, 'title' => 'Worker'],
			['id' => 2, 'title' => 'Manager'],
			['id' => 3, 'title' => 'Head'],
		);

		DB::table('roles')->insert($roles);
	}
}