<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'admin',
        	'username' => 'admin',
        	'email' => 'rafikfarhad+1@gmail.com',
        	'password' => bcrypt('a'),
        	'created_at' => '2017-10-10 12:00:00'
        ]);
        User::create([
            'name' => 'samia',
            'username' => 'samia',
            'email' => 'samia.sust13@gmail.com',
            'password' => bcrypt('a'),
            'created_at' => '2017-10-10 12:00:00'
        ]);
        User::create([
            'name' => 'farhad',
            'username' => 'farhad',
            'email' => 'rafikfarhad@gmail.com',
            'password' => bcrypt('a'),
            'created_at' => '2017-10-10 12:00:00'
        ]);


    }
}
