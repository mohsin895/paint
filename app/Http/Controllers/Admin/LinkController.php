<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Link;
use File;
use Image;

class LinkController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Link";
        $data['add_title'] = "Link Add";
        $data['edit_title'] = "Link Edit";
        $data['link'] = Link::orderBy('id','desc')->get();
        $data['category'] = Category::where('module_id',1)->orderBy('id','desc')->get();
       return view('admin.link.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $link = new Link();
            $link->category_id = $request->category_id;
        
           
            if ($request->hasFile('link_image')) {
                $image_tmp = $request->file('link_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/link/' . $filename;
    
                    Image::make($image_tmp)->resize(481, 324)->save($large_image_path);
                    $link->link_image = $filename;
                }
            }
            $link->save();
            return back()->with('flash_message_success','Link Add Successfully');

        }else{

            $link= Link::find($id);
            $link->category_id = $request->category_id;
       
           

            if ($request->hasFile('link_image')) {
                $imagePath = public_path('assets/images/link/'.$link->link_image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
                $image_tmp = $request->file('link_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/link/' . $filename;
    
                    Image::make($image_tmp)->resize(481, 324)->save($large_image_path);
                    $link->link_image = $filename;
                }
            }
            $link->save();
            return back()->with('flash_message_success','Link Update Successfully');

        }
    }


    public function delete($id)
    {
      $link= Link::find($id);
      unlink("public/assets/images/link/".$link->link_image);
     $link>delete();
    return back()->with('flash_message_success','Link has delete successfully');
}
}
