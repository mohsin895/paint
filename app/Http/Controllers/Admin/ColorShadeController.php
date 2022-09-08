<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ColorCategory;
use App\Models\ColorShade;
use File;
use Image;

class ColorShadeController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "ColorShade";
        $data['add_title'] = "ColorShade Add";
        $data['edit_title'] = "ColorShade Edit";
        $data['colorCategory'] = ColorCategory::orderBy('id','desc')->get();
        $data['colorShade'] = ColorShade::orderBy('id','desc')->get();
       return view('admin.colorShade.index',$data);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){
            $ColorShade = new ColorShade();
          
            $ColorShade->category_id = $request->category_id;
            $ColorShade->name = $request->name;
            $ColorShade->color_code = $request->color_code;
            $ColorShade->rgb = $request->rgb;
            $ColorShade->cmyk = $request->cmyk;
            $ColorShade->hbw = $request->hbw;
            $ColorShade->slug = Str::slug($request->name);

            $ColorShade->save();
            return back()->with('flash_message_success','ColorCategory Add Successfully');

        }else{

            $ColorShade = ColorShade::find($id);

            $ColorShade->category_id = $request->category_id;
            $ColorShade->name = $request->name;
            $ColorShade->color_code = $request->color_code;
            $ColorShade->rgb = $request->rgb;
            $ColorShade->cmyk = $request->cmyk;
            $ColorShade->hbw = $request->hbw;
            $ColorShade->slug = Str::slug($request->name);

            $ColorShade->save();
            return back()->with('flash_message_success','ColorCategory Update Successfully');

        }
    }


    public function delete($id)
    {
      $ColorShade = ColorShade::find($id);
     
     $ColorShade->delete();
    return back()->with('flash_message_success','ColorCategory has delete successfully');
}
}
