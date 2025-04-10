<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loginForm(){
        return view('auth.login');
    }
    public function registreForm(){
        return view('auth.registre');
    }


    public function registre(Request $request){
       $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;

        $user->save();
        return redirect('/');
    }
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('name', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/accueil'); 
        }
    }
    
}
