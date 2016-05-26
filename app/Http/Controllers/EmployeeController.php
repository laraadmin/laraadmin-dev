<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        $employee = Employee::findOrFail($id);
        $user = User::findOrFail($id);
        return view('employees.view', ['user' => $user, 'employee' => $employee, 'no_header' => true, 'no_padding' => "no-padding"]);
    }
}
