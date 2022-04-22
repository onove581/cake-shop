<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
class catacontroller extends Controller
{
  
    public function showcata(){
        $showall=DB::table('type_products')->get();
        return view("category/showcata",["all" =>$showall]);              
}
    public function addcata(){
        return view('category/addcata');
    }
     public function checkadd(request $request){
        $data= array();
        $data['dm_name']=$request->name;
        $data['dm_status']=$request->status;
         DB:: table('type_products')->insert($data);
         session()->put('message','Thêm danh mục thành công');
          return redirect('addcata');
       
        //     echo'<pre>';
        // print_r($data);
        // echo'</pre>';
    }
      public function active($cata_id){
        DB::table('type_products')->where('dm_id',$cata_id)->update(['dm_status'=>1]);
        session()->put('message',' Không kích hoạt danh mục catagory thành công');
        return redirect('category');
        
    }
     public function unactive($cata_id){
        DB::table('type_products')->where('dm_id',$cata_id)->update(['dm_status'=>0]);
        session()->put('message','   Kích hoạt danh mục catagory thành công');
        return redirect('category');
        
    }
       public function edit_cata($cata_id){
            $editcata=DB::table('type_products')->where('dm_id',$cata_id)->get();
            return view("category/editcata",["editcata" =>$editcata]);
                  
    }
    public function update_cata(request $request ,$cata_id){
        $data= array();
        $data['dm_name']=$request->name;
        
         DB:: table('type_products')->where('dm_id',$cata_id)->update($data);
         session()->put('message','Update danh mục thành công');
         return redirect('category');}

    public function delete_cata($cata_id){
        DB:: table('type_products')->where('dm_id',$cata_id)->delete();
         session()->put('message','Xóa danh mục thành công');
         return redirect('category');
    }


    ///////////
    public function showcata_home($cata_id){
        $cata=DB::table('type_products')->where('dm_status','0')->orderby('dm_id','desc')->get();
        $cata_by_id=DB::table('products')->join('type_products','products.id_type','=','type_products.dm_id')
        ->where('products.id_type',$cata_id)->orderby('dm_id','desc')->get();
        return view("page/shop",["catagory" =>$cata],["cata_by_id" =>$cata_by_id]);  
    }
}