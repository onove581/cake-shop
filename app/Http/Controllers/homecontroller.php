<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class homecontroller extends Controller
{
    public function index(){
           $showcata=DB::table('type_products')->where('dm_status','0')->get();
            $showpro=DB::table('products')->get();
        return view('pages/home',["allcata" =>$showcata],["allpro" =>$showpro]);
        
    }
    public function showshop(){
         $showcata=DB::table('type_products')->where('dm_status','0')->get();
         $showpro=DB::table('products')->get();
        return view('pages/shop',["allcata" =>$showcata],["allpro" =>$showpro]);
    }
   
    ///show dm theo sp khi nhan vao ca ta thi sp phai dung cata do
    public function showsptocata($cataid){
         $showcata=DB::table('type_products')->where('dm_status','0')->get();
         $showpro=DB::table('products')
         ->join('type_products','products.id_type','=','type_products.dm_id')
         ->select('products.*','type_products.dm_name')
         ->where('products.id_type',$cataid)->get();
        return view('pages/shop',["allcata" =>$showcata],["allpro" =>$showpro]);
    }
    public function showspdetail($proid){
         $showpro=DB::table('products')->join('type_products','products.id_type','=','type_products.dm_id')
         ->where('products.id',$proid)->first();
         $showcata=DB::table('type_products')->where('dm_status','0')->get();

         //show sp lien quan 
    //      $related_pro=DB::table('products')->join('type_products','products.id_type','=','type_products.dm_id')
    //      ->where('type_products.dm_id',$showpro->id_type)->whereNotIn('products.id',[$proid])->get();
    // echo'<pre>';
    //     print_r($related_pro);
    //     echo'</pre>';
    //     exit;
        

        return view('pages/showspdetail',["allcata" =>$showcata],["showpro" =>$showpro]);
    }
    public function login(){
        $showcata=DB::table('type_products')->where('dm_status','0')->get();
        return view('pages/login',["allcata" =>$showcata]);
    }

     //khi login post se kiem tra 
     public function checklogin(Request $req){
        $email=$req->email;
        $password=$req->password;
        $result= DB::table('users')->where('email',$email)
        ->where('password',$password)->first();
        if ($result) {
           session()->put('full_name',$result->full_name);
           session()->put('id',$result->id);
           return redirect('admin');
        }else{
            session()->put('message','mk or tk bi sai');
            return redirect('login');

            
        }
        
        // echo'<pre>';kiem tra 
        // print_r($result);
        // echo'</pre>';
        //$req->email email o day la name trom form
        //where('admin_password',$admin_pass) admin_password la cot trong database ,
    }
    public function logout(){
         session()->put('full_name',null);
        session()->put('id',null);
        return redirect('/');
    }
     public function insertUser(Request $request)
    {
        $data= array();
        $data['full_name']=$request->full_name;
        $data['password']=$request->password;
         $data['email']= $request->email;
         $data['address']=$request->address;
         $data['birthday']=$request->birthday;
         $data['remember_token']=$request->re_password;
           
         DB:: table('users')->insert($data);
         session()->put('message','Thêm danh mục thành công');
        return redirect('/login');
    }
     public function contact(){
        $showcata=DB::table('type_products')->where('dm_status','0')->get();
        return view('pages/contact',["allcata" =>$showcata]);
    }

}