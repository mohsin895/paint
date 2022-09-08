<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use File;
use Image;

class SliderController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Slider";
        $data['add_title'] = "Slider Add";
        $data['edit_title'] = "Slider Edit";
        $data['slider'] = Slider::get();
       return view('admin.slider.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $slider = new Slider();
            $slider->slider_title = $request->slider_title;
        

           
            if ($request->hasFile('slider_image')) {
                $image_tmp = $request->file('slider_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/slider/large/' . $filename;
                    $medium_image_path = 'public/assets/images/slider/medium/' . $filename;
    
                    Image::make($image_tmp)->resize(1600, 615)->save($large_image_path);
                    Image::make($image_tmp)->resize(1600, 615)->save($medium_image_path);
                    $slider->slider_image = $filename;
                }
            }
            $slider->save();
            return back()->with('flash_message_success','slider Add Successfully');

        }else{

            $slider = Slider::find($id);
            $slider->slider_title = $request->slider_title;

            if ($request->hasFile('slider_image')) {

                if(!empty($slider->slider_image)){
                $imagePath = public_path('assets/images/slider/'.$slider->slider_image);
            // dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('slider_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/slider/large/' . $filename;
                    $medium_image_path = 'public/assets/images/slider/medium/' . $filename;
    
                    Image::make($image_tmp)->resize(1600, 615)->save($large_image_path);
                    Image::make($image_tmp)->resize(1600, 615)->save($medium_image_path);
                    $slider->slider_image = $filename;
                }
            }
            $slider->save();
            return back()->with('flash_message_success','slider Update Successfully');

        }
    }


    public function delete($id)
    {
      $slider = slider::find($id);
      unlink("public/assets/images/slider/".$slider->slider_image);
     $slider->delete();
    return back()->with('flash_message_success','slider has delete successfully');
}
}
