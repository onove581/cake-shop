<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class productcontroller extends Controller
{
    public function showpro(){
         $showall=DB::table('products')->join('type_products','products.id_type','=','type_products.dm_id')->get();
        return view("product/showpro",["allpro" =>$showall]); 
       
    }
    public function addpro(){
        
         $cata= DB::table('type_products')->limit(10)->get();
        return view("product/addpro",["intocata" =>$cata]);
        
    }
    public function checkpro(request $request){
        $data= array();
        $data['name']=$request->name;
        $data['id_type']=$request->type_product;
        $data['description']=$request->desc;
        $data['sale_price']=$request->price_sale;
        $data['price']=$request->price;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $data['image'] = $get_name_img;
             DB:: table('products')->insert($data);
         session()->put('message','Thêm danh mục thành công');
          return redirect('addpro');
        }
        $data['image'] =$request->img;
         DB:: table('products')->insert($data);
         session()->put('message','Thêm danh mục thành công');
          return redirect('addpro');
        //  echo'<pre>';
        // print_r($data);
        // echo'</pre>';
    }

     public function edit_pro($pro_id){
        $cata= DB::table('type_products')->get();
        $editpro=DB::table('products')->where('id',$pro_id)->get();
        return view("product/editpro",["editpro" =>$editpro],["intocata" =>$cata]);
                  
    }
      public function update_pro(request $request ,$pro_id){
        $data= array();
        $data['name']=$request->name;
        $data['id_type']=$request->type_product;
        $data['description']=$request->desc;
        $data['sale_price']=$request->price_sale;
        $data['price']=$request->price;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $data['image'] = $get_name_img;
             DB:: table('products')->where('id',$pro_id)->update($data);
         session()->put('message','Update danh mục thành công');
          return redirect('product');
        }
        $data['image'] =$request->img;
         DB:: table('products')->where('id',$pro_id)->update($data);
         session()->put('message','Update danh mục thành công');
          return redirect('product');}

        public function delete_pro($pro_id){
        DB:: table('products')->where('id',$pro_id)->delete();
         session()->put('message','Xóa danh mục thành công');
         return redirect('product');
    }
}