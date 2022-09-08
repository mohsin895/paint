<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Wall;
use File;
use Image;

class WallController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Wall Color";
        $data['add_title'] = "Wall Add";
        $data['edit_title'] = "Wall Edit";
        $data['wall'] = Wall::orderBy('id','desc')->get();
       return view('admin.wall.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $wall = new Wall();
          
            $wall->name = $request->name;
            $wall->slug = Str::slug($request->name);

           
            if ($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/wall/' . $filename;
    
                    Image::make($image_tmp)->resize(600, 800)->save($large_image_path);
                    $wall->image = $filename;
                }
            }
            $wall->save();
            return back()->with('flash_message_success','Wall Add Successfully');

        }else{

            $wall = Wall::find($id);
            $wall->name = $request->name;
            $wall->slug = Str::slug($request->name);

            if ($request->hasFile('image')) {
                if(!empty($wall->image)){
                $imagePath = public_path('assets/images/wall/'.$wall->image);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/wall/' . $filename;
    
                    Image::make($image_tmp)->resize(600, 800)->save($large_image_path);
                    $wall->image = $filename;
                }
            }
            $wall->save();
            return back()->with('flash_message_success','Wall Update Successfully');

        }
    }


    public function delete($id)
    {
      $wall = Wall::find($id);
      if(!empty($wall->image)){
      unlink("public/assets/images/wall/".$wall->image);
      }else{

      }
     $wall->delete();
    return back()->with('flash_message_success','Category has delete successfully');
}

}
