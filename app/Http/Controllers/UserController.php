<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
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
        $user = User::findOrFail($id);
        if($user['type'] == "employee") {
            return redirect()->action('EmployeesController@showProfile', [1]);
        } else if($user['type'] == "client") {
            return redirect()->action('ClientController@showProfile', [1]);
        }
        // return view('user.profile', ['user' => User::findOrFail($id), 'no_header' => true, 'no_padding' => "no-padding"]);
    }
}
