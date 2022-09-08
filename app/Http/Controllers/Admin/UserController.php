<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class UserController extends Controller
{
    public function index( $id = null)
    {
        if(empty($id)){
            $data['user']=User::orderBy('id','DESC')->get();
            return view('admin.user.index',$data);
        }else{
            $data['user_details']=User::where('id',$id)->first();
            $data['user_order']= Order::where('user_id',$data['user_details']->id)->orderBy('id','DESC')->get();
            return view('admin.user.details',$data);
        }
    }


    
   public function edit(Request $request,$id)
   {
      if ($request->isMethod('post')) {
         $data = $request->all();
         // dd($data);
         $user = User::find($id);
     
         $user->status = $data['status'];
         $user->save();
         return back();
        
      }
      
   }


   public function delete($id)
    {
      $data = User::find($id);

    $data->delete();
    return back()->with('flash_message_success','User has delete successfully');
  } 
}
