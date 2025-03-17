<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        return redirect('/accueil');
    }
}
