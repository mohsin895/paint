<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Module;
use App\Models\ImageGallery;
use App\Models\Datasheet;
use App\Models\ProductAttribute;

use File;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Product";
        $data['add_title'] = "Product Add";
        $data['view_title'] = "Product View";
        $data['product']= Product::get();
       return view('admin.product.index',$data);
    }
    public function get_subcat(Request $request)
    {
        $cat_id = $request->category_id;
        $all_sucategory = Subcategory::where('category_id',$cat_id)->get();
      
        return response()->json($all_sucategory);
    }

    public function insert(Request $request,$id=null)
    {
        if(empty($id)){


      if($request->isMethod('post')){
        $data = $request->all();
     
        $product= new Product();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->short_description = $request->short_description;
         $product->selling_price = $request->selling_price;
        $product->description = $request->description;
        $product->color = $request->color;
        $product->color_code = $request->color_code;
        $product->slug = Str::slug($request->product_name);
        if ($request->hasFile('product_image')) {
            $image_tmp = $request->file('product_image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $large_image_path = 'public/assets/images/product/' . $filename;

                Image::make($image_tmp)->resize(200, 200)->save($large_image_path);
                $product->product_image = $filename;
            }
        }
        $product->save();

        if($product->save()){
            $product_id = $product->id;
            if ($request->hasFile('gallery')) {
              $galleryimages = $request->file('gallery');
              foreach ($galleryimages as $key => $image) {
               $productimage = new ImageGallery;
               
               // echo "<pre>";print_r(( $productimage));die();
               $image_tmp = Image::make($image);
           
               // echo $orginalName = $image->getClientOriginalName();die();
               $extension = $image->getClientOriginalExtension();
               $imageName =  rand(111,99999).time().".".$extension;
               
                   $medium_image_path = 'public/assets/images/product/gallery/'.$imageName;
         
                  
                   Image::make($image_tmp)->save($medium_image_path);
                    $productimage->gallery =$imageName;
                    $productimage->product_id = $product_id;
                    $productimage->save();
                   }
                  
             }
        }

        if($product->save()){
            $product_id = $product->id;
            // dd($product_id);
       
            // dd($qty_id);
            foreach($request['sku'] as $key => $val){
                $sku =new  ProductAttribute;
                
             $sku->product_id =  $product_id;
             $sku->sku = $val;
             $sku->size = $request['size'][$key];
             $sku->price = $request['price'][$key];
             $sku->stock = $request['stock'][$key];

            $sku->save();
            
           
          
            }
        }




        if($product->save()){

            $product_id = $product->id;
            
            $datasheets = $request->file('data_sheets');
            if(!empty($datasheets)){

            foreach($datasheets as $sheets){
                
    
                $ext = $sheets->extension();
                $file_name = hexdec(uniqid()).'.'.$ext;
                $file_path =  $sheets->move(public_path('/assets/images/product/datasheets/'), $file_name); // to public
                // dd($image_path);
    
                $datasheets = new Datasheet;
                $datasheets->product_id = $product_id;
                $datasheets->data_sheets = $file_name;
                $datasheets->save();
    
            }
        }else{

        }
        }

return redirect('admin/product')->with('flash_message_success','Product add Successfully');
        
      }


            $data['title'] = "Admin Dashboard";
            $data['table'] = "Product";
            $data['add_title'] = "Product Add";
            $data['edit_title'] = "Product Edit";
            $data['view_title'] = "Product View";
            $data['category'] = Category::where('module_id',1)->get();
           
            return view('admin.product.insert',$data);

        }else{


            if($request->isMethod('post')){
                $data = $request->all();
                $product= Product::find($id);
                $product->product_name = $request->product_name;
                $product->category_id = $request->category_id;
                $product->subcategory_id = $request->subcategory_id;
                $product->short_description = $request->short_description;
                 $product->selling_price = $request->selling_price;
                $product->description = $request->description;
                $product->color = $request->color;
                $product->color_code = $request->color_code;
                $product->slug = Str::slug($request->product_name);
                if ($request->hasFile('product_image')) {
                    $image_tmp = $request->file('product_image');
                    if ($image_tmp->isValid()) {
                        $extension = $image_tmp->getClientOriginalExtension();
                        $filename = rand(111, 99999) . '.' . $extension;
                        $large_image_path = 'public/assets/images/product/' . $filename;
        
                        Image::make($image_tmp)->resize(1250, 800)->save($large_image_path);
                        $product->product_image = $filename;
                    }
                }
                $product->save();
        
                if($product->save()){
                    $product_id = $product->id;
                    if ($request->hasFile('gallery')) {
                      $galleryimages = $request->file('gallery');
                      foreach ($galleryimages as $key => $image) {
                       $productimage = new ImageGallery;
                       
                       // echo "<pre>";print_r(( $productimage));die();
                       $image_tmp = Image::make($image);
                   
                       // echo $orginalName = $image->getClientOriginalName();die();
                       $extension = $image->getClientOriginalExtension();
                       $imageName =  rand(111,99999).time().".".$extension;
                       
                           $medium_image_path = 'public/assets/images/product/gallery/'.$imageName;
                 
                          
                           Image::make($image_tmp)->resize(1250, 800)->save($medium_image_path);
                            $productimage->gallery =$imageName;
                            $productimage->product_id = $product_id;
                            $productimage->save();
                           }
                          
                     }
                }

                if($product->id){
                    $product_id = $product->id;
                    // dd($product_id);
                    $qty_id=ProductAttribute::where('product_id',$product_id)->get();
                    // dd($qty_id);
                    foreach($qty_id as $key => $qty){
                        
                     $qty->sku = $request['sku'][$key];
                     $qty->price = $request['price'][$key];
                     $qty->size = $request['size'][$key];
                     $qty->stock = $request['stock'][$key];
        
                    $qty->save();
                    
                   
                  
                    }

                }
                

                if($product->save()){

                    $product_id = $product->id;
                    
                    $datasheets = $request->file('data_sheets');
                    if(!empty($datasheets)){

                    foreach($datasheets as $sheets){
                        
            
                        $ext = $sheets->extension();
                        $file_name = hexdec(uniqid()).'.'.$ext;
                        $file_path =  $sheets->move(public_path('/assets/images/product/datasheets/'), $file_name); // to public
                        // dd($image_path);
            
                        $datasheets = new Datasheet;
                        $datasheets->product_id = $product_id;
                        $datasheets->data_sheets = $file_name;
                        $datasheets->save();
            
                    }
                }else{

                }
                    
                }

                
        
        return redirect('admin/product')->with('flash_message_success','Product Update Successfully');
                
              }



            $data['title'] = "Admin Dashboard";
            $data['table'] = "Product";
            $data['add_title'] = "Product Add";
            $data['edit_title'] = "product Edit";
            $data['view_title'] = "Product View";
            $product= Product::find($id);
            $data['category'] = Category::where('module_id',1)->get();
            $data['subcategorypr'] = Subcategory::get();
            // dd($data['subcategorypr']);
       

            return view('admin.product.insert',$data,compact('product'));

        }
    }



    public function delete($id)
    {
      $product = Product::find($id);
      if(!empty($product->product_image)){
        unlink("public/assets/images/product/".$product->product_image);
      }else{
          
      }
      

     $product->delete();
    return back()->with('flash_message_success','Product has delete successfully');
}
}