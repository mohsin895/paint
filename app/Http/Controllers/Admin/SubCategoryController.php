<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Module;
use File;
use Image;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "SubCategory";
        $data['add_title'] = "SubCategory Add";
        $data['edit_title'] = "SubCategory Edit";
        $data['module'] = Module::get();
        $data['category'] = Category::orderBy('module_id','desc')->get();
        $data['sub_category'] = SubCategory::get();
       return view('admin.sub_category.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $sub_category = new SubCategory();
            $sub_category->category_id = $request->category_id;
            $sub_category->subcat_name = $request->subcat_name;
            $sub_category->slug = Str::slug($request->subcat_name);
            $sub_category->save();
            return back()->with('flash_message_success','Sub Category Add Successfully');

        }else{

            $sub_category = SubCategory::find($id);
            $sub_category->category_id = $request->category_id;
            $sub_category->subcat_name = $request->subcat_name;
            $sub_category->slug = Str::slug($request->subcat_name);
            $sub_category->save();
            return back()->with('flash_message_success','Sub Category Update Successfully');

        }
    }


    public function delete($id)
    {
      $sub_category = SubCategory::find($id);
     $sub_category->delete();
    return back()->with('flash_message_success','Sub Category has delete successfully');
}
}
