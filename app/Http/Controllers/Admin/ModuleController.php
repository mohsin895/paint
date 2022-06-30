<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Module";
        $data['add_title'] = "Module Add";
        $data['edit_title'] = "Module Edit";
        $data['module'] = Module::get();
       return view('admin.module.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $module = new Module();
            $module->module_name = $request->module_name;
            $module->save();
            return back()->with('flash_message_success','Module Add Successfully');

        }else{

            $module = Module::find($id);
            $module->module_name = $request->module_name;
            $module->save();
            return back()->with('flash_message_success','Module Update Successfully');

        }
    }


    public function delete($id)
    {
      $data = Module::find($id);
    
     $data->delete();
    return back()->with('flash_message_success','Module has delete successfully');
}
}
