<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function registerStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

       $user= User::create($data);

       if($user){

           return redirect()->route('login')->with('success', 'User created successfully');
       }
    }


    public function loginMatch(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            ]);
            if(!auth()->attempt($credentials)){
                return back()->withErrors(['email' => 'Invalid credentials']);
                }
                return redirect()->route('dashboardPage')->with('success','Login Successfully!');


    }

    public function dashboardPage(){

            return view('dashboard');

    }

    public function innerPage()
    {

            return view('inner');

    }

    public function userprofile(){
        $user = Auth::user();
        return view('user_profile',['user' => $user]);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


}
