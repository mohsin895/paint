<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ColorShadeImage;
use File;
use Image;

class ColorShadeImageController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "ColorShade Image";
        $data['add_title'] = "ColorShade Image Add";
        $data['edit_title'] = "ColorShade Image Edit";
        $data['colorShadeImage'] = ColorShadeImage::orderBy('id','desc')->get();
       return view('admin.color_shade_image.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $colorShadeImage = new ColorShadeImage();

           
            if ($request->hasFile('color_shade_image')) {
                $image_tmp = $request->file('color_shade_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/colorShadeImage/' . $filename;
    
                    Image::make($image_tmp)->resize(800, 533)->save($large_image_path);
                    $colorShadeImage->color_shade_image = $filename;
                }
            }
            $colorShadeImage->save();
            return back()->with('flash_message_success','ColorShade Image Add Successfully');

        }else{

            $colorShadeImage = ColorShadeImage::find($id);

            if ($request->hasFile('color_shade_image')) {
                if(!empty($colorShadeImage->color_shade_image)){
                $imagePath = public_path('assets/images/colorShadeImage/'.$colorShadeImage->color_shade_image);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('color_shade_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/colorShadeImage/' . $filename;
    
                    Image::make($image_tmp)->resize(800, 533)->save($large_image_path);
                    $colorShadeImage->color_shade_image = $filename;
                }
            }
            $colorShadeImage->save();
            return back()->with('flash_message_success','ColorShade Image Update Successfully');

        }
    }


    public function delete($id)
    {
      $colorShadeImage = ColorShadeImage::find($id);
      unlink("public/assets/images/colorShadeImage/".$colorShadeImage->color_shade_image);
     $colorShadeImage->delete();
    return back()->with('flash_message_success','ColorShade Image has delete successfully');
}
}
