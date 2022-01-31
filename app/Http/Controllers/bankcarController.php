<?php

namespace App\Http\Controllers;

use App\Models\bank;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class bankcarController extends Controller
{
    public function logincardbank () {
        return view('auth.login_card');
    }
    
    public function postloginbankcard(Request $request) {
        $val = $request->only('email','password');
        // $passwrod = Hash::make($val['password']);
        $result = bank::where('username',$val['email'])->get();
        $re = array($result);
        
        if(isset($result[0])) {
           $bank = Auth::user();
           dd($bank);
            return redirect('/PayCard/login/Cards');
        } else {

            return redirect('/PayCard');
        
        } 
        
        
        


    }
}
