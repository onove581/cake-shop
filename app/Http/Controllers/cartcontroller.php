<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\cart;
use Session;

class cartcontroller extends Controller
{


    public function showcart(){
        $showcata=DB::table('type_products')->where('dm_status','0')->get();
         return view('pages/cart',["allcata" =>$showcata]);
    }
   
}