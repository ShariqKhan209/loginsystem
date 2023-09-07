<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller


{
    //
    function login(){
        return view('login');
    }

    function register(){
        return view('registration');
    }

    function loginpost(Request $request){
        
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $cridentials = $request->only('email', 'password');

        if(Auth::attempt ($cridentials)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function registrationpost(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        // $data['name'] = $request->name;
        // $data['email'] = $request->email;
        // $data['password'] = Hash::make($request->password);

        // $user = User::create($data);

        $user = new User;
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['password'] = Hash::make($request->password);

        $user->save();

        // if(!user){
        //     return redirect(route('register'))->with("error", "Registration Failed! Wrong Cridentials");
        // }

        return redirect(route('login'))->with("success", "Registration successfull. Please login to continue");
    }

    function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}
