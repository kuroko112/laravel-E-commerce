<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    public function profile() {

        // To get the user id 
        $id   = FacadesAuth::id();
        
        $data = DB::table('users')
        ->where('id',$id)
        ->get();
        return view('users/profile',['data'=>$data]);
    }
}
