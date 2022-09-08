<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Category;

class ApplicationController extends Controller
{


    public function interior_design($slug)
    {
        $category = Category::where('slug',$slug)->first();
        //  dd($category);
        $data['application']=Application::where('category_id',$category->id)->first();
        // dd($data['application']);
        $data['applicationcategory']= Category::where('module_id','3')->take(4)->inRandomOrder()->get();
        return view('front.application.interior_design',$data);
    }
       
}
