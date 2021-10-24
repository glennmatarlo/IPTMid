<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('foot');
    }
    public function registrationform(){
        return view('register');
    }
    public function loginForm(){
        return view('login');
    }
    public function profile(){
        return view('profile');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        
        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'profile_img'=> 'none',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        Mail::send('verification-email', ['user'=>$user], function($mail) use ($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('glennmatarlo21@gmail.com', 'CHEAP TALK');
        });

        return redirect('/login')->with('Message', 'Your account has been created. Please check your email for verification.');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required',
        ]);

        $user=User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at==null){
            return redirect('/login')->with('Error', 'Sorry you are not yet verified.');
        }

        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        if(!$login){
            return back()->with('Error', 'The email/password you’ve entered is incorrect. ');
        }
        return redirect('/dashboard');
        
    }

    public function verification(User $user, $token){
        if($user->remember_token!==$token){
            return redirect('/login')->with('Error', 'The token is invalid.');
        }
        $user->email_verified_at = now();
        $user->save();
    
        return redirect('/login')->with('Message', 'Your Accout Has Been Verified. Please Log in.');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function upload_photo_user(Request $request)
    {
        $validator = Validator::make($request->all(), [ // <---
            'pp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($validator->fails()){
            return back()
            ->with('Error','Image did not meet profile photo requirements.')
            ->with('title', 'Upload Failed');
        }

        $imageName = time().'.'.$request->pp->extension();  
        $request->pp->storeAs('image', $imageName);
  
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }
}

