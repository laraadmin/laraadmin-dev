<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Employee;
use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Employees", 'employees', 'name', [
            // ["field_name_db", "Label", "UI Type", "Readonly", "Default_Value", "min_length", "max_length"]
            ["name", 'Name', 'Name', false, '', 5, 256, true],
            ["designation", 'Designation', 'String', false, '', 0, 50, true],
            ["gender", 'Gender', 'Radio', false, 'male', 0, 0, true],
            ["mobile", 'Mobile', 'Mobile', false, '', 10, 20, true],
            ["mobile2", 'Alernative Mobile', 'Mobile', false, '', 10, 20, false],
            ["email", 'Email', 'Email', false, '', 5, 100, true],
            ["dept", 'Department', 'Integer', false, '', 0, 0, false],
            ["role", 'Role', 'Integer', false, '', 0, 0, true],
            ["city", 'City', 'String', false, '', 0, 50, false],
            ["address", 'Address', 'Address', false, '', 0, 1000, false],
            ["about", 'About', 'String', false, '', 0, 0, false],
            ["date_birth", 'Date of Birth', 'Date', false, '1990-01-01', 0, 0, false],
            ["date_hire", 'Hiring Date', 'Date', false, date("Y-m-d"), 0, 0, false],
            ["date_left", 'Resignation Date', 'Date', false, '0000-00-00', 0, 0, false],
            ["salary_cur", 'Current Salary', 'Decimal', false, '0.0', 0, 2, false],
        ]);
        
        //Employee::create([ Not working - [Illuminate\Database\Eloquent\MassAssignmentException] name
        DB::table('employees')->insert([
            'name' => "Super Admin",
            'designation' => "Super Admin",
            'mobile' => "8888888888",
            'mobile2' => "",
            'email' => "laraadmin@gmail.com",
            'gender' => 'male',
            'dept' => "0",
            'role' => "1",
            'city' => "Pune",
            'address' => "Karve nagar, Pune 411030",
            'about' => "About user / biography",
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
        if (Schema::hasTable('employees')) {
            Schema::drop('employees');
        }
    }
}
