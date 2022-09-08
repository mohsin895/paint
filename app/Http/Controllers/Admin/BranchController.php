<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Branch;


class BranchController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Branch";
        $data['add_title'] = "Branch Add";
        $data['edit_title'] = "Branch Edit";
        $data['branch'] = Branch::orderBy('id','desc')->get();
       return view('admin.branch.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $branch = new Branch();
          
            $branch->location = $request->location;
            $branch->shop_owner = $request->shop_owner;
            $branch->phone = $request->phone;
       

            $branch->save();
            return back()->with('flash_message_success','Branch Add Successfully');

        }else{

            $branch = Branch::find($id);
            
            $branch->location = $request->location;
            $branch->shop_owner = $request->shop_owner;
            $branch->phone = $request->phone;

            $branch->save();
            return back()->with('flash_message_success','Branch Update Successfully');

        }
    }


    public function delete($id)
    {
      $branch = Branch::find($id);
     
     $branch->delete();
    return back()->with('flash_message_success','Branch has delete successfully');
}
}
