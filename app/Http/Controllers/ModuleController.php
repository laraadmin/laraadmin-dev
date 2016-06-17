<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFieldTypes;

class ModuleController extends Controller
{
    
    public function __construct() {
        // for authentication (optional)
        // $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        
        return View('modules.index', [
            'modules' => $modules
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Module::generate($request->name, $request->name_db, '', []);
        
        return redirect()->route('modules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ftypes = ModuleFieldTypes::getFTypes2();
        $module = Module::find($id);
        $module = Module::get($module->name);
        return view('modules.show', [
            'no_header' => true,
            'no_padding' => "no-padding",
            'ftypes' => $ftypes
        ])->with('module', $module);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * Generate Modules CRUD + Model
     *
     * @param  int  $module_id
     * @return \Illuminate\Http\Response
     */
    public function generate_crud($model_id)
    {
        //return "Hi...".$model_id;
        
    }
    
    /**
     * Generate Modules Migrations
     *
     * @param  int  $module_id
     * @return \Illuminate\Http\Response
     */
    public function generate_migr($module_id)
    {
        
    }
}
