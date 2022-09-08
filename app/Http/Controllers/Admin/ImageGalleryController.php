<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CompanyGallery;
use App\Models\GeneralSetting;
use App\Models\Module;
use File;
use Image;

class ImageGalleryController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Image Gallery";
        $data['add_title'] = "Image Gallery Add";
        $data['edit_title'] = "Image Gallery Edit";
        $data['module'] = Module::get();
        $data['image'] = CompanyGallery::orderBy('id','desc')->get();
       return view('admin.imageGallery.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        $gs =GeneralSetting::first();
        if(empty($id)){
            $image = new CompanyGallery();
            $image->slug = Str::slug($gs->website_name).'-'.rand(111, 99999);

           
            if ($request->hasFile('company_image')) {
                $image_tmp = $request->file('company_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = Str::slug($gs->website_name).'-'.rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/galleryImage/' . $filename;
    
                    Image::make($image_tmp)->resize(600, 800)->save($large_image_path);
                    $image->company_image = $filename;
                }
            }
            $image->save();
            return back()->with('flash_message_success','Image Gallery Add Successfully');

        }else{

            $image = CompanyGallery::find($id);
            $image->slug = Str::slug($gs->website_name).'-'.rand(111, 99999);

            if ($request->hasFile('company_image')) {
                if(!empty($image->company_image)){
                $imagePath = public_path('assets/images/galleryImage/'.$image->company_image);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('company_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = Str::slug($gs->website_name).'-'.rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/galleryImage/' . $filename;
    
                    Image::make($image_tmp)->resize(600, 800)->save($large_image_path);
                    $image->company_image = $filename;
                }
            }
            $image->save();
            return back()->with('flash_message_success','Image Gallery Update Successfully');

        }
    }


    public function delete($id)
    {
      $image = CompanyGallery::find($id);
      unlink("public/assets/images/galleryImage/".$image->company_image);
     $image->delete();
    return back()->with('flash_message_success','Image Gallery has delete successfully');
}
}
