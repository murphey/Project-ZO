<?php

class  UserTableSeeder extends Seeder
{

public function run()
{
	DB::table('users')->delete();
	$user = new User;
	$user->fill(array(
'name' => 'kees',
'email' => 'murphey@test_gmail.com',    
'admin_name' => 'dick',
'user_level' => '1'
));
	$user->password = Hash::make('password');
	$user->save(); 
}
}