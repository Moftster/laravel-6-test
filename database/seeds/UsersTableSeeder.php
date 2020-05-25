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
        DB::table('users')->insert([
            'name' => 'Derek Williams',
            'email' => 'derek@freshstartpsychotherapy.co.uk',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Annie Foley',
            'email' => 'annie@freshstartpsychotherapy.co.uk',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Christa Scholtz',
            'email' => 'christa@freshstartpsychotherapy.co.uk',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Spencer Clifford',
            'email' => 'spencer.clifford@gmail.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'David Moftakhar',
            'email' => 'david@chillaweb.com',
            'password' => bcrypt('password'),
        ]);
    }
}
