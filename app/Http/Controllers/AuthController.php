<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function loginForm(){
        return view('auth.login');
    }
    public function registreForm(){
        return view('auth.registre');
    }
    public function voirprofil(){
        $user=Auth::user();
        return view('profil.voir', compact('user'));
    }

    public function edit_form(){
        $user=Auth::user();
        return view('profil.edit', compact('user'));
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
        return redirect()->back()->with('error' , 'Mauvais nom utilisateur ou mot de passe');
    }
    public function modif_profil(Request $request){
        $user=Auth::user();
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
    
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    return redirect('voirprofil');
    }

    public function suppression_deconnexion(){
        $user=Auth::user();
        $user->delete();
        return redirect('/');

    }
}
