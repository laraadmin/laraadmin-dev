<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\LA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use File;

use Dwij\Laraadmin\Models\Module;
use Dwij\Laraadmin\Models\ModuleFieldTypes;
use Dwij\Laraadmin\CodeGenerator;

class FileController extends Controller
{
    
    public function __construct() {
        // for authentication (optional)
        $this->middleware('auth');
    }
    
    /**
     * Get all files from folder
     *
     * @return \Illuminate\Http\Response
     */
    public function get_folder_files($folder_name)
    {
        $files = array();
        $filesArr = File::allFiles(public_path($folder_name));
        foreach ($filesArr as $file) {
            $files[] = $file->getfilename();
        }
        return response()->json(['folder_name' => $folder_name, 'files' => $files]);
    }
}
