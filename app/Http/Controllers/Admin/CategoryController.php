<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Module;
use File;
use Image;

class CategoryController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Category";
        $data['add_title'] = "Category Add";
        $data['edit_title'] = "Category Edit";
        $data['module'] = Module::get();
        $data['category'] = Category::orderBy('module_id','desc')->get();
       return view('admin.category.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $category = new Category();
            $category->module_id = $request->module_id;
            $category->category_name = $request->category_name;
            $category->slug = Str::slug($request->category_name);

           
            if ($request->hasFile('category_image')) {
                $image_tmp = $request->file('category_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/category/' . $filename;
    
                    Image::make($image_tmp)->resize(1230, 370)->save($large_image_path);
                    $category->category_image = $filename;
                }
            }
            $category->save();
            return back()->with('flash_message_success','Category Add Successfully');

        }else{

            $category = Category::find($id);
            $category->module_id = $request->module_id;
            $category->category_name = $request->category_name;
            $category->slug = Str::slug($request->category_name);

            if ($request->hasFile('category_image')) {
                $imagePath = public_path('assets/images/category/'.$category->category_image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
                $image_tmp = $request->file('category_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/category/' . $filename;
    
                    Image::make($image_tmp)->resize(1230, 370)->save($large_image_path);
                    $category->category_image = $filename;
                }
            }
            $category->save();
            return back()->with('flash_message_success','Category Update Successfully');

        }
    }


    public function delete($id)
    {
      $category = Category::find($id);
      unlink("public/assets/images/category/".$category->category_image);
     $category->delete();
    return back()->with('flash_message_success','Category has delete successfully');
}
}
