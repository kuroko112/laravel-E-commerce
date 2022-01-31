<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

use Illuminate\Support\Facades\Auth as FacadesAuth;

class authController extends Controller
{
    
    public function register() {
        return view('auth/register');
    }

    public function postregister(Request $re) {

        // dd($re);
        $val = $re->validate([
            'name'      =>'required',
            'email'     =>'required|email',
            'password'  =>'required',
            'fullname'  =>'required',
            'address'   =>'required',
        ]);
       
        
        $user = new User();
        $user->name         = $re->name;
        $user->email        = $re->email;
        $user->fullname     = $re->email;
        $user->address      = $re->email;
        // $user->email     = $user->email_verified_at;
        $user->password     = Hash::make($re->password);
        $user->save();
        
        return Redirect('/home/login');

    }

    public function login() {
        return view('auth/login');
    }

    public function postlogin(Request $re) {
        $login = $re->only('email','password');
        
        if(FacadesAuth::attempt($login))
        {
            
            return Redirect('/home');
        } else  {

            return Redirect('/home/login');
        }
    }

    public function logout() {

        FacadesAuth::logout();

        session()->forget('name');

        return redirect('/home/login');

    }

    

}
