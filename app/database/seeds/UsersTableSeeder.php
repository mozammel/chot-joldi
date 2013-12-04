<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){
		$users = array(
			array('email' => 'smronju@gmail.com', 'password' => Hash::make('c0mm0n'), 'type' => 'Job Seeker', 'status' => 1, 'created_at' => new DateTime(), 'updated_at' => new DateTime())
		);

		DB::table('users')->insert($users);
	}

}