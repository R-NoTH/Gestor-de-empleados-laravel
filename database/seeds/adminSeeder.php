<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',

            'email' => 'admin@gmail.com',

            'is_admin' => true,

            'password' => bcrypt('12345678'),
                   
        ]);
    }
}
