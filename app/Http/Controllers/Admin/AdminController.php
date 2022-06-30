<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Hash;
use Mail;

class AdminController extends Controller
{
   public function login(Request $request)
   {

       return view('admin.login');
   }


   function adminlogin(Request $request)
   {

       $validator = Validator::make($request->all(), [
           'email' => 'required|email',   // required and email format validation
           'password' => 'required', // required and number field validation

       ]); // create the validations
       if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
       {
           return response()->json($validator->errors(),422);  
           // validation failed return with 422 status

       } else {
           //validations are passed try login using laravel auth attemp
           if (\Auth::attempt($request->only(["email", "password"]))) {
               return response()->json(["status"=>true,"redirect_location"=>url("admin/dashboard")]);
               
           } else {
               return response()->json([["Invalid credentials"]],422);
               
           }
       }
   }

   public function dashboard()
   {
       return view('admin.dashboard');
   }


   function logout()
   {
       \Auth::logout();
       return redirect("admin/login")->with('success', 'Logout successfully');;
   }


   public function forget_password(Request $request)
   {
       if($request->isMethod('post')){
        $data=$request->all();
        $adminEmailCount = User::where('email',$data['email'])->count();
        if($adminEmailCount==0){
            return redirect('admin/forget_password')->with('flash_message_error','Your Email is not Exists ');
        }
  
        $random_password= random_int(1000,9999);
        $password=Hash::make($random_password);
     
        User::where('email',$data['email'])->update(['password'=>$password]);
        $adminEmail= User::where('email',$data['email'])->first();
        $email= $data['email'];
        $name = $adminEmail['name'];
        $messageData=[
            'email'=>$email,
            'name'=>$name,
            'password'=>$random_password
        ];
        Mail::send('admin.email.forget_password',$messageData, function($message) use($email){
            $message->to($email)->subject('New password');
        });
        return redirect('admin/login')->with('flash_message_success','please Check your Email for  new Password');
       }
       return view('admin.forget_password');
   }
}
