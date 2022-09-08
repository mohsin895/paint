<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use File;
use Image;

class AboutusController extends Controller
{
    public function about_us(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            $setting = Aboutus::latest()->first();
            $setting->history = $data['history'];
            $setting->philosophy = $data['philosophy'];
            $setting->research_development = $data['research_development'];
           
            //logo
            if ($request->hasFile('history_image')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->history_image);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('history_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(610, 340)->save($large_image_path);
                    $setting->history_image = $filename;
                }
            }

//Admin Logo
if ($request->hasFile('philosophy_image')) {
    $imagePath = public_path('public/assets/images/setting/'.$setting->philosophy_image);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
    $image_tmp = $request->file('philosophy_image');
    if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename = rand(111, 99999) . '.' . $extension;
        $large_image_path = 'public/assets/images/setting/' . $filename;

        Image::make($image_tmp)->resize(1240,413)->save($large_image_path);
        $setting->philosophy_image = $filename;
    }
}


            //fabicon


            if ($request->hasFile('research_development_image')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->research_development_image);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('research_development_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(400, 298)->save($large_image_path);
                    $setting->research_development_image = $filename;
                }
            }

          
            $setting->save();

            return back()->with('flash_message_success', 'About us update successfully');
        }
        $au = Aboutus::latest()->first();
        $data['title'] = "Admin Dashboard";
        $data['table'] = "About us";
        return view('admin.general.about_us', $data, compact('au'));
    }



}
