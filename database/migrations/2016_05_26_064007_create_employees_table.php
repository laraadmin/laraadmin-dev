<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Employee;
use Dwijitso\Sbscrud\Models\Module;
use Dwijitso\Sbscrud\Models\ModuleFields;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Employees", 'employees', [
            // ["field_name_db", "Label", "UI Type", "Readonly", "Default_Value", "min_length", "max_length"]
            ["name", 'Name', 'Name', false, '', 5, 256 ],
            ["designation", 'Designation', 'String', false, '', 0, 50],
            ["gender", 'Gender', 'Radio', false, 'male', 0, 0],
            ["mobile", 'Mobile', 'Mobile', false, '', 10, 20],
            ["mobile2", 'Alernative Mobile', 'Mobile', false, '', 10, 20],
            ["email", 'Email', 'Email', false, '', 5, 100],
            ["dept", 'Department', 'Integer', false, '', 0, 0],
            ["role", 'Role', 'Integer', false, '', 0, 0],
            ["city", 'City', 'String', false, '', 0, 50],
            ["address", 'Address', 'Address', false, '', 0, 1000],
            ["about", 'About', 'String', false, '', 0, 0],
            ["date_birth", 'Date of Birth', 'Date', false, '1990-01-01', 0, 0],
            ["date_hire", 'Hiring Date', 'Date', false, date("Y-m-d"), 0, 0],
            ["date_left", 'Resignation Date', 'Date', false, '0000-00-00', 0, 0],
            ["salary_cur", 'Current Salary', 'Decimal', false, '0.0', 0, 2],
        ]);
        
        Employee::create([
            'name' => "Super Admin",
            'designation' => "Super Admin",
            'mobile' => "8888888888",
            'mobile2' => "",
            'email' => "gdb.sci123@gmail.com",
            'gender' => 'male',
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
