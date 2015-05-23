<?php
class UserTableSeeder extends Seeder{


	public function run(){

			DB::table('users')->delete();
			User::Create(array('email'=>'foo@example.com'));
			
	}
}

?>