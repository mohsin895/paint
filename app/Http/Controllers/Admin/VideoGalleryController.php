<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Video;
use App\Models\GeneralSetting;

class VideoGalleryController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Video Gallery";
        $data['add_title'] = "Video Gallery Add";
        $data['edit_title'] = "Video Gallery Edit";
        $data['video'] = Video::orderBy('id','desc')->get();
       return view('admin.videoGallery.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        $gs =GeneralSetting::first();


        if(empty($id)){
            $video = new Video();
            $video->url = $request->url;
            $video->slug = Str::slug($gs->website_name).'-'.rand(111, 99999);

            $video->save();
            return back()->with('flash_message_success','Video Gallery Add Successfully');

        }else{

            $video = Video::find($id);
            $video->url =$request->url;
            $video->slug = Str::slug($gs->website_name).'-'.rand(111, 99999);

            $video->save();
            return back()->with('flash_message_success','Video Gallery Update Successfully');

        }
    }


    public function delete($id)
    {
      $video = Video::find($id);
    
     $video->delete();
    return back()->with('flash_message_success','Video Gallery has delete successfully');
}
}
