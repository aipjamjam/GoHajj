<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
          [
            'name'		  => 'aipjamjam',
            'email'		  => 'aipjamjam@gmail.com',
            'password'    => bcrypt('aipjamjam123')
        ]
    ]);
    }
}
