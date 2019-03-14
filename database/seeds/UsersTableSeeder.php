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
            'name' => 'arar',
            'email' => 'ararhaouas@yahoo.fr',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
            'is_admin' => true,
        ]);
    }
}
