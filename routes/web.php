<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('layout_admin');
});
route::get('/dashadmin','admincontroller@dash');
////////product
route::get('product','productcontroller@showpro');
route::get('addpro','productcontroller@addpro');
route::post('checkpro','productcontroller@checkpro');
route::get('editpro/{pro_id}','productcontroller@edit_pro');
route::post('editpro/{pro_id}','productcontroller@update_pro');
route::get('deletepro/{pro_id}','productcontroller@delete_pro');
////////category
route::get('category','catacontroller@showcata');
route::get('addcata','catacontroller@addcata');
route::post('checkcata','catacontroller@checkadd');
route::get('active_cata/{cata_id}','catacontroller@active');
route::get('unactive_cata/{cata_id}','catacontroller@unactive');
route::get('editcata/{cata_id}','catacontroller@edit_cata');
route::post('editcata/{cata_id}','catacontroller@update_cata');
route::get('deletecata/{cata_id}','catacontroller@delete_cata');
////home
route::get('/','homecontroller@index');
route::get('shop','homecontroller@showshop');
//show sp theo cata
route::get('/catasp/{cataid}','homecontroller@showsptocata');
//chitiet sp
route::get('chitietsp/{proid}','homecontroller@showspdetail');
//cart
route::get('cart','cartcontroller@showcart');
//login
route::get('login','homecontroller@login');
route::post('checklogin','homecontroller@checklogin');
route::get('/logout','homecontroller@logout');
route::post('/register','homecontroller@insertUser');
//contact
route::get('contact','homecontroller@contact');