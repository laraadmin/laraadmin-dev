<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Employee;
use Dwij\Laraadmin\Models\Module;

class EmployeeController extends Controller
{
    public $view_col = 'name';
    
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
    public function showProfile($id) {
        $employee = Employee::findOrFail($id);
        //$user = User::findOrFail($id);
        $module = Module::get('Employees');
        $module->row = $employee;
        $user = User::where('context_id', '=', $id)->firstOrFail();
        
        return view('employees.view', [
            'user' => $user,
            'employee' => $employee,
            'module' => $module,
            'view_col' => $this->view_col,
            'no_header' => true,
            'no_padding' => "no-padding"
        ]);
    }
}
