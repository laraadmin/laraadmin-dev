<?php

/* ================== Homepage + Admin Routes ================== */


Route::get('test', function ($role_id=1) {
	 $role_module_fields = DB::table('role_module_fields')->where('access', '!=', "invisible")->where('role_id', 1)->get();
	 $data = array();
	foreach ($role_module_fields as $row) {
		if(isset($row->id))
		{
			$data2 =  DB::table('module_fields')->where('id', $row->id)->where('module', 3)->where('listing_col', true)->get();
			foreach ($data2 as $row1) {
				if(isset($row1->id))
				{
					$data[$row1->id] = $data2;
				}
			}
		}
	 }
	 return $roles = \Auth::user()->all();
	// return $data;
});
require __DIR__.'/admin_routes.php';
