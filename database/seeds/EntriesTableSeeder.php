<?php

use Illuminate\Database\Seeder;


class EntriesTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('entries')->delete();

		$entries = array(
			['id' => 1, 'user_id' => 1, 'title' => 'Entry 1', 'body' => 'Entry 1 Body', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 2, 'user_id' => 1, 'title' => 'Entry 2', 'body' => 'Entry 2 Body', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 3, 'user_id' => 1, 'title' => 'Entry 3', 'body' => 'Entry 3 Body', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		);

		DB::table('entries')->insert($entries);
	}

}