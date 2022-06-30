<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ColorController extends Controller
{
    public function color($slug = null)
    {
        if(empty($slug)){

            return view('front.color.sample_color');

        }else{
            $color_shade_category = Category::where('module_id','2')->where('id',6)->first();
            $wall_category = Category::where('module_id','2')->where('id',7)->first();
            $floor_category = Category::where('module_id','2')->where('id',8)->first();
            if($color_shade_category->slug == $slug){

                return view('front.color.color_shades');

            }elseif($wall_category->slug == $slug){


                return view('front.color.wall');

            }elseif($floor_category->slug){


                return view('front.color.floor');

            }


            return view('front.color.color_shades');

        }
    }
}
