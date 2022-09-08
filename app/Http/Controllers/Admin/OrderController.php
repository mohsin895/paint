<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use App\Models\OrderStatus;
use Carbon\Carbon;
use Mail;

class OrderController extends Controller
{
    public function index()
    {
        
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Order";
        $data['view_title'] = "Order View";
        $data['add_title'] = "Order View";
        $data['edit_title'] = "Category Edit";
        $data['order'] = Order::orderBy('id','DESC')->get();
        return view('admin.order.index',$data);
    }

    public function details($id)
    {

        
        $data['title'] = "Admin Dashboard";
        $data['table'] = "Order";
        $data['view_title'] = "Order View details";
        $data['add_title'] = "Order View details";
        $data['edit_title'] = "Category Edit";
        $data['order'] = Order::with('orderProduct')->where('random_order_id',$id)->first();
        return view('admin.order.details',$data);
        
    }

    public function order_status(Request $request,$id )
    {
      
       if ($request->isMethod('post')) {
        $data = $request->all();
        $order=Order::find($id);
        $order->status = $data['status'];
        $order->delivery_date = $data['delivery_date'];
        $order->admin_comment = $data['comment'];
        $order->user_comment = $data['user_comment'];
        $order->last_update_date = Carbon::now();
        $order->save();
        if($order->save()){
            $orderStatus =new OrderStatus();
            $orderStatus->order_id = $request->order_id;
            $orderStatus->status = $request->status;
            $orderStatus->order_date = $request->order_date;
            $orderStatus->delivery_date = $request->delivery_date;
            $orderStatus->comment = $request->comment;
            $orderStatus->user_comment = $request->user_comment;
            $orderStatus->save();

        }

        $user = User::where('id',$order->user_id)->first();
        $order =Order::where('id',$id)->first();
        $order = json_decode(json_encode($order),true);
        $orderStatus = OrderStatus::latest()->first();
        $orderStatus = json_decode(json_encode($orderStatus),true);

        // dd($order);
        if(!empty($request->user_comment)){
        $email =$user['email'];
        $status = $data['status'];
        $orderid =$request['product_order_id'];
        $comment =$request['user_comment'];
        $messageData = [
            'email'=>$user['email'],
            'user'=>$user,
            'status' => $data['status'],
            'order' =>$order,
            'orderStatus' =>$orderStatus,
            
        ];
         Mail::send('admin.email.order.status',$messageData,function($message) use($email){
           $message->to($email)->subject('Your Order Update Status');
         });
        }else{
            
        }

         return back();
       }
    
    }

    public function invoice($id)
    {
        $data['order']= Order::with('orderProduct')->where('id',$id)->first();
    
        return view('admin.order.invoice',$data);
    }  
   
}
