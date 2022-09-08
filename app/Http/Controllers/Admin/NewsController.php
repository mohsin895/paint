<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\Module;
use File;
use Image;

class NewsController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "News";
        $data['add_title'] = "News Add";
        $data['edit_title'] = "News Edit";
        $data['module'] = Module::get();
        $data['news'] = News::orderBy('id','desc')->get();
       return view('admin.news.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $news = new News();
            $news->news_heading = $request->news_heading;
            $news->description = $request->description;
            $news->slug = Str::slug($request->news_heading);

           
            if ($request->hasFile('news_image')) {
                $image_tmp = $request->file('news_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = Str::slug($request->news_heading).'-'.rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/news/' . $filename;
                    Image::make($image_tmp)->resize(600, 400)->save($large_image_path);

                    $details_image_path = 'public/assets/images/news/details/' . $filename;
                    Image::make($image_tmp)->resize(1240, 482)->save($details_image_path);
                    $news->news_image = $filename;
                }
            }
            $news->save();
            return back()->with('flash_message_success','News Add Successfully');

        }else{

            $news = News::find($id);
            
            $news->news_heading = $request->news_heading;
            $news->description = $request->description;
            $news->slug = Str::slug($request->news_heading);

            if ($request->hasFile('news_image')) {
                if(!empty($news->news_image)){
                $imagePath = public_path('assets/images/news/'.$news->news_image);
            //  dd($imagePath);
            if(File::exists($imagePath)){
                unlink($imagePath);
            }
        }
                $image_tmp = $request->file('news_image');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'public/assets/images/news/' . $filename;  
                    Image::make($image_tmp)->resize(600, 400)->save($large_image_path);

                    
                    $details_image_path = 'public/assets/images/news/details/' . $filename;
                    Image::make($image_tmp)->resize(1240, 482)->save($details_image_path);
                    $news->news_image = $filename;
                }
            }
            $news->save();
            return back()->with('flash_message_success','News Update Successfully');

        }
    }


    public function delete($id)
    {
      $news = News::find($id);
      unlink("public/assets/images/news/".$news->news_image);
     $news->delete();
    return back()->with('flash_message_success','News has delete successfully');
}
}
