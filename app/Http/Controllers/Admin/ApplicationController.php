<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Application;
use App\Models\Module;
use App\Models\Category;
use File;
use Image;

class ApplicationController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Application";
        $data['add_title'] = "Application Add";
        $data['edit_title'] = "Application Edit";
        $data['view_title'] = "Application Edit";
        $data['module'] = Module::get();
        $data['application'] = Application::orderBy('id','desc')->get();
       return view('admin.application.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            
            if($request->isMethod('post')){
                $data = $request->all();
            $application = new Application();
            $application->main_description = $request->main_description;
            $application->long_description = $request->long_description;
            $application->slug = Str::slug($request->main_header);
            
            $application->main_header = $request->main_header;
            $application->long_header = $request->long_header;
            $application->category_id = $request->category_id;

           
            if ($request->hasFile('application_image1')) {
                $image_tmp = $request->file('application_image1');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(400,250)->save($large_image_path);
                    $application->application_image1 = $filename;
                }
            }



            
            if ($request->hasFile('application_image2')) {
                $image_tmp = $request->file('application_image2');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(400,250)->save($large_image_path);
                    $application->application_image2 = $filename;
                }
            }
            
            if ($request->hasFile('application_image3')) {
                $image_tmp = $request->file('application_image3');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(400,250)->save($large_image_path);
                    $application->application_image3 = $filename;
                }
            }
            
            if ($request->hasFile('application_image4')) {
                $image_tmp = $request->file('application_image4');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image4 = $filename;
                }
            }
            
            if ($request->hasFile('application_image5')) {
                $image_tmp = $request->file('application_image5');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image5 = $filename;
                }
            }
            
            if ($request->hasFile('application_image6')) {
                $image_tmp = $request->file('application_image6');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image6 = $filename;
                }
            }
            
            if ($request->hasFile('application_image7')) {
                $image_tmp = $request->file('application_image7');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image7 = $filename;
                }
            }
            
            if ($request->hasFile('application_image8')) {
                $image_tmp = $request->file('application_image8');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(1180,300)->save($large_image_path);
                    $application->application_image8 = $filename;
                }
            }
            $application->save();
            return redirect('admin/application')->with('flash_message_success','Application Add Successfully');
        }

        

        $data['title'] = "Admin Dashboard";
        $data['table'] = "Application";
        $data['add_title'] = "Application Add";
        $data['edit_title'] = "Application Edit";
        $data['view_title'] = "Application View";
        $data['category'] = Category::where('module_id',3)->get();
       
        return view('admin.application.insert',$data);

        }else{
            
            if($request->isMethod('post')){
                $data = $request->all();

            $application = Application::find($id);
            $application->main_header = $request->main_header;
            $application->long_header = $request->long_header;
            
            $application->main_description = $request->main_description;
            $application->long_description = $request->long_description;
            $application->category_id = $request->category_id;
            $application->slug = Str::slug($request->main_header);

            if ($request->hasFile('application_image1')) {
                if(!empty($application->application_image1)){
                $imagePath = public_path('assets/images/application/'.$application->application_image1);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image1');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(400,250)->save($large_image_path);
                    $application->application_image1 = $filename;
                }
            }

            if ($request->hasFile('application_image2')) {
                if(!empty($application->application_image2)){
                $imagePath = public_path('assets/images/application/'.$application->application_image2);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image2');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(400,250)->save($large_image_path);
                    $application->application_image2 = $filename;
                }
            }
            if ($request->hasFile('application_image3')) {
                if(!empty($application->application_image3)){
                $imagePath = public_path('assets/images/application/'.$application->application_image3);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image3');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(400,250)->save($large_image_path);
                    $application->application_image3 = $filename;
                }
            }
            if ($request->hasFile('application_image4')) {
                if(!empty($application->application_image4)){
                $imagePath = public_path('assets/images/application/'.$application->application_image4);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image4');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image4 = $filename;
                }
            }
            if ($request->hasFile('application_image5')) {
                if(!empty($application->application_image5)){
                $imagePath = public_path('assets/images/application/'.$application->application_image5);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image5');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image5 = $filename;
                }
            }
            if ($request->hasFile('application_image6')) {
                if(!empty($application->application_image6)){
                $imagePath = public_path('assets/images/application/'.$application->application_image6);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image6');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image6 = $filename;
                }
            }
            if ($request->hasFile('application_image7')) {
                if(!empty($application->application_image7)){
                $imagePath = public_path('assets/images/application/'.$application->application_image7);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image7');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(295,341)->save($large_image_path);
                    $application->application_image7 = $filename;
                }
            }
            if ($request->hasFile('application_image8')) {
                if(!empty($application->application_image8)){
                $imagePath = public_path('assets/images/application/'.$application->application_image8);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('application_image8');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/application/' . $filename;
    
                    Image::make($image_tmp)->resize(1180,300)->save($large_image_path);
                    $application->application_image8 = $filename;
                }
            }
            $application->save();
            return redirect('admin/application')->with('flash_message_success','Application Update Successfully');
        }

        
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Application";
        $data['add_title'] = "Application Add";
        $data['edit_title'] = "application Edit";
        $data['view_title'] = "Application View";
        $application= Application::find($id);
        $data['category'] = Category::where('module_id',3)->get();
      
        // dd($data['subcategorypr']);
   

        return view('admin.application.insert',$data,compact('application'));

        }
    }


    public function delete($id)
    {
      $application = Application::find($id);
      unlink("public/assets/images/application/".$application->application_image1);
     $application->delete();
    return back()->with('flash_message_success','Application has delete successfully');
}
}
