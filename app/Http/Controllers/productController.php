<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function home() {
        $product = "";
        return view('home',['product'=>$product]);
    }
    public function getlab($group_id) {
        $labs = product::where('group_id',$group_id)->get();
        return view('catogray/labs',[
            'labs'=>$labs    
        ]);
    }
    public function gettv($group_id) {
        $tv = product::where('group_id',$group_id)->get();
        return view('catogray/tv',[
            'tv'=>$tv    
        ]);
    }

    public function getwashing($group_id) {
        $washing = product::where('group_id',$group_id)->get();
        return view('catogray/washing',[
            'washing'=>$washing    
        ]);
    }
    public function getrefrigerator($group_id) {
        $refrigerator = product::where('group_id',$group_id)->get();
        return view('catogray/refrigerator',[
            'refrigerator'=>$refrigerator    
        ]);
    }
    
    public function getmob($group_id) {
        $mobile = product::where('group_id',$group_id)->get();;
        return view('catogray/mobiles',[
            'mobile'=>$mobile   
        ]);
    }
    public function getelc() {
        
        return view('catogray/elc');
    }

    public function detailes($group_id, $id_product) {
        $product = product::where('id',$id_product)->get();;
        return view('catogray/detaile',[
            'product'=>$product  
        ]);


    }

}
