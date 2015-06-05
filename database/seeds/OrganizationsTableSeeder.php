<?php

use Illuminate\Database\Seeder;


class OrganizationsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('organizations')->delete();

		$organizations = [
			['id' => 1, 'title' => 'Organization Small'],
			['id' => 2, 'title' => 'Organization Middle'],
			['id' => 3, 'title' => 'Organization Big']
		];

		DB::table('organizations')->insert($organizations);
	}
}