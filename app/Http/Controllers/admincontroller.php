<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function dash(){
        return view('admin/dashboard');
    }
}