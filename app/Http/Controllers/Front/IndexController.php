<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Slider;
use App\Models\Link;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $data['products'] = Module::where('id',1)->first();
        $data['slider'] = Slider::get();
        $data['categoryProduct'] = Link::get();
        // dd($data['slider']);
        return view('front.index',$data);
    }


    public function category_product($slug=null)
    {
       if(empty($slug)){
           $data['category'] = Category::where('module_id',1)->get();

        return view('front.products.product',$data);

       }else{

        
        $module = Module::where('id',1)->first();
        $categoryCount = Category::where('module_id',$module->id)->where('slug',$slug)->count('id');
        $subcategoryCount = SubCategory::where('slug',$slug)->count('id');
        if($categoryCount > 0){
            
            $category = Category::where('module_id',$module->id)->where('slug',$slug)->first();
        $data['subcategory'] = Subcategory::where('category_id',$category->id)->get();
        
        // dd($data['subcategory']);

        return view('front.products.category',$data,compact('category','module'));

        }elseif($subcategoryCount > 0){

            $module = Module::where('id',1)->first();

            // $category = Category::where('module_id',1)->where('slug',$slug)->first();

            $subcategory = Subcategory::where('slug',$slug)->first();
            $data['product'] = Product::where('subcategory_id',$subcategory->id)->get();
            // dd($product)


        return view('front.products.subcategory',$data,compact('subcategory','module'));

        }else{
            $module = Module::where('id',1)->first();
            $products =Product::where('slug',$slug)->first();
            $category = Category::where('id',$products->category_id)->first();
            $subCategory = Subcategory::where('id',$products->subcategory_id)->first();
            // dd($category);

            return view('front.products.product_details',compact('module','products','category','subCategory'));
        }
        
           
       }
       
    }
}