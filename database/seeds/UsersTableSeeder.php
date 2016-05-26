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
            'name' => "Super Admin",
            'email' => "gdb.sci123@gmail.com",
            'password' => bcrypt("12345678"),
            'context_id' => "1",
            'role' => "0",
        ]);
    }
}
