<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
Use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\GeneralSetting;
use App\Http\Requests;

use Session;
use Mail;
use DB;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
      $user_email = Auth::user()->email;
      $userCartCount = DB::table('carts')->where(['user_email'=>$user_email])->count('id');
  if($userCartCount > 0){
       
    $user_id = Auth::user()->id;
      $user_email = Auth::user()->email;
    $userDetails = User::find($user_id);
    $userCart = DB::table('carts')->where(['user_email'=>$user_email])->get();
    foreach ($userCart as $key => $product) {
      $productDetails = Product::where('id',$product->product_id)->first();
      $userCart[$key]->image = $productDetails->image;
     }
    if ($request->isMethod('post')) {
    $data = $request->all();
    // echo "<pre>";print_r($data);die;
  
  
  
    User::where('id',$user_id)->update(['name'=>$data['user_name'],'address'=>$data['address'],'phone'=>$data['phone']]);

   $order = new Order;
   $order->user_id = $user_id;
   $order->user_email = $user_email;
   $order->random_order_id = rand(10000,19999);
   $order->user_name= $data['user_name'];
   $order->address= $data['address'];
   $order->phone= $data['phone'];
   $order->subtotal= $data['subtotal'];
   $order->shipping_charge= $data['shipping_charge'];
   $order->vat= $data['vat'];
   $order->paybale_total= $data['paybale_total'];
   $order->order_status = "New";
   $order->status = "New";
 

   $order->save();

 


  

   $order_id = DB::getPdo()->lastInsertId();
   $cartProducts = DB::table('carts')->where(['user_email'=>$user_email])->get();
   foreach($cartProducts as $pro){
     $cartPro = new OrderProduct;

     $cartPro->order_id = $order_id;
     $cartPro->user_id = $user_id;
     $cartPro->product_id = $pro->product_id;
     $cartPro->product_name = $pro->product_name;
     $cartPro->color = $pro->color;
     $cartPro->color_code = $pro->color_code;
  if(!empty($pro->selling_price)){
     $cartPro->selling_price = $pro->selling_price;
     
  }else{
    
    $cartPro->selling_price = '0';
    $cartPro->total_price = '0';

  }

     
     $cartPro->buying_price = $pro->buying_price;
    
     
     $cartPro->quantity = $pro->quantity;
      // dd($cartPro);
     $cartPro->save();

   }
  
   DB::table('carts')->where('user_email',$user_email)->delete();
   $productDetails = Order::with('orders')->where('id',$order_id)->first();
  $productDetails = json_decode(json_encode($productDetails),true);
  // echo "<pre>";print_r($productDetails);die;
 $userDetails = User::where('id',$user_id)->first();
 $userDetails = json_decode(json_encode($userDetails),true);
 // echo "<pre>";print_r($userDetails);die;

  $email = $user_email;
  $gs = GeneralSetting::first();
       
       
  $subject=$gs->site_title;
  $messageData=[
    'email' =>$email,
    
    'order_id'=>$order_id,
    'productDetails' =>$productDetails,
    'userDetails'=>$userDetails
  ];
  Mail::send('user.email.order',$messageData,function($message) use($email,$subject){
    $message->to($email)->subject('order Placed from' .' '.$subject);
  });



   return redirect('/user/order/details');
  
     }
     
        return view('user.checkout',compact('userCart','userCartCount'));
      }else{

        $data['product']= Product::take(8)->inRandomOrder()->get();
        $data['empty_cart']= Product::take(1)->inRandomOrder()->get();
        $data['empty_cart1']= Product::take(1)->inRandomOrder()->get();
        return redirect('/');
    
      }
    }


    public function order_details()
    {
        $orderDetails = Order::where('user_id',Auth::user()->id)->latest()->first();
        $ordeProduct = OrderProduct::where('order_id',$orderDetails->id)->get();
        $user= User::where('id',Auth::user()->id)->first();
       return view('user.order_details',compact('orderDetails','ordeProduct','user'));
    }

}
