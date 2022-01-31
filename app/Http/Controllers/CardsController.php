<?php

namespace App\Http\Controllers;

use App\Http\Middleware\bank;
use App\Models\cards;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function __construct()
    {
        
        if(Session::has('pay')) {
            echo 'ok';
        } else {
            return redirect('/PayCard/login/Cards');
        }
        
    }

    public function logincard() {
        return view('auth.logincards');
    }
    public function postlogincard(Request $request) {
        dd($request->session()->get('pay'));
        $val = $request->only('email','password');
        cards::where('cards');
    }
}
