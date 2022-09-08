<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;
use Session;
use Hash;
use Image;
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
           if (\Auth::guard('admin')->attempt($request->only(["email", "password"]))) {
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
       \Auth::guard('admin')->logout();
       return redirect("/")->with('success', 'Logout successfully');;
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




public function account_setting()
{
 $data['title']="Admin Dashboard";
 $data['table']="Account Setting";
 $data['add']="Account";
 $data['add_title'] = "Add banner";
 return view('admin.account',$data);
}

public function setting()
{
 $data['title']="Admin Dashboard";
 $data['table']="Account Setting";
 $data['add']="Account";
 $data['add_title'] = "Add banner";
 return view('admin.setting',$data);
}
  

 public function account_update(Request $request)
 {
   $admin_id = Auth::guard('admin')->user()->id;
   if ($request->isMethod('post')) {
     $data = $request->all();
     //  dd($data);

     $admin = User::find($admin_id);
     $admin->name = $data['name'];
     
     $admin->email = $data['email'];
     $admin->phone = $data['phone'];
     if ($request->hasFile('image')) {
       $image_tmp = $request->file('image');
       if ($image_tmp->isValid()) {
         $extension = $image_tmp->getClientOriginalExtension();
         $filename = rand(111, 99999) . '.' . $extension;
         $large_image_path = 'public/assets/images/admin/profile/' . $filename;

         Image::make($image_tmp)->resize(600, 600)->save($large_image_path);
         $admin->image = $filename;
       }
     }
     $admin->save();
     return redirect()->back()->with('flash_message_success', 'Profile Update Successfully!!');
   }
 }

 

 public function password_setting()
 {
   $adminPassword = User::where(['email' => Auth::guard('admin')->user()->email])->first();
   // echo "<pre>";print_r($adminDetails);die;
   return view('admin.admin_password', compact('adminPassword'));
 }
 public function checkPass(Request $request)
 {
   $data = $request->all();

   $user = User::find(Auth::guard('admin')->user()->id);


   if (!Hash::check($data['current_pwd'], $user->password)) {
     echo "false";
     die;
   } else {
     echo "true";
     die;
   }
 }


 public function updatePassword(Request $request)

 {

   $request->validate([

     'new_password' => ['required'],
     'confirm_password' => ['same:new_password'],
   ]);

   if ($request->isMethod('post')) {
     $data = $request->all();

     $admin_id = Auth::guard('admin')->user()->id;

     $userDetails = User::find($admin_id);
     // echo"<pre>";print_r($userDetails);die();


     if (!Hash::check($data['current_pwd'], $userDetails['password'])) {
       return redirect()->route('admin.password.setting')->with('flash_message_error', ' Current password in not match ');
     } else {


       $userDetails->password = Hash::make($data['new_password']);

       $userDetails->save();
       return redirect()->route('admin.password.setting')->with('flash_message_success', ' Password update Successfully');
     }
   }
 }



}
