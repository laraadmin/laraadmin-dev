<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFields;
use Dwij\Laraadmin\Models\ModuleFieldTypes;

class FieldController extends Controller
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
        $module_id = $request->module_id;
        $field = new ModuleFields;
        $field->colname = $request->colname;
        $field->label = $request->label;
        $field->module = $request->module_id;
        $field->field_type = $request->field_type;
        if($request->readonly) {
            $field->readonly = true;
        } else {
            $field->readonly = false;
        }
        $field->defaultvalue = $request->defaultvalue;
        $field->minlength = $request->minlength;
        $field->maxlength = $request->maxlength;
        if($request->required) {
            $field->required = true;
        } else {
            $field->required = false;
        }
        $field->popup_vals = $request->popup_vals;
        $field->save();
        return redirect()->action('ModuleController@show', [$module_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $ftypes = ModuleFieldTypes::getFTypes2();
        // $module = Module::find($id);
        // $module = Module::get($module->name);
        // return view('modules.show', [
        //     'no_header' => true,
        //     'no_padding' => "no-padding",
        //     'ftypes' => $ftypes
        // ])->with('module', $module);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $field = ModuleFields::find($id);
        
        $module = Module::find($field->module);
        $ftypes = ModuleFieldTypes::getFTypes2();
        
        return view('modules.field_edit', [
            'module' => $module,
            'ftypes' => $ftypes,
        ])->with('field', $field);
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
        $module_id = $request->module_id;
        // $module = Module::find($field->module);
        
        $field = ModuleFields::find($id);
        $field->colname = $request->colname;
        $field->label = $request->label;
        $field->module = $request->module_id;
        $field->field_type = $request->field_type;
        if($request->readonly) {
            $field->readonly = true;
        } else {
            $field->readonly = false;
        }
        $field->defaultvalue = $request->defaultvalue;
        $field->minlength = $request->minlength;
        $field->maxlength = $request->maxlength;
        if($request->required) {
            $field->required = true;
        } else {
            $field->required = false;
        }
        $field->popup_vals = $request->popup_vals;
        $field->save();
        return redirect()->action('ModuleController@show', [$module_id]);
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
}
