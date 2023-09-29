<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;
use function Laravel\Prompts\error;

class LoginController extends Controller
{
    public function login()
    {
        
        // Charger la vue de la page web avec les données des activités
        return view('web.Login');
    }

    public function register()
    {
        
        // Charger la vue de la page web avec les données des activités
        return view('web.Signup');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required'
        ]);

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user= User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error", "failed registration, try again");
        }
        return redirect(route('login'))->with("success", "compte ajouté avec succés");
    }

    public function loginPost(Request $request){
        $request->validate([
            'email' =>'required',
            'password' =>'required'
        ]);

        $credentials = $request->only(keys:['email','password']);
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('MenuUtilisateur'));
        }
        return redirect(route('login'))->with("error", "les données login ne sont pas valides");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

}
