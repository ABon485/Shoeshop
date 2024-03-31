<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function postRegister(Request $request){
        $request->merge(['password'=>Hash::make($request->password)]);
        try{
            User::create($request->all());
        }catch(\throwable $th){
            dd($th);
        }
        return redirect()->route('login');
    }
    function postLogin(Request $request){    
        if(Auth::attempt(['email'=>$request->email,'password' => $request->password])){
            return view('home');
        }

        return redirect()->back()->with('error','sai can nhap lai');
    }
    function logout(Request $request){    

        Auth::logout();
        return redirect()->back();
    }
    //
}
