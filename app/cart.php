<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class cart extends Model
{
    public $product=null;
    public $totalPrice=0;
    public $totalQuanty =0;

    public function __constant($cart){
        if ($cart) {
            $this->product =$cart->products;
            $this->totalPrice =$cart->totalPrice ;
            $this->totalQuanty =$cart->totalQuanty;
        }
       
    }
    public function addCart($product, $id){
    $newProduct =['quanty'=>1,'price'=>$product->price,'productInfo'=>$product];
       if ($this->product) {
           if(array_key_exists($id,$product)){
            $newProduct =$product[$id];
           }
       }
      $newProduct['quanty']++; 
      $newProduct['price']=$newProduct['quanty']*$product->price;
        $this->product[$id]=$newProduct;
        $this->totalPrice +=$product->price;
        $this->totalPrice ++;
    }
}
?>