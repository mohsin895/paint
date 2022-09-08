<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use File;
use Image;
use DB;

class GeneralSettingController extends Controller
{
    public function general_setting(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            $setting = GeneralSetting::latest()->first();
            $setting->email = $data['email'];
            $setting->company_address = $data['company_address'];
            $setting->factory_address = $data['factory_address'];
          
            $setting->mobile = $data['mobile'];
            $setting->website_name = $data['website_name'];
            $setting->site_title = $data['site_title'];
            $setting->vat = $data['vat'];
            $setting->shipping_charge = $data['shipping_charge'];
          
            $setting->fb = $data['fb'];
            $setting->lin = $data['lin'];
            $setting->insta = $data['insta'];
            $setting->youtube = $data['youtube'];
            $setting->twiter = $data['twiter'];
            $setting->privecy_policy = $data['privecy_policy'];
            $setting->legal_notice = $data['legal_notice'];
           

            //logo
            if ($request->hasFile('site_logo')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->site_logo);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('site_logo');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(200, 70)->save($large_image_path);
                    $setting->site_logo = $filename;
                }
            }

//Admin Logo
if ($request->hasFile('admin_logo')) {
    $imagePath = public_path('public/assets/images/setting/'.$setting->admin_logo);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
    $image_tmp = $request->file('admin_logo');
    if ($image_tmp->isValid()) {
        $extension = $image_tmp->getClientOriginalExtension();
        $filename = rand(111, 99999) . '.' . $extension;
        $large_image_path = 'public/assets/images/setting/' . $filename;

        Image::make($image_tmp)->resize(75,75)->save($large_image_path);
        $setting->admin_logo = $filename;
    }
}


            //fabicon


            if ($request->hasFile('favicon')) {
                $imagePath = public_path('public/assets/images/setting/'.$setting->favicon);
                // dd($imagePath);
                if(File::exists($imagePath)){
                    unlink($imagePath);
                }
                $image_tmp = $request->file('favicon');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/setting/' . $filename;

                    Image::make($image_tmp)->resize(32, 32)->save($large_image_path);
                    $setting->favicon = $filename;
                }
            }

          
            $setting->save();

            return back()->with('flash_message_success', 'General Setting update successfully');
        }
        $gs = GeneralSetting::latest()->first();
        $data['title'] = "Admin Dashboard";
        $data['table'] = "General Setting";
        return view('admin.general.setting', $data, compact('gs'));
    }




    public function mailSetting()
    {
     
        $data['title'] = "Admin Dashboard ";
        $data['table'] = "Email Configuration";
        return view('admin.general.mail_setting', $data);
    } 

    public function mailSettingStore(Request $request)
    {
        
        $data = $request->all();
    
        //writting mail info in .env file
        $path = base_path('.env');
        // dd($path);
        $searchArray = array('MAIL_HOST=' . env('MAIL_HOST') . '' , 'MAIL_PORT=' . env('MAIL_PORT') . ''  , 'MAIL_FROM_NAME="' . env('MAIL_FROM_NAME') . '"' , 'MAIL_FROM_EMAIL="' . env('MAIL_FROM_EMAIL') . '"' , 'MAIL_USERNAME=' . env('MAIL_USERNAME') . '' , 'MAIL_PASSWORD=' . env('MAIL_PASSWORD') . '');
        //    return $searchArray;

        $replaceArray = array('MAIL_HOST=' . $data['mail_host'] . '' , 'MAIL_PORT=' . $data['port'] . ''  , 'MAIL_FROM_NAME="' . $data['mail_name'] . '"' , 'MAIL_FROM_EMAIL="' . $data['email_name'] . '"' , 'MAIL_USERNAME=' . $data['mail_username'] . '' , 'MAIL_PASSWORD=' . $data['password'] . '');
        // return $replaceArray;
        file_put_contents($path, str_replace($searchArray, $replaceArray, file_get_contents($path)));

        


        return redirect()->back()->with('flash_message_success', 'Email Configuration updated successfully');

    } 


    public function emptyDatabase()
    {
     
       
        
        return redirect()->back()->with('flash_message_success', 'Database cleared successfully');
    } 

    
    public function legal_notice()
    {
     
       
        
        return view('front.legal_notice');
    } 
    
    public function privacy_policy()
    {
     
       
        
        return view('front.privacy_policy');
    } 
    
}
