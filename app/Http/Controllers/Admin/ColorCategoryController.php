<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ColorCategory;
use File;
use Image;

class ColorCategoryController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "ColorCategory";
        $data['add_title'] = "ColorCategory Add";
        $data['edit_title'] = "ColorCategory Edit";
        $data['colorCategory'] = ColorCategory::orderBy('id','desc')->get();
       return view('admin.ColorCategory.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $ColorCategory = new ColorCategory();
          
            $ColorCategory->name = $request->name;
            $ColorCategory->color_code = $request->color_code;
            $ColorCategory->slug = Str::slug($request->name);

            $ColorCategory->save();
            return back()->with('flash_message_success','ColorCategory Add Successfully');

        }else{

            $ColorCategory = ColorCategory::find($id);
            $ColorCategory->name = $request->name;
            $ColorCategory->color_code = $request->color_code;
            $ColorCategory->slug = Str::slug($request->name);

            $ColorCategory->save();
            return back()->with('flash_message_success','ColorCategory Update Successfully');

        }
    }


    public function delete($id)
    {
      $ColorCategory = ColorCategory::find($id);
     
     $ColorCategory->delete();
    return back()->with('flash_message_success','ColorCategory has delete successfully');
}
}
