<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ColorCategory;

use App\Models\ColorShade;
use App\Models\ColorShadeImage;
use App\Models\Product;
use App\Models\Wall;
use App\Models\Floor;
use Session;


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
            $search_slug ='color-shade-search';
            if($color_shade_category->slug == $slug){

                $data['color_category']=ColorCategory::with('color')->get();
                $data['color_shade_image']=ColorShadeImage::get();
                

                return view('front.color.color_shades',$data);

            }elseif($wall_category->slug == $slug){

                       $data['wall']=Wall::orderBy('id','DESC')->get();
                return view('front.color.wall',$data);

            }elseif($floor_category->slug){

                $data['floor_timber']=Floor::where('category_id',2)->orderBy('id','DESC')->get();
                $data['floor_luxury']=Floor::where('category_id',1)->orderBy('id','DESC')->get();
                return view('front.color.floor',$data);

            }


          

        }
    }
    public function color_shade()
    {

        $data['color_category']=ColorCategory::with('color')->get();
        $data['color_shade_image']=ColorShadeImage::get();
        

        return view('front.color.color_shades',$data);

        
    }


    public function wall()
    {

      $data['wall']=Wall::orderBy('id','DESC')->get();
      return view('front.color.wall',$data);

        
    }


    
    public function floor()
    {

        $data['floor_timber']=Floor::where('category_id',2)->orderBy('id','DESC')->get();
        $data['floor_luxury']=Floor::where('category_id',1)->orderBy('id','DESC')->get();
        return view('front.color.floor',$data);

        
    }


    public function color_search()
        {
            $data['color_shade_category'] = Category::where('module_id','1')->get();
            $data['product'] = Product::get();
            return view('front.color.search',$data);
        }


        
    public function search(Request $request)
    {
        $data['color_shade_category'] = Category::where('module_id','1')->get();
        $color=$request->input('color');
        Session::put('color',$color);
        $get_session_color = Session::get('color');
        //  dd($get_session_color);
        $get_category_id = $request->input('category_id');
   $category = Category::where('id',$get_category_id)->first();
        // dd($category);
        $data['product_search']=Product::where(['category_id'=>$request['category_id'],'subcategory_id'=>$request['subcategory_id'],'color'=>$request['color']])->get();
        return view('front.color.search_product',$data,compact('get_session_color','category'));
    }

    public function search_details($id)
    {
        $data['product_search']=Product::where('id',$id)->first();
        return view('front.color.search_color_details',$data);
    }


        
    public function sample_service()
    {
        return view('front.color.service');
    }


    public function get_subcat(Request $request)
    {
        $cat_id = $request->category_id;
        $all_sucategory = Subcategory::where('category_id',$cat_id)->get();
      
        return response()->json($all_sucategory);
    }
}
