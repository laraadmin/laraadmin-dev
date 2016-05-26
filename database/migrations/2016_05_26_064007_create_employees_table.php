<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Employee;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title', 100);
            $table->string('mobile', 20);
            $table->string('email', 100)->unique();
            $table->integer('dept')->unsigned();
            $table->integer('role')->unsigned();
            $table->string('city', 50);
            $table->string('address', 1000);
            $table->string('about', 1000);
            $table->date('date_birth');
            $table->date('date_hire');
            $table->date('date_left');
            $table->double('salary_cur');
            $table->timestamps();
        });
        Employee::create([
            'name' => "Super Admin",
            'title' => "Super Admin",
            'mobile' => "8888888888",
            'email' => "gdb.sci123@gmail.com",
            'dept' => "0",
            'role' => "1",
            'city' => "",
            'address' => "",
            'about' => "",
            'date_birth' => date("Y-m-d"),
            'date_hire' => date("Y-m-d"),
            'date_left' => date("Y-m-d"),
            'salary_cur' => 0,
        ]);
        // if (Schema::hasTable('users')) {
            // Schema::table('users', function ($table) {
            //     $table->foreign('context_id')->references('id')->on('employees');
            // });
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
