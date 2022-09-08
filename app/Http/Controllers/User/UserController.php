<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GeneralSetting;
use App\Models\Product;
use Hash;
use Auth;
use Mail;
use Session;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{ 

 public function login(Request $request){
    if ($request->isMethod('post')) {
        $data=$request->all();
        // echo "<pre>";print_r($data);die;

        //
        $userCount=User::where('email', $data['email'])->count();
        if ($userCount > 0) {
          $user=User::where('email', $data['email'])->first();

        if($user->status==0) {
            return redirect()->back()->with('flash_message_forget', 'Your Acount is Inactive  !! please click here to verify email');
        }

        elseif($user->is_banned==1) {
            return redirect()->back()->with('flash_message_error', 'Your Acount is Banned  !! please Contact Admin');
        }

        else {

            if (Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])) {

              $admin = User::find($user->id);

        $admin->last_login = Carbon::now();
        $admin->ip = \Request::getClientIp();
        $admin->save();

                if (!empty(Session::get('session_id'))) {
                    $session_id = Session::get('session_id');
               
                       DB::table('carts')->where('session_id',$session_id)->update(['user_email'=>$data['email']]);
                 
                  }
                  if(empty($productsUrl)){
                    return redirect('/')->with('flash_message_success', 'Login Successfully !!');

                  }else{
                    return redirect()->route('product.details',$productsUrl);
                  }
                
                
            }

            else {
                return redirect()->back()->with('flash_message_error', 'Invaild email or password');
            }

        }
          
        }else{
          return redirect()->back()->with('flash_message_error', 'Your are not registered or Try to Sign In with correct email and password');
        }


    }

    return view('user.login');
     
 }


    public function registration(Request $request){

        $gs = GeneralSetting::first();
        if ($request->isMethod('post')) {
            $data = $request->all();
          
        //    echo "<pre>";print_r($data);die;
             $userCount = User::where('email',$data['email'])->count();
             if ($userCount>0) {
               return redirect()->back()->with('flash_message_error','Email already exists!');
             }else {
             $user = new User;
             $user->name = $data['name'];
             $user->slug = rand(11,99).$data['name'];
             $user->email = $data['email'];
             $user->phone = $data['phone'];
             $user->password = bcrypt($data['password']);
             $user->save();
            //  $notification = new Notification;
            //  $notification->user_id = $user->id;
            //  $notification->save();
              //   $email =$data['email'];
              //  $messageData = ['email'=>$data['email'],'name'=>$data['name']];
              // Mail::send('email.register',$messageData,function($message) use($email){
              //   $message->to($email)->subject('Registration with techshop');
              //   });
       
              //Send confirm emails
           
       
       
              $subject=$gs->site_title;
                $email =$data['email'];
               $messageData = ['email'=>$data['email'],'name'=>$data['name'],'code'=>base64_encode($data['email'])];
                Mail::send('user.email.confirmation',$messageData,function($message) use($email,$subject){
                  $message->to($email)->subject($subject.' '.'Your  Account is create successfully');
                });
       
         return redirect('/user/login')->with('flash_message_success','Your Account is create successfully,Please Login now.');
       
            
           }
        }
        return view('user.registration');
    }



    public function forget_password(Request $request)
    {
        if ($request->isMethod('post')) {
            $data=$request->all();
            // echo "<pre>";print_r($data);die;
            $userCount=User::where('email', $data['email'])->count();
    
            if ($userCount==0) {
                return redirect()->back()->with('flash_message_error', 'Email does not exist !!');
            }
    
            $userDetails=User::where('email', $data['email'])->first();
    
            $random_password=random_int(1000, 9999);
            $new_password=bcrypt($random_password);
            User::where('email', $data['email'])->update(['password'=>$new_password]);
    
            $email=$data['email'];
            $name=$userDetails->name;
            $gs = GeneralSetting::first();
           
           
              $subject=$gs->site_title;
              // dd($subject);
             
          
            $messageData=[ 
              'email'=>$email,
            'name'=>$name,
            'password'=>$random_password
          ];
    
            Mail::send('user.email.forgotpassword', $messageData, function($message) use($email, $subject) {
                    $message->to($email)->subject('New Password From'.' ' . $subject);
                }
    
            );
    
            return redirect('/user/login')->with('flash_message_success', 'Please check your email for new password!!');
    
        }
        return view('user.forget_password');
    }


    public function confirmAccount($email) {
        $email=base64_decode($email);
        $userCount=User::where('email', $email)->count();

        if ($userCount > 0) {
            $userDetails=User::where('email', $email)->first();

            if ($userDetails->status==1) {
                return redirect('user/login')->with('flash_message_success', 'Your email account is already active . You can login');
            }

            else {
                User::where('email', $email)->update(['status'=>1]);


                $messageData=['email'=>$email,
                'name'=>$userDetails->name];

                Mail::send('user.email.welcome', $messageData, function($message) use($email) {
                        $message->to($email)->subject('Confirm to your Account');
                    }

                );

                return redirect('user/login')->with('flash_message_success', 'Your email account is  active now . You can login');
            }
        }

        else {
            abort(404);
        }
    }

    public function logout()
{
Auth::logout();

Session::forget('session_id');
return redirect('/');
}
}
