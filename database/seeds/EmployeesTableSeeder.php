<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => "Super Admin",
            'title' => "Super Admin",
            'mobile' => "8888888888",
            'email' => "laraadmin@gmail.com",
            'dept' => "0",
            'role' => "0",
            'city' => "",
            'address' => "",
            'about' => "",
            'date_birth' => date("Y-m-d"),
            'date_hire' => date("Y-m-d"),
            'date_left' => date("Y-m-d"),
            'salary_cur' => 0,
        ]);
    }
}
