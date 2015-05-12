<?php

use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('roles')->delete();

		$roles = array(
			['id' => 1, 'title' => 'Head'],
			['id' => 2, 'title' => 'Manager'],
			['id' => 3, 'title' => 'Worker'],
		);

		DB::table('roles')->insert($roles);
	}
}