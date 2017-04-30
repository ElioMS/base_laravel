<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['name' => 'sadmin' , 'email' => 'elio@mail.com', 'password' => bcrypt('123123'), 'role_id' => 1],
            ['name' => 'admin' , 'email' => 'admin@mail.com', 'password' => bcrypt('123123'), 'role_id' => 2],
        ]);
    }
}
