<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Floor;
use File;
use Image;

class FloorController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Floor Color";
        $data['add_title'] = "Floor Add";
        $data['edit_title'] = "Floor Edit";
        $data['floor'] = Floor::orderBy('id','desc')->get();
       return view('admin.floor.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $floor = new Floor();
          
            $floor->name = $request->name;
            $floor->category_id = $request->category_id;
            $floor->slug = Str::slug($request->name);

           
            if ($request->hasFile('image')) {
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/floor/' . $filename;
    
                    Image::make($image_tmp)->resize(600, 800)->save($large_image_path);
                    $floor->image = $filename;
                }
            }


            if ($request->hasFile('luxury_image')) {
                $image_tmp = $request->file('luxury_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/floor/' . $filename;
    
                    Image::make($image_tmp)->resize(2000, 1350)->save($large_image_path);
                    $floor->luxury_image = $filename;
                }
            }
            $floor->save();
            return back()->with('flash_message_success','Floor Add Successfully');

        }else{

            $floor = Floor::find($id);
            $floor->name = $request->name;
            $floor->category_id = $request->category_id;
            $floor->slug = Str::slug($request->name);

            if ($request->hasFile('image')) {
                if(!empty($floor->image)){
                $imagePath = public_path('assets/images/floor/'.$floor->image);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/floor/' . $filename;
    
                    Image::make($image_tmp)->resize(600, 800)->save($large_image_path);
                    $floor->image = $filename;
                }
            }

            if ($request->hasFile('luxury_image')) {
                $image_tmp = $request->file('luxury_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/floor/' . $filename;
    
                    Image::make($image_tmp)->resize(2000, 1350)->save($large_image_path);
                    $floor->luxury_image = $filename;
                }
            }
            $floor->save();
            return back()->with('flash_message_success','Floor Update Successfully');

        }
    }


    public function delete($id)
    {
      $floor = Floor::find($id);
      if(!empty($floor->image)){
      unlink("public/assets/images/floor/".$floor->image);
      }else{

      }
      if(!empty($floor->luxury_image)){
        unlink("public/assets/images/floor/".$floor->luxury_image);
        }else{
  
        }
     $floor->delete();
    return back()->with('flash_message_success','Floor has delete successfully');
}
}
