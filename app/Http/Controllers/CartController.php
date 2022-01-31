<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Foundation\Auth\User;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function insertproduct($id_pro) {
    //     $id =  FacadesAuth::id();
    //     Cart::insert([
    //         'id_user'=>$id,
    //         'id_pro'=>$id_pro,
    //         'qun'=>1,
    //     ]);
    //     return Redirect('home');
    // }


    public function insertwithqun(Request $request) {

        $id_pro = $request->only('id');
        $qun    = $request->only('qun');
        $qun    =  implode(", ", $qun);
        $id_pro    =  implode(", ", $id_pro);
        $qun       = (int) $qun;
        $id_user =  FacadesAuth::id();
        Cart::insert([
            'id_user'=>$id_user,
            'id_pro'=>$id_pro,
            'qun'=>$qun,
        ]);
        return Redirect('home');    
    }

    public function getcart() {
        $id_user =  FacadesAuth::id();
        $products = DB::table('users')
        ->join('carts','carts.id_user','=','users.id')
        ->join('products','carts.id_pro','=','products.id')
        ->where('users.id',$id_user)
        ->get();
        $total = 0.0;
        return view('cart',['products'=>$products,'total'=>$total]);
    }

    public function Buying_succeededsuccess($total) {
        $id_user =  FacadesAuth::id();
        
        $user = new User();
        $total_user = FacadesAuth::user()->total;
        $result_total = $total_user - $total;
        if($total_user >= $total) {
            
            $user =  User::find($id_user);
            $user->total = $result_total;
            $user->save();
            DB::table('carts')->where('id_user',$id_user)->delete();
            return view('done');
            
        } else {
            
            return view('erorr',['total_user'=>$total_user]);

        }
        

    }




}
